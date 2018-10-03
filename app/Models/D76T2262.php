<?php

namespace App\Models;

class D76T2262 extends \Eloquent
{
    protected $table = 'D76T2262';
    protected $primaryKey = 'ID';
    protected $connection = 'sqlsrv';
    public $timestamps = false;
    public $incrementing = false;

    public function getList()
    {
        $result = DB::table($this->table)->get();
        return $result;
    }
}