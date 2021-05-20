<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@extends('layout')

@section('content')
<style>
    .uper{
        margin-top:40px;
    }

</style>
<div class="uper">
    @if(session()->get('sucess'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div><br/>
    @endif
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Money</td>
            <td>Items</td>
            <td>Price</td>
            <td colspan ="2">Action</td>
        </tr>
    </thead>
    <tbody>
    @foreach($list as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->items}}</td>
        <td>{{$item->price_amount}}</td>
        <td><a href="{{ route('budgets.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>

    <td>
        <form action="{{ route('budgets.destroy', $item->id)}}"method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">DELETE</button>
        </form>
    </td>
    </tr>
<div>

   <input type="text" required="" value="{{$item -> items}}"><h1>Items</h1>

</div>
@endforeach

<body>
<h1>GROCERY LIST</h1>

</table>
    
</body>
</html>
@endsection