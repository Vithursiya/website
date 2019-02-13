<?php

/*
 * Die index.php Datei ist der Einstiegspunkt des MVC. Hier werden zuerst alle
 * vom Framework benötigten Klassen geladen und danach wird die Anfrage dem
 * Dispatcher weitergegeben.
 *
 * Wie in der .htaccess Datei beschrieben, werden alle Anfragen, welche nicht
 * auf eine bestehende Datei zeigen hierhin umgeleitet.
 */
$GLOBALS['appurl'] = '/public';
$GLOBALS['numAppurlFragments'] = 3;

require_once '../Dispatcher.php';
require_once '../formbuilder/FormBuilder.php';
require_once '../View.php';

session_start();
if(!isset($_SESSION['eingeloggt'])){
    $_SESSION['eingeloggt']=0;
}


$dispatcher = new Dispatcher();
$dispatcher->dispatch();
