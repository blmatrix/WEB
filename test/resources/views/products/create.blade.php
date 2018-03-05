@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Products List:</div>

                    <div class="panel-body">

<div class="row" align="center">
    <div>
        <label for="title">Name</label>
        <br>
        <input name="title" type="text" value="{{ old('title', @$product->title) }}">
    </div><br>

    <div>
        <label for="price">Price</label>
        <br>
        <input type="text" name="price" value="{{ old('price', @$product->price) }}">
    </div>

    <div>
        <label for="count">Count</label><br>
        <input name="count" type="text" value="{{ old('author', @$product->count) }}">
    </div><br>

    <div>
        <label>Photo URL</label>
        <br>
        <input type="text" name="photo_path" value="{{ old('photo_path'), @$product->photo_path }}">
    </div>
</div>   

</div>
</div>
</div>
</div>
</div>

@endsection
