<?php
function eligible($age){
	if($age<18){
		echo "You are too young, Not Allowed";
	}
	else{
		echo "You are Allowed";
	}
}
function dd($abc){
	echo '<pre>';
	die(var_dump($abc));
	echo '<?pre>';
}
?>