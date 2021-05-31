<!DOCTYPE html>
<html lang="en">
<head>
@extends('layout')
@section('content')
 <style>
.uper{
        margin-top:80px;
    }

.add{
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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div><br/>
    @endif
</div>
</body>
<main>
    <div class="container text-center">
        <h1 >Add your Items</h1>   
    </div>
    <div class="d-flex justify-content-center">
        <form class="add" method="post" action="{{ route('budgets.store') }}">

            <input type="number" name="quantity" required="" placeholder="Quantity"/>
            <input type="text" name="items" required="" placeholder="Item name"/>
            <input type="number" name="price_amount" required="" placeholder="Price"/>
            <button type="submit">Add to list</button>

        </form>
    </div>
</main>
@endsection   
</head>
</html>