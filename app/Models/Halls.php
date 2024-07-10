<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Halls extends Model
{
    //
    protected $fillable = ['hall_name','hall_capacity','created_at','updated_at'];
    protected $table = 'halls';
    public static function find($code)
    {
        $Users = self::all();

        foreach($Users as $User) {
            if($User['unique_lazy_code'] == $code) {
                return $User;
            }
        }
    }
}
