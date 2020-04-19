<?php
use App\Classes\Template;
use App\Classes\Parameters;

$template = new Template();
$twig = $template->init();

$twig->addFunction($site_url);



/*
 * chamando o controller digitado na url
 */
$callControler = new \App\Controllers\Controller();
$calledControler = $callControler->controller();
$controler = new $calledControler();
$controler->setTwig($twig);

/*
 * chamando o método digital na url
 */
$callMethod = new \App\Classes\Method();
$method = $callMethod->method($controler);

/*
 * Chamando controller através da classe controller e da classe method
 */

$parameters = new Parameters();
$parameter = $parameters->getParameterMethod($controler, $method);

$controler->$method($parameter);
