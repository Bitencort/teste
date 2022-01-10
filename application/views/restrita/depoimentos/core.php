

<div class="main-wrapper main-wrapper-1">



    <?php $this->load->view('restrita/layout/navbar'); ?>

    <?php $this->load->view('restrita/layout/sidebar'); ?>


    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card">

                            <form method="post" name="form_core" accept-charset="utf-8" enctype="multipart/form-data">

                                <div class="card-header">
                                    <h4><?php echo $titulo; ?></h4>
                                </div>
                                <div class="card-body">

                                   

                                    <div class="mt-3 form-row">

                                        <div class="form-group col-md-6">
                                            <label>Nome Cliente</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="nome_cliente" value="<?php echo (isset($depoimento) ? $depoimento->nome_cliente : set_value('nome_cliente')); ?>">
                                            </div>
                                            <?php echo form_error('nome_cliente', '<div class="text-danger">', '</div>'); ?>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>Função</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="funcao" value="<?php echo (isset($depoimento) ? $depoimento->funcao : set_value('funcao')); ?>">
                                            </div>
                                            <?php echo form_error('funcao', '<div class="text-danger">', '</div>'); ?>
                                        </div>



                                    </div>

                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label>Depoimento</label>
                                            <textarea class="form-control" name="texto" style="min-height: 200px" rows="3"><?php echo (isset($depoimento) ? $depoimento->texto : set_value('texto')); ?></textarea>
                                            <?php echo form_error('texto', '<div class="text-danger">', '</div>'); ?>
                                        </div>

                                    </div>


                                    <div class="form-row">

                                        <?php if (isset($depoimento)): ?>

                                            <input type="hidden" name="id_depoimentos" value="<?php echo $depoimento->id_depoimentos; ?>">

                                        <?php endif; ?>

                                    </div>

                                    <div class="form-row">

                                        <div class="form-group col-md-4">
                                            <label>Avatar</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-image text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="file" class="form-control" name="user_foto_file">
                                            </div>
                                            <?php echo form_error('user_foto', '<div class="text-danger">', '</div>'); ?>
                                            <div id="user_foto"></div>
                                        </div>


                                        <div class="form-group col-md-3">

                                            <?php if (isset($depoimento)): ?>


                                                <div id="box-foto-usuario">
                                                    
                                                   <!-- caso esteja editano mostra a foto do usuario! -->

                                                    <input type="hidden" name="user_foto" value="<?php echo $depoimento->user_foto; ?>">
                                                    <img width="100" alt="Usuário image" src="<?php echo base_url('uploads/depoimentos/' . $depoimento->user_foto); ?>" class="rounded-circle">

                                                </div>



                                            <?php else: ?>

                                                <!-- caso esteja cadastrando nao mostra a foto! -->
  
                                                <div id="box-foto-usuario">



                                                </div>

                                            <?php endif; ?>


                                        </div>

                                    </div>



                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="<?php echo base_url('restrita/' . $this->router->fetch_class()); ?>" class="btn btn-dark">Voltar</a>
                                </div>

                            </form>
                        </div>


                    </div>

                </div>

            </div>
        </section>
    </div>

