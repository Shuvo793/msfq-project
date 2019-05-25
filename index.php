<?PHP

class Human{
    public $name;
    function sayHi(){
        echo "salam\n";
        $this->sayName();
    }
    function sayName(){
        echo "My name is {$this->name}\n";
    }
}
class Cat{
    function sayHi(){
        echo "Mew\n";
    }
}
class dog{
    function sayHi(){
        echo "woof\n";
    }    

}
$human1 = new Human();
$human1-> name="shuvo";
$human1->sayHi();
$human2=new Human();
$human2-> name="moin";
$human2->sayHi();
$human3=new Human();
$human3-> name="maria";
$human3->sayHi();

