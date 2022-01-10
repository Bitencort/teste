<?php $this->load->view('web/layout/navbar'); ?>


<div class="page-header" style="background: url(public/web/assets/img/banner/irboats-lancha.jpg) no-repeat;
background-size: cover;
background-position: center;

">
	<div class="container">
		<div class="row">
			<div class="col text-center" style="margin-top: 60px">

			    <h3 class="text-white display-4">CONTATO</h3>
					
			</div>
		</div>
	</div>
</div>


<section id="content" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-xs-12">
			    
			    	 <?php if ($mensagem = $this->session->flashdata('sucesso')): ?>
						 
						    <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong><?php echo $mensagem; ?></strong> 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                        <?php endif; ?>


                        <?php if ($mensagem = $this->session->flashdata('erro')): ?>
                        
                             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong><?php echo $mensagem; ?></strong> 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                        <?php endif; ?>

			
				<form role="form" class="contact-form" action="<?php echo base_url('contato/email') ?>" method="POST">
					<h2 class="contact-title">
						Envie-nos uma mensagem
					</h2>
					<div class="row">
					
						<div class="col-md-12">
							<div class="row">
								<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="nome" placeholder="Seu nome" required="" />
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Seu E-mail" required/>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="text" class="form-control" name="assunto" placeholder="Assunto" required />
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Mensagem" name="mensagem" rows="7" required></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn btn-common">Enviar agora</button>
							<div class="clearfix"></div>
						</div>
					</div>
				</form>
			</div>
             
             <?php $sistema = info_header_footer(); ?>

			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="information mb-4">
					<h3>FALE CONOSCO</h3>
					<div class="contact-datails">
						<p>Fique a vontade para nos enviar uma mensagem e em breve entraremos em contato com você!</p>
					</div>
				</div>
				<div class="information">
					<h3>Informações de contato</h3>
					<div class="contact-datails">
						<ul class="list-unstyled info">
							<li><span>Email : </span><p><?php echo $sistema->sistema_email; ?></p></li>
							<li><span>Telefone : </span><p><a href="https://api.whatsapp.com/send?phone=556536344004&text=Ol%C3%A1%20vim%20atrav%C3%A9s%20do%20site%20Irboats"target="_blank"><?php echo $sistema->sistema_telefone_fixo; ?></a></p></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


