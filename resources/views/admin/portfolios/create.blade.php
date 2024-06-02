@extends('layouts.admin')

@section('content')
    <h2>Create new portfolio</h2>
    <form action="{{ route('admin.portfolios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input id="name" type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Client Name</label>
            <input id="client_name" type="text" class="form-control" name="client_name">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea id="summary" type="text" class="form-control" rows="10" name="summary"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Publish</button>
      </form>
@endsection