<?php
session_start();
include("index.php");
if(isset($vorname)){
    $text = $_POST['text'];
    
    
    $text = str_replace("<script>","",$text);
    $text = str_replace("</script>","",$text);
    $text_message = "<div class='msgln'><span class='chat-time'>".date("g:i A")."</span> <b class='user-name'>".$vorname."</b> ".stripslashes($text)."<br></div>";
    file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
}
?>