<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Authenticate</title>
<!-- <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/3E543440-4EEE-1641-A3A9-1B44A4733E61/main.js" charset="UTF-8"> --></script><script language="JavaScript" type="text/javascript" src="https://kjur.github.io/jsrsasign/jsrsasign-all-min.js"></script><style>

body {
    background: url('plp1.jpg');
    background-repeat: no-repeat;
    padding: 2px;
    font-family: 'Raleway','Source Sans Pro', 'Arial';
}
label {
    display:block;
	font-size:27px;	
	float:left;
	margin-bottom:30px;
}
#username {
	
    padding:10px;
    width: 50%;
	float:right;
	margin-right:20px;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}
p{
	margin-right:auto;
	margin-left:auto;
	font-size:27px;	
	text-align: center;
	font-family: 'Raleway','Source Sans Pro', 'Arial';

}
.in {
	clear:both;	
}
#button {
    margin: 2em 0;
    padding: 1em 4em;
    display:block;
	align-items: center;
    text-align: center;
	margin-left:auto;
	margin-right:auto;
	margin-top:100px;
    text-decoration: none;
	border-radius: 50px 50px;
	font-size:20px;
	
}

</style>
</head>
<body >

	<?php session_start();?>
	<div style="text-align: center;padding: 5px; width:80%;margin: 10%;background:white;border: 5px solid grey;box-shadow: 2px 4px 3px black">
		<p><b>Public key of User</b></p>
		<p id="pk"><?php  echo $_SESSION['public_key'] ;?></p>
		<p><b>Signature of User</b></p>
		<p id="sign"><?php  echo $_SESSION['sign'] ;?></p>
		<p id="status"></p>
		<button id="button" onclick="doVerify()">Authenticate</button>
	</div>








<script language="JavaScript" type="text/javascript">
	
function doVerify() {
  //alert('Verifying...please wait!!')
  var sMsg = "Loan sanction";
  var hSig = document.getElementById("sign").innerHTML;
  c=document.getElementById("pk").innerHTML;
  console.log(c);
  c=c.replace('-----BEGIN RSA PUBLIC KEY-----','-----BEGIN PUBLIC KEY-----');
  c=c.replace('-----END RSA PUBLIC KEY-----','-----END PUBLIC KEY-----');
  console.log(c)
  var pubKey = KEYUTIL.getKey(c);
  var isValid = pubKey.verify(sMsg,hSig);
  console.log(isValid);

  // display verification result
  if (!isValid) {
    window.location.href ="swift_loan_tender.php";
  } else {
    document.getElementById("status").innerHTML="invalid";
  }

}

	</script>

</body>


</html>
		
		