<!DOCTYPE html>
<html lang="en">
<head>
@extends('layout')
@section('content')
 <style>

 body{
     padding: 5px;
     font-family: verdana;

 }
 
 </style>

 <body>

    @if(session()->has('signup'))
		<script >
			alert('Successsful Signup');
		</script>
	@endif

 </body>
 
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded">Log In</h1>
    </div>
 
 <div class="d-flex justify-content-center">
    <form method="get" action="/add">
 
        <label for ="username">Username</label>
        <input type="text" name="username" required="" placeholder="Enter username"/>
    <br></br>

        <label for ="pass">Password</label>
        <input type="password" name="pass" required="" placeholder="Enter your password"/>
    <br></br>

        <button type="submit" class="btn btn-primary">Log In</button>

    </form>
 </div>

    <br></br>

    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded">Sign up</h1>
    </div>

        <div class="d-flex justify-content-center">
    <form method="post" action="{{ route('login.user') }}">
        <label for ="firstname">First Name</label>
	    <input type="text" name="firstname"  required="" placeholder="Enter first name">
        <br></br>

        <label for ="lastname">Last name</label>
	    <input type="text" name="lastname" required=""  placeholder="Enter last name">
        <br></br>

        <label for ="email">Email</label>
	    <input type="text" name="email_account" required=""  placeholder="Enter email">
        <br></br>

        <label for ="username">Username</label>
	    <input type="text" name="username" required=""  placeholder="Enter Username">
        <br></br>

        <label for ="pass">Password</label>
	    <input type="password" name="password" required=""  placeholder="Enter Password">
        <br></br>

		<button type="submit" class="btn btn-primary">SIGN UP</button>

    </form>
	
</div>

@endsection   
</head>
</html>