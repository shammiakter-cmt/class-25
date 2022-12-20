<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <style>

</head>
<body>
<h1>hjhh</h1>
<?php
class Fruit{
    public $name;
    public $color;


    function get_fruit_name(){
        return $this->name;

    }
    function set_fruit_name($x){
        $this->name = $x;

        }
        
    function get_fruit_color(){
        return $this->color;

    }
    function set_fruit_color($x){
        $this->name = $x;

        }
        
    }
$apple = new Fruit();
$banana = new Fruit();
$orange = new Fruit();
$kewe = new Fruit();


$apple->set_fruit_name("Apple");
$apple->set_fruit_color("Green");

$apple->set_fruit_name("Banana");
$apple->set_fruit_color("Yellow");

$apple->set_fruit_name("Orange");
$apple->set_fruit_color("Orange");

echo $apple->get_fruit_name();
echo "<br>";
echo $apple->get_fruit_color();


?>

</body>
</html>


