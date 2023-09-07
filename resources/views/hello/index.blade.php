@extends('layout.common')

@section('pageCSS')
    <link href="{{ asset('/css/style.css') }}">
@endsection

@include('layout.header')

<?php
    $status = session('login');
    $memId = session('sId');
?>

@if($status=='out')
    @include('layout.login')
@elseif($status=='in')
    @include('layout.logout')
@endif

@section('content')
    <main>
        <p><img class="home-image" src="{{ asset('/img/Home.jpg') }}" alt="office">
        <p class="home-content">コワーキングスペースGoWorkは 千葉県内主要ポイントにオフィスを配置して
            いますので、臨機応変に働かなければならないビジネス状況に於いて、必要に応じ働く場所を変えることができます。

            さらに、時には全く気分を変え休養も兼ねてリゾート地で仕事ができる勝浦のリゾートオフィスもご用意しています。

            GoWorkは、あなたのビジネスを加速させ応援します。</p>
    </main>
@endsection

@include('layout.footer')
