<?php

require_once ;

/**
 * Esta clase define métodos para acceder a información sobre libros
 * almacenada en la bd
 */


 class Libro {

    private $database;

    public function __construct() {
        $this->database = new Database();
    }


    /**
     * Metodo para obtener registros de libros
     */
    public function getLibros() {
        
    }


    /**
     * Metodo para conocer la cantidad de registros de libros
     */
    public function getLibrosCount() {
              
    }

 }