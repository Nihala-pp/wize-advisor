<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoomAPI extends Model
{
    use HasFactory;

    protected $table = "zoom_oauth";
    protected $guarded = [];
    protected $fillable = [];

    public static function update_access_token($token)
    {
        $is_table_empty = new ZoomAPI;  
        $data = $is_table_empty->is_table_empty();

        if($data) {
            Self::create([
                'provider' => 'zoom',
                'provider_value' => $token
            ]);
        } else {
            Self::where('provider', 'zoom')->update([
                'provider_value' => $token
            ]);
        }     
    }

    public static  function is_table_empty() {
        $result = Self::where('provider', 'zoom')->get();
        if($result->count()) {
            return false;
        }
 
        return true;
    }
}
