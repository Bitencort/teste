<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Depoimentos extends CI_Controller {

    public function __construct() {
        parent::__construct();


        /*
         * Definir se há sessão válida
         */
        if (!$this->ion_auth->logged_in()) {
            redirect('restrita/login');
        }

        /*
         * Definir se é admin
         * Se não for, será redirecionado para a a parte pública
         */
        if (!$this->ion_auth->is_admin()) {
            redirect('/');
        }
    }

    public function index() {


        $data = array(
            'titulo' => 'Depoimentos',
            'styles' => array(
                'assets/bundles/datatables/datatables.min.css',
                'assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array(
                'assets/bundles/datatables/datatables.min.js',
                'assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
                'assets/bundles/jquery-ui/jquery-ui.min.js',
                'assets/js/page/datatables.js'
            ),

            'depoimentos' => $this->core_model->get_all('depoimentos'),
            
        );



        $this->load->view('restrita/layout/header', $data);
        $this->load->view('restrita/depoimentos/index');
        $this->load->view('restrita/layout/footer');
    }



    public function core($id_depoimento = null) {

        /*
         * Esse método será responsável pela edição e criação de depoimentos
         */

        $id_depoimento = (int) $id_depoimento;


        if (!$id_depoimento) {

            /*
             * Cadastra novo depoimento
             */

            $this->form_validation->set_rules('nome_cliente', 'Nome', 'trim|required|min_length[3]|max_length[45]');
            $this->form_validation->set_rules('funcao', 'Função', 'trim|required|min_length[3]|max_length[45]');
            $this->form_validation->set_rules('texto', 'Depoimento', 'trim|required|min_length[3]|max_length[45]');

            $this->form_validation->set_rules('user_foto', 'Avatar', 'trim|required');

            


            if ($this->form_validation->run()) {

                /*echo '<pre>';
                print_r($this->input->post());                
                exit();


                /*
                 * Sucesso... formulário foi validado... damos sequência
                 */


                $additional_data = elements(
                            array(
                                'nome_cliente',
                                'funcao', 
                                'texto',
                                'user_foto',
                            ), $this->input->post()
                    );

                $this->core_model->insert('depoimentos', $additional_data);
                redirect('restrita/' . $this->router->fetch_class());
            } else {

                /*
                 * Erros de validação
                 */


                $data = array(
                    'titulo' => 'Cadastrar depoimento',
                    'scripts' => array(
                        'assets/mask/jquery.mask.min.js',
                        'assets/mask/custom.js',
                         'assets/js/usuarios.js',
                         'assets/js/clientes.js',
                         'assets/js/depoimentos.js',
     
                    ),

                   
                );


                $this->load->view('restrita/layout/header', $data);
                $this->load->view('restrita/depoimentos/core');
                $this->load->view('restrita/layout/footer');
            }
        } else {

             
           if (!$depoimento = $this->core_model->get_by_id('depoimentos', array('id_depoimentos' => $id_depoimento))) {
                $this->session->set_flashdata('erro', 'Depoimento não foi encontrada');
                redirect('restrita/' . $this->router->fetch_class());

            
            } else {

                /*
                 * Maravilha.... usuário foi encontrado.... agora passamos para as validações
                 */

               
                $this->form_validation->set_rules('nome_cliente', 'Nome', 'trim|required|min_length[3]|max_length[45]');
                $this->form_validation->set_rules('funcao', 'Função', 'trim|required|min_length[3]|max_length[45]');
                $this->form_validation->set_rules('texto', 'Depoimento', 'trim|required|min_length[3]');



                if ($this->form_validation->run()) {

        
                    /* o elements é usado para mandar os dados com segurança, nao inclui nenhum dado a mais alem do que vem do post */               
                    $data = elements(
                            array(
                                'nome_cliente',
                                'funcao', 
                                'texto',
                                'user_foto',
                            ), $this->input->post()
                    );

         
          
                    if ($this->core_model->update('depoimentos', $data, array('id_depoimentos' => $depoimento->id_depoimentos))) {
                        $this->session->set_flashdata('sucesso', 'Depoimento atualizado com sucesso');
                    } else {
                        $this->session->set_flashdata('erro', $this->ion_auth->errors());
                    }

                    redirect('restrita/' . $this->router->fetch_class());
                } else {

                    /*
                     * Erros de validação
                     */


                    $data = array(
                        'titulo' => 'Editando depoimento',
                        'scripts' => array(
                            'assets/mask/jquery.mask.min.js',
                            'assets/mask/custom.js',
                            'assets/js/usuarios.js',
                            'assets/js/clientes.js',
                            'assets/js/depoimentos.js',
                        ),

                        'depoimento' => $depoimento,
                       
                    );



              // echo '<pre>';
               //print_r($data);
                 // exit();

                $this->load->view('restrita/layout/header', $data);
                $this->load->view('restrita/depoimentos/core');
                $this->load->view('restrita/layout/footer');
                }
            }
        }
    }

    public function upload_file() {

        $config['upload_path'] = './uploads/depoimentos/'; // o caminho onde vai ser salva a imagem
        $config['allowed_types'] = 'jpg|png|JPG|PNG|jpeg|JPEG'; // os tipos de arquivos permitidos
        $config['encrypt_name'] = true; // para encriptar as imagens para que elas nao tenham o risco de ter o mesmo nome
        $config['max_size'] = 2048; //Max 1M
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $config['min_width'] = 350;
        $config['min_height'] = 340;

      

        /*
         * Carregando a bibliote 'upload' pasando como parâmetro o $config
         */
        $this->load->library('upload', $config);
                       
        //verifica se o upload foi feito com sucesso
        if ($this->upload->do_upload('user_foto_file')) {

            $data = array(
                'erro' => 0,
                'foto_enviada' => $this->upload->data(),
                'user_foto' => $this->upload->data('file_name'),
                'mensagem' => 'Foto foi enviada com sucesso',
            );


            /*
             * Criando um cópia da imagem um pouco menor (resize)
             */

            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/depoimentos/' . $this->upload->data('file_name');
            $config['new_image'] = './uploads/depoimentos/small/' . $this->upload->data('file_name');
            $config['width'] = 300;
            $config['height'] = 280;

            $this->load->library('image_lib', $config);

            /*
             * Verificamos se houve erro no resize
             */
            if (!$this->image_lib->resize()) {

                $data['erro'] = 3;
                $data['mensagem'] = $this->image_lib->display_errors('<span class="text-danger">', '</span>');
            }
        } else {


            /*
             * Erros no upload da imagem
             */

            $data = array(
                'erro' => 3,
                'mensagem' => $this->upload->display_errors('<span class="text-danger">', '</span>'),
            );
        }

        echo json_encode($data);
    }


    public function delete($id_depoimento = nul) {


        $id_depoimento = (int) $id_depoimento;

        if (!$depoimento = $this->core_model->get_by_id('depoimentos', array('id_depoimentos' => $id_depoimento))) {
            $this->session->set_flashdata('erro', 'Depoimento não foi encontrada');
            redirect('restrita/' . $this->router->fetch_class());

        }


        $this->core_model->delete('depoimentos', array('id_depoimentos' => $depoimento->id_depoimentos));
        redirect('restrita/' . $this->router->fetch_class());

    }
    

}