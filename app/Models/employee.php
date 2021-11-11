<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class employee extends Model
{
    use HasFactory;

    protected $table = "employees";
    protected $fillable = ['email'];

    // public static function getEmployee(){
    //     $records = DB::table('employees')->select('id','name','email','phone','salary','department','created_at','updated_at')->get();
    //     return $records;
    // }
}
