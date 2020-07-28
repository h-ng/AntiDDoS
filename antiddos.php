<?php
if(!$_COOKIE['challenge']){
?>
<script async="" defer="" type='text/javascript'>
window.onload=async function(){
async function readCookie(name) {
    var nameEQ = await name + "=";
    var ca = await document.cookie.split(';');
    for(var i= await 0;i < ca.length;i++) {
        var c = await ca[i];
        while (c.charAt(0)==' ') c = await c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return await c.substring(nameEQ.length,c.length);
    }
    return await null;
}

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
await document.write("<br><\/br><br><h1 align=center>Checking your browser before accessing... <\/h1>");
await document.write("<h3 align=center>This process is automatic. Your browser will redirect to your requested content shortly.<\/h3>");
await document.write("<h4 align=center>Please allow up to 3 seconds...<\/h4>");
await document.write("<h6 align=center>DDoS protection by <a href=\"https:\/\/t.me\/joinchat\/AAAAAFhp0uVYKNeFEivyzw\">LucaDev<\/a><\/h6>");
await document.write("<\/body>");
setTimeout(async function(){ 
	await setCookie('challenge', 'passed', 30);
	await location.reload();
}, 800);
};
</script>
<?php
die();
}
?>
