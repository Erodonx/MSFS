if (document.getElementById('verification')!=null)
{
var verification=document.getElementById('verification');
var img=document.getElementById('img');
var putine=document.getElementById('putin');
verification.addEventListener("mouseover" , (e) => {
    window.alert('aha');
    putine.innerHTML='<audio src="../BOOTSTRAP/Assets/son/balade.mp3" autoplay loop></audio>';
    img.src="../BOOTSTRAP/Assets/gif/wide-putin-awokenRes.gif";
});
verification.addEventListener("mouseout" , (e) => {
    putine.innerHTML='';
    img.src="../BOOTSTRAP/Assets/food/resized/Putin_hidden.png";
});
}


$(document).ready(function()
{
$.get("header.php",null, function( data )
{
    $("#header").html(data);
});
});
$(document).ready(function()
{
$.get("footer.php",null, function( data )
{
    $("#footer").html(data);
});



});