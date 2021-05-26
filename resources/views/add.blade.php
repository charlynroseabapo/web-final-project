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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div><br/>
@endif

 </body>
 <main>

    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded">ADD GROCERY ITEMS</h1>

    </div>
   
 </main>
<div class="d-flex justify-content-center">
    <form method="post" action="{{ route('budgets.store') }}">
           
        <label for ="budget_amount">Quantity</label>
        <input type="number" name="budget_amount" required="" placeholder="Enter Quantity"/>
        <br></br>

        <label for ="items">Grocery Items</label>
        <input type="text" name="items" required="" placeholder="Enter your Items"/>
        <br></br>

        <label for ="price_amount">Amount</label>
        <input type="number" name="price_amount" required="" placeholder="Enter amount"/>
        <br></br>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
 </div>


@endsection   
</head>
</html>