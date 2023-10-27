$(document).ready(function()
{
$.get("pdo_login.php",null, function( data )
{
    $("#pdo_login").html(data);
});
});