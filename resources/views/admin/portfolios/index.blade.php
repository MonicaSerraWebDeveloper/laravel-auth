@extends('layouts.admin')

@section('content')
    <h2>Portfolios</h2>
    
    <a href="{{ route('admin.portfolios.create') }}"><button class="btn btn-secondary">New Portfolios</button></a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Slug</th>
              <th scope="col">Client Name</th>
              <th scope="col">View</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                <th scope="row">{{ $portfolio->id }}</th>
                <td>{{ $portfolio->name }}</td>
                <td>{{ $portfolio->slug }}</td>
                <td>{{ $portfolio->client_name }}</td>
                <td>
                    <a href="{{ route('admin.portfolios.show', ['portfolio' => $portfolio->id]) }}">view</a>
                </td>
                <td>
                  <a href="{{ route('admin.portfolios.edit', ['portfolio' => $portfolio->id]) }}">edit</a>
              </td>
                </tr>
            @endforeach
          </tbody>
    </table>
    
@endsection