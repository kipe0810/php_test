<?php

$height = 90;

// if ($height >= 91) {
// 	echo '身長は91cm以上です。';
// }

// if ($height <= 90) {
// 	echo '身長は90cm以下です。';
// }

if ($height != 90) {
	echo '身長は90cmではありません。';
}

// データが入っているかどうか
// isset empty is_null

$test = '1';

if (!empty($test)) {
	echo '変数は空ではありません。';
}

// AND(&&) OR(||)
$signal_1 = 'red';
$signal_2 = 'blue';

if ($signal_1 === 'red' && $signal_2 === 'blue') {
	echo '赤と青です。';
}

// 三項演算子
// 条件 ? 真 : 偽

$math = 80;

$comment = $math >80 ? 'good' : 'not good';

echo $comment;

?>