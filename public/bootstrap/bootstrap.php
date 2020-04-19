<?php
use App\Classes\Template;
$template = new Template();

$twig = $template->init();

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
$controler->$method();
