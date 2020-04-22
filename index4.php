<?php

// for     ＜繰り返す数が決まっていたら
// while   ＜繰り返す数が決まっていなかったら

for ($i=0; $i < 10; $i++) {
	if ($i == 5) {
		// break;
		continue;
	}
	echo $i;
}

echo '<br>';


$j = 0;
while ($j < 5) {
	echo $j;
	$j++;
}

echo '<br>';




// switch
// if文　の方がいい　みやすい
$data = 4;
switch ($data) {
	case 1:
	  echo '１です。';
	  break;
	case 2:
	  echo '２です。';
	  break;
	case 3:
	  echo '３です。';
	  break;
	default:
	  echo '１〜３ではありません。';
	  break;
}





?>