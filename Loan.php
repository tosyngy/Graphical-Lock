<?php
ob_start();
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index/index.php");
}
include_once 'model/dbcontent.php';
;
?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>Graphical password Authentication System - Load Facility</title>
        <script src="js/jquery2.1.3.min.js"></script>
        <script src='jqueryUI/jquery-ui.js'></script>
        <link rel='stylesheet' href="home/css/style.css" />
        <link rel='stylesheet' href="jqueryUI/jquery-ui.css" />
        <link rel='stylesheet' href="bootstrap/css/bootstrap.css" />



        <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css" media="screen" type="text/css" />

    </head>

    <body>
        <header>
            <div class="container text-center">
                <div class="fh5co-navbar-brand">
                    <a class="fh5co-logo" href="index.php"><img src="home/images/loc.png"/></a>
                </div>
                <nav id="fh5co-main-nav" role="navigation">
                    <ul>
                        <li><a href="home/index.php" class="active">Home</a></li>
                        <li><a href="claimsalary.php">Claim Salary</a></li>
                        <li><a href="loan.php">Loan Facility</a></li>
                        <li><a href="profilesetup.php">Profile Setup</a></li>
                        <li><a href="index.php">Profile</a></li>
                        <li id="logout"><a href="#">Logout</a></li>
                        <!--<li><a href="contact.html">Contact</a></li>-->
                    </ul>
                </nav>
            </div>
        </header>

        <div class="login-card">
            <h1><b>Load Facility</b> <br/>Graphical password Authentication Portal  </h1><br>
            <div class="login-help">
                •  <a href="index.php">Back</a> 
                <!--<a href="#">Forgot Password</a>-->
            </div>
            <form>
                <div style="font-weight: 900">Please Verify your password combination below: </div>
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

                <div style="clear: both;padding-top: 30px" class="string"></div>
                
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
                <div style="clear: both"></div>
                <div style="font-weight: 900">Your Current Salary </div>
                <div style="padding-top: 10px">
                    <div type="number" name="salary" placeholder="SALARY"><?php echo $aboutyou[0]['salary']; ?></div>
                </div>
                <div style="font-weight: 900">Load Amount</div>
                <div style="padding-top: 10px">
                    <input type="number" name="load" placeholder="Amount" max="<?php echo $aboutyou[0]['salary']*2; ?>"/>
                </div>
     <!--        <input type="password" name="pass" placeholder="Password">-->
                <div style="padding-top: 30px">
                    <input type="submit" name="claim" class="login login-submit btn-primary" value="Forward Request">
                </div>
                <div style="padding-top: 0px">
                    <input type="submit" name="reset" class="reset btn-danger" value="reset">
                </div>
                <i style="margin: auto"></i>
                <!--<input type="button" name="signup" class="login register-submit btn-warning" value="sign up">-->
                <span class="alert-danger in-pass shownot">Invalid Pattern</span>
                <span class="alert-warning up-pass shownot">Please Cross checked the information supply or you have a pending request<br />Note: Maximum load amount is 500% of your salary<br /></span>
                <span class="alert-success login-success shownot">Successfully, Your Loan details will be forward to your mail</span>
            </form>


        </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->



    </body>

    <script>
        var i=0;
        var j=0;
        var password='';
        $(function(){
            $('#password .col-md-2').mouseup(function(){
                if(!$(this).hasClass('clicked') && i++<4){
                    $(this).addClass('clicked');
                    var value= $(this).attr('id');
                    password+=value+'-';
                    $('.notset').first().attr('id',value).removeClass('notset');
                    console.log(password);
                }
            })
            $('.reset').click(function(){
                $('#password .col-md-2').removeClass('clicked');
                $('#string div').addClass('notset').removeAttr('id');
                i=0;
                password='';
            })
        })
         
        $(function () {
            $("form").submit(function (e) {
                e.preventDefault();
            });
            $("form").click(function (e) {
                e.preventDefault();
            });
            $("[name=claim]").click(function (e) {
               if(password.length==0){
                   alert("Please Supply password")
                   return false;
               }
               if($("[name=load]").val().length==0){
                   alert("Please Supply Amount")
                   return false;
               }
               
                if(($("[name=load]").val()/5) > $("[name=salary]").text()){
                     $(".up-pass").slideDown();
                     return false;
                }
                var whr = "loan";
               
                $.post("model/login.php?login="+whr,
                {
                    pwd: password,
                    amount:$("[name=load]").val()
                },
                function (data) {
                   console.log(data)
                    if (data === "0") {
                        $(".up-pass").slideDown();
                    } else if (data === "1") {
                        $(".login-success").slideDown();
                        alert('Successful, Check your email for more details');
                        $(location).attr("href","home/index.php");
                    } else if (data === "2") {
                        $(".in-pass").slideDown();
                    }else{
                        // alert("your lock code is: "+data+" \nmake sure you secure it, this is your real access to your file");
                        $(".up-pass").slideDown();
                    }
                })
                e.preventDefault();
            });

            $(".up-pass, .login-success, .in-pass").mousemove(function () {
                $(this).fadeOut();
            })
        })
    </script>
</html>