<?php

class AuthController extends BaseController {


	/**
	 * Login user with facebook
	 *
	 * @return void
	 */


	public function loginWithFacebook() {

	    // get data from input
	    $code = Input::get( 'code' );

	    // get fb service
	    $fb = OAuth::consumer( 'Facebook' );

	    // check if code is valid

	    // if code is provided get user data and sign in
	    if ( !empty( $code ) ) {

	        // This was a callback request from facebook, get the token
	        $token = $fb->requestAccessToken( $code );



	        // Send a request with it
	        $result = json_decode( $fb->request( '/me' ), true );

	         //dd($result);  // For testing what we get from fb
	        /* ALL LOGIN LOGIC GOES HERE*/

			$custom_message = 'Congratulation !'; //When user loggedin for the second time
			$redirect_link = 'home';

	        $uid = $result['id'];
			$profile = Profile::whereuid($uid)->first(); 

			

		    if (empty($profile)) { //If it is a new user

		        $user = new User;

				$email_exist = User::whereemail($result['email'])->first(); 

				if(empty($email_exist)){
			        $user->username = $result['first_name']; //use "name" for complete name
			        $user->email = $result['email'];
			        $user->platform = 'facebook';
			        $user->user_role = 'student';
			        $user->password = Hash::make('facebook');
			        $user->activated = 1;
			 
			        $user->save();
			 
			        $profile = new Profile();
			        $profile->uid = $uid;
			        $profile->username = $result['name'];
			        $profile->platform = 'facebook';
			        $profile = $user->profiles()->save($profile);
				}
				else
				{
					return Redirect::back()->with('message-signin-error','Sorry!! '.$result['email'].' already exist. Please login using different platform');
					//dd('EMAIL '.$result['email'].' ALREADY EXIST');	
				}

				
			$custom_message = 'Plz change your password Now. Your default password is "facebook"';
			$redirect_link = 'account-change-password';

		    }	

		    //For existing user.

			$profile->access_token = $token->getAccessToken();
		    $profile->save();
		 
		    $user = $profile->user;
		 
		    Auth::login($user);

		    Session::put('email', $result['email']);//create a session veriable 'email'
		 
		    return Redirect::route($redirect_link)->with('message', 'Successiful Logged in with Facebook.'.$custom_message.'.');		    		



	        /* ALL LOGIN LOGIC ENDS HERE*/
	       

	    }
	    // if not ask for permission first
	    else {
	        // get fb authorization
	        $url = $fb->getAuthorizationUri();

	        // return to facebook login url
	         return Redirect::to( (string)$url );
	    }

	}





	public function loginWithGoogle() {

	    // get data from input
	    $code = Input::get( 'code' );

	    // get google service
	    $googleService = OAuth::consumer( 'Google' );

	    // check if code is valid

	    // if code is provided get user data and sign in
	    if ( !empty( $code ) ) {

	        // This was a callback request from google, get the token
	        $token = $googleService->requestAccessToken( $code );

	        // Send a request with it
	        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

	        
	        /* ALL LOGIN LOGIC GOES HERE*/

	        $custom_message = 'Congratulation !'; //When user loggedin for the second time
			$redirect_link = 'home';

	        $uid = $result['id'];
			$profile = Profile::whereuid($uid)->first(); 


		    if (empty($profile)) { //If it is a new user
		 		//dd($result);
		        $user = new User;

				$email_exist = User::whereemail($result['email'])->first(); 

				if(empty($email_exist)){

			        $user->username = $result['name'];
			        $user->email = $result['email'];
			        $user->user_role = 'student';
			        $user->platform = 'google';
			        $user->password = Hash::make('google');
			        $user->activated = 1;
			 
			        $user->save();
			 
			        $profile = new Profile();
			        $profile->uid = $uid;
			        $profile->username = $result['name'];
			        $profile->platform = 'google';
			        $profile = $user->profiles()->save($profile);				
				}

				else{

					return Redirect::back()->with('message-signin-error','Sorry!! '.$result['email'].' already exist. Please login using different platform');
					//dd('EMAIL ALREADY EXIST');
				}

				$custom_message = 'Plz change your password Now. Your default password is "google"';
				$redirect_link = 'account-change-password';

		    }	

		    //else{dd('NOT EMPTY');}

		    //For existing user.

			$profile->access_token = $token->getAccessToken();
		    $profile->save();
		 
		    $user = $profile->user;
		 
		    Auth::login($user);

		    Session::put('email', $result['email']);//create a session veriable 'email'
		 
			return Redirect::route($redirect_link)->with('message', 'Successiful Logged in with Google. '.$custom_message.'.');		    		

	    		



	        /* ALL LOGIN LOGIC ENDS HERE*/

	    }
	    // if not ask for permission first
	    else {
	        // get googleService authorization
	        $url = $googleService->getAuthorizationUri();

	        // return to facebook login url
	        return Redirect::to( (string)$url );
	    }
	}




