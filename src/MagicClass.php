<?php

namespace App;

class MagicClass
{
    private $data = array();
    public $declared = 1;
    private $hidden = 2;

    public function __construct()
    {
        return "__construct() позволяет объявлять методы-конструкторы";
    }

    public function __destruct()
    {
        return "__destruct() будет вызван при освобождении всех ссылок на определённый объект ";
    }

    public function __call($name, $arguments) {
        return "__call() запускается при вызове недоступных методов в контексте объект";
    }

    public static function __callStatic($name, $arguments) {
        echo "__callStatic() запускается при вызове недоступных методов в статическом контексте";
    }

    public function __get(string $name)
    {
        return "__get() запускается при чтении данных из недоступных (защищённых или приватных) или несуществующих свойств";
    }

    public function __set(string $name, mixed $value)
    {
        return "__set() запускается при записи данных в недоступные (защищённые или приватные) или несуществующие свойства";
    }

    public function __isset(string $name)
    {
        echo "__isset() запускается при использовании isset() или empty() на недоступных (защищённых или приватных) или несуществующих свойствах" . "<br/>";
    }

    public function __unset(string $name)
    {
        echo "__unset() запускается при вызове unset() на недоступном (защищённом или приватном) или несуществующем свойстве" . "<br/>";
    }

    public function __sleep()
    {
        return "__sleep() предполагаемое использование __sleep() состоит в завершении работы над данными, ждущими обработки или других подобных задач очистки";
    }

    public function __wakeup()
    {
        return "__wakeup() предполагаемое использование __wakeup() заключается в восстановлении любых соединений с базой данных";
    }

    public function __serialize()
    {
        return "__serialize()  функция выполняется перед любой сериализацией, она должна создать и вернуть ассоциативный массив пар ключ/значение, которые представляют сериализованную форму объекта";
    }

    public function __unserialize()
    {
        return "__unserialize() функции будет передан восстановленный массив, который был возвращён из __serialize(). Затем он может восстановить свойства объекта из этого массива соответствующим образом";
    }

    public function __toString()
    {
        return "__toString() позволяет классу решать, как он должен реагировать при преобразовании в строку <br/>";
    }

    public function __invoke()
    {
        echo "__invoke() вызывается, когда скрипт пытается выполнить объект как функцию" . "<br/>";
    }

    public static function __set_state($an_array)
    {
        echo "__set_state() вызывается для тех классов, которые экспортируются функцией var_export()" . "<br/>";;
    }

    public function __debugInfo()
    {
        echo "__debugInfo() метод вызывается функцией var_dump(), когда необходимо вывести список свойств объекта" . "<br/>";;
    }
}