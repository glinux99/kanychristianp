<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable =['ip'];
    public static function enregistrerVisite(){
        $ip = request()->ip();
        $existe = self::where('ip', $ip)
        ->whereDate('created_at', Carbon::today())
        ->exists();
        if(!$existe){
            self::create(['ip'=>$ip]);
        }
    }
}
