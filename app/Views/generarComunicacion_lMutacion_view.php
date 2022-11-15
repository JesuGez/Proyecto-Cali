<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div id="general-info" class="section general-info">
                                    <div class="info">

                                                            <div class="row">
                                                                <div class="col-md-4" style="text-align: left;">
                                                                    <div class="form-group">
                                                                        <label for="numero_radicacion">Número de radicación: <?php echo ' 603000001' ?></label>           
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="fecha_radicacion">Fecha de radicación<?php echo '27-10-2022' ?></label>           
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4" style="text-align: right;">
                                                                    <div class="form-group">
                                                                        <label for="fecha_radicacion"><span style="color: purple">Días Trámite: </span><span style="background-color: #ee5fcef5; color: white"> <?php echo '&nbsp;-1&nbsp; ' ?></span></label>           
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            </br>

                                                           <div class="row">
                                                                <div class="col-md-1" >  
                                                                  Oficio: 
                                                                </div>    
                                                                <div class="col-md-6" >     
                                                                  
                                                                    <div class="container-input">
                                                                    
                                                                      <input type="file" name="file-7" id="file-7" class="inputfile inputfile-7" data-multiple-caption="{count} archivos seleccionados" multiple />
                                                                    
                                                                      <label for="file-7">
                                                                      <span class="iborrainputfile"></span>
                                                                      <strong>
                                                                      <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                                                      Cargar y adicionar a expediente
                                                                      </strong>
                                                                      </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: right;" >  
                                                                    <button type="button" class="btn btn-outline-dark">Eliminar archivo</button>
                                                                </div>    
                                                           </div>     


                                    </div>
                            </div>
                          </div>
                          <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">  
                            <div id="general-info" class="section general-info">
                                    <div class="info">
                                        <h4 class="">Enviar comunicación oficial</h4>
                                         </br>                   
                                         <div class="row g-3 align-items-center">
                                          <div class="col-auto">
                                            <label for="email" class="col-form-label">Email</label>
                                          </div>
                                          <div class="col-auto">
                                            <input type="text" id="email" class="form-control" >
                                          </div>
                                          <div class="col-auto">
                                            <span id="passwordHelpInline" class="form-text">
                                              <button onclick="enviar_email()" id="btn_enviar_email" class="btn btn-primary">Enviar oficio</button>
                                            </span>
                                          </div>
                                         </div>                     


                                    </div>
                            </div>
                           </div>

                           <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">  
                            <div id="general-info" class="section general-info">
                                    <div class="info">
                                        <h4 class="">Observaciones</h4>
                                         </br>                   
                                         <div class="row">
                                          <div class="col-md-12">
                                             <textarea class="form-control" id="descripcion_actividad" placeholder="" rows="4"></textarea>
                                          </div>
                                         </div>                     


                                    </div>
                            </div>
                           </div>


                     <div class="col-md-12 text-right mb-5">
                        <div class="info">
                           
                            <button onclick="llamar_vista('be_lMutacion_view')" id="btn_enviar_comunicacion"
                                class="btn btn-primary">Enviar y Regresar a Bandeja de Entrada</button>

                        </div>

                    </div>
<script src="<?php echo base_url(); ?>/assets/js/lider_mutacion/lider_mutacion.js"></script>                    