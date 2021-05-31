<!DOCTYPE html>
<html lang="en">
<head>
@extends('layout')
@section('content')

<style>
.uper{
        margin-top:80px;
    }

.signup{
    overflow: hidden;
    background-color: #717171;
    padding: 40px 30px 30px 30px;
    border-radius: 10px;
    position: center;
    top: 50%;
    left: 50%;
    width: 400px;
    box-shadow: 5px 10px 10px;
        
    }
input {
    
    display: block;
    border-radius: 5px;
    font-size: 18px;
    background: white;
    width: 100%;
    
    padding: 10px 10px;
    margin: 15px -10px;
  }

  button {
    display: block;
    background-color: #D2691E;
    font-size: 16px;
    text-transform: uppercase;
    width: 100px;
    padding: 10px 0;
    margin: 0 auto -15px auto;
    border-radius: 100px;
    border: 1px solid #FF7052;
    font-weight: bold;

  }
  button:hover{
      background-color:#8B4513;
  }
 
  
</style>

 <body>
 <div class="uper">
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
            </div><br/>
        @endif
    </div>
 </body>

    <div class="container text-center">
        <h1>Sign up</h1>
    </div>

        <div class="d-flex justify-content-center">
            <form class="signup" method="post" action="/">
        
	            <input type="text" name="firstname"  required="" placeholder="First name">
	            <input type="text" name="lastname" required=""  placeholder="Last name">
	            <input type="text" name="email_account" required=""  placeholder="E-mail address">
	            <input type="text" name="username" required=""  placeholder="Username">
	            <input type="password" name="password" required=""  placeholder="Password">
		        <button type="submit">Register</button>

            </form>
	    </div>
</div>
@endsection   
</head>
</html>