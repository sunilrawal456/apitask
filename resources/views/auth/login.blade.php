<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Task</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{URL::asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="{{route('auth.logincheck')}}" method="POST">
		      	@csrf
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="email" class="form-control" placeholder="Email" name="email">
		            @if($errors->has('email'))
		           	 <span class="text-danger">{{$errors->first('email')}}</span>
		            @endif
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
		            @if($errors->has('password'))
		            	<span class="text-danger">{{$errors->first('password')}}</span>
		            @endif
		            
		            <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>

                 
		            <hr>
		        </div>
			 </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{URL::asset('js/jquery.backstretch.min.js')}}"></script>
  <!--   <script>
        $.backstretch("{{URL::asset('img/login-bg.jpg')}}", {speed: 500});
    </script> -->


  </body>
</html>
