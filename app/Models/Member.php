<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

//会員データベースモデル,
class Member extends Model
{
    protected $guarded = array('id');
    //↓created_at and updated_atを自動で処理させる。
    public $timestamps = false;
    public static $rules = array(
        'name' => 'required',
        'mail' => 'required',
        'password' => 'required'
    );

    public function joinMailPswd():string
    {
        return $this->mail . $this->password;
    }

    public function getName():string
    {
        return $this->name;
    }
    public function getId():string
    {
        return $this->id;
    }
    public function find(Request $request){
        return view('member.find',['input'=>'']);
    }
    public function getData():string
    {
        return $this->mail . $this->password;
    }
}
