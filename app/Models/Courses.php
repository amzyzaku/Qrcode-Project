<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Courses extends Model
{
    //
    protected $fillable = ['course_code','course_name','level','semester','created_at','updated_at'];
    protected $table = 'allcourses';
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
