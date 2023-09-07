@extends('layout.common')

@section('pageCSS')
    <link href="{{ asset('/css/style.css') }}">
@endsection

@include('layout.header')
@section('content')
    <main>
        <h1>予約一覧</h1>
    </main>
@endsection

@include('layout.footer')
