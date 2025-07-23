@extends('layouts.app')

@section('content')
<div class="search-box">
    <h1 class="mb-4 text-center">Search Artists</h1>
    <form method="GET" action="{{ route('artists.search') }}" class="d-flex mb-4">
        <input type="text" name="query" value="{{ old('query', $query ?? '') }}" class="form-control me-2" placeholder="Enter artist name...">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    @if(isset($artists) && count($artists) > 0)
        <ul class="list-group artist-list">
            @foreach($artists as $artist)
                <li class="list-group-item d-flex align-items-center">
                    <img src="{{ asset($artist->artistImage) }}" alt="{{ $artist->artistName }}" width="60" height="60" class="me-3 rounded-circle" style="object-fit: cover;">
                    <div>
                        <a href="{{ route('artists.show', $artist->artistID) }}" class="fw-bold text-decoration-none">
                            {{ $artist->artistName }}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    @elseif(isset($query))
        <div class="alert alert-warning mt-3">No artists found.</div>
    @endif
</div>
@endsection
