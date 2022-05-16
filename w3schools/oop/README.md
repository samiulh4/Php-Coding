# W3SCHOOLS - OOP



1)	A class is a template for objects, and an object is an instance of a class.
2)	In a class, variables are called properties and functions are called methods.
3)	The $this keyword refers to the current object, and is only available inside methods.
4)	You can use the instanceof keyword to check if an object belongs to a specific class

Example : var_dump($apple instanceof Fruit);
5)	Notice that the construct function starts with two underscores (__).
6)	A destructor is called when the object is destructed or the script is stopped or exited.
7)	If you create a __destruct() function, PHP will automatically call this function at the end of the script.
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruit("Apple", "red");
?>
8)	public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class
9)	Inheritance in OOP = When a class derives from another class.
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
10)	Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
11)	The final keyword can be used to prevent class inheritance or to prevent method overriding.
<?php
class Fruit {
  final public function intro() {
    // some code
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
    // some code
  }
}
?>