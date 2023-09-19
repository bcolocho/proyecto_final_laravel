@extends('dashboard')

@section('content')
<div class="container">
    <h1>Register New Product</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <div class="form-group">
            <label for="id_categori">Categori:</label>
            <input type="text" class="form-control" id="id_categori" name="id_categori" value="{{ old('id_categori') }}"
                required>
        </div>

        <div class="form-group">
            <label for="product_name">Product:</label>
            <input type="product_name" class="form-control" id="product_name" name="product_name"
                value="{{ old('product_name') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="desription" name="description" value="{{ old('description') }}"
                required>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price')}}" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

</div>

@endsection