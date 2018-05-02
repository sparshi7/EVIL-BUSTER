<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evil Buster</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Home</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#carousel-example-generic">Our motive</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#report">Report</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#charity">Charity</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#suggestion">Suggestion</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="signup.html">Sign up</a>
                    </li>
                    <li>
                        <a href="login.html">Log Out</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading" style="color: black;">Evil Buster</h1>
                        <p class="intro-text">A STEP TOWARDS SOCIAL PROGRESS</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="border-radius:0px; min-height:50px;" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
      <img src="img/1.jpeg" alt="...">
      <div class="carousel-caption">
         <h2>Child Labour</h2>
         <p>We care for the future!</p>
      </div>
    </div>

    <div class="item">
      <img src="img/2.jpg" alt="...">
      <div class="carousel-caption">
        <h2>Image says it all!</h2>
      </div>
    </div>

    <div class="item">
      <img src="img/3.jpg" alt="...">
      <div class="carousel-caption">
        <h2>No to dowry</h2>
      </div>
      </div>



     <div class="item ">
      <img src="img/4.jpg" alt="..." style="background-repeat: no-repeat;:cover;width:100%">
      <div class="carousel-caption">
        <h2>save save save!</h2>
      </div>
    </div>

    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Us</h2>
                <p>While technology is important, its what we do with it that truly matters!! Civilisation has given us enormous successes: going to the moon, inventing the WiFi and upgrading to LiFi we continue to reach new heights each day. But then, this is the civilisation that took us to debt, environmental crisis, social crisis, every single crisis. We need a civilisation where we say goodbye to these things. To overcome social evils such as poverty, child labour, female foeticide, dowry and the flaws of the economic crisis in our society we need to envision our social life. So here are we with... <b>EVIL BUSTER:</b> A STEP TOWARDS SOCIAL PROGRESS</p>
            </div>
        </div>
    </section>

    <!-- Report Section -->
    <section id="report" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Report</h2>
                    <p>"There is the expression of selfishness and there is the expression of selflessness but economists or theoreticians never touched that part. They said, "Go and become a philanthropist." I said, "No I can do that in the business world, create a different kind of business- a business based on selflessness," &nbsp;&nbsp;&nbsp;...MUHAMMAD YUNUS(NOBEL PEACE PRIZE WINNER)"</p>
                    <a href="info.html" class="btn btn-default btn-lg">Report the crime</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Charity Section -->
    <section id="charity" class="content-section text-center">
        <div class="download-section" style="background-image: url(img/5.jpg); color: black;">
            <div class="container" >
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Charity</h2>
                    <p>एक प्रयास तुम करो, एक प्रयास हम करें,<br/>
                       इस देश की भी सूरत बदलनी चाहिए,<br/>
                       जब मिलकर हम करेंगे प्रयास तो होगा सबका विकास ||<br/><br/>
                       <strong>Our NGO Partners (Account no , IFSC Code)</strong><br/>
                       1. Child Care(77667966,Q8LA7FAY) <br/>
                       2. Anti-Dowry Force(83607403,UP5GLG7Y) <br/>
                       3. Anti Foeticide(94325661,XZ2ZAV72) <br/>

                    </p>
                    <a href= "ngo.html"  class="btn btn-default btn-lg">Contribute the cause</a>
                </div>
            </div>
        </div>
    </section>





    <!-- Suggestion Section -->
    <section id="suggestion" class="content-section text-center">
        <div class="download-section" style="background-image: url(img/6.jpg);">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Suggestion</h2>-
                    <p>We are here to dissolve the various social evils prevailing in society. Lets join hands and come together to make a difference. We welcome your valuable suggestions with open heart...</p>
                    <a href="suggestions.html" class="btn btn-default btn-lg">Visit Suggestion Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <p>Feel free to contact us in case of any query or to just say hello!</p>
                <p>Follow us at our Facebook page <a href=#>EVIL BUSTERS</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href=# class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href=# class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href=# class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Evil Busters 2017</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>
