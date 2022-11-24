<?php
   

?>
<!doctype html>

<html>

<head> 
	   <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Farmer's Cafe</title>
      
       <link rel="stylesheet" type="text/css" href="stylesheet.css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
       </script>
       <script>
          $(document).ready(function(){
            $("#crops").click(function(){
              $("#crops-d").slideToggle(1000);
            });
          });

          $(document).ready(function(){
            $("#text1").mouseenter(function(){
              $("#text").slideDown(1000);
              $("#sign").slideDown(1500);
            });
          });
        </script>
</head>
<style>

.media
{
margin-left:auto ;
 margin-right: auto;
}
.fa 
{
 padding: 20px;
 font-size: 30px;
 width: 30px;
 text-align: center;
 text-decoration: none;
 margin: 5px 2px;
 border-radius: 50%;
}

.fa:hover
{
   opacity: 0.7;
}

.fa-facebook 
{
 background: #3B5998;
 color: white;
 margin-left: 20px;
}

.fa-twitter 
{
 background: #55ACEE;
 color: white;
 margin-left: 20px;
}
.fa-google 
{
 background: #dd4b39;
 color: white;
  margin-left: 20px;
}

.fa-linkedin 
{
 background: #007bb5;
 color: white;
 margin-left: 20px;
}
.fa-instagram 
{
 background: #125688;
 color: white;
 margin-left: 20px;
}
.media
{
 text-align: center;
  padding-bottom: 10px;
  padding-top: 10px; 
 background-color: black;
}
.image
{
 display: block;
 width: 100%;
 height: auto;
}
.text 
{
 color: white;
 font-size: 20px;
 position: absolute;
 top: 50%;
 left: 50%;
 -webkit-transform: translate(-50%, -50%);
 -ms-transform: translate(-50%, -50%);
 transform: translate(-50%, -50%);
 text-align: center;
}


.drop{
	margin-left:200px;
}


