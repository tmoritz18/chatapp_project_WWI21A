<?php
 
//session_start();
include("../group_chat.php");
$vorname = $row['fname']. " " . $row['lname'];
 

 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $vorname = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}

 
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
 
        <title>Gruppenchat | WWI21A</title>
        <meta name="description" content="Tuts+ Chat Application" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>

        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Willkommen, <b><?php echo $vorname; ?></b></p>
                <p class="logout"><a id="exit" href="#">Gruppenchat verlassen</a></p>
            </div>
 
            <div id="chatbox">
            <?php
            if(file_exists("log.html") && filesize("log.html") > 0){
                $contents = file_get_contents("log.html");          
                echo $contents;
            }
            ?>
            </div>
 
            <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg" />
                <input type="checkbox" id="fat" name="bold"/>
                <label for = "fat">F</label>
                <input type="checkbox" id="kur" name="italic"/>
                <label for = "kur"><i>K</i></label>
                <input type="checkbox" id="unt" name="underlined"/>
                <label for = "unt"><u>U</u></label>
                <input name="submitmsg" type="submit" id="submitmsg" value="Senden" />
            </form>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {
                $("#submitmsg").click(function () {
                    var clientmsg = $("#usermsg").val();
                    var bold = document.getElementById("fat").checked;
                    console.log(bold);
                    var italic = document.getElementById("kur").checked;
                    console.log(italic);
                    var underlined = document.getElementById("unt").checked;
                    console.log(underlined);
                    if(bold == true){
                        clientmsg = "<b>"+clientmsg+"</b>"
                    }
                    if(italic == true){
                        clientmsg = "<i>"+clientmsg+"</i>"
                    }
                    if(italic == true && bold == true){
                        clientmsg = "<b><i>"+clientmsg+"</i></b>"
                    }
                    if(underlined == true){
                        clientmsg = "<u>"+clientmsg+"</u>"
                    }
                    if(underlined == true && bold == true){
                        clientmsg = "<b><u>"+clientmsg+"</u></b>"
                    }
                    if(underlined == true && italic == true && bold == true){
                        clientmsg = "<b><i><u>"+clientmsg+"</u></i></b>"
                    }
                    if(underlined == true && italic == true){
                        clientmsg = "<i><u>"+clientmsg+"</u></i>"
                    }
                    $.post("post.php", { text: clientmsg});
                    $("#usermsg").val("");
                    return false;
                });
               
 
                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request
 
                    $.ajax({
                        url: "log.html",
                        cache: false,
                        success: function (html) {
                            
                            $("#chatbox").html(html); //Insert chat log into the #chatbox div
 
                            //Auto-scroll           
                            var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                            if(newscrollHeight > oldscrollHeight){
                                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }   
                        }
                    });
                }
 
                setInterval (loadLog, 2500);
 
                $("#exit").click(function () {
                    var exit = confirm("Wollen Sie den Gruppenchat verlassen?");
                    if (exit == true) {
                    window.location = "../users.php?logout=true";
                    }
                });
            });
        </script>
    </body>
</html>
<?php
?>