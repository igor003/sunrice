<?php

/**
 * Created by PhpStorm.
 * User: home
 * Date: 31.08.2017
 * Time: 22:50
 */
class View
{
    private $params;
    public function __construct(array $params = array()){
        $this->params = $params;
    }
    public function render($file){
        extract($this->params);
        require('Views/'.$file.'.php');
    }

}