<?php if ( ! defined('BASEPATH')) exit('Direct access allowed');
class LanguageLoader extends CI_Controller
{
   public function __construct() {
       parent::__construct();
   }
   
   function initialize() {

       $ci =& get_instance();

       $ci->load->helper('language');

       $ci->lang->load('menu','vietnam');

   }
}