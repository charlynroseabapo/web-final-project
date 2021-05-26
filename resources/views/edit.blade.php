@extends('layout')

@section('content')
<style>
    .uper{
        margin-top: 40px;
    }

</style>
<div >
    <h1>
        Edit Items  
    </h1>
</div>
<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div><br/>
    @endif
    <form method="post" action="{{ route('budgets.update', $list->id ) }}">
        <div >
        @csrf
        @method('PATCH')

        <label for="budget_amount">Qty</label>
        <input type="text" name="budget_amount" value="{{ $list->budget_amount }}"/>
        <br></br>

        <label for="items">Item</label>
        <input type="text" name="items" value="{{ $list->items }}"/>
        <br></br>

        <label for="price_amount">Price</label>
        <input type="text" name="price_amount" value="{{ $list->price_amount }}"/>
        <br></br>

        <button type ="submit" class="btn btn-primary">Update Item</button>

        </div>
    </form>

</div>
@endsection