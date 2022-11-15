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






                                                    <br>

                                                    <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded" style="border-radius: 10px; color:black;">
                                                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                            <p style="font-size: 15px;"><b>Contacto visita</b></p>
                                                        </legend>

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

                                                        <hr style="margin-top: -1%;">
                                                        <br>
                                                        <div class="row text-left">
                                                            <div class="col-sm-8">
                                                                <div class="row layout-top-spacing" id="cancel-row">
                                                                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                                                                        <table id="table_contactovisita" class="table table-hover non-hover table-responsive">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Tipo de Identificacion</th>
                                                                                    <th>Numero de Identificacion</th>
                                                                                    <th>Nombre Contacto</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>CC</td>
                                                                                    <td>16578907</td>
                                                                                    <td>JOSE CAMILO CORTEZ CASTILLO</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="">Editar contacto de visita</label>
                                                                        <button id="btneditarcontac" class="btn btn-outline-primary">Editar</button>
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="">Retirar contacto visita</label>
                                                                        <button id="btnretirarcontac" class="btn btn-outline-secondary">Retirar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </fieldset>
                                                </div>

                                                <br>

                                                <div class="text-center" class="mb-5">
                                                    <div class="row">
                                                        <div class="col">
                                                            <button class="btn btn-outline-primary" onclick="llamar_vista('gi_tVisitas_view')" id="btnvolver">Volver</button>
                                                        </div>
                                                        <div class="col">
                                                            <div class="col-xl-12 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center align-self-center">
                                                                <div class="row text-sm-right">
                                                                   
                                                                    <div class="col-sm-10 ">
                                                                        <label for=""> Añadir contacto visita</label>
                                                                    
                                                                    <div class="col-sm-2">
                                                                        <button id="btnagregarcontac" onclick="llamar_vista('añadircontacto_view')" class="btn btn-primary mb-2 mr-2 rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                            </svg></button>
                                                                    </div>
                                                                    <div class="col-sm-1"></div>
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
        </div>
    </div>

</div>

<script src="<?php echo base_url(); ?>/assets/js/analista_cartografico/analista_cartografico.js"></script>