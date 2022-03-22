<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class theme
{

    function __construct()
    {
        $this->CI=& get_instance();

    }
    

    public function load_view($currentpage, $data=NULL)
    {
        $parts = array('theme/header','theme/footer','theme/sidebar',$currentpage);
       
        foreach($parts as $part)
        {
           $this->CI->load->view($part, $data);
        }
    }
}

?>