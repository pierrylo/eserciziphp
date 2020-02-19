<?php


/**
 * Classe che rappresenta la tabella o model todos del database todos
 * 
 * Per la formattazione del codice vedi https://www.php-fig.org/psr/psr-2/#4-classes-properties-and-methods
 */
class Task
{

    private $id;
    private $description;
    private $completed;
    private $date;

    /**
     * Costruttore
     */
    public function __construct()
    {
    }

    /**
     * Accesso al campo descrizione
     * 
     * @return sting la descrizione in uppercase
     */
    public function get_description()
    {
        return strtoupper($this->description);
    }

    /**
     * Accesso al campo completed
     * 
     * @return string SI se il lavoro è stato completato, altrimenti NO
     */
    public function get_completed()
    {
        if ($this->completed) {
            return "SI";
        } else {
            return "NO";
        }
    }

    /**
     * Accesso al campo data
     * 
     * @return date|null se è impostata la data in formato italiano, altrimenti null
     */

    public function get_date()
    {
        if (is_null($this->date)) {
            return null;
        }else{
            return date('d/m/Y H:i:s', strtotime($this->date));
        }
        
    }
}
