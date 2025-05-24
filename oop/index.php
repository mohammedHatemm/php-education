<?php
// inhertance
class Student
{
  public string $name = "moahemd";
  public $age;
}
class Std2 extends Student {}
$student = new Std2();
echo $student->name;
