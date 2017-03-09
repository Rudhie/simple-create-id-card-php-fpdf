<?php if ( !defined('BASEPATH')) exit();
class Cpdf{
    function __construct() {
        require_once APPPATH.'libraries\fpdf\code39.php';
    }
}