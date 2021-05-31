<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEMS LIST</title>
</head>
@extends('layout')
@section('content')
<style>
    .uper{
        margin-top:40px;
    }

    table.table-striped{
    overflow: hidden;
    background-color:#f0f8f9;
    padding: 30px 30px 30px 30px;
    border-radius: 10px;
    position: center;
    box-shadow: 5px 10px 10px;   
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
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
    position: center;
    font-weight: bold;

  }
    .form-group{
      font-size: 20;
  }

    button:hover{
        background-color:#8B4513;
  }

    tr.text1{
        border: 2px solid #000000;
        font-size:18px;
        font-weight: bold;
         
    }
    .txt{
        
        font-size:27px;
        font-weight: bold;
    }
</style>
<div class="uper">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div><br/>
    @endif
<table class="table table-striped">
    <thead>
        <tr class="text1">
            <td>Qty</td>
            <td>Items</td>
            <td>Price</td>
            <td class="sub_total">Total Price</td>
            <td colspan ="1">Edit</td>
            <td colspan ="1">Delete</td>
        </tr>
    </thead>
    <tbody>
    @foreach($list as $item)
    <tr>
        <td>{{$item->quantity}}</td>
        <td>{{$item->items}}</td>
        <td>{{$item->price_amount}}</td>
        <td>{{$item->price_amount * $item->quantity}}</td> 
        <td><a href="{{ route('budgets.edit', $item->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
    <td>
        <form  action="{{ route('budgets.destroy', $item->id)}}"method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
        </form>
    </td>
    </tr>
@endforeach
<body>
    <div class="title">
    <h1>GROCERY LIST</h1>
</table>
    <div class="form-group">
    <tr>
        <label class="txt">Total: <td>{{$list->sum('sub_total')}}</td></label>
    </tr>
    </div>
 
</body>
    <form action="/add" method="get">
        <button type="submit">Add Item</button>
    </form>
</html>
</div>
@endsection
