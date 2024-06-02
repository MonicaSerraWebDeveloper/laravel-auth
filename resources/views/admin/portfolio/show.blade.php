@extends('layouts.admin')

@section('content')
    <h3 class="pb-3">{{ $portfolio->name }}</h3>
    <div class="pb-3"><strong>ID: </strong>{{ $portfolio->id }}</div>
    <div class="pb-3"><strong>Slug: </strong>{{ $portfolio->slug }}</div>
    <div class="pb-3"><strong>Client Name: </strong>{{ $portfolio->client_name }}</div>
    <p>{{ $portfolio->summary }}</p>
    <div class="pb-3"><strong>Last Update: </strong>{{ $portfolio->update_at ? $portfolio->update_at : 'empty' }}</div>
    <div class="pb-3"><strong>Created: </strong>{{ $portfolio->created_at }}</div>
    

@endsection