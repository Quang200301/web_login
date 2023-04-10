<?php
 //include("/Schooling/IT/Enviroment/xampp/htdocs/project/makeitman/Controller/database/connect.php");

 
?>
<html>
    <link rel="stylesheet" href="fbstyle.css">
    <body>
        <div class="container">
            <div class="div_h">
                <div class="pp"> 
                    <div id="mkey">MAKEIT</div>
                    <div id="men">MEN</div>
                </div>
                <div class="ct">
                    <h1>Contact</h1>
                </div>
            </div>
            <form class="" action="" method="post">
               
                <div class="box">
                    <div class="content1">
                    <input type="text" name="name" id="nameu" placeholder="name"><br><br>
                    <input type="text" name="email" id="mail"  placeholder="Email">
                    </div>
                    <div class="content2">
                        <input type="text" name="street" id="str" placeholder="Street"><br><br>
                        <input type="text" name="phone" id="phonee"placeholder="Phone">
                    </div>
                </div><br>
                <textarea name="message" rows="5" id="mes"cols="40"></textarea> <br><br>
                <input type="submit" name="sub" id="subm" value="Contact Us">
            </form>
        </div>
    </body>
</html>