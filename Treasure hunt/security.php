<?php
function keymaker($id){ 
    //generate the secret key anyway you like. It could be a simple string like in this example or a database 
    //look up of info unique to the user or id. It could include date/time to timeout keys. 
    $secretkey=$id.'HutysK98UuuhDasdfafdCrackThisBeeeeaaaatchkHgjsheIHFH44fheo1FhHEfo2oe6fifhkhs'; 
    $key=md5($id.$secretkey); 
    return $key; 
} 
?>