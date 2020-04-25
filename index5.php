<?php

// インプット引数　なし
// アウトプット戻り値　なし

function test(){
  echo 'テスト';
}

test();

// インプット引数　あり
// インプット戻り値　なし

$comment = 'コメント２';

function getComment($string){
  echo $string;
}

getComment($comment);


// インプット引数　なし
// アウトプット戻り値　あり

function getNomberOfComment(){
	return 5;
}

// getNomberOfComment();

// echo getNomberOfComment();

$commentNumber = getNomberOfComment();

echo $commentNumber;


echo '<br>';


// 引数２つ
// 戻り値あり

function sumPrice($int1, $int2){
	$int3 = $int1 + $int2;
	return $int3;
}

$total = sumPrice(200, 500);

echo $total;



?>




















