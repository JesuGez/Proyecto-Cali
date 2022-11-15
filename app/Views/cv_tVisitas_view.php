<div id="ver_asignar_tramite">

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
                                            <div class="row">
                                                            <div class="col-lg-12 mx-auto">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="row text-sm-right">
                                                                            <div class="col-sm-7">
                                                                                <label class="dob-input">Identificacion del predio:</label>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <input type="text" id="idpredio" class="form-control mb-4" disabled value="12345">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 text-right">
                                                                                <label class="dob-input">NPN:</label>
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <input type="text" id="idnpm" class="form-control mb-4" disabled value="760050100020000110000900000001">
                                                                            </div>
                                                                            <div class="col-sm-1"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <hr>

                                                        
                                                            <br>
                                                            <div class="row text-left">
                                                                <div class="col-sm-8">
                                                                    <div class="row layout-top-spacing" id="cancel-row">
                                                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                            <div class="widget-content widget-content-area br-6 mr-6 ml-4">
                                                                                <table id="table_analista" class="table table-hover non-hover table-responsive">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th></th>
                                                                                            <th>Tipo de Identificacion</th>
                                                                                            <th>Numero de Identificacion</th>
                                                                                            <th>Nombre de Contacto</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td>Cedula De Ciudadania</td>  
                                                                                            <td>1001736447</td>
                                                                                            <td>Jhon percybrooks</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td>Cedula Extranjera</td>  
                                                                                            <td>2001736447</td>
                                                                                            <td>Rosa Ojeda</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td>Tarjeta De Identificacion</td>  
                                                                                            <td>3257393877</td>
                                                                                            <td>Jesus Herrera</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                             
                                                                <div class="col-sm-2">
                                                                    <label class="dob-input"> </label>
                                                                    <br>
                                                                    <label for="" style="text-align: left;">Editar Contacto Visita </label>
                                                                    <button type="button" class="btn btn-outline-primary">Editar</button>
                                                                    <br>
                                                                    <br>
                                                                </div>
                                                               
                                                                <div class="col-sm-2">
                                                                    <br>
                                                                    <label for="" style="text-align: left;">Retirar Contacto Visita </label>
                                                                    <button type="button" class="btn btn-outline-dark" disabled>Retirar</button>
                                                                    <br>
                                                                </div>
                                                                
                                                                    <div class="text-align-right" style="margin-left: 800px;">

                                                                        <label style="margin-left: 30px; margin-top: 30px;">Añadir Nuevo Contacto</label>
                                                                        <button id="btnagregarcontacto_v" onclick="llamar_vista('ac_tVisitas_view')"
                                                                        class="btn btn-primary mb-2 mr-2 rounded-circle"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-plus">
                                                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                        </svg></button>
                                                                    
                                                                    </div>
                                                                    
                                                                    <button id="btnagregarcontacto_v" onclick="llamar_vista('gi_tVisitas_view')"
                                                                        class="btn btn-primary mb-3 mr-3 rounded-circle" style="margin-left: 80px; margin-top:-40px;"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                            viewBox="0 0 499.2 499.2" style="enable-background:new 0 0 499.2 499.2;" xml:space="preserve">
                                                                        <path style="fill:#FFFFFF;" d="M489.6,229.6c-10.4,20.8-29.6,37.6-52.8,44c19.2,45.6,21.6,96.8,2.4,142.4c34.4-11.2,60-43.2,60-81.6
                                                                            v-68.8C499.2,253.6,495.2,241.6,489.6,229.6z"/>
                                                                        <path style="fill:#FFFFFF;" d="M413.6,177.6h-228c-47.2,0-86.4,38.4-86.4,85.6v58.4h232l0,0h82.4c33.6,0,64,20.8,77.6,49.6
                                                                            c6.4-14.4,8-25.6,8-39.2v-68.8C499.2,216,460.8,177.6,413.6,177.6z"/>
                                                                        <polygon style="fill:#FFFFFF;" points="123.2,249.6 219.2,153.6 219.2,30.4 0,249.6 219.2,468.8 219.2,345.6 "/>
                                                                        <polyline style="fill:#FFFFFF;" points="1.6,249.6 219.2,468.8 219.2,345.6 124.8,249.6 219.2,153.6 "/>
                                                                        </svg>
                                                                    </button>
                                                                   
                                                            </div>
        </div>
    </div>                                         <!-- FINAL BANDEJA DE ENTRADA -->
</div>





<script src="<?php echo base_url(); ?>/assets/js/tecnico_visitas/tecnico_visitas.js"></script>