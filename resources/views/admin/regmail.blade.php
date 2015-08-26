<html>
<body>
	Hello {{ucfirst($user->name)}}
	<br/>
	<p>Welcome to SalesForum.com,
		<a href="{{URL::to('login')}}">Click here</a>to login to your account using below details<br/>
		username:{{$user->email}}<br/>
		password:{{$password}}<br/><br/>
		Thanks
	</body>
	</html>