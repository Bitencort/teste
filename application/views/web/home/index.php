
<?php $this->load->view('web/layout/navbar'); ?>


<div class="main-container">

    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url('public/web/assets/img/banner/irboats-home.jpg')?>" alt="irboats-manso">
                <div class="carousel-caption d-md-block">
                   <!-- <h1 class="animated wow fadeInDown hero-heading" data-wow-delay=".4s">Se é para viver </h1>
                    <p class="animated fadeInUp wow hero-sub-heading" data-wow-delay=".6s">Que viva intensamente</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('public/web/assets/img/banner/home-irboats.jpg')?>" alt="irboats-manso">
                <div class="carousel-caption d-md-block">
                    <!--<h1 class="animated wow fadeInLeft hero-heading" data-wow-delay=".7s">Se é para curtir</h1>
                    <p class="animated wow fadeInRight hero-sub-heading" data-wow-delay=".9s">Curta loucamente</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('public/web/assets/img/banner/anuncie-aqui-irboats.jpg')?>" alt="irboats-manso">
                <div class="carousel-caption d-md-block">
                    <!--<h1 class="animated wow fadeInLeft hero-heading" data-wow-delay=".7s">Se é para curtir</h1>
                    <p class="animated wow fadeInRight hero-sub-heading" data-wow-delay=".9s">Curta loucamente</p>-->
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left" data-ripple-color="#F0F0F0"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right" data-ripple-color="#F0F0F0"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="categories-icon bg-light section-padding">
        <div class="container">
            <h1 class="section-title">Categorias</h1>
            <div class="row d-flex justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a href="<?php echo base_url('/lancha/') ?>">
                        <div class="icon-box p-1" style="box-shadow:  10px 10px 10px 10px  rgba(0,0,0, 0.5);">
                            <div class="icon pt-5">
                                <h4 class="botoes-home">EMBARCAÇÕES</h4>
                            </div>
                            
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <a href="http://newhdboatssitese1.hospedagemdesites.ws/" target="_blank">
                        <div class="icon-box p-1" style="box-shadow:  10px 10px 10px 10px  rgba(0,0,0, 0.5);">
                            <div class="icon pt-5">
                               
                                <h4 class="botoes-home">NHD</h4>
                            </div>
                            
                        </div>
                    </a>
                </div>

            </div>
            <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 0 auto">
                    <a href="<?php echo base_url('/classificados/') ?>">
                        <div class="icon-box" style="box-shadow:  10px 10px 10px 10px  rgba(0,0,0, 0.5)">
                            <div class="icon pt-5">
                               <!-- <img src="<?php echo base_url('public/web/assets/img/nhd.png') ?>" class="img-fluid" width="200" />-->
                                <h4 class="botoes-home">CLASSIFICADOS</h4>
                            </div>
                           
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
   <!--SEÇÃO DAS VENDAS DO JET 
      <section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Cotas</h1>
            <div class="row">

                <?php foreach ($anuncios as $anuncio): ?>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="featured-box">

                                <figure>
                                   <span class="<?php echo ($anuncio->anuncio_situacao == 1 ? 'price-save' : 'price-save bg-primary'); ?>">
                                    <?php echo ($anuncio->anuncio_situacao == 1 ? 'Novo' : 'Usado'); ?>
                                   </span>
                                   <a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>">
                                    <img style="width: 370px; height: 310px !important"class="img-fluid" src="<?php echo base_url('uploads/anuncios/' . $anuncio->foto_nome); ?>" alt="<?php echo $anuncio->anuncio_titulo; ?>"></a>
                                </figure>
                                <div class="feature-content">
                                    <div class="product">
                                        <a href="<?php echo base_url('busca/master/' . $anuncio->categoria_pai_meta_link); ?>"><?php echo $anuncio->categoria_pai_nome; ?> > </a>
                                        <a href="<?php echo base_url('busca/categoria/' . $anuncio->categoria_meta_link); ?>"><?php echo $anuncio->categoria_nome; ?></a>
                                    </div>
                                    <h4><a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>"><?php echo word_limiter($anuncio->anuncio_titulo, 5); ?></a></h4>
                                    <div class="meta-tag">
                                        <span>
                                            <i class="lni-user"></i> <?php echo $anuncio->first_name . ' ' . $anuncio->last_name; ?>
                                        </span>
                                        <span>
                                            <i class="lni-map-marker"></i> <?php echo $anuncio->anuncio_bairro . ', ' . $anuncio->anuncio_cidade . ' - ' . $anuncio->anuncio_estado; ?>
                                        </span>
                                    </div>
                                    <p class="dsc"><?php echo word_limiter($anuncio->anuncio_descricao, 18); ?></p>
                                    <div class="listing-bottom">
                                        <h3 class="price float-left"><?php echo ($anuncio->anuncio_preco > 0 ? 'R$ ' . number_format($anuncio->anuncio_preco, 2) : ''); ?></h3>
                                        <a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>" class="btn btn-common float-right">Ver mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php endforeach; ?>


            </div>
        </div>
    </section>
    FIM SEÇÃO VENDAS DO JET -->

    <!-- BANNER CLASSIFICADOS E SEÇÃO -->
    <!--<section class="counter-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <h2 class="text-white text-center"  style="font-size: 70px">CLASSIFICADOS</h2>
                    </div>
                </div>

            </div>
        </div>
    </section>-->

    <!--SEÇÃO DOS CLASSIFICADSO -->
      <!--<section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Classificados</h1>
            <div class="row">

                    <?php foreach ($anuncios as $anuncio): ?>

                        <?php if($anuncio->anuncio_tipo == 2): ?>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="featured-box">

                                    <figure>
                                     <span class="<?php echo ($anuncio->anuncio_situacao == 1 ? 'price-save' : 'price-save bg-primary'); ?>">
                                        <?php echo ($anuncio->anuncio_situacao == 1 ? 'Novo' : 'Usado'); ?>
                                    </span>
                                    <a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>">
                                        <img style="width: 100%; height: 310px !important"class="img-thumbnail" src="<?php echo base_url('uploads/anuncios/' . $anuncio->foto_nome); ?>" alt="<?php echo $anuncio->anuncio_titulo; ?>"></a>
                                    </figure>
                                    <div class="feature-content" style="width: 100%">
                                        <div class="product">
                                            <a href="<?php echo base_url('busca/master/' . $anuncio->categoria_pai_meta_link); ?>"><?php echo $anuncio->categoria_pai_nome; ?> > </a>
                                            <a href="<?php echo base_url('busca/categoria/' . $anuncio->categoria_meta_link); ?>"><?php echo $anuncio->categoria_nome; ?></a>
                                        </div>
                                        <h4><a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>"><?php echo word_limiter($anuncio->anuncio_titulo, 5); ?></a></h4>
                                        <div class="meta-tag">

                                        </div>
                                        <p class="dsc"><?php echo word_limiter($anuncio->anuncio_descricao, 18); ?></p>
                                        <div class="listing-bottom">
                                            <h3 class="price float-left"><?php echo ($anuncio->anuncio_preco > 0 ? 'R$ ' . number_format($anuncio->anuncio_preco, 2) : ''); ?></h3>
                                            <a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>" class="btn btn-common float-right">Ver mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>

            </div>
        </div>
    </section>-->
    <!-- FIM SEÇÃO CLASSIFICADOS -->
    

    <!--SEÇÃO DEPOIMENTOS- -->
    <section class="testimonial section-padding">
        <div class="container">
            <h1 class="section-title">Depoimentos</h1>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel">

                          <?php foreach ($depoimentos as $depoimento): ?>
                        <div class="item">
                            
                            <div class="img-thumb">
                                <img src="<?php echo base_url('uploads/depoimentos/' . $depoimento->user_foto); ?>" alt="<?php echo $depoimento->user_foto; ?>" style="width: 80px!important">
                            </div>

                      
                          
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description"><?php echo $depoimento->texto ?></p>
                                    <div class="info-text">
                                        <h2><a href="#"><?php echo $depoimento->nome_cliente ?></a></h2>
                                        <h4><a href="#"><?php echo $depoimento->funcao ?></a></h4>
                                    </div>
                                </div>
                            </div>

                         
                        </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

     <!--SEÇÃO DAS VENDAS DO JET -->
      <!--<section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Jet skis à venda</h1>
            <div class="row">

                <?php foreach ($anuncios as $anuncio): ?>

                    <?php if($anuncio->anuncio_tipo == 1): ?>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="featured-box">

                                <figure>
                                 <span class="<?php echo ($anuncio->anuncio_situacao == 1 ? 'price-save' : 'price-save bg-primary'); ?>">
                                    <?php echo ($anuncio->anuncio_situacao == 1 ? 'Novo' : 'Usado'); ?>
                                </span>
                                <a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>">
                                    <img style="width: 100%; height: 310px !important"class="img-thumbnail" src="<?php echo base_url('uploads/anuncios/' . $anuncio->foto_nome); ?>" alt="<?php echo $anuncio->anuncio_titulo; ?>"></a>
                                </figure>
                                <div class="feature-content" style="width: 100%">
                                    <div class="product">
                                        <a href="<?php echo base_url('busca/master/' . $anuncio->categoria_pai_meta_link); ?>"><?php echo $anuncio->categoria_pai_nome; ?> > </a>
                                        <a href="<?php echo base_url('busca/categoria/' . $anuncio->categoria_meta_link); ?>"><?php echo $anuncio->categoria_nome; ?></a>
                                    </div>
                                    <h4><a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>"><?php echo word_limiter($anuncio->anuncio_titulo, 5); ?></a></h4>
                                    <div class="meta-tag">
                                      
                                    </div>
                                    <p class="dsc"><?php echo word_limiter($anuncio->anuncio_descricao, 18); ?></p>
                                    <div class="listing-bottom">
                                        <h3 class="price float-left"><?php echo ($anuncio->anuncio_preco > 0 ? 'R$ ' . number_format($anuncio->anuncio_preco, 2) : ''); ?></h3>
                                        <a href="<?php echo base_url('detalhes/' . $anuncio->anuncio_codigo); ?>" class="btn btn-common float-right">Ver mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                <?php endforeach; ?>


            </div>
        </div>
    </section>-->
    <!-- FIM SEÇÃO VENDAS DO JET -->
</div>





