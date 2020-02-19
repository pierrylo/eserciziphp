<?php

namespace Elena\Database;

use PDO;
use PDOException;

/**
 * Connessione al database MySql
 * 
 * Per la documentazione sui DocBloc tag vedi @link https://manual.phpdoc.org/HTMLSmartyConverter/HandS/phpDocumentor/tutorial_inlinetags.pkg.html
 */
class MysqlConnection
{

    private $params = [
        'host' => null,
        'user' => null,
        'pwd' => null,
        'db'  => null
    ];
    
    private $conn;

    /**
     * Costruttore
     *
     * @param [type] $host
     * @param [type] $user
     * @param [type] $password
     * @param [type] $database
     */
    public function __construct($host, $user, $password, $database)
    {
        $this->params['host'] = $host;
        $this->params['user'] = $user;
        $this->params['password'] = $password;
        $this->params['host'] = $database;
    }

    /**
     * Connessione al database
     * 
     * @param host nome dell'host
     * @param user utente database
     * @param password password del database
     * @param database nome del database
     * 
     * @return mixed una connessione al db o null se commessione fallita
     */
    public function get_connection()
    {
        $this->conn = null;
        $dsn = $this->get_dsn();

        try {
            $this->conn = new PDO($dsn, $this->params['user'], $this->params['pwd']);
        } catch (PDOException $ex){
            echo "Errore di connessione: " . $ex->getMessage();
        } catch (\Throwable $th) {
            echo "Errore: " . $th->getMessage();
        }

        return $this->conn;
    }

    /**
     * Genera il Data Source Name
     * 
     * @return string il data source name
     */
    private function get_dsn()
    {
        return sprintf('mysql:host=%s;dbname=%s', $this->params['host'], $this->params['db']);
    }
}
