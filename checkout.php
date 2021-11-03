<?php
session_start();
if (isset($_SESSION['ecom'])) {
	# code...
	$i=$_GET['i'];
	$conn=mysqli_connect("localhost","root","","e commerce");
	$q="select * from product where id ='$i'";
	$res=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($res);
	$q="INSERT INTO `e commerce` , `cart`(`quantity`, `price`, `productid`, `userid`) VALUES ('1','".$row['price']."','$i','".$_SESSION['ecom']."')";
	mysqli_query($conn,$q);
	

}
else{
	header("location:sigin in.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  

.maincontainer{
  width: 100%;
  height: auto;
  
}
.header{
      width: 100%;
      height: 20vh;
      
      background-color: grey;
      
    }
    .header1{
      width: 40%;
      height: 20vh;
      
      float: left;
    }
    .header2{
      width: 30%;
      height: 10vh;
      
      float: left;
      margin: 4% 0% 0% 0%;
    }
    .header3{
      width: 30%;
      height: 20vh;
      
      float: left;
    }
    .header img{
      margin: 2% 0% 0% 3%;
      height: 15vh;
      width: 30%;
    }
    
         .icon{
      padding:9% 0% 0% 3%;
      font-size: 30px;
    }
    .icon:hover{
      color: white;
    }
    .nav{
      width: 100%;
      height: 7vh;
      
      background-color: black;
      border-radius: 10px;
      margin: 0% 2% 0% 0%;
      opacity: 0.9;
      color: white;
    }
    .nav ol{

    }
    .nav li{
      font-size: 20px;
      font-weight: 400;
      color: white;
      float: left;
      text-decoration: none;
      list-style: none;
      padding: 1% 2% 0% 4%;
      border-right: 2px white;
      text-transform: uppercase;
      font-family: Poppins,HelveticaNeue,"Helvetica Neue",sans-serif;
    }
    #container{
      background-image:radial-gradient(lightgrey, black,grey,black);
      width: 100%;
      height: auto;border:solid 1px black;
      text-transform: uppercase;
      height: 100vh;
      
    }
    #footer{
      width: 100%;
      height: 23vh;
      
      margin: 2% 0% 0% 0%;
      background-color: black;
      font-family: Poppins,HelveticaNeue,"Helvetica Neue",sans-serif;
    }
    .footer{
      width: 50%;
      height: 20vh;
      float: left;
    }
    .footer h3{
      color: white;
      padding: 7% 0% 0% 5%;
      font-size: 17px;
    }
    .footer1{
    width: 50%;
      height: 20vh;
      float: left;
      padding: 4% 0% 0% 25%;  
    }
    .footer i{
         color: white;
         padding: 2% 0% 0% 5%;
         font-size: 20px;
    }
    .i:hover{
      color: grey;
    }
    .image1{
    	width: 468px;
    height: 468px;
    	
    	float: left;
    	margin: 7% 0% 0% 4%;
    	z-index: 999;
    	cursor: crosshair;
    	 transition: transform .2s; 

    }
    .image1 img{
    	width: 100%;
    	height: 70vh;
    }
    .image1:hover{
    	-ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
    }
    .text{
    	width: 40%;
    	height: 50vh;
    	
    	float: left;
    	margin: 7% 0% 0% 4%;
    }
    h5{
    	color: white;
    	font-size: 20px;
    	font-weight: 500;
    }
    .star{
    	color: green;
    	font-size: 15px;
    	float: left;
    }
    b{font-family: Roboto,HelveticaNeue,"Helvetica Neue",sans-serif;
    font-weight: 700;
    font-size: 11px;
    color: white;
    text-transform: uppercase;
    }
    h2{
    	font-family: Roboto,HelveticaNeue,"Helvetica Neue",sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: white;
    }
    h1{
          color: white;
    font-family: Poppins,HelveticaNeue,"Helvetica Neue",sans-serif;
    font-size: 2.4rem;
    font-weight: 900;
    }
    .b1{
    	width: 50%;
    	height: 60px;
    	line-height: 50px;
    	border-radius: 3px;
    	text-transform: uppercase;
    	margin: 4% 0% 0% 8%;
    	background-color: green;
    	color: white;
    }
    .b1:hover{
    	color: white;
    }
</style>
<body>
<div id="maincontainer">
    <div class="header">
    <div class="header1"><img src="capture4 - Copy (2).png"></div>
        <div class="header2">
          <b class="bu12" >Currencies:</b><select>
          <option >US Dollar</option>
        <option >option1</option>
        <option>option2</option>
        </select>
        <button  class="b4">change</button>
        </div>
        <div class="header3">
          <i class="fa fa-facebook-official icon" ></i>
          <i class="fa fa-youtube-play icon" ></i>
          <i class="fa fa-twitter icon " ></i>
          <i class="fa fa-pinterest icon " ></i>
        </div>
  </div>
  <div class="nav">
    <ol>
      <li>home page</li>
      <li>about us</li>
      
          <li>contact us </li>
          <li><a href="http://localhost/assesment3/final%20assesment/sigin%20in.php" style="color: white; text-decoration: none;">sign in</a> </li>
          <li><a href="#" style="color: white; text-decoration: none;">sign up</a> </li>
    </ol>
  </div>
  <div id="container">
    <div class="image1"><img src="<?php echo $row['image']?>"></div>
    <div class="text">
    	<h5><?php echo $row ['name']?></h5>
    	<br>
    	<div class="star">
    <B>Rating:</B>	<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<br>
<br>
    	<h5><?php echo $row ['description']?></h5>
    	<br>
    	<h1><?php echo $row ['price']?></h1>
    	<h2>available: in stock: <i class="fa fa-check-square-o" aria-hidden="true" style="color: green;"></i></h2>
    	<a href="http://localhost/assesment3/final%20assesment/add%20to%20cart.php"><button class="b1"><i class="icon_cart" style="color: white; font-size: 20px;"></i> add to cart</button></a>	
    	</div>
  </div>
<div id="footer">
    <div class="footer">
    <h3>Copyright © 2019 Vinovathemes. All rights reserved.
</h3>
<i class="fa fa-facebook-official i" ></i>
          
          <i class="fa fa-twitter i " ></i>
          <i class="fa fa-pinterest i " ></i>
          <i class="fa fa-vimeo i " ></i>
          <i class="fa fa-instagram i " ></i>

        </div>
<div class="footer1"><img src="payment-footer_300x.png">

</div>
  </div>  
  </div>
</body>
</html>
