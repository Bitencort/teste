<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Faq extends CI_Controller {

    public function index() {

        $data = array(
            'titulo' => 'Faq',
        );


        $this->load->view('web/layout/header', $data);
        $this->load->view('web/layout/faq');
        $this->load->view('web/layout/footer');
    }

}
