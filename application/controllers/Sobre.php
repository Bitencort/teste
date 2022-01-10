<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Sobre extends CI_Controller {

    public function index() {

        $data = array(
            'titulo' => 'Sobre nós',
        );


        $this->load->view('web/layout/header', $data);
        $this->load->view('web/layout/sobre');
        $this->load->view('web/layout/footer');
    }

}
