<?php
include 'connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="sigup.css">
<head>

</head>

<body>
    <div class="main">
        <div class="allconten">
            <div class="contener">
                <div class="div1">
                    <button type="button"  class="my" onclick="myk()">Sign In</button>
                    <script>
                        function myk() {
                            location.replace("sigin.php");
                        }
                    </script>
                </div>
                <div class="div2">
                <button type="button" class="my_su" onclick="myFunction()">Sign Up</button>
                <script>
                    function myFunction() {
                        location.replace("sigup.php");
                    }
                </script>  
                </div>
            </div>
            <div class="conten">
                <div class="wrapp">        
                    <div class="left-conten">     
                        <form action="" method="post">
                            <input type="text" name="fullname" id="fullname" placeholder="Fullname"><br><br>
                            <input type="text" name="name" id="name" placeholder="Username"><br><br>
                            <div class="e_p">
                            <input type="text" name="pass" id="pass" placeholder="Password"> 
                            <input type="text" name="pass" id="re-pass" placeholder="Re-Password"> 
                            </div><br>
                            <div class="e_p">
                            <input type="text" name="email" id="email" placeholder="Email">
                            <input type="text" name="phone" id="phone"placeholder="Phone">
                            </div><br>
                            <div class="d_c">
                            <input type="text" name="street" id="street"placeholder="Street">  
                            <input type="text" name="dist" id="dist"placeholder="Dist">
                            <input type="text" name="city" id="city"placeholder="City">
                            </div><br>
                            <input type="submit" name="subm" id="sm"value="Sign Up">
                        </form> 
                    </div>
                    <div class="right-conten">
                        <div id="p1">Being a member of</div>
                        <div class="pp"> 
                            <div id="mkey">MAKEIT</div>
                            <div id="men">Men to explore</div>
                        </div>
                        <div id="p3"> your own style.</div>
                    </div>
                </div>
                    <p id="p1"> You don't have an account yes? <a  class="a1"href="sigin.php">Sign In</a></p>
                </div>
            </div>
        </div>
</body>
    <?php
    if(isset($_POST['subm'])){
        $fullname=$_POST['fullname'];
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $treet=$_POST['street'];
        $dist=$_POST['dist'];
        $city=$_POST['city'];
        $fullAddress = $treet.', '.$dist.', '.$city;
        $sql_user = "SELECT CONCAT('US', CAST(SUBSTR(userID, 3) AS UNSIGNED)) AS userID FROM users ORDER BY CAST(SUBSTR(userID, 3) AS UNSIGNED) DESC LIMIT 1";
        $resuser = $conn->query($sql_user);
        $stringuserID = mysqli_fetch_array($resuser)['userID'];  
        $userid = (int)(substr($stringuserID,2)) + 1;
        $sqluser="INSERT INTO users(userID,fullname,email,phone,address) VALUES('US$userid','$fullname','$email','$phone','$fullAddress')";
        $sql_account = "SELECT CONCAT('AC', CAST(SUBSTR(userID, 3) AS UNSIGNED)) AS accountID FROM account ORDER BY CAST(SUBSTR(accountID, 3) AS UNSIGNED) DESC LIMIT 1";
        $resaccount = $conn->query($sql_account);
        $stringaccountID = mysqli_fetch_array($resaccount)['accountID'];  
        $accountid = (int)(substr($stringaccountID,2)) + 1;
        $sqlaccount = "INSERT INTO `account`(`acccountID`, `username`, `password`, `status`, `userID`) VALUES ('AC$accountid','$name','$pass','0','US$userid')";
        $user = mysqli_query($conn,$sqluser);
        $account = mysqli_query($conn,$sqlaccount);
        if($user && $account){
            echo"<script> alert('successfuly')</script>";
     }
    }
?>   
