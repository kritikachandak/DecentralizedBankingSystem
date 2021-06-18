<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>User Front End</title>
 <script src="./node_modules/web3/dist/web3.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="swift.css">

<style>
button{
background:white
}
#hid{
	display: none;
}
</style>

<script>
	function logo() {
 window.location.href = "index.html";
	}
</script>
</head>
<body onload="openCity(event, 'Home')" style="background:white">

<p><h2 style="float: left; font-family: Bauhaus 93"><img src="logo.png" style="float: left" height="55px" width="55px " class="w3-round">DBank</h2>
	<h4 style="float: left;line-height: -210px;color;grey">&nbsp;&nbsp;<em> A Decentralised Banking Application</em></h4>
	
	<h4 style="float: right; color: navy">Welcome<img src="user.png" height="25px" width="25px " class="w3-round"> <?php session_start(); echo $_SESSION['login_user'] ?>
</h4>

<div class="tab" style="background:orange;color:white;clear: both;">
  <button class="tablinks" onclick="openCity(event, 'Home')">
  <img src="img1.png" height="25px" width="25px " class="w3-round">
  Home</button>
  <button class="tablinks" onclick="openCity(event, 'Generate')">
  <img src="img2.png" height="25px" width="25px " class="w3-round">
  Generate Sign</button>
  

  
  <button class="tablinks" onclick="openCity(event, 'Customer Care')">
  <img src="img4.png" height="25px" width="25px " class="w3-round">
  About us</button>

  <button class="tablinks" style="float: right;">
  <img src="log.png" height="25px" width="25px " class="w3-round">
  <a href="index.html" style="color:black;list-style-type: none;text-decoration: none">Log Out</a>
  </button>
  
</div>

<div id="Home" class="tabcontent">
	<header>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			
			<div class="carousel-inner">
			  <div class="item active">
				<img src="crl.jpg" alt="Los Angeles" style="width:100%;">
			  </div>
			  <div class="item">
				<img src="hml.jpg" alt="Chicago" style="width:100%;">
			  </div>
			  <div class="item">
				<img src="edl.jpg" alt="New york" style="width:100%;">
			  </div>
			</div>
			
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
	</header>
	</br>
	</br>
	</br>
	<div class ="middle">
		<div class="vertical-menu">
		  <a href="#"  class="active" style="background-color: orange">Check Eligibility</a>
		  <a href="#" onclick="openCity(event, 'Loan')">Personal Loan</a>
		  <a href="#" onclick="openCity(event, 'Loan')">Two Wheeler Loan</a>
		  <a href="#" onclick="openCity(event, 'Loan')">Home Loan</a>
		</div>
		<div class="vertical-menu">
		  <a href="#" class="active" style="background-color: orange">Announcements</a>
		  <a href="#">Gail tender Results</a>
		  <a href="#">New Car Loan scheme </a>
		   <a href="#">Isro tender Results</a>
		</div>
		<div class="vertical-menu">
		  <a href="#" class="active" style="background-color: orange">Quick Links</a>
		  <a href="#">Apply Now</a>
		  <a href="#">Locate us</a>
		   <a href="#">Products</a>
		</div>  
	</div>
	</br>
	</br>
	<footer>
		<h3>Visit us at </h3>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/facebook.png" width="30px" alt="Facebook" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/twitter.png" width="30px" alt="Twitter" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/google.png" width="30px" alt="Googleplus" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" width="30px" alt="Linkedin"/></a>
		<a href="#">
		<img src="https://simplesharebuttons.com/images/somacro/pinterest.png" width="30px" alt="Pinterest" /></a>
	</footer> 
</div>

<div id="Generate" class="tabcontent">
	  <div class="container">
		<div class="in">
        	<h2 id="name"></h2>
			<label for="msg" class="col-lg-2 control-label">Message&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Loan sanction</label>
		</div>

		<div class="in" style="text-align: center;">
			<label for="pkey" class="col-lg-2 control-label">Private Key</label>
        	<input id="pkey" type="text" style="border-radius:1px;color:blue;border:2px solid orange; ">
		</div>

		<br>
		<p id = 'hello'>		</p>
		
		<div class="in">
			<button id="button" style="border-radius:1px;color:white;background-color: black;border:none; " onclick="generate()">Generate sign</button>
				<form method="POST" action="savesign.php">
					<div class="inr" id="hid">
						<input id="buttonn" type="submit" value="Save sign" style="width:250px;border-radius:1px;color:white;background-color: grey;border:none;float: right;margin-top: -50px ;margin-right: 30px">
						<input type="hidden" name="ll" id="ll"> 
					</div>			
				</form>
		</div>
		<br>

	</div>
</div>

 
<div id="Sign In Care" class="tabcontent">
	<div class="customercare" >
	</div>
</div>

<div id="Customer Care" class="tabcontent">
	<div class="customercare" >
		<h1>Contact </h1>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/facebook.png" width="50px" alt="Facebook" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/twitter.png" width="50px" alt="Twitter" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/google.png" width="50px" alt="Googleplus" /></a>
		<a href="#" >
		<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" width="50px" alt="Linkedin"/></a>
		<a href="#">
		<img src="https://simplesharebuttons.com/images/somacro/pinterest.png" width="50px" alt="Pinterest" /></a>
		<h1>Project Developers</h1>
		<h2>Santosh Kumar Satnami</h2>
		<h2>Kritika Chandak</h2>
		<h2>Farheen Qamar Warsi</h2>
		<h2>Mamta Kumari</h2>
	</div>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
	ClearFields();
}
</script>



<script language="JavaScript" type="text/javascript" src="https://kjur.github.io/jsrsasign/jsrsasign-all-min.js"></script>
<script language="JavaScript" type="text/javascript">

var signature="nothing";

function generate() {
  alert('Yayy!! Your Signature has been successfully Generated');
  document.getElementById('hid').style.display='block';
  var rsa = new RSAKey();
  rsa.readPrivateKeyFromPEMString(document.getElementById("pkey").value);
  var hashAlg = 'sha1';
  var hSig = rsa.sign('Loan sanction', hashAlg);
  signature=linebrk(hSig, 64);
  document.getElementById("hello").innerHTML = linebrk(hSig, 64);
  document.getElementById("ll").value = linebrk(hSig, 64);
}

</script>
<script>

	function logo(){
 		window.location.href = "Login.html";
	}
	
</script>

		
</body>
</html>
		
		
