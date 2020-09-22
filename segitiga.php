<?php
$star=5;
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>

<?php
for($a=0; $a<=5;$a++){
    for($j=1;$j<=$a;$j++){
    echo "&nbsp ";
    }
    for($b=5; $b>$a;$b--){
    echo"*";
    }
    for($c=5; $c>$a;$c--){
    echo"*";
    }
    echo"<br>";
    }
?>


<?php
for ($a=5; $a>=1; $a--){
    for ($j=$a; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}
?>
