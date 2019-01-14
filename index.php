<?php
//ob_start();
session_start();
$ip = gethostbyname("");

if (isset($_GET['user'])) {
    require_once 'model/preview.php';
} else {
    if (!isset($_SESSION["username"])) {
        header("Location: index/index.php");
    }
    require_once 'model/dbcontent.php';
    //  print_r($aboutyou[0]);
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Graphical Password - Home Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel='stylesheet' href="home/css/style.css" />
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script src="js/vendor/jquery.hashchange.min.js"></script>
        <script src="js/vendor/jquery.easytabs.min.js"></script>
        <script type="text/javascript" src="js/qrcode.js"></script>


        <script src="js/main.js"></script>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
            <![endif]-->
    </head>
    <body class="bg-fixed bg-1">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->
        <header id="header">


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

            <div id="logo">
                <h2>
                    <?php echo $aboutyou[0]["name"]; ?>
                </h2>
                <h4>
                    <?php echo $aboutyou[0]["occupation"]; ?>
                </h4>
            </div>
        </header>
        <div class="main-container">
            <div style="background: #fff;width: 100%">
                <?php if (!isset($_GET['user'])) { ?>
                    <a href="profilesetup.php" style="position: fixed; bottom: 0px;"><h6>Setup Your Resume</h6></a>
                <?php } ?>
            </div>
            <div class="main wrapper clearfix">
                <!-- Header Start -->


                <!-- Header End -->
                <!-- Main Tab Container -->
                <div id="tab-container" class="tab-container">
                    <!-- Tab List -->
                    <ul class='etabs'>
                        <li class='tab' id="tab-about">
                            <a href="#about"><i class="glyphicon glyphicon-user"></i><span> About Me</span></a>
                        </li>
                        <li class='tab'>
                            <a href="#resume"><i class="glyphicon glyphicon-file"></i><span> Resume</span></a>
                        </li>
                        <!--                        <li class='tab'>
                                                    <a href="#portfolio"><i class="glyphicon glyphicon-heart"></i><span> Portfolio</span></a>
                                                </li>-->
                        <li class='tab'>
                            <a href="#contact"><i class="glyphicon glyphicon-envelope"></i><span> Contact</span></a>
                        </li>
                    </ul>
                    <!-- End Tab List -->
                    <div id="tab-data-wrap">
                        <!-- About Tab Data -->
                        <div id="about">
                            <section class="clearfix">
                                <div class="g2" style="text-align: center">
                                    <div class="photo" style="margin: auto">
                                        <img src="uploads/<?php echo $aboutyou[0]["pix"]; ?>" alt="<?php echo $aboutyou[0]["name"]; ?>">
                                    </div>
                                    <div class="info">
                                        <h2>
                                            <?php echo $aboutyou[0]["name"]; ?>
                                        </h2>
                                        <h4>
                                            <?php echo $aboutyou[0]["occupation"]; ?>
                                        </h4>
<!--                                        <p>
                                            <?php //echo $aboutyou[0]["my_status"]; ?>
                                        </p>-->
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="main-links sidebar">
                                        <ul>
                                            <div id="qrcode" style="width:100%; height:100%; margin-top:15px;margin: auto"></div>
                                            <?php if (!isset($_GET['user'])) { ?>
                                                <a href="" id="savecode" style="text-align: center">Download</a>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="break"></div>
                                <div class="contact-info">
                                    <div class="g1">
                                        <div class="item-box clearfix">
                                            <i class="icon-envelope"></i>
                                            <div class="item-data">
                                                <h3><a href="mailto:<?php echo $aboutyou[0]["email"]; ?>"> <?php echo $aboutyou[0]["email"]; ?></a></h3>
                                                <p>Email Address</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g1">
                                        <div class="item-box clearfix">
                                            <i class="icon-facebook"></i>
                                            <div class="item-data">
                                                <h3><a href="http://fb.me/<?php echo $aboutyou[0]["facebook"]; ?>"><?php echo $aboutyou[0]["facebook"]; ?></a></h3>
                                                <p>Facebook Profile</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><!-- content -->
                        </div>
                        <!-- End About Tab Data -->
                        <!-- Resume Tab Data -->
                        <div id="resume">
                            <section class="clearfix">
                                <div class="g2">
                                    <h3>
                                        Work Experience
                                    </h3>
                                    <ul class="no-list work">

                                        <?php
                                        $experience = explode(",", trim($aboutyou[0]['company']));
                                        $position = explode(",", trim($aboutyou[0]['position']));
                                       // $description = explode(",", trim($aboutyou[0]['description']));
                                        $year2 = explode(",", trim($aboutyou[0]['year']));

                                        foreach ($experience as $key => $value) {
                                            if (empty($position[$key])) {
                                                continue;
                                            }
                                            ?>
                                            <li>
                                                <h5>
                                                    <?php echo $position[$key]; ?>
                                                </h5><span class="label label-info"> <?php echo $year2[$key]; ?></span>
<!--                                                <p>
                                                    <?php// echo $description[$key]; ?>
                                                </p>-->
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>

                                </div>

                            </section>
                        </div>
                        <!-- End Resume Tab Data -->
                        <!-- Contact Tab Data -->
                        <div id="contact">
                            <section class="clearfix">
                                <div class="g1">
                                    <div class="sny-icon-box">
                                        <div class="sny-icon">
                                            <i class="icon-globe"></i>
                                        </div>
                                        <div class="sny-icon-content">
                                            <h4>My Address</h4>
                                            <p><?php echo $aboutyou[0]['address']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="sny-icon-box">
                                        <div class="sny-icon">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <div class="sny-icon-content">
                                            <h4>Mobile Number</h4>
                                            <p><?php echo $aboutyou[0]['phone']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="sny-icon-box">
                                        <div class="sny-icon">
                                            <i class="icon-user"></i>
                                        </div>
                                        <div class="sny-icon-content">
                                            <h4>About Me</h4>
                                            <p><?php echo $aboutyou[0]['about']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="break"></div>

                            </section>
                        </div>
                        <!-- End Contact Data -->
                    </div>
                </div>
                <!-- End Tab Container -->
                <footer>
                    <?php if (!isset($_GET['user'])) { ?>
                        <div id="logout">Logout</div>
                    <?php } ?>
                </footer>

            </div><!-- #main -->
        </div><!-- #main-container -->
    <aaa ccc="<?php echo $_SESSION["id"] ?>" ></aaa>
    <!--<input type="hidden"  id="code" value="http://inatia.org/mybiodata/index.php?user=<?php echo $_SESSION["id"] ?>">-->
    <input type="hidden"  id="code" value="http://<?php echo $ip; ?>/electronicbiodataidentity/index.php?user=<?php echo $_SESSION["id"] ?>">

</body>
<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 200,
        height : 200
    });

    function makeCode () {		
        var elText = document.getElementById("code")
	
        if (!elText.value) {
            alert("Input a text");
            elText.focus();
            return;
        }
	
        qrcode.makeCode(elText.value);
    }

    makeCode();

    $("#text").
        on("blur", function () {
        makeCode();
    }).
        on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
        
    $(function(){
        $("#savecode").click(function(e){
            
            e.preventDefault();
            // alert("in")
            $(location).attr("href", $("#qrcode img").attr("src"))
        })
    })
</script>

<script>
    $(function(){
            
            
        $("#logout").click(function(e){
            e.preventDefault();
            $.post("model/login.php?login=logout",
            {
            },
            function(data){
                $(location).attr("href","index/index.php");
            })
        })
    })
   
</script>
</html>
