<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    

    public function prueba ()
    {
        echo 'Hola soy Alfredo Balderramo y estoy realizando una prueba';
    }

    public function api ()
    {


        $usuarios= array (
            "usuario"=>"Augusto Alfredo",
            "Apellidos"=>"Balderramo Zambrano",
            "Ciudad"=>"El Carmen-Manabi",
            "Direccion"=>"San Pedro de Suma",
            "Telefono"=>"0985122674"

        );


        return $this->response->setJSON($usuarios);

    }


    public function login(){

return view('login');
    
    }


    public function testbd($cedula)
    {

        $this->db=\Config\Database::connect();
        $query=$this->db->query("SELECT idpersonal, cedula, apellido1, apellido2, nombres, genero 
        FROM esq_datos_personales.personal where cedula='$cedula'  ");
        $result=$query->getResult();
        return $this->response->setJSON($result);


        // echo "hola";
    
    }
}
