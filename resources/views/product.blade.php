@extends('layout.layout')

@section('content')

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
                <th scope="col">Description</th>
                  <th scope="col">Price</th>
                    <th scope="col">Stock</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($product as $pro)
              <tr>
                <th scope="row">{{ $pro->id }}</th>
                <td>{{ $pro->name }}</td>
                <td>{{ $pro->description }}</td>
                <td>{{ $pro->price }}</td>
                <td>{{ $pro->stock }}</td>
              </tr>
            @endforeach
            
          </tbody>
        </table>

@endsection
