<?php 


// dishes 
class Dish{
    protected $dishName;
    protected $ingredients;
    function __construct($name){
        $this->dishName = $name;
    }

    function getDishDetails(){
        echo "This {$this->dishName} requires following ingredients: {$this->ingredients}";
    }
}


class Birani extends Dish {
    function __construct($name){
        parent::__construct($name);
    }

    function setIngredients($ing){
        $this->ingredients = $ing;
    }
}

$birani = new Birani("Chicken Birani");
$ing = [
    "Chicken",
    "Rice",
    "Oil",
    "Sauce"
];


$arr = array_map("strtolower", $ing);

$birani->setIngredients(join(', ',$arr));
$birani->getDishDetails();

// $rgb = sscanf("FFFFFF", "%2x%2x%2x");

// var_dump($rgb);

class ToRGB {
    protected $hexColor = null;
    function __construct($hex)
    {
        $this->hexColor = $hex;
    }

    function convertColor(){
        return sscanf($this->hexColor, "%2x%2x%2x");
    }
}

class RGBA extends ToRGB {
    // function __construct()
    // {
        
    // }

    function getHex(){
        return $this->hexColor;
    }

}

$rgb = new ToRGB("FFFFFF");
// $result = $rgb->convertColor();

// $rgba = new RGBA("FFFFFF");
// $result = $rgba->getHex();
// var_dump($result);


// :: Scope Resolution Operator


class ParentClass {
    protected $name;

    function __construct( $name ) {
        $this->sayHello();
    }

    function sayHi() {
        echo "Hi";
    }
}

class ChildClass extends ParentClass {
    function sayHello() {
        echo "Hello";
    }
}

// $new = new ChildClass("Sabbir");