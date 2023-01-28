@extends('base')

@section('title')
    Edit Beer #{{ $beer->id }}
@endsection

@section('content')
    <div class="container pt-4">

        @include('form')

    </div>
@endsection
