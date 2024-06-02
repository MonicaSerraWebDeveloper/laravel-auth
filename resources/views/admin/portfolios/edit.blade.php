@extends('layouts.admin')

@section('content')
    <h2>Edit the portfolio: "{{ $portfolio->name }}"</h2>
    <form action="{{ route('admin.portfolios.update', ['portfolio' => $portfolio->id]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $portfolio->name) }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="client_name" class="form-label">Client Name</label>
            <input id="client_name" type="text" class="form-control" name="client_name" value="{{ old('client_name', $portfolio->client_name)  }}">
        </div>
        @error('client_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea id="summary" type="text" class="form-control" rows="10" name="summary">{{ old('summary', $portfolio->summary) }}</textarea>
        </div>
        @error('summary')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
@endsection