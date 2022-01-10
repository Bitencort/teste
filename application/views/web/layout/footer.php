  
<?php $sistema = info_header_footer(); ?>

<footer>
  
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-6 col-mb-12">
                    <div class="widget">
                        <div class=""><img class="img-fluid" src="<?php echo base_url('public/restrita/assets/img/logo.png'); ?>" width="100" alt="lopo-rodape"></div>
                        <div class="textwidget">

                        </div>
                        <ul class="mt-3 footer-social">
                            <li><a class="facebook" href="#" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="twitter" href="https://www.instagram.com/irboats/" target="_blank"><i class="lni-instagram-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Irboats</h3>
                        <div class="text-white">
                          <p>Empresa líder no segmento para administração de cotas náuticas. A IRBOATS atua no modelo de franquias em todo Estado!
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget text-white">
                        <h3 class="block-title">Informações de contato</h3>

                        <ul class="contact-footer">
                            <li>
                                <strong><i class="fa fa-whatsapp"></i></strong><span><p><a href="https://api.whatsapp.com/send?phone=556536344004&text=Ol%C3%A1%20vim%20atrav%C3%A9s%20do%20site%20Irboats" target="_blank" class="text-white"><?php echo $sistema->sistema_telefone_fixo; ?></a></p></span>
                            </li>

                            <li>
                                <strong><i class="lni-envelope"></i></strong><span><?php echo $sistema->sistema_email; ?></span>
                            </li>
                            <li>
                                <strong><i class="lni-map-marker"></i></strong><span>CEP: <?php echo $sistema->sistema_cep . ' - ' . $sistema->sistema_endereco . ' - ' . $sistema->sistema_numero; ?><br>
                                    <?php echo $sistema->sistema_bairro . ', ' . $sistema->sistema_cidade . ' - ' . $sistema->sistema_estado; ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>&copy Irboats - Todos os direitos reservados<a target="_blank" href="https://jbinformaticacba.com.br/"> - Desenvolvido por: Jb Informática</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<a class="whatsapp-link" href="https://api.whatsapp.com/send?phone=556536344004&text=Ol%C3%A1%20vim%20atrav%C3%A9s%20do%20site%20Irboats" target="_blank">
    <i class="fa fa-whatsapp" style="margin-top: 16px;"></i>
</a>


<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>


<script src="<?php echo base_url('public/web/assets/js/jquery-min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/jquery.counterup.min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/waypoints.min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/wow.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/jquery.slicknav.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/main.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/form-validator.min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/contact-form-script.min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/js/summernote.js'); ?>"></script>


<script src="<?php echo base_url('public/restrita/assets/js/util.js'); ?>"></script>


<script src="<?php echo base_url('public/restrita/assets/bootbox/bootbox.min.js'); ?>"></script>


<script src="<?php echo base_url('public/web/assets/autocomplete/jquery-ui.min.js'); ?>"></script>
<script src="<?php echo base_url('public/web/assets/autocomplete/pesquisa-ajax.js'); ?>"></script>



<?php if (isset($scripts)): ?>

    <?php foreach ($scripts as $script): ?>

        <script src="<?php echo base_url('public/restrita/' . $script); ?>"></script>

    <?php endforeach; ?>

<?php endif; ?>




<script>

    $(document).ready(function () {
        $('.js-example-basic-single').select2();
    });


    $('.delete').on("click", function (event) {


        event.preventDefault();


        var redirect = $(this).attr('href');


        bootbox.confirm({
            title: $(this).attr('data-confirm'),
            centerVertical: true,
            message: "<p class='text-danger'>Esta ação não poderá ser desfeita</p>",
            buttons: {
                confirm: {
                    label: 'Sim, pode excluir',
                    className: 'btn-danger'
                },
                cancel: {
                    label: 'Não, cancelar',
                    className: 'btn-primary'
                }
            },
            callback: function (result) {

                if (result) {
                    window.location.href = redirect;
                }

            }
        });


    });


</script>  



</body>


</html>