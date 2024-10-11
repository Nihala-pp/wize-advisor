<?php
 
namespace App\Traits;
 
use Carbon\Carbon;


trait nonceVerification
{

    protected function getNonce() {
        $id = "Devop@wise";
        $nonce = hash('sha512', makeRandomString());
        storeNonce($id, $nonce);
        return $nonce;
    }
    
    protected function verifyNonce($data, $cnonce, $hash) {
        $id = "Devop@wise";
        $nonce = getNonce($id);  // Fetch the nonce from the last request
        removeNonce($id, $nonce); //Remove the nonce from being used again!
        $testHash = hash('sha512',$nonce . $cnonce . $data);
        return $testHash == $hash;
    }
}