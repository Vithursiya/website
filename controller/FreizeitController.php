<?php

require_once '../repository/FreizeitRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class FreizeitController
{
    public function index()
    {
        $freizeitRepository = new FreizeitRepository();

        $view = new View('freizeit_index');
        $view->title = 'Freizeit';
        $view->heading = 'Freizeit';
        $view->display();
    }

}
