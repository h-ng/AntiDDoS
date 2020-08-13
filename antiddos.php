<?php
include 'config/config.php';
$antiddosver = $_HC['antiddosver'];
$sitename = $_HC['sitename'];
$url = $_HC['domain'];
$key = $_HC['key'];
function hash_password($password)
{
  define('key', "$key");
  $hashed_password1 = hash("SHA256", $password . key);
  return $hashed_password1;
}
if($_COOKIE['challenge'] != hash_password('passed')){
?>
<script async="" defer="">
window.onload=async function(){
async function setCookie(name, value, maxAgeSeconds) {
        var maxAgeSegment = await "; max-age=" + maxAgeSeconds;
        document.cookie = await encodeURI(name) + "=" + await encodeURI(value) + await maxAgeSegment;
}
await document.write("<br><\/br><br><h1 align=center>Checking your browser before accessing...<\/h1>");
await document.write("<h4 align=center>Please allow up to 3 seconds...<\/h4>");
await document.write("<p align=center>DDoS ray protection by <?php echo $sitename; ?> for <?php echo $url; ?><\/p>");
setTimeout(async function(){ 
        await setCookie('challenge', "<?php echo hash_password('passed'); ?>", 300);
        await location.reload();
}, 1000);
};
</script>
<pre>JavaScript is required, Please enable, this is enforced by  <?php echo $sitename;?></pre>
<?php
die();
}
?>
