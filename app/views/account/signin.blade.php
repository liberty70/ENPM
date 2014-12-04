@extends('frontend.layouts.master')

@section('content')

    <br>
	<!-- Flash Notification alert -->

	<div class="container"> 
	 	 @if(Session::has('message-signin-error'))	
			<div class="notice-box"><strong>{{Session::get('message-signin-error')}}</strong></div> 

	 	 @elseif(Session::has('message-signout-success'))	
			<div class="notice-box"><strong>{{Session::get('message-signout-success')}}</strong></div> 

	 	 @elseif(Session::has('message-account-create'))	
			<div class="notice-box"><strong>{{Session::get('message-account-create')}}</strong></div> 

		@elseif(Session::has('message-account-activated'))	
			<div class="notice-box"><strong>{{Session::get('message-account-activated')}}</strong></div> 

		@elseif(Session::has('message-account-activated-error'))	
			<div class="notice-box"><strong>{{Session::get('message-account-activated-error')}}</strong></div> 

		@elseif(Session::has('account-forgot-password-success'))	
			<div class="notice-box"><strong>{{Session::get('account-forgot-password-success')}}</strong></div> 	
			
		@elseif(Session::has('message-password-recovered-success'))	
			<div class="notice-box"><strong>{{Session::get('message-password-recovered-success')}}</strong></div> 								

	  	
	  @endif 
	</div>			

	<!-- End Flash Notification alert -->		  

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form method="POST" action="{{URL::route('account-signin-post')}}" accept-charset="UTF-8" role="form" id="loginform" class="form-signin">
			  		<h3 class="sign-up-title" style="color:dimgray;">Devami icin Giris Yap</h3>

			  		
			  		<hr class="colorgraph">
				    <input class="form-control email-title" placeholder="Ogrenci Numara veya Email" name="email" type="text"
				    {{(Input::old('email')) ? 'value="'.e(Input::old('email')).'"':''}}>
				    							<div>
                                                @if($errors->has('email'))
                                                {{$errors->first('email')}}
                                                @endif													
												</div>				    
				    <input class="form-control" placeholder="Sifre" name="password" type="password" value="">
				    							<div>
                                                @if($errors->has('password'))
                                                {{$errors->first('password')}}
                                                @endif													
												</div>				    
					<a class="pull-right" href=" {{ URL::route('account-forgot-password') }} ">Forgot password?</a>
					<div class="checkbox">
				    	<label><input name="remember" type="checkbox" value="Remember Me"> Beni Hatirla</label>
				    </div>
				    <input class="btn btn-lg btn-success btn-block" type="submit" value="Giris Yap">				    
				    <!-- <p class="text-center" style="margin-top:10px;">YADA</p>
				    <a class="btn btn-primary btn-block" target="_blank" href="{{ URL::route('login-with-facebook') }}"><i class="icon-facebook"></i>Facebook'la Giris Yap</a>


				  	<p class="text-center" style="margin-top:10px;">YADA</p>
				    <a class="btn btn-danger btn-block" target="_blank" href="{{ URL::route('login-with-google') }}"><i class="icon-google"></i> Google'la Giris Yap</a>
				    
					<p class="text-center" style="margin-top:10px;">YADA</p>
				    <a style="background-color: #69A3DA; border-color:#69A3DA;" class="btn btn-warning btn-block" target="_blank" href="{{ URL::route('login-with-twitter') }}"><i class="icon-twitter"></i> Twitter'la Giris Yap</a>
				    
					<p class="text-center" style="margin-top:10px;">YADA</p>
				    <a style="background-color: #69A4DA; border-color:#69A3DA;" class="btn btn-warning btn-block" target="_blank" href="{{ URL::route('login-with-linkedin') }}"><i class="icon-linkedin"></i> LinkedIn'la Giris Yap</a> -->
				  	<br>

				  	
				  	<p class="text-center"><a href=" {{URL::route('account-create')}} ">Yeni Kullanici? Kayit Yap</a></p>
				  	<p class="text-center"><a  href=" {{URL::route('account-change-password')}} ">Sifre Degistir?</a></p>					

				  	{{Form::token()}}
			  
		  	</form>		
		  </div>
  	</div>
@stop