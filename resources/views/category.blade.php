@extends('layout.layout')

@section('content')

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($category as $cat)
              <tr>
                <th scope="row">{{ $cat->id }}</th>
                <td>{{ $cat->name }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

@endsection
