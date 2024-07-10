<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Users as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //
    protected $fillable = ['full_name', 'reg_number', 'phone_number','country','state','level','department','courses','password','role','created_at','updated_at'];
    protected $table = 'students';
    public static function count2()
    {
        $Users = self::all();
        $tCount = 0;
        foreach($Users as $User) {
            if($User['level'] == 200) {
                $tCount++;
            }
        }
        return $tCount;
    }
    public static function getAllStudents($course)
    {
        $Users = self::all();
        $allstudents = [];
        foreach($Users as $User) {
            if($User['courses'] == $course) {
                $allstudents[] = $User->reg_number;
            }
        }
        return $allstudents;
    }
    public static function find($regNumber)
    {
        $Users = self::all();

        foreach($Users as $User) {
            if($User['reg_number'] == $regNumber) {
                return $User;
            }
        }

    }
}
