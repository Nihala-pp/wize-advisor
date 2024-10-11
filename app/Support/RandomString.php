<?php
namespace App\Support;
 
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Vite;
 
class RandomString implements NonceGenerator
{
    public function generate(): string
    {
        $myNonce = ''; // determine the value for `$myNonce` however you want
 
        Vite::useCspNonce($myNonce);
 
        return $myNonce;
    }
}