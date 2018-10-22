<?php

require_once '../repository/ZeugnisRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class ZeugnisController
{
    public function index()
    {
        if($_SESSION['eingeloggt']==1){
            $zeugnisRepository = new ZeugnisRepository();

            $view = new View('zeugnis_index');
            $view->title = 'Zeugnisse';
            $view->heading = 'Zeugnisse';
            $view->display();

        }
        else{
            $view = new View('zeugnis_index');
            $view->title = 'Zeugnisse';
            $view->heading = 'Zeugnisse';
            $view->meldung= "Sie müssen sich anmelden um zu dieser Seite zu kommen. ";
            $view->display();
        }

    }


}
