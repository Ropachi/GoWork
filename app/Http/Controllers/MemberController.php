<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Login;
use http\Env\Response;
use Illuminate\Http\Request;
use IlluminateSessionSessionManager;

//会員データベース操作
class MemberController extends Controller
{
    public function index(Request $request)
    {
        $items = Member::all();
        return view('member.index', ['items' => $items]);
    }
    public function find(Request $request)
    {
        return view('member.find', ['input' => '']);
    }

    public function add(Request $request)
    {
        return view('member.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Member::$rules);
        $member = new Member;
        $form = $request->all();
        unset($form['_token']);
        $member->fill($form)->save();
        $memName = (Member::where('mail',$request->mail))->first()->getName();
        $memId = (Member::where('mail',$request->mail))->first()->getId();
        session(['login' => 'in','sName'=> $memName, 'sId'=>$memId]);
        return view('hello.index');
    }

    public function edit(Request $request)
    {
        $member = Member::find($request->id);
        return view('member.edit', ['form' => $member]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Member::$rules);
        $member = Member::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $member->fill($form)->save();
        return redirect('/member');
    }

    public function delete(Request $request)
    {
        $member = Member::find($request->id);
        return view('member.del', ['form' => $member]);
    }

    public function remove(Request $request)
    {
        Member::find($request->id)->delete();
        return redirect('/member');
    }
    public function login(){
        return view('member.login');
    }
    public function checkMailPswd(Request $request){
        $mailpswd = (Member::where('mail',$request->mail))->first()->joinMailPswd();
        $inputmailpswd = $request->mail . $request->pswd;

        $memId = (Member::where('mail',$request->mail))->first()->getId();
        $memName = (Member::where('mail',$request->mail))->first()->getName();
        if ($mailpswd == $inputmailpswd){
            session(['login' => 'in','sName'=> $memName, 'sId'=>$memId]);
            return view('hello.index');
        } else {
            session(['login' => 'out']);
            return view('member.login');
        }
    }
    public function logout(){
        session(['login' => 'out']);
        return view('hello.index');
    }

}
