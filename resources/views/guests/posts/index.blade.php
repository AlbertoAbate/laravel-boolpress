@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog</h1>

        @if ($posts->isEmpty())
            <p>Nessun post creato</p>
        @else
            lista posts
        @endif
    </div>
@endsection