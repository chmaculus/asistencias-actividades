<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=iso-8859-1" http-equiv="content-type" />
</head>

<!-- Core CSS de Bootstrap-->
<link href="<?php  echo base_url().bootstrap_path;?>css/bootstrap.css" rel="stylesheet">

<link href="<?php  echo base_url();?>assets/css/<?php if(isset($data2['css'])){echo $data2['css'];}else{echo "seleccion1.css";} ?>" rel="stylesheet">

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
				<a href="<?php echo base_url()."menu";?>">
					<img id="back" src="<?php echo base_url()."assets/images/back.png";?>"  width="50" height="50">
				</a>
			</td>
			<td>
				<label class="label1"><?php 
				if(isset($data2['title'])){
					echo $data2['title'];
				}
			?></label>
		</td>
	</tr>
</table>

<style>
	#back{
		background: none;
		border: none;
		background-image: url('../../assets/images/back.png');
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