<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERU-Not Paylasim Merkezi</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">

    @yield('style')

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{{ URL::to('/') }}}">ENPM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{{ URL::route('about') }}}">hakkinda</a>
                    </li>
                    <li>
                        <a href="{{{ URL::route('contact') }}}">Contact</a>
                    </li>
                    <li>
                        <a href="{{{ URL::route('faq') }}}">FAQ</a>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        @if(Auth::check())
                        <li><a href="#">Ayarlar</a></li>
                        <li><a href="{{URL::route('account-signout')}}">Cikis Yap</a></li> 
                        @else
                        <li><a href="{{URL::route('account-create')}}">Kaydol</a></li>
                        <li><a href="{{URL::route('account-signin')}}">Giris Yap</a></li> 
                        @endif

                      </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">  
        @if(Session::has('message-signin-success'))    
            <div class="notice-box"><strong>{{Session::get('message-signin-success')}}</strong></div> 
        @elseif(Session::has('message-signin-success'))    
            <div class="notice-box"><strong>{{Session::get('message-account-activated')}}</strong></div> 

        @endif 
    </div>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <h1 class="page-header text-center">
                        <a href="{{{ URL::route('notlar') }}}" class=" btn btn-success">NOTLAR</a>
                        <a href="{{{ URL::route('sinavlar') }}}" class=" btn btn-primary">CIKMIS SORULAR</a>
                    </h1>
            </div>
        </div>


        @yield('content')

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Yeni not eklendiginde haberdar olmak istiyorsan frequetly kullandigin email adresini bu button basarak yazin. Bundan boyle , hep siteye gelmek zorunda kalmayacaksin.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-default btn-lg btn-block" href="#">Subscribe</a>
                </div>


            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; ERU-Not Paylasim Merkezi 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="{{asset('assets/js/jquery-1.11.0.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/dropzone.js')}}"></script>

    @yield('script')


</body>

</html>
