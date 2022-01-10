
<?php $this->load->view('web/layout/navbar'); ?>


<div class="main-container mt-5">

      <section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">JetSki</h1>
            <div class="row">

                    <?php foreach ($anuncios as $anuncio): ?>

                        <?php if(($anuncio->anuncio_categoria_pai_id == 10) && ($anuncio->anuncio_tipo == 0)): ?>

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
    </section>
</div>





