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




                                    <form role="form" class="login-form" method="POST" action="<?php echo base_url('conta/perfil'); ?>">


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

                                            <div class="form-group col-md-6">

                                                <div class="custom-control custom-radio custom-control-inline mt-2">
                                                  <input type="radio" id="pessoa_fisica" name="usuario_tipo" class="custom-control-input" 
                                                       value="1" checked=""
                                                      <?php echo isset($usuario->usuario_tipo) && $usuario->usuario_tipo == 1 ? 'checked' : ''  ?>> 
                                                    <label class="custom-control-label pt-1" for="pessoa_fisica">Pessoa física</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="pessoa_juridica" name="usuario_tipo" class="custom-control-input" value="2" <?php echo isset($usuario->usuario_tipo) && $usuario->usuario_tipo == 2 ? 'checked' : ''  ?>>
                                                    <label class="custom-control-label pt-1" for="pessoa_juridica">Pessoa jurídica</label>
                                                </div>


                                            </div>


                                        </div>


                                        <div class="form-row">

                                            <div class="form-group col-md-6">
                                                <div class="input-icon">
                                                    <i class="lni-user"></i>
                                                    <input type="text" class="form-control" name="first_name" placeholder="Nome" value="<?php echo (isset($usuario) ? $usuario->first_name : set_value('first_name')); ?>">
                                                </div>
                                                <?php echo form_error('first_name', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <div class="input-icon">
                                                    <i class="lni-user"></i>
                                                    <input type="text" class="form-control" name="last_name" placeholder="Sobrenome" value="<?php echo (isset($usuario) ? $usuario->last_name : set_value('last_name')); ?>">
                                                </div>
                                                <?php echo form_error('last_name', '<div class="text-danger">', '</div>'); ?>
                                            </div>


                                        </div>


                                        <div class="form-row">

                                            <div class="form-group col-md-3">

                                                <div class="pessoa_fisica">
                                                    
                                                    <div class="input-icon  ">
                                                       
                                                        <input type="text" class="form-control form-control-user cpf" name="user_cpf" placeholder="CPF" value="<?php echo (isset($usuario) ? $usuario->user_cpf_cnpj : ''); ?>">
                                                    </div>

                                                    <?php echo form_error('user_cpf', '<div class="text-danger">', '</div>'); ?>
                                                </div>

                                       
                                                <div class="pessoa_juridica">
                                                
                                                    <div class="input-icon">
                                                      
                                                       <input type="text" class="form-control form-control-user cnpj" name="user_cnpj" placeholder="CNPJ" value="<?php echo (isset($usuario) ? $usuario->user_cpf_cnpj : ''); ?>">
                                                    </div>

                                                    <?php echo form_error('user_cnpj', '<small class="form-text text-danger">', '</small>'); ?>
                                                </div>

          
                                            </div>

                                            <div class="form-group col-md-3">
                                                <div class="input-icon">
                                                    <i class="lni lni-whatsapp"></i>
                                                    <input type="text" class="form-control sp_celphones" name="phone" placeholder="Telefone" value="<?php echo (isset($usuario) ? $usuario->phone : set_value('phone')); ?>">
                                                </div>
                                                <?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <div class="input-icon">
                                                    <i class="lni-envelope"></i>
                                                    <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo (isset($usuario) ? $usuario->email : set_value('email')); ?>">
                                                </div>
                                                <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                                            </div>


                                        </div>


                                        <div class="form-row">


                                            <div class="form-group col-md-3">
                                                <div class="input-icon">
                                                    <i class="lni lni-map-marker"></i>
                                                    <input type="text" class="form-control cep" name="user_cep" placeholder="CEP" value="<?php echo (isset($usuario) ? $usuario->user_cep : set_value('user_cep')); ?>">
                                                </div>
                                                <?php echo form_error('user_cep', '<div class="text-danger">', '</div>'); ?>
                                                <div id="user_cep"></div>
                                            </div>

                                            <div class="form-group col-md-7">
                                                <div class="input-icon">
                                                    <i class="lni lni-pointer"></i>
                                                    <input type="text" class="form-control" name="user_endereco" placeholder="Endeceço" value="<?php echo (isset($usuario) ? $usuario->user_endereco : set_value('user_endereco')); ?>" readonly="">
                                                </div>
                                                <?php echo form_error('user_endereco', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <div class="input-icon">
                                                    <i class="lni-pin"></i>
                                                    <input type="text" class="form-control" name="user_numero_endereco" placeholder="Número" value="<?php echo (isset($usuario) ? $usuario->user_numero_endereco : set_value('user_numero_endereco')); ?>">
                                                </div>
                                                <?php echo form_error('user_numero_endereco', '<div class="text-danger">', '</div>'); ?>
                                            </div>


                                        </div>


                                        <div class="form-row">


                                            <div class="form-group col-md-4">
                                                <div class="input-icon">
                                                    <i class="lni lni-map"></i>
                                                    <input type="text" class="form-control" name="user_bairro" placeholder="Bairro" value="<?php echo (isset($usuario) ? $usuario->user_bairro : set_value('user_bairro')); ?>" readonly="">
                                                </div>
                                                <?php echo form_error('user_bairro', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <div class="input-icon">
                                                    <i class="lni lni-direction-alt"></i>
                                                    <input type="text" class="form-control" name="user_cidade" placeholder="Cidade" value="<?php echo (isset($usuario) ? $usuario->user_cidade : set_value('user_cidade')); ?>" readonly="">
                                                </div>
                                                <?php echo form_error('user_cidade', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <div class="input-icon">
                                                    <i class="lni lni-direction"></i>
                                                    <input type="text" class="form-control uf" name="user_estado" placeholder="Estado" value="<?php echo (isset($usuario) ? $usuario->user_estado : set_value('user_estado')); ?>" readonly="">
                                                </div>
                                                <?php echo form_error('user_estado', '<div class="text-danger">', '</div>'); ?>
                                            </div>


                                        </div>


                                        <div class="form-row">


                                            <div class="form-group col-md-6">
                                                <div class="input-icon">
                                                    <i class="lni-lock"></i>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <div class="input-icon">
                                                    <i class="lni-lock"></i>
                                                    <input type="password" class="form-control" name="confirma_senha">
                                                </div>
                                                <?php echo form_error('confirma_senha', '<div class="text-danger">', '</div>'); ?>
                                            </div>


                                        </div>


                                         <?php if (isset($usuario)): ?>


                                            <div class="form-row">




                                                <div class="form-group col-md-6">
                                                    <div class="input-icon">
                                                        <i class="lni-image"></i>
                                                        <input type="file" class="form-control" name="user_foto_file">
                                                    </div>
                                                    <?php echo form_error('user_foto', '<div class="text-danger">', '</div>'); ?>
                                                    <div id="user_foto"></div>
                                                </div>


                                                <div class="form-group col-md-3">

                                                    <?php if (isset($usuario)): ?>


                                                       <?php if ($usuario->user_foto == "sem-foto.jpg") : ?>


                                                        <div id="box-foto-usuario">
                                                            
                                                           <!-- caso esteja editano mostra a foto do usuario! -->

                                                            <input type="hidden" name="user_foto" value="<?php echo $usuario->user_foto; ?>">
                                                            <img width="70" alt="Usuário image" src="<?php echo base_url('uploads/usuarios/semfoto/sem-foto.jpg'); ?>" class="rounded-circle">

                                                        </div>



                                                    <?php else: ?>


                                                        <div id="box-foto-usuario">
                                                            
                                                           <!-- caso esteja editano mostra a foto do usuario! -->

                                                            <input type="hidden" name="user_foto" value="<?php echo $usuario->user_foto; ?>">
                                                            <img width="70" alt="Usuário image" src="<?php echo base_url('uploads/usuarios/' . $usuario->user_foto); ?>" class="rounded-circle">

                                                        </div>



                                                    <?php endif; ?>



                                                    <?php else: ?>

                                                        <div id="box-foto-usuario">




                                                        </div>

                                                    <?php endif; ?>



                                                    <?php if (isset($usuario)): ?>

                                                        <input type="hidden" name="usuario_id" value="<?php echo $usuario->id; ?>">

                                                    <?php endif; ?>



                                                </div>




                                            </div>

                                        <?php else: ?>

                                          <div class="form-row">

                                          </div>

                                       <?php endif; ?>




                                        <div class="mb-1">
                                            <button class="btn btn-common log-btn">Salvar</button>
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
