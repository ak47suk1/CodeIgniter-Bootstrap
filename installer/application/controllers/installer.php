<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Installer extends CI_Controller {

   private $args = array(
      '--with-grunt' => false
   );

	function index()
	{
      $n = 1;
      while (($arg = $this->uri->segment($n)) !== FALSE)
      {
         
         if (array_key_exists($arg, $this->args))
            $this->args[$arg] = true;
         else
            die ("Argument '{$arg}' is not recognized.\n");

         $n++;

      }

      $this->load->model(array(
         "twitter_bootstrap_model",
         "code_igniter_model",
         "font_awesome_model"
      ));

   }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

