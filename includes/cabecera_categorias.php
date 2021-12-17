<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=iso-8859-1" http-equiv="content-type" />

	<script type="text/javascript">
		function imprimir(URL)
		{
			var oReq = new XMLHttpRequest();
			oReq.open("get",URL);
			oReq.send();
			console.log(URL);
			onload = function(){
				document.location.href=URL;
				console.log('here');
			};
			//alert('Se envio a imprimir');
			myFunction();

		//location.href = "./index.php";
		/*
	ons.notification.toast('Toast!', {
		timeout: 5000
	});*/
	//Redirect();
    //setTimeout('Redirect()', 3000);   
    return false;
}


function Redirect() 
{  
	document.write("Se envio a imprimir"); 
	window.location="./index.php"; 
} 


var showToast = function() {
	ons.notification.toast('Toast!', {
		timeout: 3000
	});
};


  function myFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
	setTimeout('Redirect()', 2500);   
} 


</script>



</head>

<!-- Core CSS de Bootstrap-->
<link href="./assets/bootstrap-5.1.3/css/bootstrap.css" rel="stylesheet">

<link href="./assets/css/actividades.css" rel="stylesheet">

<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}





 /* The snackbar - position it at the bottom and in the middle of the screen */
 #snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 3.0s;
  animation: fadein 0.5s, fadeout 0.5s 3.0s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
} 






</style>

<center>

	<br>
	<table>
		<tr>
			<td>
				<a href="./index.php">
					<img id="back" src="./assets/images/back.png"  width="50" height="50">
				</a>
			</td>
			<td>
				<label class="label1">ACTIVIDADES</label>
		</td>
	</tr>
</table>

<style>
	#back{
		background: none;
		border: none;
		position: absolute;
		top: 2%;
		left: 0.6%;
		width: 15.8em;
   		height: 6.3em;
		cursor: pointer;
	}
</style>