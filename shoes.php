<?php
$conn=mysqli_connect("localhost","root","","e commerce");
$q="select * from product";
$res=mysqli_query($conn,$q);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		.maincontainer{
			width: 100%;
			height:auto;
			
			background-color: white;
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
.nav{
			width: 100%;
			height: 10vh;
			border:solid 1px black;
			background-color: black;
			border-radius: 10px;
			margin: 0% 2% 0% 0%;
			opacity: 0.9;
			color: white;
		}
		.container{
			width: 100%;
			height: 100vh;
			
			background-image: url(slideshow-2_1cdbfd27-ae25-4a38-9d4f-a913a692bea7_1920x850.jpg);
			background-repeat: no-repeat;
			background-size: 100% 100%;
			font-family: Poppins,HelveticaNeue,"Helvetica Neue",sans-serif;
		}
		#product{
			width: 100%;
			height: 150vh;
			
			background-image:radial-gradient(lightgrey, black,grey,black);
			margin: 2% 0% 0% 0%;

		}
		.product{
width:22%;
height: 60vh;
float: left;
margin: 2% 0% 0% 2%;
		}
h6{
	color: white;
	font-size: 20px;

}
.product img{
	width:100%;
	height: 35vh;
}
.product input{
	font-size: 20px;
	background-color: white;
	width: 35%;
	cursor: pointer;
	margin: 5% 0% 2% 2%;

}
.heading{
			font-family: Trebuchet MS, sans-serif; font-weight:900; font-size: 60px; color: skyblue; margin-top: 1%;
		}
		.heading6{
			padding-left: 16%; font-weight: 400;  color: lightgrey;font-size: 20px;
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
		.container img{
			width: 100%;
			height:80vh;
		}
		.container h1{
			font-family: Poppins,HelveticaNeue,"Helvetica Neue",sans-serif;
			font-size: 40px;
			font-weight: 700;
    display: inline-block;
    text-transform: uppercase;
    color: white;
    padding: 5% 0% 0% 12%;
		}
		.container b{
			
			font-size: 40px;
			font-weight: 700;
    display: inline-block;
    text-transform: uppercase;
    color: red;
    
		}
 .container h2{
			
			
			font-weight: 700;
    display: inline-block;
    text-transform: uppercase;
   
    text-align: center;
     padding: 5% 0% 0% 12%;
     color: white;
     opacity:0.10;
     font-size: 8rem;
    line-height: 80px;

    
		}
		.header img{
			margin: 2% 0% 0% 3%;
			height: 17vh;
			width: 30%;
		}
		.bu12{
			color: black;
			padding: 4% 0% 0% 0%;
		}
		.icon{
			padding:9% 0% 0% 3%;
			font-size: 30px;
		}
		.icon:hover{
			color: grey;
		}
		#footer{
			width: 100%;
			height: 20vh;
			
			margin: 3% 0% 0% 0%;
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
         padding: 4% 0% 0% 5%;
         font-size: 20px;
		}
		.i:hover{
			color: grey;
		}

	</style>
</head>

<body>
<div class="maincontainer">
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
					<li><a href="http://localhost/assesment3/final%20assesment/signup.php" style="color: white; text-decoration: none;">sign up</a> </li>
		</ol>
		</div>		
	
	<div class="container"><h1>THE <b>SHOES</b> THAT ADAPTES TO YOU</h1>
    <h2>street Style</h2>
	</div>

	
	<div id="product">
		<?php
		while ($row=mysqli_fetch_assoc($res)) {
			# code...
		
		?>
		<div class="product">
			<img src="<?php echo $row['image'] ?>">
			<h6><?php echo $row['name'] ?></h6>
			<h6>
       
				<?php echo $row ['description']?></h6>
			<h6><?php echo $row ['price']; ?></h6>
			<a href="checkout.php?i=<?php echo $row['id']?>"><input type="button" name="" value="checkout"> </a>
		</div>
		<?php
}
		?>
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

















