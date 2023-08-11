@extends('layouts.display2')

@section('content')
    <p>{{ $posting->title }}</p>
    <p>{{ $posting->body }}</p>
@endsection
