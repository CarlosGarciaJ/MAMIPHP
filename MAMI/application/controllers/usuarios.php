<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($alertas = '') {
        $data['alertas'] = $alertas;
        $data['content'] = 'usuarios/login';
        $data['titulo'] = 'MAMI | Iniciar sesión';
        $this->load->view('includes/template', $data);
    }

}