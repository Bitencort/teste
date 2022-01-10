<div class="main-wrapper main-wrapper-1">



    <?php $this->load->view('restrita/layout/navbar'); ?>


    <?php $this->load->view('restrita/layout/sidebar'); ?>



    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4><?php echo $titulo; ?></h4>
                                <a data-toggle="tooltip" data-placement="top" title="Cadastrar" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/core/'); ?>" class="btn btn-primary mr-2 float-right">Cadastrar</a>
                            </div>
                            <div class="card-body">


                                <?php if ($mensagem = $this->session->flashdata('sucesso')): ?>

                                    <div class="alert alert-success alert-dismissible show fade">
                                        <div class="alert-body" style="color: white !important">
                                            <button class="close" data-dismiss="alert">
                                                <span>&times;</span>
                                            </button>
                                            <?php echo $mensagem; ?>
                                        </div>
                                    </div>

                                <?php endif; ?>


                                <?php if ($mensagem = $this->session->flashdata('erro')): ?>

                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <div class="alert-body" style="color: white !important">
                                            <button class="close" data-dismiss="alert">
                                                <span>&times;</span>
                                            </button>
                                            <?php echo $mensagem; ?>
                                        </div>
                                    </div>

                                <?php endif; ?>



                                <div class="table-responsive">
                                    <table class="table table-striped data-table">
                                        <thead>
                                            <tr> 
                                                <th class="nosort">Imagem</th> 
                                                <th>Nome cliente</th>
                                                <th>Função</th>
                                                <th class="nosort">Ações</th>                    
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php foreach ($depoimentos as $depoimento): ?>


                                                <tr>
                                                    <td><img alt="image" src="<?php echo base_url('uploads/depoimentos/' . $depoimento->user_foto); ?>" width="35"></td>                                                
                                                    <td><?php echo $depoimento->nome_cliente ?></td>
                                                    <td><?php echo $depoimento->funcao; ?></td>
                                                    

                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" title="Editar" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/core/' . $depoimento->id_depoimentos); ?>" class="btn btn-primary mr-2"><i class="fas fa-edit"></i></a>
                                                        <a data-toggle="tooltip" data-placement="top" title="Excluir" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/delete/' . $depoimento->id_depoimentos); ?>" class="btn btn-warning delete" data-confirm="Tem certeza da exclusão do registro?"><i class="fas fa-trash-alt"></i></a>
                                                    </td>

                                                 
                                                </tr>

                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

