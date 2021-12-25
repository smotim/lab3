<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Old+Standard+TT&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Лабораторная работа по PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="page">
<header class="page-header">
    <p class="page-title">Лабораторная работа №3</p>
</header>
<main>
    <h3>Добавим ООП</h3>
    <dt>Вызов всех магических методов и их описаний(теги br из этого блока вырезал, чтобы текст не перенсился, когда не надо):</dt>
    <dd><pre><code>&lt;
            echo $magic->__construct();
            echo $magic->__destruct();

            echo $magic->call();
            echo MagicClass::callStatic();

            echo $magic-> hidden;

            isset($magic->a);
            unset($magic->a);

            echo $magic->__sleep();
            echo $magic->__wakeup();

            echo $magic->__serialize();
            echo $magic->__unserialize();

            echo $magic;

            $magic(5);

            $a = new MagicClass();
            $a-> declared = 5;

            $b = var_export($a, true);
            eval('$c = ' . $b . ';');
            var_dump($magic);
            &gt;</code></pre></dd>
<?php

use App\MagicClass;
use App\Point;
use App\Vector;

require 'vendor/autoload.php';

$magic = new MagicClass();
?>
    <dd>Получим:<pre><?php
echo $magic->__construct() . "<br/>";
echo $magic->__destruct() . "<br/>";

echo $magic->call() . "<br/>";
echo MagicClass::callStatic() . "<br/>";

echo $magic-> hidden . "<br/>";

isset($magic->a);
unset($magic->a);

echo $magic->__sleep() . "<br/>";
echo $magic->__wakeup() . "<br/>";

echo $magic->__serialize() . "<br/>";
echo $magic->__unserialize() . "<br/>";

echo $magic;

$magic(5);

$a = new MagicClass();
$a-> declared = 5;

$b = var_export($a, true);
eval('$c = ' . $b . ';');
var_dump($magic);
    ?></dd></pre>
    <h3>Реализуем геометрию в ООП</h3>
    <dt>Создадим класс Point:</dt>
    <dd><pre><code>class Point

{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "x: " . $this->x . " " . "y: ". $this->y;
    }

    public function move_point($delta_x, $delta_y)
    {
        $this->x = $delta_x;
        $this->y = $delta_y;
    }
}</code></pre></dd>
    <dt>Затем класс Vector:</dt>
    <dd><pre><code>{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "x: " . $this->x . " " . "y: ". $this->y;
    }

    public function get_length()
    {
        return sqrt($this->x**2 + $this->y**2);
    }

    public function is_null()
    {
        if ($this->x == 0 or $this->y == 0) return True;
        else return False;
    }

    public function perpendicular($vector)
    {
        if($this->x * $vector->x + $this->y * $vector->y == 0) return True;
        else return False;
    }
}</code></pre></dd>
    <dt>А такой код напишем в index.php:</dt>
    <dd><pre><code>&lt;?php
$T1 = new Point(6,-9);
$V1 = new Vector(2, -3);
$V2 = new Vector(0, 0);
$V3 = new Vector(-6, -4);

echo $V1->get_length();
echo $V2->get_length();
echo $V3->get_length();

var_dump($V1->perpendicular($V2));

$T1->move_point($V1->x, $V1->y);
echo $T1;
?&gt;</code></pre></dd>
    <dd>Получим:<pre>
    <?php
$T1 = new Point(6,-9);
$V1 = new Vector(2, -3);
$V2 = new Vector(0, 0);
$V3 = new Vector(-6, -4);

echo 'V1= '.$V1->get_length() . "<br/>";
echo 'V2= '.$V2->get_length() . "<br/>";
echo 'V3= '.$V3->get_length() . "<br/>";
echo 'Проверим перпендикулярность: ';
var_dump($V1->perpendicular($V2));

$T1->move_point($V1->x, $V1->y);
echo 'Перенос точки: '.$T1;
?></dd></pre>



</main>
<footer class="page-footer">
    <?php $tel='+79122477191'?>
    <div class="container">
        <p>© Смолин Тимофей</p>
        <p>02.10.2021</p>
        <p><a href="tel:+79122477191"><?php echo $tel ?></a></p>
    </div>
    </footer>
</body>