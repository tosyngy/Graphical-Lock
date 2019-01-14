<?php
ob_start();
session_start();
if (isset($_SESSION["username"])) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>Graphical password Authentication System - Log-in</title>
        <script src="../js/jquery2.1.3.min.js"></script>
        <script src='../jqueryUI/jquery-ui.js'></script>
        <link rel='stylesheet' href="../home/css/style.css" />
        <link rel='stylesheet' href="../jqueryUI/jquery-ui.css" />
        <link rel='stylesheet' href="../bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.css" media="screen" type="text/css" />

    </head>

    <body>
        <header>
            <div class="container text-center">
                <div class="fh5co-navbar-brand">
                    <a class="fh5co-logo" href="index.php"><img src="../home/images/loc.png"/></a>
                </div>

            </div>
        </header>
        <div class="login-card">
            <h1><b>Graphical password Authentication Portal</b> <br/> Login</h1><br>

            <form>
                <div style="font-weight: 900">Please Supply your username and select your graphic combination below: </div>

                <div style="padding-top: 10px">
                    <input type="text" name="user" placeholder="Username">
                </div>
                <div style="clear: both;padding-top: 30px" class="string"></div>
                <div style="font-weight: 900">Password: </div>
                <div class="col-md-12" id="string">
                    <div class="col-md-3 notset"  >

                    </div>
                    <div class="col-md-3 notset">

                    </div>
                    <div class="col-md-3 notset">

                    </div>
                    <div class="col-md-3 notset">

                    </div>
                </div>

                <div style="clear: both;padding-top: 30px"></div>

                <div class="col-md-12" id="password">
                   <div class="col-md-2"  id="m1">

                    </div>
                    <div class="col-md-2"  id="red">

                    </div>
                    <div class="col-md-2" id="m2">

                    </div>
                    <div class="col-md-2" id="m3">

                    </div>
                    <div class="col-md-2" id="blue">

                    </div>
                    <div class="col-md-2"  id="m5">

                    </div>
                    <div class="col-md-2"  id="m4">

                    </div>
                    <div class="col-md-2"  id="green">

                    </div>
                    <div class="col-md-2" id="m6">

                    </div>
                    <div class="col-md-2" id="m7">

                    </div>
                    <div class="col-md-2" id="violet">

                    </div>
                    <div class="col-md-2" id="purple">

                    </div>
                    <div class="col-md-2" id="m8">

                    </div>
                    <div class="col-md-2"  id="yellow">

                    </div>
                    <div class="col-md-2"  id="m9">

                    </div>
                    <div class="col-md-2"  id="m10">

                    </div>
                    <div class="col-md-2"  id="m11">

                    </div>
                    <div class="col-md-2"  id="gold">

                    </div>
                    <div class="col-md-2"  id="m12">

                    </div>
                    <div class="col-md-2"  id="lime">

                    </div>
                    <div class="col-md-2"  id="gray">

                    </div>
                    <div class="col-md-2" id="brown">

                    </div>
                    <div class="col-md-2"  id="black">

                    </div>
                    <div class="col-md-2"  id="pink">

                    </div>
                </div>

                <div style="clear: both"></div>
              <!--        <input type="password" name="pass" placeholder="Password">-->
                <div style="padding-top: 30px">
                    <input type="submit" name="login" class="login login-submit btn-primary" value="login">
                </div>
                <div style="padding-top: 0px">
                    <input type="submit" name="reset" class="reset btn-danger" value="reset">
                </div>
                <i style="margin: auto"></i>
                <!--<input type="button" name="signup" class="login register-submit btn-warning" value="sign up">-->
                <span class="alert-danger in-pass shownot">Invalid Login details</span>
                <span class="alert-warning up-pass shownot">User id not allow, choose a new one</span>
                <span class="alert-success login-success shownot">Login Successfully</span>
            </form>

            <div class="login-help">
                •  <a href="../register.php">Register</a> 
                <!--<a href="#">Forgot Password</a>-->
            </div>
        </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->



    </body>

    <script>
        var i=0;
        var password='';
        $(function(){
            $('#password .col-md-2').mouseup(function(){
                if(!$(this).hasClass('clicked') && i++<4){
                    $(this).addClass('clicked');
                    var value= $(this).attr('id');
                    password+=value+'-';
                    $('.notset').first().attr('id',value).removeClass('notset');
                    console.log(password)
                }
            })
            $('.reset').click(function(){
                $('#password .col-md-2').removeClass('clicked');
                $('#string div').addClass('notset').removeAttr('id');
                i=0;
                password='';
                $("[name=user]").val('');
            })
        })
         
        $(function () {
            $("form").submit(function (e) {
                e.preventDefault();
            });
            $("form").click(function (e) {
                e.preventDefault();
            });
            $("[name=login]").click(function (e) {
                var whr = "login";
                console.log(password);
                if ($(this).attr("name") === "login") {
                    whr = "login";
                }
                $.post("../model/login.php?login="+whr,
                {
                    usr: $("[name=user]").val(),
                    pwd: password
                },
                function (data) {
                   
                   if (data === "0") {
                        $(".in-pass").slideDown();
                    } else if (parseInt(data) >0 ) {
                        $(".login-success").slideDown();
                        $(location).attr("href","../home/index.php");
                    } 
//                    else{
//                        // alert("your lock code is: "+data+" \nmake sure you secure it, this is your real access to your file");
//                        $(".login-success").slideDown();
//                        $(location).attr("href","../home/index.php");
//                    }
                })
                e.preventDefault();
            });

            $(".up-pass, .login-success, .in-pass").mousemove(function () {
                $(this).fadeOut();
            })
        })
    </script>
</html>