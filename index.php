<?php
$token = "942847089:AAHKpe5NLe-SXfEJH3N3zY1E4w2aqs0KHRU";
$admin = 911000886;
if(isset($_POST['submit'])){
$url = $_POST['url'];
$videoid = $url;

}
?>
<html>
<body>
<center>
<h2>اهلا بك في مراسلة المطور العربي</h2>
<div>
<form method="post"  action="">
<input type="text"  name="url"  placeholder="قم بكتابة رسالتك هنا وسوف تصل الي" width="250" >
<div></div>
    <input type="submit" name="submit" width="250">
    </form>
    
<div class="thumbnail">
<?php
if(! empty($videoid)){


?>
<h3> تم ارسال رسالتك بنجاح</h3>

<?php
file_get_contents("https://api.telegram.org/bot$token/sendmessage?chat_id=".$admin."&parse_mode=markdown&text=".urlencode($url));
    
}
?>
</div>
</div>
</center>
<body>
<html>