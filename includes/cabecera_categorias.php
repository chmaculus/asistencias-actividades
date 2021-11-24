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
		alert('Se envio a imprimir');
		location.href = "./index.php";
        return false;
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
</style>

<center>

	<br>
	<table>
		<tr>
			<td>
				<a href="./menu.php">
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
		background-image: url('./assets/images/back.png');
		background-size:cover ;
		background-repeat: no-repeat;
		position: absolute;
		top: 2%;
		left: 0.6%;
		width: 15.8em;
   		height: 6.3em;
		cursor: pointer;
	}
</style>