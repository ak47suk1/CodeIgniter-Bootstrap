<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Installer extends CI_Controller {

   private $args = array(
      '--with-grunt' => false
   );

   function index()
   {

      echo"
CodeIgniter Bootstrap
Author: sjlu (tacticalazn@gmail.com)
A tool which customizes your framework package for you
without you needing to do the heavy lifting. Great for
the ones who just want to start coding.
            
Usage: php index.php build <args>
            
--with-grunt
\tInstalls a basic LESS compiler and JS minifier.
\tRequires that you have Node and NPM installed.
\n
";


   }

	function build()
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

