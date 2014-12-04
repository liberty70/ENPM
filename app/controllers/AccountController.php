<?php

class AccountController extends BaseController {


	public function getTest(){

		return 'me';
	}

	/* Account Creation */
	public function getCreate()
	{

		return View::make('account.create');
	}


	public function postCreate()
	{

		$rules = array(

				'username' =>'required|max:10|min:10|unique:users', /*We expect Ogrenci Numara here*/
				'email' =>'required|max:50|email|unique:users',
				'password' =>'required|min:6',
				'password_confirmation' =>'required|same:password'
		);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::route('account-create')
			->withErrors($validator)
			->withInput();

		}
		else
		{
			$email=Input::get('email');
			$username=Input::get('username');
			$password=Input::get('password');



			$activation_code = str_random(60);

			$user = User::create(array(
					'user_id' 			=>$username, /*We shall control,It must be Number*/
					'email'   			=>$email,
					'username' 			=>$username,
					'password' 			=>Hash::make($password),
					'activation_code'   => $activation_code,
					'activated'   		=> 0 ,
					'user_role'  		=> 0, /*0 for student, 1 for hoca*/ 
					'platform'   		=>'normal'
			));
			
			if($user){

				//send the email

				//Mail::pretend();  

				$data = array(
					'link'=>URL::route('account-activate',$activation_code), 
					'username'=>$username
				);
				Mail::send('emails.auth.activate',$data,function($message) use($user){
					$message->to(($user->username).'@erciyes.edu.tr', $user->username)
							->subject('Hesabiniz Etkinlestir');
				});				


				return Redirect::route('account-signin')
				->with('message-account-create', 'Tesekkur ederiz, hesabinizi Etkinlesmek icin Okulun sana verdigi emaile ('. $username.'@erciyes.edu.tr'.') bakin');
			}
		}
	}

	/*Account Activation process*/
	public function getActivate($activation_code)
	{

		//return $code;
		

		$user = User::where('activation_code','=',$activation_code)-> where('activated','=',0);
		
		if($user->count()){

			$user= $user->first();
			$user->activated = 1;
			$user->activation_code = '';

			if($user->save()){


				//send welcome email
				//Mail::pretend(); 
				Mail::send('emails.auth.welcome',array('link'=>URL::route('account-activate',$activation_code), 'username'=>$user->username),function($message) use($user){
					$message->to(($user->username).'@erciyes.edu.tr',$user->username)->subject('ERU Not Paylasim merkezine Hosgeldiniz');
				});					


				//Login the user soon after activating an account

				//Auth::login();

				return Redirect::route('account-signin')
				->with('message-account-activated',' ENPM kullandigin icin tesekkur ederiz. Emailiniz Onaylandik. Welcome Aboard !!');
			}
		}

	
		else{

			return Redirect::back()    //route('account-signin')
			->with('message-account-activated-error','Sorry , Something else went wrong. Pls try again later !');
		}

	}



	/* Account Signing in */
	public function getSignIn()
	{

		return View::make('account.signin');
	}

	// public function getSignInForward()
	// {

	// 	return View::make('account.signin-forward');
	// }


	public function postSignIn()
	{		

		$rules = array(
		
				'email' =>'required', /*Email or Number can be entered*/
				'password' =>'required'
		);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::back()->withInput()->withErrors($validator);

		}
		else
		{

			$remember = (Input::has('remember')) ? true : false;

			$credentials = array(
				
					'email' => Input::get('email'), /*It can also be username*/
					'password' => Input::get('password'),
					'activated' => 1
			) ;

			$auth = Auth::attempt($credentials, $remember);

			if($auth){
				return Redirect::intended('/');			
			}
			else
			{
				/*If using the email fails*/	
				$credentials = array(
					
						'user_id' => Input::get('email'), /*It can also be username*/
						'password' => Input::get('password'),
						'activated' => 1
				) ;
				$auth = Auth::attempt($credentials, $remember);

				if($auth){
					//Redirect to intended page
					return Redirect::intended('/')->with('message-signin-success','Bundan sonra istedigin kadar not paylasabilirsin');					
				}
				else
				{
					return Redirect::back()->withInput()->with('message-signin-error','Sorry, The entered Email or Password is wrong !!!');

				}			
			}
		}		
			return Redirect::back()->withInput()->with('message-signin-error','There was a problem Signing you in, try Later');			
	}	



	public function getSignOut()
	{
		Auth::logout();
		return Redirect::route('account-signin')->with('message-signout-success',' ByeBye , Gene bekleriz Gardas :)');
	}


	public function getChangePassword(){

		return View::make('account.change-password');
	}


	public function postChangePassword(){

		$rules = array(

				'password_old' =>'required',
				'password' =>'required|min:6',
				'password_confirmation' =>'required|same:password'

		);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::back()->withInput()
			->withErrors($validator);

		}

		else

		{
			$user = User::find(Auth::user()->id);

			$password_old = Input::get('password_old');
			$password = Input::get('password');

			if(Hash::check($password_old,$user->getAuthPassword())){

				$user->password = Hash::make($password);

				if($user->save()){

					return Redirect::route('dashboard')
					->with('message','You have succesifully changed your password!!');
				}			
			}	
			else{

				return Redirect::back()  //back to route('account-change-password')
				->with('message-password-change','Your old password is incorrect !');

			}						

		}

			return Redirect::back()  //back to route('account-change-password')
			->with('message-password-change','Opps ! Something went wrong ! Your password could not be changed');		
	}	



	public function getForgotPassword()
	{	

		return View::make('account.forgot-password');

	}


	//FOrgot pass, it send new temp pass and activate link
	public function postForgotPassword()
	{	

		$rules = array(

			'email' => 'required|email'

		);
		
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::back()      //route('account-forgot-password')
			->withErrors($validator)
			->withInput();
		}

		else

		{

			$user = User::where('email' , '='  , Input::get('email'));

			if($user->count()){

				$user = $user->first();

				$activation_code = str_random(60);
				$password= str_random(10);

				//Generate new password

				$user->activation_code = $activation_code;
				$user->password_temp = Hash::make($password);

				if($user->save()){

				//send the email for new password

				//Mail::pretend();
				
				Mail::send('emails.auth.forgot',array('link'=>URL::route('account-recover-password',$activation_code), 'username'=>$user->username,'password'=>$password),function($message) use($user){
					$message->to($user->email,$user->username)->subject('Recover your Password');
				});		

				return Redirect::route('account-signin')->with('account-forgot-password-success','New password has been sent. Check your email.')	;	

				}

			}

			return Redirect::back()      //route('account-forgot-password')
			->with('message-forgot','The entered email do not Exist.Check your email and then try again later.')	;

 		


		}

		return Redirect::back()         //route('account-forgot-password')
		->with('message','Couldnt request new password');

	}



	//Reset pass, New pass will be sent,need to be activated

	public function getResetPassword()
	{	

			
		$email = Session::get('email');
	
		$user = User::where('email' , '='  , $email)->first();

		$activation_code = str_random(60);
		$password= str_random(10);

		//dd($user);

		//Generate new password

		$user->activation_code = $activation_code;
		$user->password_temp = Hash::make($password);

		if($user->save()){

		//send the email for new password

		//Mail::pretend(); 	
		
		Mail::send('emails.auth.reset',array('link'=>URL::route('account-recover-password',$activation_code), 'username'=>$user->username,'password'=>$password),function($message) use($user){
			$message->to($user->email,$user->username)->subject('Reset your Password');
		});		

		Auth::logout();

		return Redirect::route('account-signin')->with('account-forgot-password-success','New password has been sent for reset. Check your email. Reset and use the new pass we sent to login temporary')	;	

		}else{

			return Redirect::back()      //route('account-forgot-password')
			->with('message-password-change','Something went wrong ,Couldnt reset password , Try again later.');

		}

	}	



	public function getRecoverPassword($activation_code)
	{

		$user = User::where('activation_code','=', $activation_code)->where('password_temp','!=','');//->where('email' , '='  , Session::get('email'));

		if($user->count()){

			$user = $user->first();
			$user->password = $user->password_temp;
			$user->password_temp = '';
			$user->activation_code = '';
			

			if($user->save()){

				//send the email for successiful password recovery

				//Mail::pretend();
				
				Mail::send('emails.auth.recover',array('username'=>$user->username),function($message) use($user){
					$message->to($user->email,$user->username)->subject('Password Recover Success');
				});	


				return Redirect::route('account-signin')
				//return Redirect::route('account-change-password')
				->with('message','Your password has been successifully recovered!.We have just send you an email to let you know. Fill the info below to login. Use password we sent you');

			}

			else{

				return Redirect::back() 
				->with('message-recover-failed','Sorry , We couldnt recover your Password !..Please try again Later');

			}

		}

		return Redirect::route('account-forgot-password')
		->with('message-recover-failed','Sorry , We couldnt recover your Password !..Please try again Later');



	}	


}