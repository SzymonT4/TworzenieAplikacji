<<<<<<< HEAD
<?php
class Fruit{
    public $name;
    public $color;


    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}


$apple =new Fruit();
$banana=new Fruit();
$apple ->set_name('Appl');
$banana ->set_name('Banana');


echo $apple->get_name();
echo "<br>";
echo $banana->get_name();


?>
=======
<?php
class Fruit{
    public $name;
    public $color;


    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}


$apple =new Fruit();
$banana=new Fruit();
$apple ->set_name('Apple');
$banana ->set_name('Banana');


echo $apple->get_name();
echo "<br>";
echo $banana->get_name();


?>
>>>>>>> 58966cd3595ba4206b78e22f8be0a4b8de0fc804
