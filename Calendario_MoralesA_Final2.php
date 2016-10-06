<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Pràctica calendari</title>

</head>

<style>

  #calendario{
	  
	  border: 2px solid red;
	  font-family: verdana;
	  width: 100%;
	  height: 60%;

  }

 #calendario td{
	  
	  border: 2px solid red;
	  text-align: center;
	  
  }
  
   #calendario tr{
	  
	  border: 2px solid red;
	  text-align: center;
	  
  }

	#calendario .hoy {
			background-color: yellow;
		}


	h1{
		text-align: center;
		font-family: verdana;
	
	}


</style>

<body>
	 
	<h1> CALENDARIO MENSUAL </h1>




	<table id="calendario" cellspacing="0">
	
<?php 

	$d = 1;
	$d2 = 1;
	
	$meses = array (1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio", "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	
	$diaActual = date ("j");
	
	$mes = date ('n'); //Saber el mes en el que estamos
	$anyo = date ('Y');  //Saber el año en el que estamos
	
	$semana = date ('w', mktime(0,0,0,$mes,1,$anyo)); //Saber la semana que empieza el mes
	$ult = date ('d', (mktime(0,0,0,$mes+1,1,$anyo)-1));
	
	echo "<p style='font-family: verdana; swf_fontsize(20); text-align: center;'>".$meses[$mes]." de ". $anyo;
	echo "<p></p>";

	for($i=1;$i<= 7;$i++){
		
		if( $i == 1){
			
		echo "
           <tr>
              <td>Lunes</td>
              <td>Martes</td>
              <td>Miercoles</td>
              <td>Jueves</td>
              <td>Viernes</td>
              <td>Sabado</td>
              <td>Domingo</td>
          </tr>";
		
			}
	
	else{
		
		echo "<tr>";
	
		
		for($j=1;$j<= 7;$j++){
			
			if ( $d2 < $semana ){
				
				echo "<td> </td>";
				
			}
			
			else if ( $d <= $ult){
				
				if($d==$diaActual)
					echo "<td class='hoy'> $d </td>";
				
				else
					echo "<td> $d </td>";
					$d++;

				}
			$d2++;
			
		}
		echo "</tr>";
	}
	}

?>

</table>
</body>
</html>	
