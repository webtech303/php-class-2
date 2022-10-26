<?php


namespace App\classes;


class HelloWorld
{
    public $message = '<h2 style="color: blue"> Hello World';
    public $firstName;
    public $lastName;
    public $x = 10;
    public $y = 20;
    public $z = 30;
    public function __construct()
    {
        $this-> firstName = "Php";
        $this-> lastName = "Laravel";
    }

    public function index()
    {
//        echo '<br/>';
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';
//        echo ++$this->x;
//        echo '<br/>';
//        echo '<br/>';
//        echo $this->y--;
//        echo '<br/>';
//        echo --$this->y;
//        echo '<br/>';
//        echo $this->y--;
//        echo '<br/>';
//        echo $this->y--;
//        echo '<br/>';
//        echo '<br/>';
//        echo $this->y--;
//        echo '<br/>';
//        echo $this->y--;
//        echo '<br/>';
//        echo ++$this->y;
//        echo '<br/>';
//        echo $this->y++;
//        echo '<br/>';
//        echo ++$this->y;
//        echo '<br/>';
//        echo $this->y--;
//        echo '<br/>';
//        echo ++$this->y;
//        echo '<br/>';
//        echo $this->y++;

//        echo '<br/>';
//        echo $this->x = $this->y;
//        echo '<br/>';
//        echo $this->x >= $this->y;
//        echo '<br/>';
//        echo $this->x < $this->y;
//        echo '<br/>';
//        echo $this->x <= $this->y;

//        echo '<br>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br>';
//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);

        echo '<br>';
        echo ($this->x < $this->y) || ($this->y < $this->z);
        echo '<br>';
        echo ($this->x > $this->y) || ($this->y > $this->z);
        echo '<br>';
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo '<br>';
        echo ($this->x > $this->y) || ($this->y < $this->z);

        echo $this->message.' &nbsp'.$this->firstName.' &nbsp'.$this->lastName;
    }
}
