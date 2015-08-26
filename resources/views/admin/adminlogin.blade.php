<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href= "{{asset("assets/css1/style.css")}}" rel="stylesheet" type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
 
<body>
	@if (count($errors->all()) > 0)
	<br/>

	<strong>Error!</strong>
	@if($errors->has())
	   @foreach ($errors->all() as $error)
	      <p>{{ $error }}.</p> 
	  @endforeach
	@endif

@endif
</div>
<div>
	@if (isset($success))
	<br/>
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
	<strong>Success!</strong>
	      {{ $success }}. 
</div>
@endif
</div>

	<div class="main">
		 {!! csrf_field() !!}
		<form  method="post" action="{{url('adminlogin')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
	
    		<h1><span>Admin</span> <lable> Login </lable> </h1>
  			<div class="inset">
	  			<p>
	    		 <label for="username">USERNAME</label>
   	 			<input type="text" placeholder="username"  name="uname" required/>
				</p>
  				<p>
				    <label for="password">PASSWORD</label>
				    <input type="password" placeholder="password"  name="password" required/>
  				</p>
  				<p class="p-container">
			    <a href="{{url('newadmin')}}">Sign Up</a>
			    <input type="submit" value="Login">
			  </p>
				 
 			 </div>
 	 
			 
		</form>
	</div>  
			<!-----start-copyright---->
   					</body>
</html>