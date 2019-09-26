@extends('layout.layout')

@section('content')

  <form method="POST" action="{{ route('categoryadd.post') }}">
      {{ csrf_field() }}
<div class="form-group">
<label for="exampleInputEmail1">Category Name</label>
<input type="text" class="form-control" placeholder="Enter category">

</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
