<!-- 61 -->
<div id="ver_asignar_tramite_ac">
    <div class=" container container-fluid" style="color: black;">
        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row layout-top-spacing">
                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="widget-content widget-content-area">
                                <div class="widget-content widget-content-area underline-content">
                                    <div class="tab-content" id="lineTabContent-6">
                                        <div class="tab-pane fade show active" id="underline-home" role="tabpanel" aria-labelledby="underline-home-tab">
                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                <div class="info">
                                                    <h5 class="layout-spacing"></h5>
                                                    <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded" style="border-radius: 10px; color:black;">
                                                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                            <p style="font-size: 15px;"><b>Información Jurídica</b></p>
                                                        </legend>
                                                        <div class="row">
                                                            <div class="col-sm-12 m-auto">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label for="id_predio">Identificación del Predio</label>
                                                                        <input type="text" id="id_predio" class="form-control" disabled value="12345">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="npn">NPN</label>
                                                                        <input type="text" id="npn" class="form-control" disabled value="760050100020000000000900000001">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded col-sm-6" style="border-radius: 10px; color:black;">
                                                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                            <p style="font-size: 15px;"><b>Información de Matrícula Inmobiliaria</b></p>
                                                        </legend>
                                                        <div class="row">
                                                            <div class="col-sm-12 m-auto text-left">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label for="orip">Circulo Registral (ORIP)</label>
                                                                        <input type="text" id="orip" class="form-control col-sm-12" value="371">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label for="no_mat">Número de Matrícula</label>
                                                                        <input type="text" id="no_mat" class="form-control" value="1111">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label for="basicFlatpickr">Fecha de Matrícula</label>
                                                                        <input id="basicFlatpickr" value="2001-12-11" class="form-control flatpickr flatpickr-input active" type="date" placeholder="Selecciona una fecha:">
                                                                    </div>
                                                                    <script>
                                                                    var f1 = flatpickr(document.getElementById('basicFlatpickr'));
                                                                </script>
                                                                    <div class="col-sm-6 mt-2">
                                                                        <button class="btn btn-outline-primary warning cancel mt-4" disabled>Agregar Matricula</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded col-sm-12" style="border-radius: 10px; color:black;">
                                                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                            <p style="font-size: 15px;"><b>Fuente Administrativa</b></p>
                                                        </legend>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="style-3" class="table style-3 dt-table-hover non-hover table-responsive">
                                                                    <thead>
                                                                        <tr>           
                                                                            <th>Tipo de Derecho</th>
                                                                            <th>Fuente Administrativa</th>
                                                                            <th>Ente Emisor</th>
                                                                            <th>Ente Emisor Fuente</th>
                                                                            <th>Ciudad Ente</th>
                                                                            <th>Número_Fuente</th>
                                                                            <th>Fecha Documento</th>
                                                                            <th>Interesados</th>
                                                                            <th>Editar Fuente</th>
                                                                            <th>Retirar Fuente</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>        
                                                                            <td>Posesión</td>
                                                                            <td>Sentencia</td>
                                                                            <td>Juzgado</td>
                                                                            <td>Quinto</td>
                                                                            <td>Buga</td>
                                                                            <td>5599</td>
                                                                            <td>15/09/2021</td>
                                                                            <td><a href="#" style="text-decoration: underline; color: blue;">Ver interesados</a></td>
                                                                            <th><button class="btn btn-outline-primary warning cancel" onclick="llamar_vista('no_65')">Editar</button></th>
                                                                            <th><button class="btn btn-outline-primary warning cancel" disabled>Retirar</button></th>
                                                                        </tr>
                                                                        <tr>
                                                                            
                                                                            <td>Ocupación</td>
                                                                            <td>Documento Privado</td>
                                                                            <td>Juzgado</td>
                                                                            <td>Quinto</td>
                                                                            <td>Tulua</td>
                                                                            <td>2255</td>
                                                                            <td>12/05/2021</td>
                                                                            <td><a href="#" style="text-decoration: underline; color: blue;">Ver interesados</a></td>
                                                                            <th><button class="btn btn-outline-primary warning cancel" onclick="llamar_vista('no_65')">Editar</button></th>
                                                                            <th><button class="btn btn-outline-primary warning cancel" disabled>Retirar</button></th>
                                                                        </tr>
                                                                        <tr>
                                                                            
                                                                            <td>Dominio</td>
                                                                            <td>Notaria</td>
                                                                            <td>Juzgado</td>
                                                                            <td>Décima</td>
                                                                            <td>Buga</td>
                                                                            <td>123456</td>
                                                                            <td>01/09/2021</td>
                                                                            <td><a href="#" style="text-decoration: underline; color: blue;">Ver interesados</a></td>
                                                                            <th><button class="btn btn-outline-primary warning cancel" onclick="llamar_vista('no_65')">Editar</button></th>
                                                                            <th><button class="btn btn-outline-primary warning cancel" disabled>Retirar</button></th>
                                                                        </tr>
                                                                    </tbody>
                                                                </table><br><br>
                                                                <div class="text-right" class="mt-4">
                                                                    <label>Adicionar Nueva Fuente</label>
                                                                    <button id="nuevafuente" onclick="llamar_vista('no_65')" class="btn btn-primary mb-3 mr-3 rounded-circle">
                                                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42; fill:#FFFFFF;" xml:space="preserve">
                                                                            <path d="M37.059,16H26V4.941C26,2.224,23.718,0,21,0s-5,2.224-5,4.941V16H4.941C2.224,16,0,18.282,0,21s2.224,5,4.941,5H16v11.059
                                                                            C16,39.776,18.282,42,21,42s5-2.224,5-4.941V26h11.059C39.776,26,42,23.718,42,21S39.776,16,37.059,16z" />
                                                                            <g>
                                                                            </g>
                                                                    </button>
                                                                    <br>
                                                                </div>    
                                                               

                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    
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
        </div>
    </div>
</div>
</div>
<script src="<?php echo base_url(); ?>/assets/js/analista_cartografico/analista_cartografico.js"></script>