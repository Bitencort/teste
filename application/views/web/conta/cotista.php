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


                                <div class="row">

                                   <div class="col-md-12">
                                       <div class="suporte">
                                            <ul class="list-group">
                                              <li class="list-group-item active" style="background-color: #f79234">SUPORTE</li>
                                              <li class="list-group-item">(65) 3634-4004 | Irboatscuiaba@gmail.com</li>
                                              <li class="list-group-item"><button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#regras">Regras</button></li>
                                           </ul>
                                       </div>
                                       <!-- Modal -->
                                        <div class="modal fade" id="regras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Regras</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                ...
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                  </div>
                               </div>
                               <hr/>
                               <div class="row">
                                  <div class="col-md-6">
                                    <div class="card">
                                      <div class="card-header">
                                        <?php echo $usuario->first_name ?>
                                        Financeiro
                                      </div>
                                      <div class="card-body">
                                        <h5 class="card-title">Status de pagamento</h5>

                                        <?php if ($usuario->pagamento == 1):  ?>

                                           <a href="#" class="btn btn-success">Pago</a>

                                        <?php else : ?>

                                          <p>Você não pode fazer a reserva enquanto seu pagamento estiver pendendente</p><br/>

                                           <a href="#" class="btn btn-danger">Pendente</a>                              

                                        <?php endif; ?>
                                      
                                        

                                      </div>
                                    </div>
                                  </div>  
                                   <div class="col-md-6">
                                    <div class="card">
                                      <div class="card-header">
                                        Pagamento | Mensal
                                      </div>
                                      <div class="card-body">
                                        <h5 class="card-title">Enviar o comprovante</h5>
                                        <a href="https://api.whatsapp.com/send?phone=556536344004&text=Ol%C3%A1%20vim%20atrav%C3%A9s%20do%20site%20Irboats" target="_blank" class="btn btn-success"><i class="fa fa-whatsapp"></i> Enviar</a>
                                      </div>
                                    </div>
                                  </div>   
                               </div>
                               <div class="minhas-cotas">
                                <div class="row">
                                    <div class="col-md-6">
                                        <blockquote class="blockquote">
                                            <p class="mb-0">Minha Embarcação</p>
                                            <footer class="blockquote-footer">JetSki <cite title="Source Title">gtx</cite></footer>
                                        </blockquote>

                                    </div>

                                     <div class="col-md-6">
                                        <blockquote class="blockquote float-right">
                                           <p class="mb-0">Clique aqui para reservar</p>
                                           <button type="button" class="btn btn-success btn-block" <?php echo ($usuario->pagamento == 0 ? 'disabled' : '')  ?> data-toggle="modal" data-target="#reservaModal">Reservar</button>
                                        </blockquote>
                                      
                                    </div>

                                    <!-- Modal reservas -->
                                    <div class="modal fade" id="reservaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Reservar embarcação</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Título</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="titulo" aria-describedby="emailHelp" required autocomplete="off">
                                                
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Embarcação</label>
                                                <select class="form-control" id="exampleInputPassword1" name="embarcacao">
                                                    <option>jetski</option>
                                                </select>
                                                
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Hora</label>
                                                <input type="time" class="form-control" id="exampleInputPassword1" name="hora" required autocomplete="off">
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Data</label>
                                                <input type="date" class="form-control" id="exampleInputPassword1" name="data" required autocomplete="off">
                                              </div>


                                              
                                            </form>
                                            ...
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary">Salvar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>

                               
                                <div class="calendario">

                                    <div id='calendar'></div>

                                </div>


                               </div>
                          </div>
                       </div>  
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

 <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        initialDate: '<?php echo date("Y-m-d") ?>',
          navLinks: true, // can click day/week names to navigate views
          businessHours: true, // display business hours
          editable: true,
          selectable: true,
          events: [
          {
              title: '<?php echo $titulo; ?>',
              start: '2020-09-03T13:00:00',
            
          },
          /*
          {
              title: 'Meeting',
              start: '2020-09-13T11:00:00',
              constraint: 'availableForMeeting', // defined below
              color: '#257e4a'
          },
          {
              title: 'Conference',
              start: '2020-09-18',
              end: '2020-09-20'
          },
          {
              title: 'Party',
              start: '2020-09-29T20:00:00'
          },

            // areas where "Meeting" must be dropped
            {
              groupId: 'availableForMeeting',
              start: '2020-09-11T10:00:00',
              end: '2020-09-11T16:00:00',
              display: 'background'
          },
          {
              groupId: 'availableForMeeting',
              start: '2020-09-13T10:00:00',
              end: '2020-09-13T16:00:00',
              display: 'background'
          },

            // red areas where no events can be dropped
            {
              start: '2020-09-24',
              end: '2020-09-28',
              overlap: false,
              display: 'background',
              color: '#ff9f89'
          },
          {
              start: '2020-09-06',
              end: '2020-09-08',
              overlap: false,
              display: 'background',
              color: '#ff9f89'
          }
          */
          ]
      });

        calendar.render();
    });

</script>
