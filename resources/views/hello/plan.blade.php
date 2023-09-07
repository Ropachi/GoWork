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

        <h1>料金プラン</h1>
        <div class="planlist">
            <ul>
                <li class="plan">
                    <p class="planname">一時利用会員プラン(7:00〜22:00)</p>
                    <p class="explain">作業デスク 1時間 ¥700</p>
                    <p><img src="{{ asset('/img/desk01.jpeg') }}" alt="一時利用会員プラン">
                    <p></p><a href="order">予約する</a>
                </li>
                <li class="plan">
                    <p class="planname">月額会員プラン(7:00〜22:00)</p>
                    <p class="explain">作業デスク ¥15,000
                        <br>ロッカー ¥4,000
                        <br>(ご予約が埋まっている場合はご利用できない場合があります)</p>
                    <p><img src="{{ asset('/img/desk02.jpg') }}" alt="一時利用会員プラン">
                    <p></p><a href="order">予約する</a>
                </li>
                <li class="plan">
                    <p class="planname">会議室 1時間 ¥3000</p>
                    <p class="explain">会議室について
                        <br>会議室は各オフィスに10人収容の会議室をご用意しています。
                        <br>またプレゼンテーション用のモニターも設置してあります。
                        <br>(ご予約が埋まっている場合はご利用できない場合があります)</p>
                    <p><img src="{{ asset('/img/meeting.jpg') }}" alt="一時利用会員プラン">
                    <p></p><a href="order">予約する</a>
                </li>
                <li class="plan">
                    <p class="planname">住所利用・法人登記</p>
                    <p class="explain">当各オフィスの住所を名刺やホームページ等に住所利用が可能です。
                        <br>また住所を利用して法人登記も可能です、起業の方、是非ご相談ください。</p>
                    <p><img src="{{ asset('/img/mailbox.jpeg') }}" alt="一時利用会員プラン">
                    <p></p><a href="order">予約する</a>
                </li>
            </ul>
        </div>
    </main>

@endsection

@include('layout.footer')
