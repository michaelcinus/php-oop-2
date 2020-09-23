<?php


class square {

    public $lato;

    public function __construct($lato) {

        $this -> lato = $lato;

    }

    public function area() {

        return $this -> lato * $this -> lato;
    }

    public function per() {

        return $this -> lato * 4;
    }

    public function __toString() {

        return 'Square' . "<br>"
                ."area: " . $this -> area(). "<br>"
                . "perimetro: " . $this -> per(). "<br>";

    }

}

class cube extends square {

    public $lato;

    public function __construct($lato) {
        
        $this -> lato = $lato;

    }

    public function volume(){

        return parent::area() * $this -> lato;
    }

    public function cubo() {

        return parent::area() * 6;
    }


    public function __toString() {

        return "Cube". "<br>"
                ."volume: "  . $this -> volume(). "<br>"
                . "cubo: "  . $this -> cubo(). "<br>";
    }

}

$square = new square( 2 );
$cube = new cube( 2 );

echo $square;
echo "<br>";
echo $cube;
