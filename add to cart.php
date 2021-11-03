<?php
$conn=mysqli_connect("localhost","root","","e commerce");

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
      height: 130vh;
      
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
    .text1{
      width: 40%;
      height: 50vh;
      
      float: left;
      margin: 7% 0% 0% 4%;
    }
     .text2{
      width: 40%;
      height: 60vh;
      
      float: left;
      margin: 7% 0% 0% 4%;
      background-color: white;
    }
    h1{
      font-family: Roboto,HelveticaNeue,"Helvetica Neue",sans-serif;
      color: white;
      font-size: 30px;
      padding: 5% 0% 0% 3%;
      text-transform: lowercase;

    }
    h3{
font-family: Roboto,HelveticaNeue,"Helvetica Neue",sans-serif;
color: black;
font-size: 30px;
text-transform: lowercase;
font-weight: 700;

text-align: center;
    }
  .text2  input{
      width: 90%;
      margin: 3% 0% 0% 4%;
      height: 5vh;


    }
    .s1{
      background-color: blue;
      text-align: center;
      color: white;
      font-size: 20px;
      cursor: pointer;
    }
    .text1 img{
      width: 100%;
       height:40vh;
    }
    .b5{
  text-align: center;
  margin-top: 4%;
  background-color: blue;
  color: white;
  width: 80px;
  height: 5vh;
  text-align: center;
  margin: 4% 0% 0% 40%;


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
    <h1>visa is the world's second-largest card payment 
      <br>
    organization| debit and credit cards combined</h1>
    <div class="text1">
      
      <img src="visa-prepaid-home-card-pre-paid-1280x720.jpg">

    </div>
    <div class="text2">
      <h3>payment details</h3>
      <form method="post" action="add to cart.php">
        <input type="text" name="name" placeholder="card name" required="">
        <br>
        <input type="text" name="number" placeholder="card number" required="">
        <br>
        <input type="date" name="date" placeholder="date" required="">
        <br>
        <input type="text" name="amount" placeholder="payment amount" required="">
        <br>
        <input type="submit" name="sub" placeholder="" value="pay" required="" class="s1">
        
        
      </form>
     <a href="http://localhost/assesment3/final%20assesment/sigin%20in.php"> <button class="b5">logout</button></a>
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
	<!--<h1 >

</h1>
<div class="container">
 <H1> Create your Account</H1>
 <form method="post" >
	<input type="text" name="name" placeholder="Name">
	<br>
	<input type="text" name="address" placeholder="Address">
    <br>
      <input type="text" name="email" placeholder="email">
    <br>`
    <input type="text" name="nic" placeholder="Nic">
    <br>
    <input type="text" name="number" placeholder="Number">
    <br>
    <input type="text" name="password" placeholder="password">
    <br>
    <input type="submit" name="sub" class="s1" value="submit">
</form>
</div>-->
</body>
</html>
<?php
if(isset($_POST['sub'])) {
$name=$_POST['name'];
$number=$_POST['number'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$q="INSERT INTO `e commerce`.`checkout`(`name`,`number`,`date`,`amount`) Values('$name','$number','$date','$amount')";
mysqli_query($conn,$q);
}

?>