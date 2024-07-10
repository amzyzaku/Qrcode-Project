<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class adminmodel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['unique_lazy_code','used_unique_lazy_code'];

    protected $table = 'lazyclassrep';
    public static function find($code)
    {
        $Codes = self::all();

        foreach($Codes as $acode) {
            if($acode['unique_lazy_code'] == $code) {
                return $acode;
            }else
            {
                if($acode['used_unique_lazy_code'] == $code) {
                    return ("used");
                }
            }
        }
    }

}
