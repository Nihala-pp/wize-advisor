<?php
$url = "https://zoom.us/oauth/authorize?response_type=code&client_id="$client_id"&redirect_uri="$redirect_uri";
?>
 
<a href="<?php echo $url; ?>">Login with Zoom</a>