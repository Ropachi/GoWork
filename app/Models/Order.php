<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
            //↓created_at and updated_atを自動で処理させる。
    public $timestamps = false;
    protected $guarded = array('id');

    public static $rules = array(
        'member_id' => 'required',
        'office' => 'required',
        'date' => 'required'
    );
    public function joinNameDate()
    {
        if (isset($this->office) && isset($this->date)){
        return $this->office .$this->date;
        } else
        return 'none';
    }
}
