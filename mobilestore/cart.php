<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown -->
    <!-- //js -->
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
</head>

<body>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

    <?php
include("header.php");
?>
    <div class="banner banner10">
        <div class="container">
            <h2>Cart</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Cart</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mail -->
    <?php
  $ssid=session_id();
  $sel=mysqli_query($con,"select * from tempcart where sid='$ssid' and purchase=0")
    ?>
    <div class="mail">
        <div class="container">
            <h3>Cart</h3>
            <table class="table">
                <tr>
                    <th>S.no</th>
                    <th>Mname</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                    <th>Total Price</th>
                </tr>
                <?php
    if(mysqli_num_rows($sel)>0)
    {
        $sn=1;
        while($arr=mysqli_fetch_assoc($sel))
        {
            $pid=$arr['pid'];
            $sel1=mysqli_query($con,"select * from product where id=$pid");
            $arr1=mysqli_fetch_assoc($sel1);
            $tp=$arr1['price']*$arr['quantity'];
        ?>
                <tr>
                    <th>
                        <?= $sn;?>
                    </th>
                    <th>
                        <?= $arr1['mob_name'];?>
                    </th>
                    <th>
                        <?= $arr1['price'];?>
                    </th>
                    <th>
                        <?= $arr['quantity'];?>
                    </th>
                    <th>Action</th>
                    <th>
                        <?= $tp;?>
                    </th>
                </tr>
                <?php
        $sn++;
        }
    ?>
                <tr>
                    <th colspan=5 class="text-right">
                        Discount
                    </th>
                    <th></th>
                </tr>
                <tr>
                    <th colspan=5 class="text-right">
                        GST(18%)
                    </th>
                    <th></th>
                </tr>
                <tr>
                    <th colspan=5 class="text-right">
                        Grand Total
                    </th>
                    <th></th>
                </tr>
                <?php
    }
    else
    {
        ?>
                <tr>
                    <th colspan=6 class="text-center">
                        Cart is empty
                    </th>
                </tr>
                <?php 
    }
    ?>

            </table>
        </div>
    </div>
    <?php
include("top_brands.php");
include("newslatter.php");
include("footer.php");
?>
</body>

</html>