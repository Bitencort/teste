<?php $this->load->view('web/layout/navbar'); ?>


<div id="content" class="section-padding mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">

                <?php $this->load->view('web/conta/sidebar'); ?>


            </div>
            
            
            <div class="col-sm-12 col-md-8 col-lg-9">
                <div class="row page-content">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="inner-box">
                            <div class="dashboard-box">
                                <h2 class="dashbord-title"><?php echo $titulo; ?></h2>
                            </div>
                            <div class="dashboard-wrapper">

                                <div class="login-form login-area">

                                    <?php
                                    if (isset($anuncio)) {

                                        $anuncio_id = $anuncio->anuncio_id;
                                    } else {

                                        $anuncio_id = '';
                                    }
                                    ?>


                                    <form role="form" class="login-form" action="<?php echo base_url('conta/core/' . $anuncio_id); ?>" method="POST">


                                        <?php if (isset($anuncio)): ?>


                                            <?php if ($anuncio->anuncio_publicado == 0): ?>

                                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                    <strong>Importante!</strong> Seu anúncio não está publicado no momento, pois está em análise com a equipe responsável. 
                                                    Assim que confirmarmos o pagamento, seu anúncio será publicado e você receberá um e-mail informativo. Não se preocupe, isso é rapidinho ;)
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>


                                            <?php endif; ?>




                                        <?php endif; ?>




                                        <?php if ($mensagem = $this->session->flashdata('sucesso')): ?>

                                            <div class="alert alert-success bg-success text-white alert-dismissible show fade">
                                                <div class="alert-body" style="color: white !important">
                                                    <button class="close" data-dismiss="alert">
                                                        <span>&times;</span>
                                                    </button>
                                                    <?php echo $mensagem; ?>
                                                </div>
                                            </div>

                                        <?php endif; ?>


                                        <?php if ($mensagem = $this->session->flashdata('erro')): ?>

                                            <div class="alert alert-danger bg-danger text-white alert-dismissible show fade">
                                                <div class="alert-body" style="color: white !important">
                                                    <button class="close" data-dismiss="alert">
                                                        <span>&times;</span>
                                                    </button>
                                                    <?php echo $mensagem; ?>
                                                </div>
                                            </div>

                                        <?php endif; ?>


                                        <div class="form-row">


                                            <div class="form-group col-md-3">
                                                <label>Código do anúncio</label>
                                                <div class="input-icon">
                                                    <i class="lni lni-code"></i>
                                                    <input type="text" class="form-control" name="anuncio_codigo" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_codigo : $codigo_gerado); ?>" readonly="">
                                                </div>
                                                <?php echo form_error('anuncio_codigo', '<div class="text-danger">', '</div>'); ?>
                                            </div>


                                            <div class="form-group col-md-9">
                                                <label>Título do anúncio</label>
                                                <div class="input-icon">
                                                    <i class="lni lni-pencil-alt"></i>
                                                    <input type="text" class="form-control" name="anuncio_titulo" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_titulo : set_value('anuncio_titulo')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_titulo', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                        </div>


                                        <div class="form-row">


                                            <div class="form-group col-md-6">
                                                <label class="mr-3">Categoria principal</label>

                                                <?php if (isset($anuncio)): ?>
                                                    <span class="text-info small">Atual: <?php echo $anuncio->categoria_pai_nome; ?></span>
                                                <?php endif; ?>

                                                <select id="master" class="form-control js-example-basic-single" name="anuncio_categoria_pai_id">

                                                    <option value="">Escolha uma categoria principal...</option>

                                                    <?php foreach ($categorias_pai as $cat_pai): ?>

                                                        <option value="<?php echo $cat_pai->categoria_pai_id; ?>"><?php echo $cat_pai->categoria_pai_nome; ?></option>

                                                    <?php endforeach; ?>


                                                </select>
                                                <?php echo form_error('anuncio_categoria_pai_id', '<div class="text-danger">', '</div>'); ?>
                                            </div>



                                            <div class="form-group col-md-6">

                                                <label class="mr-3">Categoria secundária</label>

                                                <?php if (isset($anuncio)): ?>
                                                    <span class="text-info small">Atual: <?php echo $anuncio->categoria_nome; ?></span>
                                                <?php endif; ?>




                                                <select id="anuncio_categoria" class="form-control js-example-basic-single" name="anuncio_categoria_id">


                                                    <option value="">Escolha uma categoria principal...</option>


                                                </select>
                                                <?php echo form_error('anuncio_categoria_id', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                        </div>


                                        <div class="form-row">


                                            <div class="form-group col-md-4">
                                                <label>Preço do anúncio</label>
                                                <div class="input-icon">
                                                    <i class="lni-wallet"></i>
                                                    <input type="text" class="form-control money2" name="anuncio_preco" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_preco : set_value('anuncio_preco')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_preco', '<div class="text-danger">', '</div>'); ?>
                                            </div>



                                            <div class="form-group col-md-4">

                                                <label>Situação do item</label>


                                                <select class="form-control" name="anuncio_situacao" style="height: calc(2.25rem + 7px);">

                                                    <?php if (isset($anuncio)): ?>


                                                        <option value="1" <?php echo ($anuncio->anuncio_situacao == 1 ? 'selected' : ''); ?>>Novo</option>
                                                        <option value="0" <?php echo ($anuncio->anuncio_situacao == 0 ? 'selected' : ''); ?>>Usado</option>

                                                    <?php else: ?>

                                                        <option value="1">Novo</option>
                                                        <option value="0">Usado</option>


                                                    <?php endif; ?>



                                                </select>
                                                <?php echo form_error('anuncio_situacao', '<div class="text-danger">', '</div>'); ?>
                                            </div>





                                            <div class="form-group col-md-4">
                                                <label>Localização do anúncio</label>
                                                <div class="input-icon">
                                                    <i class="lni lni-map-marker"></i>
                                                    <input type="text" class="form-control cep" name="anuncio_localizacao_cep" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_localizacao_cep : set_value('anuncio_localizacao_cep')); ?>">
                                                </div>
                                                <?php echo form_error('anuncio_localizacao_cep', '<div class="text-danger">', '</div>'); ?>
                                                <div id="anuncio_localizacao_cep"></div>
                                            </div>



                                        </div>

                                        <div class="form-row">


                                            <div class="form-group col-md-4">
                                                <label>Marca</label>
  
                                                <input type="text" class="form-control" name="anuncio_marca" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_marca : set_value('anuncio_marca')); ?>">
                                               
                                                <?php echo form_error('anuncio_marca', '<div class="text-danger">', '</div>'); ?>
                                            </div>



                                            <div class="form-group col-md-4">
                                                <label>Modelo</label>
 
                                                <input type="text" class="form-control" name="anuncio_modelo" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_modelo : set_value('anuncio_modelo')); ?>">
                                                
                                                <?php echo form_error('anuncio_modelo', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            
                                            <div class="form-group col-md-4">
                                                <label>Motorização</label>
      
                                                <input type="text" class="form-control" name="anuncio_motorizacao" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_motorizacao : set_value('anuncio_motorizacao')); ?>">
                                                
                                                <?php echo form_error('anuncio_motorizacao', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                               <!--tipo do anuncio -->
                                                <input type="hidden" class="form-control" name="anuncio_tipo" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_tipo : set_value('anuncio_tipo')); ?>">
                                                
                                                <?php echo form_error('anuncio_tipo', '<div class="text-danger">', '</div>'); ?>
                                       

                                        </div>

                                        <div class="form-row">

                                            <div class="form-group col-md-3">
                                                <label>Ano</label>
                                                 
                                                <input type="number" class="form-control" name="anuncio_ano" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_ano : set_value('anuncio_ano')); ?>">
                                               
                                                <?php echo form_error('anuncio_ano', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Passageiros dia</label>
                                                 
                                                <input type="number" class="form-control" name="anuncio_passageiro_dia" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_passageiro_dia : set_value('anuncio_passageiro_dia')); ?>">
                                                
                                                <?php echo form_error('anuncio_passageiro_dia', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Passageiros noite</label>
 
                                                <input type="number" class="form-control" name="anuncio_passageiro_noite" value="<?php echo (isset($anuncio) ? $anuncio->anuncio_passageiro_noite : set_value('anuncio_passageiro_noite')); ?>">
                                              
                                                <?php echo form_error('anuncio_passageiro_noite', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>horas de uso</label>
 
                                                <input type="time" class="form-control" name="horas_uso" value="<?php echo (isset($anuncio) ? $anuncio->horas_uso : set_value('horas_uso')); ?>">
                                              
                                                <?php echo form_error('horas_uso', '<div class="text-danger">', '</div>'); ?>
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

                                                <label>Imagens do anúncio | Tamanho permitido MAX 1500 x 1500</label>

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
                                                                    <button class="btn btn-danger btn-remove">X</button>

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


                                        <?php if(isset($anuncio) && $anuncio->termos === "aceito") : ?>

                                            <div class="form-row">

                                                <div class="form-group">
                                                    <div class="form-check">
                                                      
                                                      <label class="form-check-label" for="termos">
                                                       <i class="lni lni-pencil-alt"></i> Você ja Aceitou os termos e condições
                                                      </label>
                                                      
                                                    </div>
                                                </div>

                                            </div>

                                        <?php else: ?>


                                            <div class="form-row">

                                                <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input is-invalid" name="termos" type="checkbox" value="aceito" id="termos" aria-describedby="invalidCheck3Feedback" required>
                                                      <label class="form-check-label" for="termos">
                                                        Aceite os termos e condições
                                                      </label>
                                                      <div  id="invalidCheck3Feedback" class="invalid-feedback">
                                                        A venda realizada pela equipe irboats será cobrado comissão de 7% do valor total negociado.<br/>
                                                        favor enviar o comprovante em nosso whatsapp 
                                                        <a href="https://api.whatsapp.com/send?phone=556536344004&text=Ol%C3%A1%20vim%20atrav%C3%A9s%20do%20site%20Irboats" target="_blank"><i class="fa fa-whatsapp" style="color: green; font-size: 15px"></i>
                                                        </a>

                                                      </div>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php endif; ?>


                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <p class="">Pagar com QR Code</p>
                                                <img src="<?php echo base_url("") ?>/public/web/assets/img/qrcode/qr-code-irboats.jpg" width="100">
                                                 <p>Dados do emissor</p>
                                                <p>Carlos Ivan Rastelli de Oliveira</p>
                                            </div>
                                           
                                        </div>

                                        


                                        <div class="mb-1">
                                            <button type="submit" class="btn btn-common log-btn">Salvar</button>
                                        </div>
                                    </form>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
