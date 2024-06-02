@extends('layouts.admin')

@section('content')
    <h3 class="pb-3">{{ $portfolio->name }}</h3>
    <div class="pb-3"><strong>Slug: </strong>{{ $portfolio->slug }}</div>
    <div class="pb-3"><strong>Client Name: </strong>{{ $portfolio->client_name }}</div>
    <p>{{ $portfolio->summary }}</p>
@endsection