	/**
     * Login user with Twitter
     *
     * @return void
     */
    public function loginWithTwitter() {

            // get data from input


            $code = Input::get( 'oauth_token' );
       	    		                 
            $oauth_verifier = Input::get( 'oauth_verifier' );

            // get fb service
            $twitterService = OAuth::consumer( 'Twitter' );


            // check if code is valid

            // if code is provided get user data and sign in
            if ( !empty( $code ) ) {

            $token = $twitterService->getStorage()->retrieveAccessToken('Twitter');

                    // This was a callback request from google, get the token
                    $twitterService->requestAccessToken( $code, $oauth_verifier, $token->getRequestTokenSecret() );

                    // Send a request with it
                    $result = json_decode( $twitterService->request( 'account/verify_credentials.json') );

                    // dd($result);


	        /* ALL LOGIN LOGIC GOES HERE*/

	        $custom_message = 'Congratulation !'; //When user loggedin for the second time
			$redirect_link = 'home';

	        $uid = $result->id;
			$profile = Profile::whereuid($uid)->first(); 


		    if (empty($profile)) { //If it is a new user
		 
		        $user = new User;

				$email= $result->screen_name.'twitter@swahiliacademy.com'; 
		        $email_exist = User::whereemail($email)->first();
		        

				if(empty($email_exist)){

		        $user->username = $result->screen_name;
		        $user->email = $result->screen_name.'twitter@swahiliacademy.com';  //Twitter hatoi email
		        $user->user_role = 'student';
		        $user->platform = 'twitter';
		        $user->password = Hash::make('twitter');
		        $user->activated = 1;
		 
		        $user->save();
		 
		        $profile = new Profile();
		        $profile->uid = $uid;
		        $profile->username = $result->screen_name;
		        $profile->platform = 'twitter';
		        $profile = $user->profiles()->save($profile);	
		        				
				}
				else{

					return Redirect::back()->with('message-signin-error','Sorry!! The email you used already exist. Please login using different platform');
					//dd('EMAIL ALREDY EXIST');
				}

		        $custom_message = 'Plz change your password Now. Your default password is "twitter"';
				$redirect_link = 'account-change-password';
				//$redirect_link = '/';
		    }	

		    //For existing user.

			$profile->access_token = $token->getAccessToken();
		    $profile->save();
		 
		    $user = $profile->user;
		 
		    Auth::login($user);


		    Session::put('email', 'twitter@swahiliacademy.com');//create a session veriable 'email'
		 
			return Redirect::route($redirect_link)->with('message', 'Successiful Logged in with Twitter. '.$custom_message.'.');		    		

	        /* ALL LOGIN LOGIC ENDS HERE*/


            }
            // if not ask for permission first
            else {

                // extra request needed for oauth1 to request a request token :-)
                $token = $twitterService->requestRequestToken();
                $url = $twitterService->getAuthorizationUri(['oauth_token' => $token->getRequestToken()]);

                    // return to twitter login url
                    //return Response::make()->header( 'Location', (string)$url );
               		 return Redirect::to( (string)$url );

            }

    }


	 public function loginWithLinkedin() {

	        // get data from input
	        $code = Input::get( 'code' );

	        $linkedinService = OAuth::consumer( 'Linkedin' );


	        if ( !empty( $code ) ) {

	            // This was a callback request from linkedin, get the token
	            $token = $linkedinService->requestAccessToken( $code );
	            // Send a request with it. Please note that XML is the default format.
	            $result = json_decode($linkedinService->request('/people/~?format=json'), true);

	            //Var_dump
	            //display whole array().
	            //dd($result);



	        /* ALL LOGIN LOGIC GOES HERE*/

	        $custom_message = 'Congratulation !'; //When user loggedin for the second time
			$redirect_link = 'home';

	        $username = $result['lastName'];
			$profile = Profile::whereusername($username)->first(); 


		    if (empty($profile)) { //If it is a new user
		 
		        $user = new User;

		        $email =$result['lastName'].'linkedin@swahiliacademy.com';
		        $email_exist = User::whereemail($email)->first(); 
		        //$email_exist = 'linkedin@swahiliacademy.com';

				if(empty($email_exist)){
			        $user->username = $result['lastName'];
			        $user->first_name = $result['firstName'];
			        $user->last_name = $result['lastName'];
			        $user->email = $result['lastName'].'linkedin@swahiliacademy.com';  //Linkedin do not provide email access
			        $user->user_role = 'student';
			        $user->platform = 'linkedin';
			        $user->password = Hash::make('linkedin');
			        $user->activated = 1;
			 
			        $user->save();
			 
			        $profile = new Profile();
			        //$profile->uid = $uid;
			        $profile->username = $result['lastName'];
			        $profile->platform = 'linkedin';
			        $profile = $user->profiles()->save($profile);					
				}
				else{

					return Redirect::back()->with('message-signin-error','Sorry!! The email you used already exist. Please login using different platform');
					//dd('EMAIL ALREADY EXIST');
				}




		        $custom_message = 'Plz change your password Now. Your default password is "linkedin"';
				$redirect_link = 'account-change-password';
		    }	

		    //For existing user.

			$profile->access_token = $token->getAccessToken();
		    $profile->save();
		 
		    $user = $profile->user;
		 
		    Auth::login($user);

		    Session::put('email', 'linkedin@swahiliacademy.com');//create a session veriable 'email'
		 
		    return Redirect::route($redirect_link)->with('message', 'Successiful Logged in with Linkedin. '.$custom_message.'.');			    		



	        /* ALL LOGIN LOGIC ENDS HERE*/


	        }// if not ask for permission first
	        else {
	            // get linkedinService authorization
	            $url = $linkedinService->getAuthorizationUri(array('state'=>'DCEEFWF45453sdffef424'));

	            // return to linkedin login url
	            return Redirect::to( (string)$url );
	        }


	    }    		


}

