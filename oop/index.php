<?php

class AppleDevice {
    public $name ;
    public $type ;
    public $space ;
    public $color ;

    const nameLen = 4 ;

    public function setName(){
        if (strlen($this->name) < self::nameLen) {
            echo 'This name cannot be less than '.self::nameLen.'chars' ;
        }

    }
    public function changeProbrities($t, $s, $c){
        $this->type = $t ;
        $this->space = $s ;
        $this->color = $c ;

    }

}

$app1 = new AppleDevice();
$app1->name = 'osama';
$app1->setName();
$app1->changeProbrities('i7','265mb','red');
echo '<pre>' ;
var_dump($app1);
echo '</pre>' ;
