<?php

require_once '../lib/Repository.php';

/**
 * Das UserRepository ist zuständig für alle Zugriffe auf die Tabelle "user".
 *
 * Die Ausführliche Dokumentation zu Repositories findest du in der Repository Klasse.
 */
class LoginRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'firma';

    public function login ($email, $passwort) {
        $email = strtolower($email);
        $result = $db->query("SELECT uid FROM user WHERE lower(email)='".$email."' AND passwort='".($passwort)."'");
        if ($user = $result->fetchArray()) return $user[0];
        else return 0;
    }

    public function getUser($email){
        $query = "SELECT id,passwort FROM {$this->tableName} WHERE email = ? ";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param("s",$email);
        if(!$statement->execute()){
            throw new Exception($statement->error);
        }
        else{
            $result = $statement->get_result();
            $user = $result->fetch_object();
            return $user;
        }
    }
}