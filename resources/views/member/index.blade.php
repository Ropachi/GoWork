@extends('layout.common')

@section('pageCSS')
    <link href="{{ asset('/css/style.css') }}">
@endsection

@include('layout.header')

@section('content')
    <table>
        <tr><th>Name</th><th>Mail</th><th>Password</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item-> mail}}</td>
            </tr>
        @endforeach
    </table>
@endsection
@include('layout.footer')
