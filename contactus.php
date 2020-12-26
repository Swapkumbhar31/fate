<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>FATE SERVICE : Home</title>
    <link href="css/theme.css" rel="stylesheet" type="text/css"/>
    <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
    <link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="#"><img src="images/bannerlogo.jpg" alt="" class="logo"/></a>
            </div>
            <div class="col-lg-4 text-right" style="padding: 20px 0px">
                <span style="font-family: AR BONNIE;" class="lgtext"><i class="fa fa-phone"></i>  8879674088</span>
            </div>
            <div class="col-lg-2">
                <a href="#"><img src="images/adminlogin.jpg" alt="" class="logo" height="50%"/></a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">HOME</a>
                </li>
                <li><a href="aboutus.php">About Us</a>
                </li>
                <li><a href="services.php">Services</a>
                </li>
                <li><a href="Testimonials.php">Testimonials</a>
                </li>
                <li class="active"><a href="contactus.php">Contact US</a>
                </li>
            </ul>

        </div>
    </div>
</nav>



<div class="panel panel-warning" style="margin-bottom: 0px;">
    <div class="panel-heading"><div class="container">
            <p style="font-family:sans-serif;font-weight: lighter;font-size: 50px;">Contact Us</p>
        </div></div>
    <div class="panel-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" style="border-right: 1px black solid">
                    <span class="lgtext"><i class="fa fa-edit"></i> Enquiry</span><br><br>
                    <form method="post" action="#" id="contactform">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required/>
                        </div>
                        <div class="col-lg-4">
                            <label for="name">Email</label>
                            <input type="email" id="name" name="name" class="form-control" placeholder="Your Email" required/>
                        </div>
                        <div class="col-lg-4">
                            <label for="name">Mobile</label>
                            <input type="number" maxlength="10" minlength="10" id="name" name="name" class="form-control" placeholder="Your Mobile Number" required/>
                        </div>
                    </div>
                        <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="name">Message</label>
                            <textarea type="text" rows="3" id="name" name="name" class="form-control" placeholder="Your Message" required="required"></textarea>
                        </div>
                    </div>
                        <br><br>
                        <input type="submit" class="btn btn-default" value="Send Message">
                    </form>
                </div>
                <div class="col-lg-5">
                    <span class="mdtext"> <i class="fa fa-phone"></i> Phone Number</span><br>
                    <span class="mdtext orange">  8879674088 </span><br><br>
                    <span class="mdtext"><i class="fa fa-envelope"></i> Email</span><br>
                    <span class="mdtext orange">yash.bidakar@gmail.com</span><br><br>
                    <span class="mdtext"><i class="fa fa-map-marker"></i> Address</span><br>
                    <span class="mdtext"><b>FATE SERVICES Workshop :</b></span><br>
                    <span class="mdtext">A/7, Ganesh darshan Nandivali Road,<br>Dombivali 421201.</span>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="#"><img src="images/bannerlogo.jpg" alt="" width="100%" height="100px" style="padding: 5px 0px;"/></a>
            <p class="text-justify">A specialist in commercial and residential cleaning and housekeeping.
                We believe in cleanliness and promote healthy home and work place.
                Started 5 yeras ago with an aim to cover complete array of services in housekeeping and cleaning.
                Diversified client base.
                Committed to high quality and innovation in whatever we deliver.
                Proper Uniformed, Trained and Professional staff</p></div>
        <div class="col-lg-2">
            <p class="mdtext orange">Links</p>
            <p><a>Home</a></p>
            <p><a>About Us</a></p>
            <p><a>Services</a></p>
            <p><a>Contact Us</a></p>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3 mdtext">
            <p>Have Questions?</p>
            <span class="orange"><p><i class="fa fa-phone"></i>    8879674088</p>
                    <p><i class="fa fa-envelope-o"></i> yash.bidakar@gmail.com</p></span>
        </div>
    </div>
    <h4>Designed & Developed By Abc & Xyz</h4>
    <p><span class="orange">Disclaimer :</span> All third party logo's appearing on this website are proprietary and trademark of their respective organizations.</p>
</footer>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="js/myjs.js" type="text/javascript"></script>
<script>
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        startDate: '-3d',
        leftArrow: '<i class="fa fa-long-arrow-left"></i>',
        rightArrow: '<i class="fa fa-long-arrow-right"></i>'
    });
</script>
</body>
</html>
