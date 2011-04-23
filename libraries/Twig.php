<?php
// protect script from direct access
if (!defined('BASEPATH')) exit('No direct script access allowed');

// find out this spark library position
// (dirname is applied twice since this script is located in "libraries" directory
// inside the spark root, so single dirname won't help).
define('SPARKROOT', dirname(__DIR__));

class Twig {
  private $loader = null;
  private $env = null;
  
  public function __construct($config = array()) {
    require_once SPARKROOT . $config['path_twig_lib'] . '/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $this->loader = new Twig_Loader_Filesystem($config['path_templates']);
    $this->env = new Twig_Environment($this->loader, array(
      'cache' => $config['path_compilation_caches'],
    ));
  }
  
  public function getEnv() {
    return $this->env;
  }
  
  public function getLoader() {
    return $this->loader;
  }
  
  public function dsp($name, array $arguments = array()) {
		print $this->env
		  ->loadTemplate($name)
		  ->display($arguments);
  }
}