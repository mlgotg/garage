<?php
$a = 10;
$b = 1;
echo "a + b = $a + $b = ", $a + $b, '<br>';

$c = "ford";
$d = "focus";
echo $c . " " . $d . '<br>';
$e = $a>$b;
echo ($a === $b), ($a == $b), '<br>';

if($a > 0){
    echo "a больше нуля<br>";
}
else{
    echo "a меньше нуля<br>";
}

$words = array("green" => "зеленый", "blue" => "синий", "red" => "красный");
echo $words["red"], '<br>';

echo implode(' ', $words) . '<br>';
$str = "daewoo chevrolet hyundai GMC";
$brand = explode(' ', $str);
foreach($brand as $item){
    echo "$item, ";
}
echo'<br>';
class Brand{
    public $name, $country;
    function __construct($name, $country){
        $this->name = $name;
        $this->country = $country;
    }
}
class Car extends Brand {
    public $brand, $model, $year, $horse_power;
    function __construct($brand, $model, $year, $horse_power, $country)
    {
        parent::__construct($brand, $country);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->horse_power = $horse_power;
    }
    function CarInfo(){
        echo "Your car: $this->brand $this->model, $this->year with $this->horse_power hp<br>";
    }
}
$car = new Car("Chevrolet", "Impala", 1967, 200, "USA");
$car->CarInfo();

if(isset($_GET["brand"])){
    $brand = $_GET["brand"];
}
$model = $_GET['model'] ?? 'default';

echo $brand . " " . $model . '<br>';
class Singleton {
    private static $instance;  // экземпляр объекта
    private function __construct(){}  // Защищаем от создания через new Singleton
    private function __clone()    {}  // Защищаем от создания через клонирование
    private function __wakeup()   {}  // Защищаем от создания через unserialize
    public static function getInstance() {    // Возвращает единственный экземпляр класса. @return Singleton
        if ( empty(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function doAction() {
        echo "call singleton obj";
    }
}
Singleton::getInstance()->doAction(); //


