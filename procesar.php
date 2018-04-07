<?php
$val=$_POST['val'];
$size=$_POST['size'];
$filas=$size+3;
$columnas=$size+2;
$medio=ceil(($filas)/2);
$s=0;

while($s!=strlen($val)){
for ($i=0; $i<$filas; $i++) {
	for ($z=0; $z<$columnas; $z++) { 
	$matriz[$i][$z]=0;
		}
	}
for ($i=0; $i<$filas; $i++) {
	for ($z=0; $z<$columnas; $z++) { 
		switch ($val[$s]) {
		case 1:	
	 			if($z==0){//first line
					$matriz[$i][$z]=2;		
				}
	  		break;
	 case 2:
	if($i==0&&$z!=$columnas-1&&$z!=0){//LINEA SUPERIOR
		$matriz[$i][$z]=1;		
	}
	if($i==$medio&&$z!=$columnas-1&&$z!=0){//LINEA MEDIA
     $matriz[$i-1][$z]=1;	
     }
	if($i<$medio&&$i!=0&&$z!=0&&$z!=1&&$z==$columnas-1){ //linea derecha superior ||
      $matriz[$i][$z]=2;
	}

	if($i>=$medio&&$i!=$filas&&$z==0){ //linea izquierda inferior ||
     $matriz[$i][$z]=2;
	}else if($i==$columnas&&$z!=$columnas){ //LINEA INFERIOR
		$matriz[$i][$z]=1;
	}
	break;

	case 3:
		if($i==0&&$z!=$columnas-1&&$z!=0){//linea superior completa
	$matriz[$i][$z]=1;		
	}else if($i==$columnas&&$z!=$columnas-1&&$z!=0){//linea inferior completa
		$matriz[$i][$z]=1;		
	}else if($i==$medio&&$z!=$columnas-1&&$z!=0){//linea media completa
	$matriz[$i-1][$z]=1;	
     }

     if($i!=0&&$z!=0&&$z!=1&&$z==$columnas-1){ //linea derecha superior ||
      $matriz[$i][$z]=2;
	}break;

	case 4:
	if($i==0&&$z!=$columnas-1&&$z!=0){//linea superior completa
	//$matriz[$i][$z]=1;		
	}else if($i==$columnas&&$z!=$columnas-1&&$z!=0){//linea inferior completa
	//	$matriz[$i][$z]=1;		
	}else if($i==$medio&&$z!=$columnas-1&&$z!=0){//linea media completa
	$matriz[$i-1][$z]=1;	
     }if($i!=0&&$z!=0&&$z!=1&&$z==$columnas-1){ //linea derecha superior ||
      $matriz[$i][$z]=2;
	}
	if($i<$medio&&$i!=$filas+1&&$z==0&&$i!=0){ //linea izquierda inferior ||
     $matriz[$i][$z]=2;
	}break;

	case 5:
	if($i==0&&$z!=$columnas-1&&$z!=0){//LINEA SUPERIOR
		$matriz[$i][$z]=1;		
	}
	if($i==$medio&&$z!=$columnas-1&&$z!=0){//LINEA MEDIA
     $matriz[$i-1][$z]=1;	
     }
	if($i<$medio&&$i!=$filas&&$z==0&&$i!=0){ //linea derecha superior ||
      $matriz[$i][$z]=2;
	}
	if($i>=$medio&&$i!=$filas&&$z==$columnas-1){ //linea izquierda inferior ||
     $matriz[$i][$z]=2;
	}else if($i==$columnas&&$z!=$columnas&&$z!=0){ //LINEA INFERIOR
		$matriz[$i][$z]=1;
	}
	break;

	case 6:
	if($i==0&&$z!=$columnas-1&&$z!=0){//LINEA SUPERIOR
	 $matriz[$i][$z]=1;		
	}
	if($i==$medio&&$z!=$columnas-1&&$z!=0){//LINEA MEDIA
     $matriz[$i-1][$z]=1;	
     }
	if($z==0&&$i!=0){ //linea derecha superior ||
      $matriz[$i][$z]=2;
	}
	if($i>=$medio&&$i!=$filas&&$z==$columnas-1){ //linea izquierda inferior ||
     $matriz[$i][$z]=2;
	}else if($i==$columnas&&$z!=$columnas&&$z!=0){ //LINEA INFERIOR
			$matriz[$i][$z]=1;
	}
	break;

	case 7:
	 			if($z==$columnas-1&&$i!=0){//first line
					$matriz[$i][$z]=2;		
				}
				if($i==0&&$z!=$columnas-1){
					$matriz[$i][$z]=1;		
				}
	  		break;

	 case 8:
	 			if($z==$columnas-1&&$i!=0||$z==0&&$i!=0){//first line
					$matriz[$i][$z]=2;		
				}
			if($i==0&&$z!=$columnas-1&&$z!=0){//linea superior completa
				$matriz[$i][$z]=1;		
			}else if($i==$columnas&&$z!=$columnas-1&&$z!=0){//linea inferior completa
				$matriz[$i][$z]=1;		
			}else if($i==$medio&&$z!=$columnas-1&&$z!=0){//linea media completa
				$matriz[$i-1][$z]=1;
				}
	  		break;

	  case 9:
	if($i==0&&$z!=$columnas-1&&$z!=0){//LINEA SUPERIOR
	 $matriz[$i][$z]=1;		
	}
	if($i==$medio&&$z!=$columnas-1&&$z!=0){//LINEA MEDIA
     $matriz[$i-1][$z]=1;	
     }
	if($i<$medio&&$i!=$filas&&$z==0&&$i!=0){ //linea derecha superior ||
     $matriz[$i][$z]=2;
	}
	if($z==$columnas-1&&$i!=0){ //linea izquierda inferior ||
     $matriz[$i][$z]=2;
	}else if($i==$columnas&&$z!=$columnas&&$z!=0){ //LINEA INFERIOR
			$matriz[$i][$z]=1;
	}
	break;

	case 0:
	 			if($z==$columnas-1&&$i!=0||$z==0&&$i!=0){//first line
					$matriz[$i][$z]=2;		
				}
			if($i==0&&$z!=$columnas-1&&$z!=0){//linea superior completa
				$matriz[$i][$z]=1;		
			}else if($i==$columnas&&$z!=$columnas-1&&$z!=0){//linea inferior completa
				$matriz[$i][$z]=1;		
			}
	  		break;

	 }
	}
}

for ($i=0; $i<$filas; $i++) {
	for ($z=0; $z<$columnas; $z++) { 
		if($matriz[$i][$z]==1){
			echo " _ ";
		}if($matriz[$i][$z]==2){
			echo " | ";
		}if($matriz[$i][$z]==0){
			echo " &nbsp;&nbsp;  ";
		}if($matriz[$i][$z]==22){
			echo "_";
		}
	}
	echo "<br>";
}
$s++;
	}
?>


