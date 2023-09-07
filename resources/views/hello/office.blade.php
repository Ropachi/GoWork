@extends('layout.common')

@section('pageCSS')
    <link href="{{ asset('/css/style.css') }}">
@endsection

@include('layout.header')

<?php
$status = session('login');
$sname = session('name');
?>

@if($status=='out')
    @include('layout.login')
@elseif($status=='in')
    @include('layout.logout')
@endif

@section('content')
    <main>
        <h1>オフィス拠点一覧</h1>
        <div class="officelist">
            <ul>
                <li class="list">
                    <p class="officeName">おおたかの森オフィス</p>
                    <p class="address">〒022-1234
                        <br>千葉県流山市おおたかの森12-34
                        <br>エクスプレスビル3F
                    </p>
                    <p class="detail">必要があれば研究学園都市にある様々な研究機関へのアクセスにも便利、そして都心へのアクセスも楽なおおたかの森にオフィスを配置しました。</p>
                    <p><img src="{{ asset('/img/OtakaStation.jpeg') }}" alt="おおたかの森オフィス">
                </li>
                <li class="list">
                    <p class="officeName">海浜幕張オフィス</p>
                    <p class="address">〒033-2345
                        <br>千葉県千葉市美浜区上瀬23-45
                        <br>シーガーデン8F
                    </p>
                    <p class="detail">海浜幕張オフィスは近辺の日本トップ各企業へのアクセスがとても便利です。また京葉線で都心へのアクセスも容易です。
                        仕事に疲れたら時には近くの海岸を散歩することでリフレッシュ、また仕事への意欲が増します。</p>
                    <p><img src="{{ asset('/img/buildings.jpg') }}" alt="海浜幕張オフィス">
                </li>
                <li class="list">
                    <p class="officeName">千葉中央オフィス</p>
                    <p class="address">〒044-3456
                        <br>千葉県千葉市中央区本千葉34-56
                        <br>千葉マリンビル5F
                    </p>
                    <p class="detail">県内各鉄道路線の中心となる千葉駅の近く、千葉県内の各企業などへのアクセスがとても便利です。</p>
                    <p><img src="{{ asset('/img/Monorail.jpg') }}" alt="千葉中央オフィス">
                </li>
                <li class="list">
                    <p class="officeName">館山リゾートオフィス</p>
                    <p class="address">〒055-4567
                        <br>千葉県館山市館山11-22
                    </p>
                    <p class="detail">時にはリフレシュを兼ねて内房総館山のリゾート地でリモートワークはいかがでしょうか？</p>
                    <p><img src="{{ asset('/img/Seaside.jpg') }}" alt="館山リゾートオフィス">
                </li>
            </ul>

        </div>
    </main>
@endsection

@include('layout.footer')
