<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dresbach Koenig Wedding</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="rsvp" style="background-color:#78f6fb;">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">#BrettScoresaTD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->

    <section id="rsvpForm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">RESPONSES</h2>

<?php
$yesCounter = 0;
$noCounter = 0;
$responseCounter = 0;
$con = mysql_connect("localhost","brettsco","funkadelic37");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("brettsco_GuestsOne", $con);

$result = mysql_query("SELECT * FROM fullGuests WHERE hasResponded<>'' ORDER BY Attending DESC, partyNumber;");
echo "<div class=\"row col-md-12\" style=\"margin-top:25px;\"><div class=\"table-responsive\"><table class=\"table\" style=\"border:none;\"><tr style=\"border:0;\"><th style=\"text-align:center;border-top:0px;\"><h4>Name</h4></th><th style=\"text-align:center;border-top:0px;\"><h4>Attending?</h4></th><!--<th style=\"text-align:center;border-top:0px;\"><h4>Responded</h4></th><th style=\"text-align:center;border-top:0px;\"><h4>Group Number</h4></th>--><th style=\"text-align:center;border-top:0px;\"><h4>Group Comments</h4></th></tr>";
while($row = mysql_fetch_array($result))
  {
    if($row['Attending'] == "Yes")
    {
        $yesCounter++;
    }
    else {
    $noCounter++;
    }
    $responseCounter++;
    echo  "<tr style=\"\"><td style=\"vertical-align:middle;text-align:center;border-top:0px;\"><h4>".$row['fullName']."</h4></td><td style=\"text-align:center;border-top:0px;\"><h4>".$row['Attending']."</h4></td><!--<td style=\"vertical-align:middle;text-align:center;border-top:0px;\"><h4>".$row['hasResponded']."</h4></td><td style=\"vertical-align:middle;text-align:center;border-top:0px;\"><h4>".$row['partyNumber']."</h4></td>--><td style=\"vertical-align:middle;text-align:center;border-top:0px;\"><h4>".$row['groupComment']."</h4></td></tr>";
  
  }
  echo "</table></div><h2>Summary</h2><h3>Total Responded:".$responseCounter."</h3><h3>Total Coming:".$yesCounter."</h3><h3>Total Denied:".$noCounter."</h3></div>";
mysql_close($con);
?>
                </div>
            </div>
        </div>
        </section>
    <footer>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->


    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
<script>
     jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>
<script>
document.getElementById("RSVPsubmit").onclick = function CheckRsvp() 
{
    document.getElementById("nameFun").readOnly = true;
    document.getElementById("displayNames").style.display = "block";
};
</script>
</body>

</html>