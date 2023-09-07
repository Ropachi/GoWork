@extends('layout.common')

@section('pageCSS')
    <link href="{{ asset('/css/style.css') }}">
@endsection

@include('layout.header')

@section('content')
    <main>
        <h1>会員登録</h1>
        @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <table>
            <form action="add" method="post">
                {{ csrf_field() }}
                <tr><th>お名前:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
                <tr><th>メールアドレス:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
                <tr><th>パスワード:</th><td><input type="password" name="password" value="{{old('password')}}"></td></tr>
                <tr><th></th><td><input type="submit" value="登録"></td></tr>
            </form>
        </table>
        <table>
        </table>
    </main>
@endsection

