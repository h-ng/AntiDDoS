<?php
function hash_password($password)
{
  define('key', 'random_key');
  $hashed_password = hash("SHA256", $password . key);
  return $hashed_password;
}
if(!$_COOKIE['challenge'] == hash_password('passed')){
?>
<script async="" defer="" type='text/javascript'>
window.onload=async function(){

async function setCookie(name, value, maxAgeSeconds) {
	var maxAgeSegment = await "; max-age=" + maxAgeSeconds;
	document.cookie = await encodeURI(name) + "=" + await encodeURI(value) + await maxAgeSegment;
}
await document.write("<head>");
await document.write("<meta charset=\"UTF-8\">");
await document.write("<meta name=\"author\" content=\"LucaDev Team\">");
await document.write("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">");
await document.write("<title>LucaDev - Challenge<\/title>");
await document.write("<\/head>");
await document.write("<body>");
await document.write("<br><\/br><br><h1 align=center>Checking your browser before accessing...<\/h1>");
await document.write("<h4 align=center>Please allow up to 3 seconds...<\/h4>");
await document.write("<h6 align=center>DDoS protection by <a href=\"https:\/\/t.me\/joinchat\/AAAAAFhp0uVYKNeFEivyzw\">LucaDev<\/a><\/h6>");
await document.write("<\/body>");
setTimeout(async function(){ 
	await setCookie('challenge', "<?php echo hash_password('passed'); ?>", 30);
	await location.reload();
}, 800);
};

</script>
<?php
die();
}
?>
