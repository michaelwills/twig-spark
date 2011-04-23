This Spark integrates Twig and CI2.

Twig is a template language for PHP, released under the new BSD license (code and documentation).
Twig uses a syntax similar to the Django and Jinja template languages which inspired the Twig runtime environment.

## Installation and configuration

After installing this Spark, you're free to use it like any other, by loading it in your controller:

	  $this->load->spark('twig/1.0');
	  
and then by invoking the $this->twig->dsp() method, provided for your convenience, as follows:

  	$this->twig->dsp('my-view-file.html', array(
		  'myVar1' => array(
  		  array('href' => 'http://codeigniter.com/', 'caption' => 'Code Igniter'),
  		  array('href' => 'http://getsparks.org/', 'caption' => 'Sparks'),
  		),
  		'myVar2' => 'fooBarBaz',
  	));

In case you need finer controls over Twig properties, two method are provided in order to access them, getEnv() and getLoader().

## Known bugs and roadmap

There's a bug with Sparks autoloading in CI 2.0.2, therefore you still have to load the Twig Spark manually. That should be an issue about to be solved.

At the moment this spark contains a drop-in solution for start using Twig as template engine instead of CI's default one. A better integration with CI's Loader and view layer would be desirable.


## Resources and further readings:

* Twig Project website: [http://www.twig-project.org/](http://www.twig-project.org/)
* CodeIgniter Sparks website: [http://getsparks.org/](http://getsparks.org/)

## Contacts and footnotes

This Spark has been sponsored by [Agavee Team](http://www.agavee.com/) and written by Claudio Beatrice (twitter: @omissis)