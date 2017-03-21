<?php
echo "<hr>примеры с книжки 'обектно ореентированое мышление'<br>'";
echo "вывод изменённого приватного атрибута";
/**/class Person {
    //Атрибуты
    public $name;
    private $address;
    //Методы
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
}

$test = new Person();
$test->name='dima';
$test->setAddress('rkz');
echo "<br>";
print_r($test);
echo "</br>";

echo"<hr>вызов приватной функции ООП";
class IntSquare {
// закрытый атрибут
private $squareValue;
// открытый интерфейс
public function getSquare ($squareValue) {
return $this->squareValue = $this->MyCalc($squareValue);
}
// закрытая реализация
private function MyCalc($squareValue) {
    return $squareValue * $squareValue;
}
}
$twst = new intSquare();
$twst->getSquare(100);
echo "<pre>";
print_r($twst);
echo "<pre>";
echo "<hr>Собстыенное тестовое задание";
class MyClass{
    private $name;
    private $email;
    private $passord;
    public function getName($name)
    {
        return $this->name=$this->testName($name);
    }
    public function getEmail($email)
    {
        return $this->email=$this->testEmail($email);
    }
    public function getPassord($passord)
    {
        return $this->passord=$this->testPassord($passord);
    }
    private function testName($name){
        if($name != 'dima'){
            return "folse";
        }else{
            return $name;
        }
    }
    private function testEmail($email){
        return $email;
    }
    private function testPassord($passord){
        return $passord;
    }
}
$testings= new MyClass();
$testings->getName('dima');
$testings->getEmail('ad@ad.ru');
$testings->getPassord('blabla');
echo "<br>";
print_r($testings);
echo "</br>";
echo "<hr>Абстрактное наследование или полиморфизм";
abstract class Shape{
    public $area;
    public function getArea()
    {
        return $this->area;
    }
}

class Circle extends Shape{
    private $radius;
    public function getRadius($radius)
    {
        return $this->radius=$radius;
    }
    public function __construct($r)
    {
        $this->radius=(int)$r;
    }
    public function getArea($r)
    {
        return $this->area = 3.14 * ($r * $r);
    }
}
class Rectangle extends Shape{
    private $length;
    private $width;
    public function __construct($l,$w)
    {
        $this->length=(int)$l;
        $this->width=(int)$w;
    }

    public function getArea($l,$w)
    {
        return $this->area = $l * $w;
    }
}
$cirle = new Circle(2);
$cirle->getArea(2);
$rectan = new Rectangle(3,4);
$rectan->getArea(3,4);
echo "<br>";
var_dump($cirle);
echo "</br>";
echo "<br>";
var_dump($rectan);
echo "</br>";
echo "<hr>Пример Композиции";
class First{
    private $name;
    public function getName($name)
    {
        return $this->name = $name;
    }
}
class Last{
    private $first;
    private $lasten;
    public function __construct()
    {
        $this->first = new First();
    }
    public function getFirst($first)
    {
        return $this->lasten = $this->first->getName($first);
    }
}
$www = new Last();
$www->getFirst('vasya');
print_r($www);
echo "<hr>Конструктор";
class Webpage {
    var $bgcolor;
    function Webpage($color) {
        $this->bgcolor = $color;
    }
}
$page = new Webpage("brown");
print_r($page);
echo "<hr>свой пример с конструкторами";
class Tree{
    private $ttt;
    public function Tree($s){
        $this->ttt = $s.$s;
    }
}
$q = new Tree('qwerty');
print_r($q);
echo "<hr>пример2 с инициализацией конструкторами";
class DataBaseReader{
    public $dbName;
    public $startPosition;
    public function DataBaseReader($name,$pos){
        $this->dbName=$name;//передаем имя
        $this->startPosition=$pos;//передаем позицыю
    }
}
$test2= new DataBaseReader('dima','123');
print_r($test2);
echo "";
?>