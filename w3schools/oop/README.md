# <a href="https://www.w3schools.com/php/php_oop_what_is.asp">W3SCHOOLS - OOP</a>

1)	A class is a template for objects, and an object is an instance of a class.
2)	In a class, variables are called properties and functions are called methods.
3)	The <strong>$this</strong> keyword refers to the current object, and is only available inside methods.
4)	You can use the instanceof keyword to check if an object belongs to a specific class.
<strong>Example : </strong>
<pre>
  <code>
    class MyClass {}
    class AnotherClass extends MyClass{}
    $obj = new AnotherClass();

    if($obj instanceof AnotherClass) {
      echo "The object is AnotherClass<br>";
    }

    // The object is also an instance of the class it is derived from
    if($obj instanceof MyClass) {
      echo "The object is MyClass";
    }
  </code>  
</pre>
5)	Notice that the construct function starts with two underscores (__).
6)	A destructor is called when the object is destructed or the script is stopped or exited.
7)	If you create a __destruct() function, PHP will automatically call this function at the end of the script.
<pre>
<code>
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
</pre>
</code>
8)	public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class
9)	Inheritance in OOP = When a class derives from another class.
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
10)	Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
11)	The <strong>final</strong> keyword can be used to prevent class inheritance or to prevent method overriding.
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
12) Constants cannot be changed once it is declared.
<br/>
<strong>Example : 1</strong> We can access a constant from outside the class by using <strong>::</strong>
<br/>
<pre>
<code>
	class Goodbye 
	{
		const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
	}
	echo Goodbye::LEAVING_MESSAGE;
</code>
</pre>
<strong>Example : 2</strong> We can access a constant from outside the class by using <strong>self</strong>
<br/>
<pre>
<code>
	class Goodbye 
	{
	  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
	  public function byebye() {
	    echo self::LEAVING_MESSAGE;
	  }
	}
	$goodbye = new Goodbye();
	$goodbye->byebye();
</code>
</pre>
