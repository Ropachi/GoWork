<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

function checkLogin(): array
{
    if (!isset($login) ) {
        $data = [
            'login'=> 'out',
            'error' => 0,
        ];
    } else {
        $data = [
            'login'=> 'in',
            'error' => 0,
        ];
    }
    return $data ;
}

//view操作
class HelloController extends Controller {

    public function index(){
        $data = checkLogin();
        return view('hello.index', $data);
    }
    public function office(){
        $data = checkLogin();
        return view('hello.office', $data);
    }
    public function plan(){
        $data = checkLogin();
        return view('hello.plan', $data);
    }
    public function service(){
        $data = checkLogin();
        return view('hello.service', $data);
    }
    public function register(){
        return view('hello.register');
    }

    public function kanri01(){
        return view('hello.kanri01');
    }
    public function kanri02(){
        return view('hello.kanri02');
    }
}
