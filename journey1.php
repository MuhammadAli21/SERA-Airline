<!doctype html>
<html>
<head>
	<title>Plan Journey</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="index.js"></script>
	<link rel="icon" type="img/png" href="newlogo.jpeg" style="background-color: orange;">
</head>
<body>

	<!--box1-->
<div class="container-fluid" id="top_nav1">
	<div class="row">
			<i class="fa fa-map-marker" aria-hidden="true" style="margin-left: 40%;">
			<p>Karachi</p></i>
			<i class="fa fa-envelope" aria-hidden="true" >
			<p>info.sera-airline.com</p></i>
			<i class="fa fa-phone" aria-hidden="true" style="">
			<p>021-3456722</p></i>
      <button type="button" class="btn btn-primary" onclick="window.location.href='login.html'" style="margin-left: 5%;">Log In
      </button>
	</div>
</div>
<!--box2-->
<div class="container-fluid" id="top_nav2">
	<div class="row">
		<img src="white-01logo.png" height="70px" width="120px" style="margin-left: 50%;">
	</div>
</div>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="color: white!important;">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 30%;">
    <ul class="navbar-nav">

      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="passengers_details" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Booking</a>
        <div class="dropdown-menu" href="#" aria-labelledby="navbarDropdownMenuLink" style="background-color: #3d3d3d;">
          <a class="dropdown-item" href="flight.html">Flight Booking</a>
     
          <a class="dropdown-item" href="cargobooking.html">Cargo Booking</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="journey.html">Plan Journey</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<!--Slider-->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width:100%";>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="width:100%";>
    <div class="carousel-item active" style="height : 490px !important;width: 100% !important;">
      <img src="tour1.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h5>Serena Airline</h5>
        <p><i>We provide best serives for our clients</i></p>
      </div>
    </div>

    <div class="carousel-item" style="height : 490px !important;width: 100% !important;">
      <img src="https://www.telegraph.co.uk/content/dam/Travel/2017/February/thai%20AAA6T7.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><i >Our Tours and services provide most of the countries..!</i></h5>
       </div>
    </div>


    <div class="carousel-item" style="height : 490px !important;width: 100% !important;">
      <img src="https://tajlandiafaq.pl/wp-content/uploads/phuket-tour.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5><i>Make Your Travel best and comfortable..!</i></h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Top Heading-->
<div style="background-color: #3d3d3d;" >
<h1 style="text-align: center;
          color: white;
          font-family: serif;">Select Your Tour</h1>
          <p style="text-align: center;color: grey;font-weight: bold;">______________________________________________________________________________________</p>

<h5 style="color: #f4511e;text-align: center;"><i>Choose Your favourite place and travel with Serena Airline with joyfully..!
</i></h5><br>
</div>

<!--Jounery gallery-->
  <div class="container" id="Tour">










<div class="card-deck">
  <div class="card" style="margin-top: 40px;">
    <img src="https://www.worldtravelguide.net/wp-content/uploads/2017/03/shu-Canada-Toronto_1388944829-1440x823.jpg" class="card-img-top" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Canada Tour</h5>
      <p class="card-text">Offering 7 Days Tour to Canada at  very discounted rates in Summer Holidays for the people of Pakistan,  and to other areas of countries.Hotel Stay-Sightseeing-travel to different place of city</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Package Price:25,000 PKR</small>
    </div>
  </div>

  <div class="card"  style="margin-top: 40px;">
    <img src="https://specials-images.forbesimg.com/imageserve/5df7fb014e2917000783339f/960x0.jpg?fit=scale" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">China Tour</h5>
      <p class="card-text">China Tour Package Services:<br>
- Corolla GLI
– Hotel Stay
– Toll taxes
– Sightseeing
– Jeeps for Naltar Valley
– Breakfast.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Package Price:90,000 PKR</small>
    </div>
  </div>

  <div class="card" style="margin-top: 40px;">
    <img src="https://media.istockphoto.com/photos/the-statue-of-liberty-with-one-world-trade-center-background-of-new-picture-id875655298?k=6&m=875655298&s=612x612&w=0&h=fZINZyd87q1R2tcGqBSVR_T1k1FvKNdSGNFUH19IOnQ=" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">NewYork Tour</h5>
      <p class="card-text">Offering 12 days Days Tour.<br>Services include: <br>-HOTELS STAY-TOUR GUIDE-ENTERTAINMENT-TRANSPORT
– Breakfast</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Package Price:85,000 PKR</small>
    </div>
  </div>
</div>

<!--Card 4-->
  
<div class="card-deck">
  <div class="card" style="margin-top: 40px;">
    <img src="https://www.onlinevisatravel.com/wp-content/uploads/2017/10/Turkey-Istanbul_8274724020.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Turkey Tour</h5>
      <p class="card-text">Offering 20 days Days Tour to the most amazing country.In this Tour there is visit from different historical places,famous place with including hotel-stay offer,and cars facilities.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Package Price:72,000 PKR</small>
    </div>
  </div>

  <!--Card 5-->

  <div class="card" style="margin-top: 40px;">
    <img src="https://static.toiimg.com/thumb/msid-52040615,width-748,height-499,resizemode=4,imgsize-167596/Burj-al-arab.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Dubai Tour</h5>
      <p class="card-text">Offering 12 days Days Tour.<br>Services include: <br>-HOTELS STAY-TOUR GUIDE-ENTERTAINMENT-TRANSPORT</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Package Price:65,000 PKR</small>
    </div>
  </div>

    <!--Card 6-->

  <div class="card" style="margin-top: 40px;">
    <img src="https://img.dunyanews.tv/news/2018/September/09-27-18/news_big_images/459036_85265931.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pakistan Tour</h5>
      <p class="card-text">Offering 30 days Days Tour to the whole Pakistan.In this Tour there is visit from different historical places,famous place with including hotel-stay offer,and cars facilities,also provide a visitor guide to guide about the place.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Package Price:25,000 PKR</small>
    </div></div>

