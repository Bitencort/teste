<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Contato extends CI_Controller {

    public function index() {

        $data = array(
            'titulo' => 'Contato',
        );


        $this->load->view('web/layout/header', $data);
        $this->load->view('web/layout/contato');
        $this->load->view('web/layout/footer');
    }


    public function email() {


        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $msg = $this->input->post('mensagem');


    	$para = "irboatscuiaba@gmail.com";
    	$assunto = $this->input->post('assunto');
    	$corpo = "Nome: ". $nome . " - E-mail: ".$email." - Mensagem: ".$msg;
    	$cabecalho = "From: irboats.com.br"."\r\n".
    	              "Reply-To ".$email. "\r\n".
    	              "X-Mailer: PHP/".phpversion();

        $data = mail($para, $assunto, $corpo, $cabecalho);

        if ($data) {

            $this->session->set_flashdata('sucesso', 'E-mail enviado com sucesso');
        } else {

            $this->session->set_flashdata('erro', 'E-mail não enviado');
        }

    	$this->load->view('web/layout/header', $data);
        $this->load->view('web/layout/contato');
        $this->load->view('web/layout/footer');

    }

}
