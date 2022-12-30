<?php

    class Lang_core extends CI_Controller {

        function __construct() 
        {
            parent::__construct();
            $this->lang_switcher();
        }

        protected function lang_switcher() 
        {
            // Detect current language from URL and set it to session and changing default system language config
            
            if ($this->uri->segment(1) == 'en' ||
                $this->uri->segment(1) == 'kr'||
                $this->uri->segment(1) == 'vn') 
            {
                $this->session->set_userdata("lang", $this->uri->segment(1));
                // redirect($this->session->flashdata('redirectToCurrent'));
                redirect(base_url());
            }
        
            if ($this->session->userdata('lang') == "en") 
            {
                $lang = "english";
                $this->config->set_item('language',$lang);
                $this->session->set_userdata("lang",'en');
            } 
            elseif ($this->session->userdata('lang') == "kr") 
            {
                $lang = "korean";
                $this->config->set_item('language',$lang);
                $this->session->set_userdata("lang",'kr');
            }
            else 
            {
                $lang = "vietnamese";
                $this->config->set_item('language',$lang);
                $this->session->set_userdata("lang",'vn');
            }
            
        }
    }
    


?>