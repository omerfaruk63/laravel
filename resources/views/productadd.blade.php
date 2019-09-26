@extends('layout.layout')

@section('content')

        <form method="POST" action="{{ route('productadd.post') }}">
            {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Product Name</label>
      <input type="text" class="form-control" name="name" placeholder="Product Name">

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Description">

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" class="form-control" name="price" placeholder="Price">

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Stock</label>
      <input type="text" class="form-control" name="stock" placeholder="Stock">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Category</label>
      <select id="pickup_place" name="categoryid">
          @foreach ($category as $cat)
        <option value="{{$cat->id}}" selected="selected">{{$cat->name}}</option>
        @endforeach
</select>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
