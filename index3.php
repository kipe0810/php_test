<?php

$members = [
	'name' => '本田',
	'height' => 170,
	'hobby' => 'サッカー'
];

// valueのみ表示
foreach ($members as $member) {
	echo $member;
}

echo '<br>';

foreach ($members as $key => $value) {
	echo $key . 'は' . $value . 'です。';
}

echo '<br>';

// 多段階の配列を展開
$members_2 = [
	'本田' => [
		'height' => 170,
	  'hobby' => 'サッカー'
	],
	'香川' => [
		'height' => 165,
	  'hobby' => 'サッカー'
	]
];

foreach ($members_2 as $member_0 => $member_1) {
	foreach ($member_1 as $member => $value) {
		echo $member_0 . 'の' . $member . 'は' . $value . 'です。';
	}
}

?>