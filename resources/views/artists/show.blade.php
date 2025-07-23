@extends('layouts.app')

@section('content')
<div class="search-box">
    <h1 class="mb-3">{{ $artist->artistName }}</h1>
    <h4>Songs</h4>
    <ul class="list-group mb-4">
        @forelse($artist->songs as $song)
            <li class="list-group-item">{{ $song->songTitle }}</li>
        @empty
            <li class="list-group-item text-muted">No songs found.</li>
        @endforelse
    </ul>
    <a href="{{ route('artists.search') }}" class="btn btn-secondary back-link">Back to Search</a>
</div>
@endsection
