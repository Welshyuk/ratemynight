<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"
      xmlns:fb="https://www.facebook.com/2008/fbml"> 
<head>
  <title>Rate My Night</title>
</head>
<body>

<!--allow access to profile code-->

  <?php 

     $app_id = "140232999331581";

     $canvas_page = "http://welshy.me.uk/apps/rate_my_night/index.php";

     $auth_url = "http://www.facebook.com/dialog/oauth?client_id=" 
            . $app_id . "&redirect_uri=" . urlencode($canvas_page) . "&scope=";


     $signed_request = $_REQUEST["signed_request"];
     list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

     $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

     if (empty($data["user_id"])) {
            echo("<script> top.location.href='" . $auth_url . "'</script>");
     } else {
            echo ("Hello " . $data["user_id"]);
     } 
 ?>
 <p>
 <center>
 Been out tonight?<p>
 Was it good?<p>
 Choose your rating below<p><p>
 <form action="rating.php" method="get">
 <input type="checkbox" name="awesome" value="Awesome" /> Awesome<br />
<input type="checkbox" name="pass" value="Pass" /> Pass<br />
<input type="checkbox" name="lame" value="lame" /> Lame<br />
<input type="checkbox" name="fail" value="Fail" /> Fail<br /><p>
<input type="submit" value="Submit" />
</form>
</center>

</body>
</html>