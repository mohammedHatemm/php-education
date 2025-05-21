<?php

// $GLOBALS-> (بتشتغل مع اشياء كتير ذي ال filles و varibles و ال cookies و method -> get , )
// (هي عبارره عن assiatif array )


// $x = 'global';

// function calc()
// {
//   echo $GLOBALS['x'];
//   var_dump($GLOBALS);
// }
// calc();


// ****************************************************************
// $_SERVER -> يعطي معلومات عن السيرفر والطلب الحالي (request)
// **********************************************
// $_GET / $_POST -> متغيرات فائقة (Super Globals) على شكل Associative Arrays
// تُخزن البيانات القادمة من المستخدم:
// - $_GET للبيانات المرسلة عبر الرابط (Query String)
// - $_POST للبيانات المرسلة من نموذج POST
// ****************************
// $_REQUIST ->
// 📌 ما هو $_REQUEST؟
// $_REQUEST هو Super Global في PHP يحتوي على البيانات القادمة من:

// $_GET

// $_POST

// $_COOKIE (حسب إعدادات السيرفر)

// بمعنى آخر، هو دمج بين $_GET و $_POST و $_COOKIE.
// ***********************************************
// $_FILLES
// 📌 ما هو $_FILES؟
// $_FILES هو Super Global في PHP يُستخدم للوصول إلى الملفات المرفوعة من خلال نموذج HTML (form) يستخدم enctype="multipart/form-data".

// ليش لازم نكتب enctype="multipart/form-data"؟

// الجواب باختصار:

// ✅ لأن بدون enctype="multipart/form-data"، المتصفح ما يرسل الملف فعليًا إلى السيرفر!
// 📌 التوضيح الكامل:
// 🔸 ما هو enctype؟
// enctype تعني "encoding type" — أي نوع ترميز البيانات التي يُرسلها النموذج (form) عند الإرسال.



?>
<!-- // <form action="upload_fille.php" method="post" enctype="multipart/form-data">
//   <input type="file" name="my_file" />
//   <input type="submit" value="send">
// </form> -->

<?php
// <!-- ******************session vs cookies ********************** -->
