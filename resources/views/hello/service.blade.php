@extends('layout.common')

@section('pageCSS')
    <link href="{{ asset('/css/style.css') }}">
@endsection

@include('layout.header')

<?php
$status = session('login');
?>
@if($status=='out')
    @include('layout.login')
@elseif($status=='in')
    @include('layout.logout')
@endif

@section('content')
    <main>
        <h1>サービス</h1>
        <p class="service-p">ご用意している設備一覧</p>
        <div class="servicelist">
            <ul>
                <li class="service">
                    <p class="servicename">モニター他</p>
                    <p class="explain2">作業効率化のために大型ディスプレイモニター、外付けキーボード、マウスをご用意しております。</p>
                    <p><img src="{{ asset('/img/monitor.jpg') }}" alt="モニター他">
                </li>
                <li class="service">
                    <p class="servicename">無線WiFi</p>
                    <p class="explain2">無料のWiFiが施設内でご利用できます。</p>
                    <p><img src="{{ asset('/img/Wifi.jpeg') }}" alt="無線WiFi">
                </li>
                <li class="service">
                    <p class="servicename">フリードリンク</p>
                    <p class="explain2">コーヒー・紅茶・日本茶等を無料でご利用いただけます。</p>
                    <p><img src="{{ asset('/img/FreeDrink.jpg') }}" alt="フリードリンク">
                </li>
                <li class="service">
                    <p class="servicename">プリンター/コピー機</p>
                    <p class="explain2">プリンターはWindows及びMacOSから出力可能です。
                        <br>モノクロ 10円/枚、カラー30円/枚</p>
                    <p><img src="{{ asset('/img/copy.jpeg') }}" alt="プリンター/コピー機">
                </li>
                <li class="service">
                    <p class="servicename">シュレッダー</p>
                    <p class="explain2">情報流出はリスキーです、シュレッダーをご用意しています。</p>
                    <p><img src="{{ asset('/img/shredder.jpg') }}" alt="一時利用会員プラン">
                </li>

            </ul>
        </div>
    </main>
@endsection

@include('layout.footer')
