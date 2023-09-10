<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use http\Env\Response;

//予約データベース操作
class OrderController extends Controller
{

    public function book(Request $request){
        //この会員の現在の予約内容取得
        $memId = session('sId');
        $lists = Order::where('member_id', $memId);
        return view('order.book',['lists' => $lists]);
    }
    public function order(Request $request){
        $Office = $request->office;
        $Date = $request->date ;

        $order = new Order;
        $form = $request->all();

        //重複チェック
        $inputData = $Office . $Date ;
        if ($DataData = (Order::where('office',$Office)->where('date',$Date))->first() != null){
            $DataData = (Order::where('office',$Office)->where('date',$Date))->first()->joinNameDate();
        }
        if ($inputData == $DataData) {
            //重複していたら
            $status = 'wrong';
        } else {
            //重複していないならデータ保存
             //↓非表示フィールド_tokenを削除する。
            unset($form['_token']);
            $order->fill($form)->save();
            //statusを "予約を表示する"サインへ。
            $status = 'done';
        }
        //この会員の現在の予約内容取得
        $memId = session('sId');

        $lists = Order::where('member_id', $memId)->get();
        //$items = ['office' => $Office, 'date' => $Date, 'order' => $status];
        $items = ['office' => $Office, 'date' => $Date, 'order' => $status, 'lists' => $lists];

        return view('order.book', $items);
    }
}
