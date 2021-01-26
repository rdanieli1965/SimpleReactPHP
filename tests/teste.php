<?php

require 'vendor/autoload.php';

use Teste\abcd;


class vcs extends abcd{

}

class sdvs{

}



foreach(get_declared_classes() as $class){
    var_dump(get_declared_interfaces($class));
}

