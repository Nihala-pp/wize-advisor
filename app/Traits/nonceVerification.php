<?php
 
namespace App\Traits;
 
use Carbon\Carbon;


trait nonceVerification
{

    protected function getNonce() {
        $id = "Devop@wise";
        $nonce = hash('invest2023', makeRandomString());
        storeNonce($id, $nonce);
        return $nonce;
    }
    
    protected function verifyNonce($data, $cnonce, $hash) {
        $id = "Devop@wise";
        $nonce = getNonce($id);  // Fetch the nonce from the last request
        removeNonce($id, $nonce); //Remove the nonce from being used again!
        $testHash = hash('invest2023',$nonce . $cnonce . $data);
        return $testHash == $hash;
    }

    public function generateSalt($length = 10) {
        //set up random characters
        $chars='1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        //get the length of the random characters
        $char_len = strlen($chars)-1;
        //store output
        $output = '';
        //iterate over $chars
        while (strlen($output) < $length) {
             /* get random characters and append to output 
                   till the length of the output is greater than the length provided */
            $output .= $chars[ rand(0, $char_len) ];
        }
        //return the result
        return $output;
    }
}