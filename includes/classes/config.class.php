<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 21.09.15
 * Time: 23:14
 */


class Config {
    public $header;

    function __construct() {
        $this->header = require dirname(dirname(__DIR__)).'/config/header.php';
    }
}

?>