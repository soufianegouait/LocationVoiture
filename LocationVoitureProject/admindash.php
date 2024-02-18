<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
    <link rel="stylesheet" href="css/style1.css" type="text/css">
</head>
<body>
<style>
    .container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 80vh;
}



  
  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }

  /* Testimonials */
.testimonials-fluid {
  color:#313437;
  
}

.testimonials-fluid p {
  color:#000000;
}

.testimonials-fluid h2 {
  font-weight:bold;
  margin-bottom:40px;
  padding-top:40px;
  color:inherit;
}

h2.text-center {
  text-align: center;
  font-weight: bold;
  margin-bottom: 40px;
  padding-top: 40px;
  color: inherit;
}
@media (max-width: 767px) {
  h2.text-center {
    margin-bottom: 25px;
    padding-top: 25px;
    font-size: 30px;
  }
}

@media (max-width:767px) {
  .testimonials-fluid h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:30px;
  }
}

.testimonials-fluid .intro {
  font-size:20px;
  max-width:500px;
  margin:0 auto;
}

.testimonials-fluid .intro p {
  margin-bottom:0;
}

.testimonials-fluid .people {
  padding:20px 0 10px;
}

.testimonials-fluid .item {
  margin-bottom:32px;
}

@media (min-width:768px) {
  .testimonials-fluid .item {
    height:220px;
  }
}

.testimonials-fluid .item .box {
    width: 50%; /* Set the desired width, adjust as needed */
  margin-left: auto;
  margin-right: auto;
  padding:30px;
  background-color:#fff;
  position:relative;
}

.testimonials-fluid .item .box:after {
  content:'';
  position:absolute;
  left:30px;
  bottom:-24px;
  width:0;
  height:0;
  border:15px solid transparent;
  border-width:12px 15px;
  border-top-color:#fff;
}

.testimonials-fluid .item .author {
    width: 50%; /* Set the desired width, adjust as needed */
  margin-left: auto;
  margin-right: auto;
  margin-top:28px;
}

.testimonials-fluid .item .name {
    font-size:20px; 
  font-weight:bold;
  margin-bottom:2px;
  color:inherit;
}

.testimonials-fluid .item .title {
  font-size:13px;
  color:#9da9ae;
}

.testimonials-fluid .item .description {
  font-size:20px;
  margin-bottom:0;
}

.testimonials-fluid .item img {
  max-width:40px;
  float:left;
  margin-right:12px;
  margin-top:-5px;
}



</style>

<?php

require_once('connection.php');
$query="select *from feedback";
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>



<div class="topnav">
    <a href="adminvehicle.php">VEHICLE MANAGEMENT</a>
    <a href="adminusers.php">USERS</a>
    <a href="admindash.php">FEEDBACKS</a>
    <a href="adminbook.php">BOOKING REQUEST</a>
    <a href="index.php" class="admin-link">LOGOUT</a>
</div>      
          
        </div>
        <body>
            <div class="testimonials-fluid">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Feedbacks</h2>
                        <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                    </div>
                    <div class="row people">
                        <?php
                        while ($res = mysqli_fetch_array($queryy)) {
                        ?>
                            <div class="col-md-6 col-lg-4 item">
                                <div class="box">
                                    <p class="description"><?php echo $res['COMMENT']; ?></p>
                                </div>
                                <div class="author">
                                    <h5 class="name"><?php echo $res['EMAIL']; ?></h5>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        </body>
</html>

        </div>
     
</body>
</html>