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
        $view->display();
    }

    public function doLogin()
    {
        $benutzername="admin";
        $passwort="gibbiX12345";

        if (isset($_POST['send'])) {

            if ($_POST['benutzername'] == $benutzername
                && $_POST['passwort'] == $passwort) {
                $_SESSION['eingeloggt'] = 1;
                //echo "Eingeloggt";
                header("Location:" . $GLOBALS['appurl']."/zeugnis");
            }
        }
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location:" .$GLOBALS['appurl']."/user/");
    }
}

