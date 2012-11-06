<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Installer extends CI_Controller {

   /**
    * Default variables.
    * Order does matter here
    * cause we will loop through
    * this in order to install things
    * properly.
    */
   private $args = array(
      '--with-codeigniter' => true,
      '--with-twitter-boostrap' => true,
      '--with-font-awesome' => true,
      '--with-grunt' => false
   );

   /**
    * Default instance call
    * This will print to the command line
    * what the available options are
    */
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

   /**
    * Build function
    * We will execute the build here.
    */
	function build()
	{

      // grab all the command line arguments
      // and parse them appropriately into 
      // in the defaults variable of this class
      $n = 1;
      while (($arg = $this->uri->segment($n)) !== FALSE)
      {
         
         if (array_key_exists($arg, $this->args))
            $this->args[$arg] = true;
         else
            die ("Argument '{$arg}' is not recognized.\n");

         $n++;

      }

      // load the required models.
      $this->load->model(array(
         "twitter_bootstrap_model",
         "code_igniter_model",
         "font_awesome_model"
      ));

      


   }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

