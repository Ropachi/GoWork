@extends('layout.common')

@section('pageCSS')
    <link href="{{ asset('/css/style.css') }}">
@endsection

@include('layout.header')
<link rel ="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
        <h1>予約ページ</h1>
        <table class='book-form'>
        <form action="book" method="post">
            {{ csrf_field() }}
            <?php
            $memId = session('sId');
            ?>
            <tr class="bookRow"><th></th><td><input type="hidden" name="member_id" value="{{$memId}}"></td></tr>
            <tr class="bookRow"><th>希望のオフィス:</th>
                <td>
                    <select class='book-select' name="office" size="4">
                        <option value="おおたかの森オフィス">おおたかの森オフィス</option>
                        <option value="海浜幕張オフィス">海浜幕張オフィス</option>
                        <option value="千葉中央オフィス">千葉中央オフィス</option>
                        <option value="館山リゾートオフィス">館山リゾートオフィス</option>
                    </select>
                </td>
            </tr>
            <tr class="bookRow"><th>希望の日:</th><td><input type="text" id="flatpickr" name="date"></td></tr>
            <tr class="bookRow"><th></th><td><input type="submit" value="予約"></td></tr>
            <script>
                flatpickr('#flatpickr');
            </script>
        </form>
        </table>
        @if (isset($order) && $order =='wrong'))
            <p>{{$order}}</p>
            <h2  class="office-date">その日のご希望のオフィスは予約済みです !</h2>
        @endif

        @if (isset($order) && ($order =='done'))
            <h2  class="office-date">ご予約を承りました。</h2>
            <table class="office-date-table">
            <tr>
                <th>オフィス名 : </th>
                <td> {{$office}}</td>
            </tr>
            <tr>
                <th>予約日 : </th>
                <td>{{$date}} </td>
            </tr>
            </table>
        @endif
        <?php
        $sname = session('sName');
        ?>
        <h2>{{$sname}}様の現在の予約状況</h2>
        @if(isset($lists))
            @foreach($lists as $list)
                <table class="order-list">
                    <tr>
                        <td>{{$list->office}}, {{$list->date}}</td>
                    </tr>
                </table>
            @endforeach
        @endif
    </main>
@endsection

