<?php
$str = "String|UserID|OtherStuff";
$reverseBase64 = strrev(base64_encode($str)); //this reversifies to be harder to read.
$normalfy = base64_decode(strrev($reverseBase64)); //it's decoding reversed string not. reversing decoded string. my trademark normalifies it.

if(isset($_POST['play'])){
header("Location: application:<?php echo $reverseBase64;?>");
}
/*
You can use this for passing URI parameters see below.
*/
?>
<!--<a href="application:<?php echo $reverseBase64;?>">Launch program</a>-->
<input type="submit" name="play" value="Launch program">
<?php
echo"This is for further protection if needed".$base64;
echo"This is normal".$normalfy;

//Something cool. can be used as a pleasant surprise.
$bruh = "header('location: bruh.com');";
echo eval(base64_decode($bruh)); //just base64 no variable even needed
?>
