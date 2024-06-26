<!DOCTYPE html>
<html lang="en">
<head>
    <title>Craftquest</title>
    <meta charset="UTF-8">
    <meta name="description" content="Craftquest">
    <meta name="keywords" content="Craftquest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://craftquest.in/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="cubeportfolio/css/cubeportfolio.min.css"/>
    <link rel="stylesheet" href="css/colors/red.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/custom.css"/>

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">

    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .main_block{
            transform: translateX(0%);
        }

        .main_block .full-inner .full-contact ul li{
            opacity:1
        }
        .main_block .full-inner nav ul li{
            overflow: inherit !important;
        }
    </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#btn_head").click(function(){
    // alert("sdfgfsdf");
    $(".full-menu").toggleClass("main_block")
  });
});
</script>

    <!-- PRELOADER -->
<!--     <div class="preloader">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>  -->

    <!-- HEADER -->
    <header>
      <a href="https://craftquest.in/" title="Craftquest"><img src="images/logo.png" title="Craftquest" alt="Craftquest"></a>
        <div class="nav-icon" id="btn_head">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- FULL MENU -->
    <div class="full-menu">
        <div class="full-inner row">
            <nav class="col-md-8">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="col-md-4 full-contact">
                <ul>
                    <li class="title">Get in Touch</li>
                    <li>to@craftquest.in</li>
                    <li>
                        <div class="social">
                            <a href="#"><i class="fab fa-facebook"></i>  </a>
                            <a href="https://twitter.com/CraftQuest_ind/"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                            <a href="https://www.linkedin.com/company/craft-quest/?viewAsMember=true"><i class="fab fa-linkedin" aria-hidden="true"></i>  </a>
                            <a href="https://www.instagram.com/craftquest_india/"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                            <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