</div>
<br>
</div>

<!--Jouner booing form-->
<!--Cargo Form-->
<div class="container-fluid" id="Cargo_form">
  <br><br><br>
  <div class="container" style="">

    <div class="row"  style=" background-image: url(https://tajlandiafaq.pl/wp-content/uploads/phuket-tour.jpg);
    background-attachment: fixed;
    background-size: cover;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <form action="" method="POST" style="margin: auto;border:2px solid green;
      background-image: url(https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_720,f_auto/w_80,x_15,y_15,g_south_west,l_klook_water/activities/swiezmifobyjibudd4cc/Krabi4IslandsDayTourbySpeedboatorLongtailBoat.webp);
       background-attachment: fixed;background-size: cover;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-top: 40px;">
      <br>

        <h1 ><u style="color:white;
        margin-left: 20%;font-weight: bolder;">Book Your Journey</u></h1><br><br>

        <select id=from name="from" style="">
          <option selected hidden value="">From</option>
          <option>Karachi</option>
          <option>Lahore</option>
          <option>Islamabad</option>
          <option>Muree</option>
        </select>

        <select id="To" name="To">
          <option>To</option>
          <option>UK</option>
          <option>Canada</option>
          <option>Japan</option>
          <option>China</option>          
        </select><br><br><br>

        <label for="Departure" style="margin-left: 16px; margin-right: 20px;">Departure:</label>
  <input type="date" id="dept_date" name="dept_date" required>

  <label for="return" style="margin-left: 18px; margin-right: 20px;">Return:</label>
  <input type="date" id="dept_date" name="return_date"><br><br>

<label for="Departure" style="margin-left: 16px; margin-right: 20px;">Trip:</label>
   <input type="radio" name="select" style="margin-left: 26px;">
      <label>One-Way</label>
      <input type="radio" name="select" style="margin-left: 26px;">
      <label>Round-Trip</label><br>


  <input type="text" name="text" placeholder="Enter Your Package Name" size="20" style="margin-left: 16px;"><br>
        <input type="text" name="text" placeholder="Enter Your Package-Code" size="20"><br><br>

        <input type="submit" value="submit" name="search" style="margin-left: 30px;width: 180px; height: 40px;background-color: #f4511e; color: white; border-radius: 5px; border-color: 1px blue;">

   </a><br><br><br>
</form>


<table align="center" style="background-color: black; opacity: 0.8; margin-top: 30px; margin-bottom: 20px;">
    <tr>
  <th align="center" style="padding: 10px;">Flight no</th>
  <th align="center" style="padding: 10px;">Price</th>
  <th align="center" style="padding: 10px;">Tickets Remaining</th>
  <th align="center" style="padding: 10px;">Departure Date</th>
</tr><br>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'sera');
if(isset($_POST['search']))
{
  $dept_date = $_POST['dept_date'];

  $query = "SELECT * FROM journey where dept_date = '$dept_date' ";
  $query_run = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($query_run))
  {
    ?>
    <tr>
    <td align="center" style="padding: 10px;"><?php echo $row['flight_no']; ?></td>
    <td align="center"><?php echo $row['price']; ?></td>
    <td align="center"><?php echo $row['ticket_rem']; ?></td>
    <td align="center"><?php echo $row['dept_date']; ?></td>
  </tr>
  <?php
  } 
}
?>

</table>
</div>
<div class="col-sm-03"></div>
</div>
</div></div>


<!--Footer-->
<div class="footer">
  <div class="footbox1">
    <h4>About Serena Airline<hr style="background-color:white;"></hr></h4>
    <p>Founded in 2016 ,Serena Airline is an expericed pilots,airhostess located in Karachi,Pakistan.<br>For more than 4 years we have been fulfilling the Travel services provide of our community with our team..!</p></br>
  </div>
  <div class="footbox2">
    <h4>Quick Links<hr style="background-color:white;"></hr></h4>
    <ul>
      <li>Flight Booking</li>
      <li>Passengers Details</li>
      <li>Services</li>
      <li>Tours</li>
      <li>Help Guide</li>
    </ul>
  </div>

  <div class="footbox3">
    <h4>For Services Details<hr style="background-color:white;"></hr></h4>
    <p>For services at Serena Airline please use the contact details given below.<br>
    <i class="fa fa-phone"></i> 92-42-35302701-14.
    <br><i class="fa fa-address-card-o"></i> Gulshan-iqbal Town,
    Karachi>Pakistan.
    <br><i class="fa fa-envelope-o"></i>sehrishishaq92@gmail.com</p>
    
  </div>

  <div class="copyright"><hr style="background-color:white;"></hr>
  <p>Copyright 2020 @Serena Airline,Karachi Pakistan | Serena Airline Pakistan. All Rights Reserved</p>
</div>

<!---facbook,twiter(i)-->
<div id="footericon">
<a href="facebook">
    <i class="fa fa-facebook-official text-white"></i></a>
  <a href="facebook" target="_blank">
    <i class="fa fa-twitter text-white"></i></a>
  <a href="facebook" target="_blank">
    <i class="fa fa-whatsapp text-white"></i></a>
  <a href="facebook" target="_blank">
    <i class="fa fa-envelope-o" aria-hidden="true"></i> </a>  
<div>
</div>
</div>

<!--cookies-->
<div class="cookies">
  <p>By continuing to use the site, you agree to the use of cookies. more information </p>
  <button type="button" class="btn btn-primary">Learn More</button></a>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
  
        

       
