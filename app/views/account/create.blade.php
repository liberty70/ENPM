@extends('frontend.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3 ">
            <h3 class="sign-up-title" style="color:dimgray;">Hemen Kayitli Ol</h3>
            <hr class="colorgraph">

            <div class="row">
                <div class="col-xs-12">
                    <form id="signupForm" method="POST" action="{{URL::route('account-create-post')}}" accept-charset="UTF-8">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-envelope icon-2x"></i></span>
                            <input id="username" class="form-control input-lg" placeholder="Ogrenci Numara" required="required" maxlength="10" type="text" name="username" 
                            {{(Input::old('username')) ? 'value="'.e(Input::old('username')).'"':''}}>
							<div>
                            @if($errors->has('username'))
                            {{$errors->first('username')}}
                            @endif													
							</div>	

                        </div>                                        	
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-envelope icon-2x"></i></span>
                            <input id="email" class="form-control input-lg" placeholder="Altenative Email" required="required" maxlength="50" type="text" name="email"

                            {{(Input::old('email')) ? 'value="'.e(Input::old('email')).'"':''}}>
							<div>
                            @if($errors->has('email'))
                            {{$errors->first('email')}}
                            @endif													
							</div>	
                         
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-asterisk icon-2x"></i></span>
                            <input id="password" class="form-control input-lg" placeholder="Sifre" required="required" minlength="6" maxlength="60" type="password" name="password">

							<div>
                            @if($errors->has('password'))
                            {{$errors->first('password')}}
                            @endif													
							</div>	                                                
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-asterisk icon-2x"></i></span>
                            <input id="password_confirmation" class="form-control input-lg" placeholder="Ayni Sifre" required="required" minlength="6" maxlength="60" type="password" name="password_confirmation">

							<div>
                            @if($errors->has('password_confirmation'))
                            {{$errors->first('password_confirmation')}}
                            @endif													
							</div>	                                                
                        </div>
                            <div class="form-group">
                            <button type="submit" id="btn-signup" class="btn btn-block btn-primary btn-lg">Kaydol</button>
                        </div>
                        {{Form::token()}}
                    </form>
                    <div class="form-group">
                        <div>Daha once kayit yapmismiydin? <a href="{{URL::route('account-signin')}}">Giris Yap</a></div>
                    </div>
                </div><!-- end of column -->
            </div><!-- end of row -->
        </div><!-- end of column 2 -->
    </div><!-- end of well row -->


@stop

