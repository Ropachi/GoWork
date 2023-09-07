@extends('layout.common')

@section('pageCSS')
    <link href="{{ asset('/css/style.css') }}">
@endsection

@include('layout.header')

@section('content')
    <main>
        <h1>ログイン</h1>
            <table>
                <form action="login" method="post">
                    {{ csrf_field() }}
                    @if (isset($status) && $status == 'out')
                        <p id="login_error">メールアドレスあるいはパスワードに間違いがあります !</p>
                    @endif

                    <tr><th>メールアドレス:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
                    <tr><th>パスワード:</th><td><input type="password" name="pswd" value="{{old('pswd')}}"></td></tr>
                    <tr><th></th><td><input type="submit" value="ログイン"></td></tr>
                </form>
            </table>
        <table>
        </table>
    </main>

@endsection