.dropbtn {
  background-color:limegreen ;
  color: white;
  padding: 12px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:azure;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


/* Create four equal columns that floats next to each other */
.column {
    text-align: center;
    align-items: center;
    float: left;
    width: 15%;
    margin-left: 32px;
    padding: 10px;
 
}

.row{
	margin-left: auto;
	margin-right: auto;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.center-img {
 display: block;
  margin-left: auto;
  margin-right: auto;
  
}
.mobile-hidden{
    text-align: right;
    margin-right: 400px;
}
.article-intro{
    margin-left: 92px;
    margin-right: 42px;
}
.article{

    text-align: center;

}

.pra{
	color: chocolate;
}

.headtag{
	margin-left: 80px;
	color: darkred;
	font-weight: bold;
}



</style>

<body>
     <header>
	    <div class="main">
           <div class="logo">
             <img src="bgg.png">
	       </div class="items">
           <ul>
     	        <li><a href="index.php">Home</a> </li>
	            <li><a href="#">Services</a> </li>
	            <li><a href="#about-section">About</a> </li>
	            <li><a href="mailto:ravitejaswiniperepi232@gmail.com">Contact us</a> </li>
              <li><a href="#">News</a> </li>
              <li><a href="/wps-project/weatherIndex.php">weather</a></li>
              <li><a href="/wps-project/login.php">Login</a> </li>
              <li><a href="/wps-project/reg.php">Sign up</a> </li>
	            <li><img src="cart.jpg" style="width:30px;height:30px"></a> </li>
           </ul>
	     </div>
     </header>



     <div class="container" id="text1">
      <img src="2nd.jpg"style="width:100%;">
      <div class="centered"><h1>Farming looks mighty easy when your plow is a pencil,and you're a thousand miles from the corn field.</h1></div>
     </div>

<br><br><br>

  <div class="drop">
  <div class="dropdown">
  <button class="dropbtn">Major Crops</button>
  <div class="dropdown-content" style="left:0;">
    <a href="wheat.php">Wheat</a>
    <a href="maize.php">Maize</a>
    <a href="rrice.php">Rice</a>
    <a href="pulses.php">Pulses</a>
    <a href="sugarcane.php">Sugarcane</a>
    <a href="jute.php">Jute</a>
  </div>
  </div>


<div class="dropdown">
  <button class="dropbtn">Risk Management</button>
  <div class="dropdown-content" style="left:0;">
    <a href="risktypes.php">Types</a>
    <a href="climate.php">Climate</a>
    <a href="insurance.php">Insurance</a>
    <a href="pricesupport.php">Price support</a>
    <a href="contractfarming.php">Contract Farming</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Pest Management</button>
  <div class="dropdown-content" style="left:0;">
    <a href="pestcontrol.php">Pest control </a>
    <a href="pesticides.php">Pesticides</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Subsidies</button>
  <div class="dropdown-content" style="left:0;">
    <a href="subsidies.php">General Info </a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Programmes & Schemes</button>
  <div class="dropdown-content" style="left:0;">
    <a href="schemes.php">General Info </a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Crop Suggestions</button>
  <div class="dropdown-content" style="left:0;">
    <a href="/wps-project/table.php">Location Based</a>
    <a href="/wps-project/seasonal.php">Season Wise</a>
    <a href="/wps-project/tempwise.php">Temperature Wise</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Animal Husbandry</button>
  <div class="dropdown-content" style="left:0;">
    <a href="anidistable.php">Diseases and Symptoms</a>
  </div>
</div>

<div class="dropdown">  <button class="dropbtn">Acid Soils</button> 
 <div class="dropdown-content" style="left:0;">  
   <a href="soils.php">Soils and Types</a>   
  <a href="acidproblems.html">Problems</a>
      <a href="fruitcultivation.html">Fruit Cultivation</a> 
     <a href="nutrientmanage.html">Management</a>  
   </div>
   </div>


</div>




     <br><br><hr><br><br>
     <div class="third">
       <img src="3rd.jpg">
     </div>
     <br><br>

     <div class="list">
      <ul>
        <li><img src="li1.png"></li>
        <li><img src="li2.png"></li>
        <li><img src="li3.png"></li>
        <li><img src="li4.png"></li>
        <li><img src="li5.png"></li>
      </ul>
     </div>
     
    <br><br>
    <br><br><br>
    <br><br><br>
    <br>
   

   <div class="menuhead">
   	<h4>Make The World Green</h4><br>
   	<h2>Farming practices to preserve Land and Water</h2><br>
   </div>
   <div class="whole">
    <div class="menu1">
   	 <a href="pigfarm.php">
     <img class="menup" border="0" alt="W3Schools" src="pigfarm.jpg" width="250" height="250"></a>
     <a href="fruit.php">
     <img class="menup" border="0" alt="W3Schools" src="fruit.jpg" width="250" height="250"></a>
     <a href="poultry.php">
     <img class="menup" border="0" alt="W3Schools" src="chicken.jpg" width="250" height="250"></a>
   </div>
   <div class=menu2>
   	 <a href="rice.php">
     <img class="menup"border="0" alt="W3Schools" src="rice.jpg" width="250" height="250"></a>
     <a href="soil.php">
     <img class="menup" border="0" alt="W3Schools" src="soil.jpg" width="250" height="250"></a>
     <a href="beef.php">
     <img class="menup" border="0" alt="W3Schools" src="beef.jpg" width="250" height="250"></a>
   </div>
   
   </div>

<br><br><br><br><br><br>




<div>
<img class="center-img" src="rat.jpg"  alt="Thumbnail" style="height: 350px; width: 50%;" ><br>
<div class="article"><a  href="rat.php">  How To Keep Rats Out Of Your Compost</a></div>
<br>
<div class="article-intro">
    <p class="pra">With cold days approaching, the need for warmth, and plenty of food, where would you choose to shelter? Well, if you were a rat, it could well be in a compost heap - somewhere with plenty of fresh kit</p>
  </div>
</div>





<br><br>

  <div class="subheader">
    <h2 class="headtag">pest articles</h2>
    <div class="mobile-hidden"><a href="cultivationguide.php">More &gt;&gt;</a></div>
  </div>

 <div class="row">
    
     <div class="column" >
       <a href="peamoth.php">
      <img class= "column " src="peamoth.jpg" style="width:100%;" alt=""></a>
      <a >Pea Moth</a>
     </div>

     <div class="column">
     	<a href="colorado.php">
      <img class= "column " src="colorado.jpg" style="width: 100%;" alt=""></a>
      <p>Colorado Potato Beetle</p>
     </div>

     <div class="column" >
     	<a href="carrotrust.php">
      <img class= "column " src="carrotrust.jpg" style="width: 100%;" alt=""></a>
      <p>Carrot Rust Fly</p>
     </div>

     <div class="column" >
     	<a href="cucumberbeetle.php">
      <img class= "column " src="cucumberbeetle.jpg" style="width: 100%;" alt=""></a>
      <p>Cucumber Beetle</p>
     </div>

</div>

<br><br>

      <hr class="mobile-hidden">
      <br>
      <div class="subheader">
      <h2 class="headtag">guide articles</h2>
          <div class="mobile-hidden"><a href="cultivationguide.php">More &gt;&gt;</a></div>
      </div>


<div class="row">
    
    <div class="column" >
       <a href="spider.php">
      <img class= "column " src="spider.jpg" style="width: 100%;" alt=""></a>
      <a> Benefits of Spiders</a>
    </div>
    <div class="column">
       <a href="attractinsect.php">
      <img class= "column " src="attractinsect.jpg" style="width: 100%;" alt=""></a>
      <p>Attract Insects</p>
    </div>
    <div class="column" >
      <a href="ridofpests.php">
      <img class= "column " src="ridofpests.jpg" style="width: 100%;" alt=""></a>
      <p>Rid of pests</p>
    </div>
    <div class="column" >
    	<a href="mistakesveg.php">
      <img class= "column " src="mistakesveg.jpg" style="width: 100%;" alt=""></a>
      <p>Mistakes in vegetable cultivation</p>
    </div>

</div>
  <br><br><br>
 
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="media">
  <h2> Contact Us</h2>
<a href="#" class="fa fa-facebook"></a>   
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>  
<a href="#" class="fa fa-google"></a>   
</div>

</body>
</html>