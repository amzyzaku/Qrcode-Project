<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Exams extends Model
{
    //
    protected $fillable = ['halls','courses','capacity','row_capacity','created_at','updated_at'];
    protected $table = 'exams';
    public static function find()
    {
        $Users = self::all();

        foreach($Users as $User) {
            if($User['unique_lazy_code'] == $code) {
                return $User;
            }
        }
    }
}
