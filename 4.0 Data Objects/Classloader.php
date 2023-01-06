<?php

function loader($className){
    //user
    //Quote
    require_once $classname.".php"; //quote.php
    

}
spl_autoload_register("loader");