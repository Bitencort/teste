<?php $this->load->view('web/layout/navbar'); ?>


<div class="section-padding mt-5">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-white">
                        <li><a href="<?php echo base_url('/'); ?>">Home&nbsp;/&nbsp;</a></li>
                        <li><a href="<?php echo base_url('busca/estado/' . $anuncio->anuncio_estado); ?>">&nbsp;<?php echo $anuncio->anuncio_estado; ?>&nbsp;/&nbsp;</a></li>
                        <li><a href="<?php echo base_url('busca/cidade/' . $anuncio->anuncio_cidade_metalink); ?>">&nbsp;<?php echo $anuncio->anuncio_cidade; ?>&nbsp;/&nbsp;</a></li>
                        <li><a href="<?php echo base_url('busca/bairro/' . $anuncio->anuncio_bairro_metalink); ?>">&nbsp;<?php echo $anuncio->anuncio_bairro; ?>&nbsp;/&nbsp;</a></li>
                        <li><a href="<?php echo base_url('busca/master/' . $anuncio->categoria_pai_meta_link); ?>">&nbsp;<?php echo $anuncio->categoria_pai_nome; ?>&nbsp;/&nbsp;</a></li>
                        <li class="current"><a href="<?php echo base_url('busca/categoria/' . $anuncio->categoria_meta_link); ?>">&nbsp;<?php echo $anuncio->categoria_nome; ?></a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="product-info row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="ads-details-wrapper">
                    <div id="owl-demo" class="owl-carousel owl-theme">

                        <?php foreach ($anuncios_fotos as $foto): ?>

                            <div class="item">
                                <div class="product-img text-center">

                                    <img class="img-fluid" style="height: 500px; width: 700px" src="<?php echo base_url('uploads/anuncios/' . $foto->foto_nome); ?>" alt="<?php echo $anuncio->anuncio_titulo; ?>">

                                </div>
                                <!--
                                <span class="<?php echo ($anuncio->anuncio_preco > 0 ? 'price' : ''); ?>"><?php echo ($anuncio->anuncio_preco > 0 ? 'R$ ' . number_format($anuncio->anuncio_preco, 2) : ''); ?></span>-->
                            </div>


                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="details-box">
                    <div class="ads-details-info">
                        <h2>Informações da Embarcação</h2>
                        <div class="details-meta">
                            <p>Marca: <?php echo $anuncio->anuncio_marca ?></p>
                            <p>Modelo: <?php echo $anuncio->anuncio_modelo ?></p>
                            <p>Motorização: <?php echo $anuncio->anuncio_motorizacao ?></p>
                            <p>Ano: <?php echo $anuncio->anuncio_ano ?></p>
                            <p>Passageiro Dia: <?php echo $anuncio->anuncio_passageiro_dia ?> pessoas</p>
                            <p>Passageiro Noite: <?php echo $anuncio->anuncio_passageiro_noite ?> pessoas</p>
                            <p>Horas de uso: <?php echo $anuncio->horas_uso ?></p>
                        </div>
                        <p class="mb-4"><?php echo $anuncio->anuncio_descricao; ?></p>
                    </div>
                    <div class="tag-bottom">
                        <div class="float-left">
                            <ul class="advertisement">
                                <li>
                                    <p><strong><i class="lni-folder"></i> Categorias:</strong> 
                                        <a href="<?php echo base_url('busca/master/' . $anuncio->categoria_pai_meta_link); ?>"><?php echo $anuncio->categoria_pai_nome; ?></a>
                                    </p>
                                </li>
                                <p>Compartilhar com: </p>
                                <!--<li>
                                    <p><strong><i class="lni-archive"></i> Condição:</strong> <?php echo ($anuncio->anuncio_situacao == 1 ? 'Novo' : 'Usado'); ?></p>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">

                <aside class="details-sidebar">
                    <div class="widget">
                        <h4 class="widget-title"><?php echo $anuncio->anuncio_titulo; ?></h4>
                        <div class="agent-inner">
                            <div class="agent-title">
                                <h5>Status:  <span class="text-success"><?php echo $anuncio->anuncio_status ?></span></h5>
                                <div class="botao-contatar text-center mt-4">
                                  <a href="<?php echo base_url('contato') ?>" type="button" class="btn btn-success btn-lg">Entrar em contato</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <h4 class="widget-title">Local de retirada</h4>
                        <ul class="posts-list">
                           <h5>Marina</h5>
                           <div class="mapa">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493387.4828834716!2d-56.03704706718749!3d-14.959934799999976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939e0e821a6bf575%3A0x461bc067c3d2cecc!2sPousada%20Marina%20Do%20Sol!5e0!3m2!1spt-BR!2sbr!4v1637012652596!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                           </div>

                        </ul>
                    </div>
                </aside>

            </div>


            <div class="col-md-8" id="pergunta">


                <div id="comments">
                    <div class="comment-box">

                        <?php if ($mensagem = $this->session->flashdata('sucesso_pergunta')): ?>

                            <div class="alert alert-success bg-success text-white alert-dismissible show fade">
                                <div class="alert-body" style="color: white !important">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <?php echo $mensagem; ?>
                                </div>
                            </div>

                        <?php endif; ?>


                        <?php if ($mensagem = $this->session->flashdata('erro_pergunta')): ?>

                            <div class="alert alert-danger bg-danger text-white alert-dismissible show fade">
                                <div class="alert-body" style="color: white !important">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <?php echo $mensagem; ?>
                                </div>
                            </div>

                        <?php endif; ?>


                        <div id="respond" class="mb-5">
                            <form method="POST" action="<?php echo base_url('detalhes/perguntar/' . $anuncio_user->anuncio_id); ?>">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea id="comment" style="resize: none" class="form-control" name="pergunta" rows="2" placeholder="Digite sua pergunta..." required=""><?php echo($this->session->has_userdata('pergunta') ? $this->session->userdata('pergunta') : set_value('pergunta')); ?></textarea>
                                        </div>
                                        <?php echo form_error('pergunta', '<div class="text-danger">', '</div>'); ?>
                                        <button type="submit" id="submit" class="btn btn-common">Perguntar</button>
                                    </div>
                                </div>
                            </form>
                        </div>



                        <h3><?php echo ($anuncio_perguntas ? 'Últimas perguntas' : 'Nenhuma pergunta foi feita') ?></h3>
                        <ol class="comments-list">

                            <?php if (isset($anuncio_perguntas)): ?>

                                <?php foreach ($anuncio_perguntas as $pergunta): ?>

                                    <li>
                                        <div class="media">
                                            <div class="thumb-left" style="max-width: 100px">
                                                <a href="#">
                                                    <img class="img-fluid" src="<?php echo base_url('uploads/usuarios/small/' . $pergunta->user_foto); ?>" alt="<?php echo $pergunta->nome_anunciante_pergunta; ?>">
                                                </a>
                                            </div>
                                            <div class="info-body" style="width: 80%">
                                                <div class="media-heading">
                                                    <h4 class="name"><?php echo $pergunta->nome_anunciante_pergunta; ?></h4>
                                                    <span class="comment-date"><i class="lni-alarm-clock"></i> <?php echo formata_data_banco_com_hora($pergunta->data_pergunta); ?></span>
                                                </div>
                                                <p><?php echo $pergunta->pergunta; ?></p>
                                            </div>
                                        </div>

                                        <?php if ($pergunta->pergunta_respondida == 1): ?>

                                            <ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="thumb-left" style="max-width: 100px">
                                                            <a href="#">
                                                                <img class="img-fluid" src="<?php echo base_url('uploads/usuarios/small/' . $anuncio_user->user_foto); ?>" alt="<?php echo $anuncio_user->nome_anunciante; ?>">
                                                            </a>
                                                        </div>
                                                        <div class="info-body" style="width: 80%">
                                                            <div class="media-heading">
                                                                <h4 class="name"><?php echo $anuncio_user->nome_anunciante; ?></h4>
                                                                <span class="comment-date"><i class="lni-alarm-clock"></i> <?php echo formata_data_banco_com_hora($pergunta->data_resposta); ?></span>
                                                            </div>
                                                            <p><?php echo $pergunta->resposta; ?></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                        <?php endif; ?>
                                    </li>


                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ol>



                    </div>
                </div>


            </div>


        </div>

    </div>
</div>
