<?php
// // $arr = ['php', 10, false];
// echo $arr[1];
// var_dump($arr);


// $r = (array) "test ";
// var_dump($r[0]);
//
// $obj = new stdClass;
// $obj->name = "mohamed";
// echo $obj->name;


// echo " <br>**********(function) **********<br>";

// // funcion

// function sum(int $num1, int $num2): string
// {
//   return $num1 * $num2;
// }

// echo sum(10, 20);
// var_dump(sum(200, 300));
// echo "<br>";
// لو مش عاوز اني احدد ال prameter في ال fanction ممكن اعمل

// function calc(...$args): array
// {


//   return $args;
// }

// // echo calc(10, 20, 30);
// var_dump(calc(10, 20, 30));


// local scop
// global scop
// static scop
// super global


$v = 10;

// local
// function vvv()
// {
//   echo $v;
// }

// echo vvv(); -> //undefine scop



// global


// function calc()
// {
//   global $v;
//   return $v;
// }
// echo calc();


// super globala

// function calc()
// {
//   echo $GLOBALS['v'];  // -> عبارخ عن Assuatif Array موجود فيه كل ال valiavle الي متعرفه ف الصفجه
// }


//static -> هنا ملهاش علاقه ب ال global و لمن لها علاقه ب ال local يعني هيمش شتيفه ال varaible ال ف الجلوبال , ولكن شايفه الي ف ال local بس

// هيفضل محتفظ ب القيمه بتاعته

// function calc()
// {
//   static $d = 20000;
//   echo $d;
//   $d++;
// }

// calc();
// calc();
// calc();

echo phpinfo();
