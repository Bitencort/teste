

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

                            <form method="post" name="form_core">

                                <div class="card-header">
                                    <h4><?php echo $titulo; ?></h4>
                                </div>
                                <div class="card-body">
                                      
                                    <div class="form-row">

                                        <div class="form-group col-md-2">
                                            <label>Código do anúncio</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-cube text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="anuncio_codigo" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_codigo : $codigo_gerado); ?>" readonly="">
                                            </div>
                                            <?php echo form_error('anuncio_codigo', '<div class="text-danger">', '</div>'); ?>
                                        </div>

                                        <div class="form-group col-md-10">
                                            <label>Título do anúncio</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-cube text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="anuncio_titulo" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_titulo : set_value('anuncio_titulo')); ?>">
                                            </div>
                                            <?php echo form_error('anuncio_titulo', '<div class="text-danger">', '</div>'); ?>
                                        </div>

                                    </div>


                                    <div class="form-row">


                                        <div class="form-group col-md-2">
                                            <label>Preço do anúncio</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-cube text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control money2" name="anuncio_preco" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_preco : set_value('anuncio_preco')); ?>">
                                            </div>
                                            <?php echo form_error('anuncio_preco', '<div class="text-danger">', '</div>'); ?>
                                        </div>


                                        <div class="form-group col-md-5">
                                           

                                            <label class="mr-3">Categoria principal</label>


                                            <?php if (isset($anuncio)) : ?>
                                               <span class="text-info small">Atual: <?php echo $anuncio->categoria_pai_nome; ?></span>
                                            <?php endif;?>


                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-check-circle text-info"></i>
                                                    </div>
                                                </div>
                                                <select id="master" class="form-control select2" name="anuncio_categoria_pai_id">

                                                    <option value="">Escolha uma categoria principal...</option>

                                                    <?php foreach ($categorias_pai as $cat_pai): ?>

                                                        <option value="<?php echo $cat_pai->categoria_pai_id; ?>"><?php echo $cat_pai->categoria_pai_nome; ?></option>

                                                    <?php endforeach; ?>


                                                </select>
                                            </div>
                                            <?php echo form_error('anuncio_categoria_pai_id', '<div class="text-danger">', '</div>'); ?>
                                        </div>


                                        <div class="form-group col-md-5">

                                            <label class="mr-3">Categoria secundária</label>

                                            <?php if (isset($anuncio)) : ?>
                                              <span class="text-info small">Atual: <?php echo $anuncio->categoria_nome; ?></span>
                                            <?php endif; ?>


                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-check-circle text-info"></i>
                                                    </div>
                                                </div>
                                                <select id="anuncio_categoria" class="form-control select2" name="anuncio_categoria_id">


                                                    <option value="">Escolha uma categoria principal...</option>


                                                </select>
                                            </div>
                                            <?php echo form_error('anuncio_categoria_id', '<div class="text-danger">', '</div>'); ?>
                                        </div>


                                    </div>



                                    <div class="form-row">


                                        <div class="form-group col-md-2">
                                            <label>Anúncio publicado</label>


                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-check-circle text-info"></i>
                                                    </div>
                                                </div>
                                                <select class="custom-select" name="anuncio_publicado">

                                                    <?php if (isset($anuncio)) : ?>

                                                        <option value="0" <?php echo ($anuncio->anuncio_publicado == 0 ? 'selected' : ''); ?>>Não</option>
                                                        <option value="1" <?php echo ($anuncio->anuncio_publicado == 1 ? 'selected' : ''); ?>>Sim</option>

                                                    <?php else: ?>

                                                        <option value="0">Não</option>
                                                        <option value="1">Sim</option>

                                                    <?php endif; ?>



                                                </select>
                                            </div>
                                            <?php echo form_error('anuncio_publicado', '<div class="text-danger">', '</div>'); ?>
                                        </div>



                                        <div class="form-group col-md-2">
                                            <label>Situação do item</label>


                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-check-circle text-info"></i>
                                                    </div>
                                                </div>
                                                <select class="custom-select" name="anuncio_situacao">

                                                    <?php if (isset($anuncio)) : ?>

                                                       <option value="1" <?php echo ($anuncio->anuncio_situacao == 1 ? 'selected' : ''); ?>>Novo</option>
                                                       <option value="0" <?php echo ($anuncio->anuncio_situacao == 0 ? 'selected' : ''); ?>>Usado</option>

                                                    <?php else: ?>

                                                        <option value="1">Novo</option>
                                                        <option value="0">Usado</option>

                                                    <?php endif; ?>

                                                </select>
                                            </div>
                                            <?php echo form_error('anuncio_situacao', '<div class="text-danger">', '</div>'); ?>
                                        </div>

                                       
                                        <div class="form-group col-md-2">
                                            <label>Localização do anúncio</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-cube text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control cep" name="anuncio_localizacao_cep" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_localizacao_cep : set_value('anuncio_localizacao_cep')); ?>">
                                            </div>
                                            <?php echo form_error('anuncio_localizacao_cep', '<div class="text-danger">', '</div>'); ?>
                                            <div id="anuncio_localizacao_cep">

                                            </div>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label>Status</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-cube text-info"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="anuncio_status" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_status : set_value('anuncio_status')); ?>">
                                            </div>
                                            <?php echo form_error('anuncio_status', '<div class="text-danger">', '</div>'); ?>
                                           
                                        </div>

                                    
                                        <div class="form-group col-md-2">
                                            <label>Tipo do anúncio</label>


                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-check-circle text-info"></i>
                                                    </div>
                                                </div>
                                                <select class="custom-select" name="anuncio_tipo">

                                                    <?php if (isset($anuncio)) : ?>

                                                       <option value="1" <?php echo ($anuncio->anuncio_tipo == 1 ? 'selected' : ''); ?>>Venda</option>
                                                       <option value="0" <?php echo ($anuncio->anuncio_tipo == 0 ? 'selected' : ''); ?>>Cota</option>
                                                       <option value="2" <?php echo ($anuncio->anuncio_tipo == 2 ? 'selected' : ''); ?>>Classificado</option>


                                                    <?php else: ?>

                                                        <option value="1">Venda</option>
                                                        <option value="0">Cota</option>
                                                        <option value="2">Classificado</option>

                                                    <?php endif; ?>

                                                </select>
                                            </div>
                                            <?php echo form_error('anuncio_tipo', '<div class="text-danger">', '</div>'); ?>
                                        </div>


                                    </div>

                                      <div class="form-row">


                                            <div class="form-group col-md-4">
                                                <label>Marca</label>
                                                <div class="input-icon">
                                                    
                                                    <input type="text" class="form-control" name="anuncio_marca" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_marca : set_value('anuncio_marca')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_marca', '<div class="text-danger">', '</div>'); ?>
                                            </div>



                                            <div class="form-group col-md-4">
                                                <label>Modelo</label>
                                                <div class="input-icon">
                                                    
                                                    <input type="text" class="form-control" name="anuncio_modelo" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_modelo : set_value('anuncio_modelo')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_modelo', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            
                                            <div class="form-group col-md-4">
                                                <label>Motorização</label>
                                                <div class="input-icon">
                                                    
                                                    <input type="text" class="form-control" name="anuncio_motorizacao" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_motorizacao : set_value('anuncio_motorizacao')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_motorizacao', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                        </div>

                                        <div class="form-row">

                                            <div class="form-group col-md-4">
                                                <label>Ano</label>
                                                <div class="input-icon">
                                                    
                                                    <input type="number" class="form-control" name="anuncio_ano" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_ano : set_value('anuncio_ano')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_ano', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Passageiros dia</label>
                                                <div class="input-icon">
                                                    
                                                    <input type="number" class="form-control" name="anuncio_passageiro_dia" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_passageiro_dia : set_value('anuncio_passageiro_dia')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_passageiro_dia', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Passageiros noite</label>
                                                <div class="input-icon">
                                                    
                                                    <input type="number" class="form-control" name="anuncio_passageiro_noite" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_passageiro_noite : set_value('anuncio_passageiro_noite')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_passageiro_noite', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                        </div>



                                    <div class="form-row">

                                    
                                        <div class="form-group col-md-12">
                                            <label>Descrição do anúncio</label>
                                            <textarea class="form-control" name="anuncio_descricao" style="min-height: 200px"><?php echo (isset($anuncio) ? $anuncio->anuncio_descricao : set_value('anuncio_descricao')); ?></textarea>
                                            <?php echo form_error('anuncio_descricao', '<div class="text-danger">', '</div>'); ?>
                                        </div>



                                    </div>




                                    <div class="form-row">


                                        <div class="form-group col-md-8">

                                            <label>Imagens do anúncio</label>

                                            <div id="fileuploader">

                                            </div>

                                            <div id="erro_uploaded" class="text-danger">

                                            </div>

                                            <?php echo form_error('fotos_produtos', '<div class="text-danger">', '</div>'); ?>

                                        </div>


                                    </div>


                                    <div class="form-row">


                                        <div class="form-group col-md-12">

                                            <?php if (isset($anuncio)): ?>


                                                <div id="uploaded_image">


                                                    <?php foreach ($fotos_anuncio as $foto): ?>


                                                        <ul style="list-style: none; display:  inline-block;">

                                                            <li class="text-center">

                                                                <img src="<?php echo base_url('uploads/anuncios/small/' . $foto->foto_nome); ?>" width="80" class="img-thumbnail mr-1 mb-2">
                                                                <input type="hidden" name="fotos_produtos[]" value="<?php echo $foto->foto_nome; ?>"><br>
                                                                <button class="btn btn-danger btn-remove" style="width: 45px">X</button>

                                                            </li>

                                                        </ul>



                                                    <?php endforeach; ?>

                                                </div>

                                            <?php else: ?>

                                                <div id="uploaded_image">


                                                </div>

                                            <?php endif; ?>

                                        </div>


                                    </div>


                                    <div class="form-row">

                                        <?php if (isset($anuncio)): ?>

                                            <input type="hidden" name="anuncio_id" value="<?php echo $anuncio->anuncio_id; ?>">

                                        <?php endif; ?>

                                    </div>

                                </div>



                                <div class="card-footer">
                                    <button id="btn-save-anuncio" type="submit" class="btn btn-primary">Salvar</button>
                                    <a href="<?php echo base_url('restrita/' . $this->router->fetch_class()); ?>" class="btn btn-dark">Voltar</a>
                                </div>

                            </form>
                        </div>


                    </div>

                </div>

            </div>
        </section>

    </div>

