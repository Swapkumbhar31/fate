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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">HOME</a>
                </li>
                <li><a href="aboutus.php">About Us</a>
                </li>
                <li><a href="services.php">Services</a>
                </li>
                <li><a href="Testimonials.php">Testimonials</a>
                </li>
                <li><a href="contactus.php">Contact US</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<div class="jumbotron  homebg">
    <div class="container" style="padding-bottom: 70px;">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">AMC</a></li>
            <li><a data-toggle="tab" href="#menu1">ONE TIME SERVICE</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3 class="text-center">One Stop solutions for all type of AC's</h3>
                <hr>
                <div class="fillform">
                    <ul class="nav nav-pills">
                        <li class="active" id="aserviceli"><a><span
                                    class="step_num">1</span> Select Service &nbsp;&nbsp;&nbsp;<i
                                    class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right"
                                                                                          aria-hidden="true"></i></a>
                        </li>
                        <li class="disabled" id="acontactli"><a><span
                                    class="step_num">2</span> Contact Details &nbsp;&nbsp;&nbsp;<i
                                    class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right"
                                                                                          aria-hidden="true"></i></a>
                        </li>
                        <li class="disabled" id="aconfirmli"><a><span
                                    class="step_num">3</span> Confirm Service</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="aservice" class="tab-pane fade in active">
                        <div class="form-group col-lg-8 text-left">
                            <label for="servicetype">Service Type</label>
                            <select class="form-control" name="servicetype" id="aservicetype">
                                <option value="-1">-Select-</option>
                                <option value="21">AMC Deep cleaning service (3 services) : 10,000 Rs.
                                </option>
                                <option value="22">AMC Deep cleaning service (3 services) : 12,000 Rs.
                                </option>
                                <option value="23">AMC Only Kitchen Cleaning (3 services) : 6,000 Rs.
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-lg-2 text-left">
                            <label for="date">Date :</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                <input type="text" id="atxtdate" data-date-end-date="3d" data-date-format="dd/mm/yyyy"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 text-left">
                            <label for="aservicetime">Preferred Time :</label>
                            <select class="form-control" name="servicetype" id="aservicetime">
                                <option value="-1">-Select-</option>
                                <option value="11 AM - 2 PM">11 AM - 2 PM</option>
                                <option value="2 PM - 4 PM">2 PM - 4 PM</option>
                                <option value="6 PM - 8 PM">6 PM - 8 PM</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div class="text-center" style="margin: auto;padding: auto">
                            <button class="btn btn-default" id="astep1">Proceed to next <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div id="acontact" class="tab-pane fade in">
                        <form action="#" method="post" id="acontactform">
                        <div class="row text-left">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h3>Contact Information</h3>
                                        
                                        <div class="col-lg-12 form-group">
                                            <label for="email">Name :</label>
                                            <input type="text" class="form-control" id="atxtname"
                                                   placeholder="Full name">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="email">Email :</label>
                                            <input type="email" class="form-control" id="atxtemail"
                                                   placeholder="Enter your email">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="email">Mobile Number :</label>
                                            <input type="number" class="form-control" id="atxtnumber"
                                                   placeholder="Enter your mobile">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="email">Pincode :</label>
                                            <input type="number" class="form-control" id="atxtpincode"
                                                   placeholder="Ex : 400001">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="email">Landmark :</label>
                                            <input type="text" class="form-control" id="atxtlandmark">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label for="email">Address for servicing :</label>
                                            <textarea name="address" rows="4" class="form-control" 
                                                      id="atxtadd" placeholder="Your Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        My Job Order<br>
                                        <span class="order" id="aorder"></span>
                                        <br><br>
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td class="text-left">Preferred Date</td>
                                                <td class="text-right" id="aplacedate"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Preferred Time</td>
                                                <td class="text-right" id="aplacetime"></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <br>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td>Price</td>
                                                <td class="text-right text-success" id="aprice">Rs. 890 * 2 = 1780</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td class="text-right text-danger" id="adiscount">- Rs. 0</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td class="text-right orange" id="atotal">Rs. 1780</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="text-center" style="margin: auto;padding: auto">
                            <button class="btn btn-default" id="astep2">Proceed to next <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                        </form>
                    </div>
                    <div id="aconfirm" class="tab-pane fade in">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h3>Contact Information</h3>
                                        <table border="0" class="table table-bordered table-striped">
                                            <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td id="aplacename"></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile</td>
                                                <td id="aplacemobile"></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td id="aplaceemail"></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td id="aplaceaddress"></td>
                                            </tr>
                                            <tr>
                                                <td>Landmark</td>
                                                <td id="aplacelandmark"></td>
                                            </tr>
                                            <tr>
                                                <td>Pincode</td>
                                                <td id="aplacepincode"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        My Job Order<br>
                                        <span class="order" id="acorder"></span>
                                        <br><br>
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td class="text-left">Preferred Date</td>
                                                <td class="text-right" id="acplacedate"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Preferred Time</td>
                                                <td class="text-right" id="acplacetime"></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <br>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td>Price</td>
                                                <td class="text-right text-success" id="acprice">Rs. 890 * 2 = 1780</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td class="text-right text-danger" id="acdiscount">- Rs. 0</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td class="text-right orange" id="actotal">Rs. 1780</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-center" style="margin: auto;padding: auto">
                            <button class="btn btn-default" id="astep3">Confirm Service <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3 class="text-center">One Stop solutions for all type of AC's</h3>
                <hr>
                <div class="fillform">
                    <ul class="nav nav-pills">
                        <li class="active" id="oserviceli"><a><span
                                    class="step_num">1</span> Select Service &nbsp;&nbsp;&nbsp;<i
                                    class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right"
                                                                                          aria-hidden="true"></i></a>
                        </li>
                        <li class="disabled" id="ocontactli"><a><span
                                    class="step_num">2</span> Contact Details &nbsp;&nbsp;&nbsp;<i
                                    class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right"
                                                                                          aria-hidden="true"></i></a>
                        </li>
                        <li class="disabled" id="oconfirmli"><a><span
                                    class="step_num">3</span> Confirm Service</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="oservice" class="tab-pane fade in active">
                        <div class="form-group col-lg-8 text-left">
                            <label for="servicetype">Service Type</label>
                            <select class="form-control" name="servicetype" id="oservicetype">
                                <option value="-1">-Select-</option>
                                <option value=11>Deep cleaning service / 3800 Rs. (Upto 2BHK)
                                </option>
                                <option value=12>Deep cleaning service / 4800 Rs. (3 BHK)
                                </option>
                                <option value=13>Only Kitchen Cleaning /2500 Rs
                                </option>
                                <option value=14>Only toilet cleaning /500 Rs Per toilet
                                </option>
                                <option value=15>Sofa shampooing /250 per chair
                                </option>
                                <option value=16>Carpet cleaning up to 100  per square feet  600 Rs.
                                </option>
                            </select>
                        </div>
                        <div class="form-group text-left" id="onoof"></div>
                        <div class="form-group col-lg-2 text-left">
                            <label for="date">Date :</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                <input type="text" id="otxtdate" data-date-end-date="3d" data-date-format="dd/mm/yyyy"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-lg-2 text-left">
                            <label for="oservicetime">Preferred Time :</label>
                            <select class="form-control" name="servicetype" id="oservicetime">
                                <option value="-1">-Select-</option>
                                <option value="11 AM - 2 PM">11 AM - 2 PM</option>
                                <option value="2 PM - 4 PM">2 PM - 4 PM</option>
                                <option value="6 PM - 8 PM">6 PM - 8 PM</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div class="text-center" style="margin: auto;padding: auto">
                            <button class="btn btn-default" id="ostep1">Proceed to next <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div id="ocontact" class="tab-pane fade in">
                        <form action="#" method="post" id="ocontactform">
                        <div class="row text-left">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h3>Contact Information</h3>
                                        <div class="col-lg-12 form-group">
                                            <label for="email">Name :</label>
                                            <input type="text" class="form-control" id="otxtname"
                                                   placeholder="Full name">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="email">Email :</label>
                                            <input type="email" class="form-control" id="otxtemail"
                                                   placeholder="Enter your email">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="email">Mobile Number :</label>
                                            <input type="number" class="form-control" id="otxtnumber"
                                                   placeholder="Enter your mobile">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="email">Pincode :</label>
                                            <input type="number" class="form-control" id="otxtpincode" 
                                                   placeholder="Ex : 400001">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="email">Landmark :</label>
                                            <input type="text" class="form-control" id="otxtlandmark">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label for="email">Address for servicing :</label>
                                            <textarea name="address" rows="4" class="form-control"
                                                      id="otxtadd" placeholder="Your Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        My Job Order<br>
                                        <span class="order" id="oorder"></span>
                                        <br><br>
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td class="text-left">Preferred Date</td>
                                                <td class="text-right" id="oplacedate"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Preferred Time</td>
                                                <td class="text-right" id="oplacetime"></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <br>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td>Price</td>
                                                <td class="text-right text-success" id="oplaceamount">Rs. 890 * 2 = 1780</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td class="text-right text-danger" id="oplacediscount">- Rs. 0</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td class="text-right orange" id="oplacetotal">Rs. 1780</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="text-center" style="margin: auto;padding: auto">
                            <button class="btn btn-default" id="ostep2">Proceed to next <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                        </form>
                    </div>
                    <div id="oconfirm" class="tab-pane fade in">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h3>Contact Information</h3>
                                        <table border="0" class="table table-bordered table-striped">
                                            <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td id="oplacename"></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile</td>
                                                <td id="oplacemobile"></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td id="oplaceemail"></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td id="oplaceaddress"></td>
                                            </tr>
                                            <tr>
                                                <td>Landmark</td>
                                                <td id="oplacelandmark"></td>
                                            </tr>
                                            <tr>
                                                <td>Pincode</td>
                                                <td id="oplacepincode"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        My Job Order<br>
                                        <span class="order" id="ocorder"></span>
                                        <br><br>
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td class="text-left">Preferred Date</td>
                                                <td class="text-right" id="ocplacedate"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Preferred Time</td>
                                                <td class="text-right" id="ocplacetime"></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td>Price</td>
                                                <td class="text-right text-success" id="ocplaceamount">Rs. 890 * 2 = 1780</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td class="text-right text-danger" id="ocplacediscount">- Rs. 0</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td class="text-right orange" id="ocplacetotal">Rs. 1780</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" style="margin: auto;padding: auto">
                            <button class="btn btn-default" id="ostep3">Confirm Service <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<div class="panel panel-warning">
    <div class="panel-heading text-center">
        <div class="container">
            <p>Why F.A.T.E?</p>
        </div>
    </div>
    <div class="panel-body text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="mdtext">Happy<br>Customers</p>
                </div>
                <div class="col-lg-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-inr fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="mdtext">Value for Money And Qualified Management Services</p>
                </div>
                <div class="col-lg-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="mdtext">Continous Client Communication</p>
                </div>
                <div class="col-lg-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-home  fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="mdtext">Mechanized Housekeeping , Deep Extraction Cleaning</p>
                </div>
            </div>
        </div>
    </div>
</div>

<hr style="height: 2px;background-color: #f89406;margin-bottom: 0px;margin-top: 0px"><footer class="container">
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
