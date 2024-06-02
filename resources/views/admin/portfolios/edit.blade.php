@extends('layouts.admin')

@section('content')
    <h2>Edit the portfolio: "{{ $portfolio->name }}"</h2>
    <form action="{{ route('admin.portfolios.update', ['portfolio' => $portfolio->id]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $portfolio->name }}">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client Name</label>
            <input id="client_name" type="text" class="form-control" name="client_name" value="{{ $portfolio->client_name }}">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea id="summary" type="text" class="form-control" rows="10" name="summary">{{ $portfolio->summary }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
@endsection