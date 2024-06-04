@extends('layouts.admin')

@section('content')
    <div class="pb-3">
        <h3>{{ $portfolio->name }}</h3>
        <a  href="{{ route('admin.portfolios.edit', ['portfolio' => $portfolio->slug]) }}">edit</a>
    </div>
    <div class="pb-3"><strong>ID: </strong>{{ $portfolio->id }}</div>
    <div class="pb-3"><strong>Slug: </strong>{{ $portfolio->slug }}</div>
    <div class="pb-3"><strong>Client Name: </strong>{{ $portfolio->client_name }}</div>
    <img style="width: 500px;" src="{{ asset('storage/' . $portfolio->cover_image) }}" alt="">
    <p>{{ $portfolio->summary }}</p>
    <div class="pb-3">
        <form action="{{ route('admin.portfolios.destroy', ['portfolio' => $portfolio->slug]) }}" method="POST">
            @csrf
            @method('DELETE')

            <button style="color: red; padding: 0;" class="btn btn-link" type="submit">delete</button>
        </form>
    </div>
    <div style="border: 1px solid grey; padding: 10px;">
        <div><strong>Last Update: </strong>{{ $portfolio->update_at ? $portfolio->update_at : 'empty' }}</div>
        <div><strong>Created: </strong>{{ $portfolio->created_at }}</div>
    </div>
@endsection