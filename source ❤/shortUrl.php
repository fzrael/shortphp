<!-- 

# الاداة مجانية , للتعلم 
# اللهم انفعني بما علمتني، وعلمني ما ينفعني، وزدني علمًا
# IG : https://instagram.com/81111i
# Github: https://github.com/fzrael
# Discord: Fz#1111
# أي استفسار تواصل معي على الانستقرام

 -->

<?php
require('strandom.php'); // استعداء ملف الراندوم
if(isset($_POST['shortUrl'])){
  $urldata =    $_POST['shortUrl1'];
  $url = "https://v.ht/processreq.php"; // Url Post Data
  $vht = "https://v.ht/";

$urlpost = $url;
$postData = array();

 //معلومات الفورم داتا الي بتنرسل
  $postData['txt_url'] = $urldata;
  $postData['txt_name'] = $string;

// إرسال الداتا witout API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlpost);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData); 
$result = curl_exec($ch);
curl_close($ch);
echo "<br><br><center><h1>".$vht,$string."</center></h1>";
}
?>
