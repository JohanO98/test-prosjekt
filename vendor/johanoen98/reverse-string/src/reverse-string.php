<?php

namespace JohanO98\reversestring;

class reverse_string {
    public $str;

    public function reverse(string $str){
      return strrev($str);
    }

}

$wow = new reverse_string();
$wow->reverse('Wowies');





