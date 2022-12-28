<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LanguageLoader
{
   function initialize() {
       $ci =& get_instance();
       $ci->load->helper('language');
       $siteLang = $ci->session->userdata('lang');
       if ($siteLang) {
           $ci->lang->load('home',$siteLang);
       } else {
           $ci->lang->load('home','english');
       }
   }
}
?>