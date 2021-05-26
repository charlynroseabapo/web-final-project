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
            <td>QUANTITY</td>
            <td>ITEMS</td>
            <td>PRICE</td>
            <td>TOTAL PRICE</td>
            <td colspan ="2">ACTION</td>
        </tr>
    </thead>
    
    <tbody>
    @foreach($list as $item)
    <tr>
        <td>{{$item->budget_amount}}</td>
        <td>{{$item->items}}</td>
        <td>{{$item->price_amount}}</td>
        <td>{{$item->price_amount * $item->budget_amount}}</td>
        

        <td><a href="{{ route('budgets.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>
    <td>
        <form action="{{ route('budgets.destroy', $item->id)}}"method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">DELETE</button>
        </form>
    </td>
    </tr>
    

@endforeach
<body>

<form action="saved" method="post">


</form>
<div>
<?PHP 
$money=''; 
echo '<input type="number" value="'.$money.'"/>'; 

?>
</div>
<div>
<h1>GROCERY LIST</h1>

</table>
    
</body>
<form action="/add" method="get">
    <button class="btn btn-success" type="submit">BACK</button>
</form>
</html>
</div>
    
@endsection
