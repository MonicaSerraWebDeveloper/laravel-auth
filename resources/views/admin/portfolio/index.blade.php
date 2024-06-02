@extends('layouts.admin')

@section('content')
    <h2>Portfolios</h2>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Slug</th>
              <th scope="col">Client Name</th>
              <th scope="col">Summary</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                <th scope="row">{{ $portfolio->id }}</th>
                <td>{{ $portfolio->name }}</td>
                <td>{{ $portfolio->slug }}</td>
                <td>{{ $portfolio->client_name }}</td>
                <td>{{ $portfolio->summary }}</td>
                <td>
                    <a href="{{ route('admin.portfolios.show', ['portfolio' => $portfolio->id]) }}">view</a>
                </td>
                </tr>
            @endforeach
          </tbody>
    </table>
    
@endsection