@extends('layout')
@section('content')
<style>
    .uper{
        margin-top: 80px;
    }

    .edit{
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
    label{
        color:yellow;
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
    <div class="container text-center">
        <h1 >Edit your Items</h1>
    </div>
        <div class="d-flex justify-content-center">
            <form class="edit" method="post" action="{{ route('budgets.update', $list->id ) }}">
                <div>
                    @csrf
                    @method('PATCH')

                    
					<label for="user" class="label">Quantity</label>
                    <input type="text" name="quantity" value="{{ $list->quantity }}"/>
                    <label for="user" class="label">Item name</label>
                    <input type="text" name="items" value="{{ $list->items }}"/>
                    <label for="user" class="label">Price</label>
                    <input type="text" name="price_amount" value="{{ $list->price_amount }}"/>
                    <button type ="submit">Update</button>

                </div>
            </form>
        </div>
</div>
@endsection