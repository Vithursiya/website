<?php

require_once '../repository/LoginRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class LoginController
{
    public function index()
    {
        $loginRepository = new LoginRepository();

        $view = new View('login_index');
        $view->title = 'Login';
        $view->heading = 'Login';
        $view->meldung="";
        $view->display();
    }

    public function doLogin()
    {
        $benutzername="admin";
        $benutzername1="NewCom";
        $benutzername2="QuantumAnalytics";
        $benutzername3="ti&m";
	$benutzername4="Hallo";
        $passwort="EA6TNq8QjW3{";

        if (isset($_POST['send'])) {

            if ($_POST['benutzername'] == $benutzername
                || $_POST['benutzername'] ==$benutzername1
                ||$_POST['benutzername'] ==$benutzername2
                || $_POST['benutzername'] ==$benutzername3
		|| $_POST['benutzername'] ==$benutzername4
                && $_POST['passwort'] == $passwort) {
                $_SESSION['eingeloggt'] = 1;
                //echo "Eingeloggt";
                //var_dump($_SESSION['eingeloggt']);
                header("Location:" . $GLOBALS['appurl']."/zeugnis");
            }
        } else {
           header("Location:".$GLOBALS['appurl']."/login");
           echo "Versuchen sie es noch einmal!";

        }
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location:" .$GLOBALS['appurl']."/login/index");
    }
}

