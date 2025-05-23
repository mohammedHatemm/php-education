<?php
// getcwd() ->  انت واقف ف انهي فولدر
// chdir() ->  بيغير ال الاسم و المكان
// is_dir() ->  بيتشك اذا كان المسار موجود
// readdir() -> بيقرا الي جوه ال فولدر
// opendir() -> بيفتح الفولدر
// closedir() -> بيقفل الفولدر
// rewinddir() -> بيقرا الي البيانات بدل م اعمل ريفريش
// scandir(  ) -> بيقرا بردوا الملفات س

// file_exists() ->  بتتحقق اذا كان هناك هذا الملف
// fopen() -> fopen('اسم لملف الي عاوز افتحه ' , )

// $file = fopen("file.txt", "r+w");

// w -> write
// r -> reade
// var_dump($file);
// while (!feof($file)) {
//   echo fgets($file) . "<br>";
// }
// fclose($file); //-> لاوم اقفل ال ملف تاني علشان الريسورس

// $file = fopen("file.txt", "w+r");

// fwrite($file, "hellow hellow from first line ");
// fclose($file);
// $new_file = fopen("file.txt", "r"); // هنا الإصلاح

// if ($new_file) {
//   while (!feof($new_file)) {
//     echo fgets($new_file) . "<br>";
//   }
//   fclose($new_file);
// } else {
//   echo "مش قادر أفتح الملف";
// }

// is_writable("file.txt");  //-> قابل للكتابه

// mkdir()   //->make fille name ...

// rmdir()  ->dlete a directory
// unlink() -> delete a path of fille

// copy("" ,"" ) -> copy fille to fille
// symlink() -> بيعمل شورت كت ل fille انا بحدده

// filesize() -> بيحيب الحجم بتاع ال fille
// filetype()  -> نوع الفايل
// file_get_contents() -> اقؤاء من الملف

$file = file_get_contents("file.txt");
echo $file;
$output = file_put_contents("file.txt", $file . "mohamed added some shit ");
// echo $output;
