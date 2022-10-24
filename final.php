<?php
$op = $_POST['pilihan'];

if ($op=="lscb"){//luas kubus
	$p = $_POST['p'];
	$l = $_POST['l'];
	$t = $_POST['t'];
	echo "Luas Kubus dengan :"."<br>";
	echo "Panjang : ".$p." cm"."<br>";
	echo "Lebar   : ".$l." cm"."<br>";
	echo "Tinggi  : ".$t." cm"."<br>";
	echo "Adalah ";
	l_cube(); 
	echo " Cm";
}elseif ($op=="kgcb"){//keliling kubus
	$p = $_POST['p'];
	$l = $_POST['l'];
	$t = $_POST['t'];
	echo "Keliling Kubus dengan :"."<br>";
	echo "Panjang Rusuk : ".$p." cm"."<br>";
	echo "Adalah ";
	k_cube(); 
	echo " Cm";
}elseif ($op=="lscr"){//luas silinder
	$r = $_POST['p'];
  	$t = $_POST['t'];
	echo "Luas Tabung dengan :"."<br>";
	echo "Jari-Jari : ".$r." cm"."<br>";
	echo "Tinggi  : ".$t." cm"."<br>";
	echo "Adalah ";
	l_cilinder(); 
	echo " Cm";
}elseif ($op=="kgcr"){//Keliling silinder
	$p = $_POST['p'];
	$t = $_POST['t'];
	echo "Luas Tabung dengan :"."<br>";
	echo "Jari-Jari : ".$p." cm"."<br>";
	echo "Tinggi  : ".$t." cm"."<br>";
	echo "Adalah ";
	k_cilinder(); 
	echo " Cm";
}elseif ($op=="lsls"){//luas Limas
	$p = $_POST['p'];
	$l = $_POST['l'];
  	$t = $_POST['t'];
	echo "Luas Limas dengan :"."<br>";
	echo "Panjang Alas : ".$p." cm"."<br>";
	echo "Lebar Alas  : ".$l." cm"."<br>";
	echo "Tinggi  : ".$t." cm"."<br>";
	echo "Adalah ";
	l_limas();
	echo " Cm";
}elseif ($op=="kgls"){//Keliling Limas
	$p = $_POST['p'];
	$l = $_POST['l'];
  	$t = $_POST['t'];
	echo "Keliling Limas dengan :"."<br>";
	echo "Panjang Alas : ".$p." cm"."<br>";
	echo "Lebar Alas  : ".$l." cm"."<br>";
	echo "Tinggi  : ".$t." cm"."<br>";
	echo "Adalah ";
	k_limas();
	echo " Cm";
}

function l_cube() {//fungsi luas kubus
  	$p = $_POST['p'];
	$l = $_POST['l'];
  	$t = $_POST['t'];
	$L = $p * $l * $t;
	echo $L;
}

function l_cilinder() {//Fungsi luas silinder
	$r = $_POST['p'];
  	$t = $_POST['t'];
	$L = 3.14 * ($r**2) * $t;
	echo $L;
}

function l_limas() {//fungsi luas Limas
  $p = $_POST['p'];
	$l = $_POST['l'];
  $t = $_POST['t'];
	$L = 1/3 * $p * $l * $t;
	echo $L;
}

function k_cube() {//fungsi Keliling kubus
	$p = $_POST['p'];
	$K = $p * 12;
	echo $K;
  }
  
function k_cilinder() {//Fungsi Keliling silinder
	$r = $_POST['p'];
  	$t = $_POST['t'];
	$K =2* 3.14 *$r;
	echo $K;
}
  
  function k_limas() {//fungsi Keliling Limas
	$p = $_POST['p'];
	  $l = $_POST['l'];
	$t = $_POST['t'];
	//Luas permukaan limas (Lp) = luas alas + jumlah luas sisi tegak.
	$stgk = ((1/2*$p)**2)+ ($t**2) ;//pytagoras buat nyari panjang rusuk miring
	$stgk2=sqrt($stgk);
	$stgk3= (1/2 *$l*$stgk2)*4; //jumlah luas sisi tegak
	  $L = ($p * $l) + $stgk3 ;//nyari keliling
	  echo $L;
  }


	?>