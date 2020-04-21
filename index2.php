<?php

$height = '90';

var_dump($height);

if ($height === 90) {
	echo '身長は' . $height . 'cmです。';
}else{
	echo '身長は90cmです。';
}

$signal = 'red';

if ($signal === 'red') {
	echo 'とまれ';
}else if ($signal === 'yellow'){
	echo '一旦停止';
}else{
	echo 'すすむ';
}

$speed = 80;

if ($signal === 'blue') {
	if ($speed >= 80) {
		echo 'スピード違反';
	}
}


?>