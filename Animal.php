<?php


class Animal
{
    public $name;

    function __construct($name)
    {
        return $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

class Cat extends Animal
{
    public function meow()
    {
        return 'Cat ' . $this->name . ' is saying meow';
    }
}

$cat = new Cat ('garfield');

echo $cat->meow();

$test1 = $cat->getName() === 'garfield'; // true;
var_dump($test1);
$test2 = $cat->meow() === 'Cat garfield is saying meow'; // true;
var_dump($test2);


//Написать класс Cat, который наследуется от класcа Animal.
//Класс Animal имеет метод getName (name можно передать в конструктор).
//Класс Cat имеет метод meow (возвращает строку «Cat {catname} is sayig meow».
//Пример использования:
//$cat = new Cat ('garfield');
//$cat->getName () === 'garfield' // true;
//$cat->meow () === 'Cat garfield is saying meow' // true;
