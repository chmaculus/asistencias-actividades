<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
    <link rel="stylesheet" href="clases.css">
    <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<table>
    <tr>
        <td>
            <a href="<?php echo base_url()."seleccion1";?>">
                <img src="<?php echo base_url()."assets/images/back2.png";?>" width="50" height="50">
            </a>
        </td>

        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>


        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

        <td>
            <label class="label1"><?php 
            if(isset($data2['title'])){
                echo $data2['title'];
            }
        ?></label>
    </td>
</tr>
</table>
<table><tr>

<?php

//echo print_r($data,true);




$count=0;
		foreach($data as $row){
			$count++;
			$str=$row["nombre"];
			//$str=str_replace(chr(63), "Ñ", $str);
			$str=strtoupper($str);
			echo '<td><button class="btn-3d" type="button">'.$str.'</button></td>';
			if($count==5){
				echo "</tr><tr>";
				$count=0;
			}
		}
//echo '<td><button class="btn-3d" type="button"></button></td>';
//echo '<td><button class="btn-3d" type="button"></button></td>';
?>

</tr>
</table>
</body>
</html>

<script>
</script>
