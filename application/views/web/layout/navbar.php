<header id="header-wrap">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-5 col-xs-12">

                    <?php $sistema = info_header_footer(); ?>

                    <ul class="list-inline">
                        <li><i class="fa fa-whatsapp"></i> <?php echo $sistema->sistema_telefone_fixo; ?></li>
                        <li><i class="lni-envelope"></i> <?php echo $sistema->sistema_email; ?></li>
                    </ul>

                </div>
                <div class="col-lg-5 col-md-7 col-xs-12">

                    <div class="header-top-right float-right">

                        <?php $logado = $this->ion_auth->logged_in(); ?>

                        <?php if (!$logado): ?>

                            <a href="<?php echo base_url('login'); ?>" class="header-top-button"><i class="lni-lock"></i> Entrar</a> 

                        <?php else: ?>


                            <?php $anunciante = $this->ion_auth->user()->row(); ?>

                            <a title="Olá <?php echo $anunciante->first_name ?>, gerencie a sua conta" href="<?php echo base_url('conta'); ?>" class="header-top-button">

                                <?php if($anunciante->user_foto == "sem-foto.jpg"): ?>

                                   <img class="rounded-circle" width="30" src="<?php echo base_url('uploads/usuarios/semfoto/sem-foto.jpg'); ?>"> Minha conta

                                <?php else: ?>

                                    <img class="rounded-circle" width="30" src="<?php echo base_url('uploads/usuarios/small/' . $anunciante->user_foto); ?>"> Minha conta

                                <?php endif; ?>
                            </a>

                             |

                            <a href="<?php echo base_url('login/logout'); ?>" class="header-top-button"><i class="lni lni-exit"></i> Sair</a>

                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar navbar-transparente">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                </button>
                <a href="<?php echo base_url('/'); ?>" class="navbar-brand"><img class="img-fluid" src="<?php echo base_url('public/restrita/assets/img/logo.png'); ?>" alt="logo-cabecalho" style="width: 60px!important"></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/'); ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/sobre'); ?>">
                            Irboats
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/faq'); ?>">
                            Faq
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/contato'); ?>">
                            Contato
                        </a>
                    </li>

                </ul>

           
                <a href="http://newhdboatssitese1.hospedagemdesites.ws/" target="_blank">
                    <div class="post-btn">
                       <img class="img-fluid" src="<?php echo base_url('public/web/assets/img/nhd.png'); ?>" alt="logo-nhd" width="150">
                    </div>
                </a>

                
               
            
            </div>
        </div>

        <ul class="mobile-menu">
            <li>
                <a href="<?php echo base_url('/'); ?>">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/sobre'); ?>">
                    Irboats
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/faq'); ?>">
                    Faq
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/contato'); ?>">
                    Contato
                </a>
            </li>

            <li>

                <?php if (!$logado): ?>

                    <a href="<?php echo base_url('login'); ?>" class="header-top-button"><i class="lni-lock"></i> Entrar</a> 

                <?php else: ?>


                    <?php $anunciante = $this->ion_auth->user()->row(); ?>

                    <a title="Olá <?php echo $anunciante->first_name ?>, gerencie a sua conta" href="<?php echo base_url('conta'); ?>" class="header-top-button"><img class="rounded-circle" width="30" src="<?php echo base_url('uploads/usuarios/small/' . $anunciante->user_foto); ?>"> Minha conta</a>
                    <a href="<?php echo base_url('login/logout'); ?>" class="header-top-button"><i class="lni lni-exit"></i> Sair</a>

                <?php endif; ?>

            </li>
        </ul>

    </nav>


</header>