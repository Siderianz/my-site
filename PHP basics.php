<?php

$a = 'Строка';  //строка
$b = 100;   //целочисленная переменная
$c = 10.1;  //переменная дробного типа
const D = 'Константа'; //константа
$e = 0123;  //число в восьмеричной нотации
$f = 0x1A;  //число в шестнадцатеричной нотации


//1-ое задание
echo $a;
echo $b;
echo $c;
echo D;
echo $e;
echo $f;
echo "\n";

//2-ое задание
echo "$a";
echo "$b";
echo "$c";
echo "D";   //константа стала строкой
echo "$e";
echo "$f";
echo "\n";

echo '$a';  //все переменные приняли значение строки
echo '$b';
echo '$c';
echo 'D';
echo '$e';
echo '$f';
echo "\n";

//3-е задание
echo 010;
echo 011;
echo 011;
echo 012;
echo 013;
echo 014;
echo 015;
echo 016;
echo 017;
//echo 018; две данные строки выдают нам ошибку, т.к. в СС8 могут быть использованы только числа от 0 до 7
//echo 019;
echo 20;
echo "\n";

//4-е задание
$a1 = 0xA;
$a2 = 0xB;
$a3 = 0xC;
$a4 = 0xD;
$a5 = 0xE;
$a6 = 0xF;

echo "\"0 1 2 3 4 5 6 7 8 9 {$a1} {$a2} {$a3} {$a4} {$a5} {$a6}\"";
echo "\n";


$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0xA, 0xB, 0xC, 0xD, 0xE, 0xF);
$newString = "";
foreach ($arr as $value) {
    $newString = "{$newString} {$value}";
}
$newString = trim($newString);
$newString = "\"{$newString}\"";
echo $newString;
echo "\n";

echo 1;
echo 3;
echo 4;
echo 5;
echo 6;
echo 7;
echo 8;
echo 9;
echo 2;
echo 0xA;
echo 0xB;
echo 0xC;
echo 0xD;
echo 0xE;
echo 0xF;
echo "\n";

//5-е задание
echo "\"Я помню чудное мгновенье:\n";
echo "Передо мной явилась ты,\n";
echo "Как мимолетное виденье,\n";
echo "Как гений чистой красоты.\"\n";
echo "<i>А.С. Пушкин</i>\n";

//6-е задание
echo "\"Я помню чудное мгновенье:\nПередо мной явилась ты,\nКак мимолетное виденье,\nКак гений чистой красоты.\"\n<i>А.С. Пушкин</i>\n";

//7-е задание
//echo 10 + 'Привет'; //получим ошибку - несоответствие типов данных

//8-е задание
// XOR - логическая операция ИСКЛЮЧАЮЩЕЕ ИЛИ, т.е. возвращает нам значение true только если один из операндов имеет такое значение, а если оба - false
$q = (true xor true);
var_dump($q);   //false
$q = (true xor false);
var_dump($q);   //true
$q = (false xor false);
var_dump($q);   //false
$q = (false xor true);
var_dump($q);   //true

$a = 1;
var_dump($a xor $a);    // XOR для любых значений $a будет равен false, т.к. оба операнда будут иметь значение true.