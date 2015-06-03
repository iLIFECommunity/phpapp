<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/style-responsive.css')}}" rel="stylesheet">

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
             @if (Session::has('flash'))
            <div class="alert alert-info"></div>
          @endif
	  	 <form class="form-login" id="loginform" action="{{route('reg_store')}}"  method="post" >
		        <h2 class="form-login-heading">Register</h2>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                             
<input type="hidden" name="_token" value="{{{ csrf_token() }}}">                                                                                            
<div class="login-wrap">                                  
 <input type="email" name="email" class="form-control" placeholder="Email">  <br>
 <input type="text" class="form-control" name="firstname" placeholder="First Name">  <br>
 <input type="text" class="form-control" name="lastname" placeholder="Last Name">  <br>
<input type="password" class="form-control" name="passwd" placeholder="Password">  <br>
               <!-- Button -->                                        
<button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
   
</form>
</div>
 </div>        
</div>                     

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ asset('/js/jquery.backstretch.min.js')}}"></script>
    <script>
        $.backstretch("{{ asset('/imgs/login-bg.jpg')}}", {speed: 500});
    </script>


  </body>
</html>