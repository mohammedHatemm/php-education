<?php
// inhertance
// class Student
// {
//   public string $name = "moahemd";
//   public $age;
//   protected $hamdaa = "this from hamada ";
//   private $birthdate = "25/8/1997";
//   public function printBirthDate()
//   {
//     return $this->birthdate;
//   }

//   // public function printHamda()
//   // {
//   //   return $this->hamdaa;
//   // }
// }
// class Std2 extends Student
// {

//   public function printHamda()
//   {
//     return $this->hamdaa;
//   }
// }
// $student = new Std2();
// echo $student->name;
// echo $student->printHamda();
// echo "<br>";
// echo $student->printBirthDate();

// public -> اي حد ممكن يشوفوا او يستخدمه
//protected -> ممكن تستخدمه داخل ال calss بس او ال calss الي وارث منه
// private -> بيتم استخدامه مع نقس ال class فقط

//لو عاوز اطبع  ال private لاوم اكون ال function الي هتبظبعا public في ال class بتاععا


class Factory
{
  public $shap = "shap from Factory ";
  protected $engin = "engin from factory ";
  private $draw = "draw from factory";
  public function  print_draw()
  {
    return $this->draw;
  }
}

class Car extends Factory
{
  public function print_shap()
  {
    return $this->shap;
  }
  public function print_engin()
  {
    return $this->engin;
  }
}

$car1 = new Car;

echo $car1->print_shap();
echo "<br>";
echo $car1->print_engin();
echo " <br>";
echo $car1->print_draw();
