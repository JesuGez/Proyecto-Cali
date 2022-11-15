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


                                                <div class="tab-pane fade show active" id="underline-home" role="tabpanel" aria-labelledby="underline-home-tab">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">


                                                        <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded">
                                                            <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                <p style="font-size: 15px;"><b>Analisis del tratmite :</b></p>
                                                            </legend>

                                                            <div>
                                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="dob-input">Número de radicado:</label>
                                                                            <input type="text" id="id_predio" class="form-control" disabled placeholder="" value="7600300000001">

                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <label class="dob-input">Fecha Radicado:</label>
                                                                            <input type="text" id="id_predio" class="form-control" disabled placeholder="" value="10/11/2021: 10:05 am">

                                                                        </div>

                                                                        <div>

                                                                            <div class="col-sm-10">
                                                                                <label for="" style="text-align: right;">Tipo Edicion</label>
                                                                                <select class="form-select form-control  lg mb-4" id="select_procesocat">
                                                                                    <option value="">Mutacion de tercera clase</option>

                                                                                </select>
                                                                            </div>


                                                                        </div>
                                                                    </div>


                                                                    <div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                            <div class="row text-center">
                                                                                <div class="col-sm-6">
                                                                                    <label for="" style="text-align: right;">Proceso catastral: </label>
                                                                                    <select class="form-select form-control lg mb-3" id="select_procesocat">
                                                                                        <option value="">Mutacion de tercera clase</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <br>
                                                                        </div>



                                                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                            <div class="row text-center">
                                                                                <div class="col-sm-6">
                                                                                    <label for="" style="text-align: right;">Subproceso</label>
                                                                                    <select class="form-select form-control lg mb-5" id="select_procesocat">
                                                                                        <option selected>Mutacion de segunda clase</option>
                                                                                        <option value="">Englobe</option>
                                                                                        <option value="">Desenglobe</option>
                                                                                        <option value="">Incorporacion de propiedad horizontal</option>
                                                                                        <option value="">Reforma al reglamento de propiedad</option>
                                                                                        <option value="">--Mutacion de tercera clase</option>
                                                                                        <option value="">Incorporacion de construcciones</option>
                                                                                        <option value="">Cancelacion de mejoras</option>

                                                                                    </select>
                                                                                </div>


                                                                                <div class="col-sm-6">
                                                                                    <label for="" style="text-align: right;">Operación Catastral </label>
                                                                                    <select class="form-select form-control lg" id="select_tramite">
                                                                                        <option selected>ENGLOBE</option>
                                                                                        <option value="">Englobe de Mejoras y Terreno</option>
                                                                                        <option value="">Desenglobe</option>
                                                                                        <option value="">Division Material</option>
                                                                                        <option value="">Segregación</option>
                                                                                        <option value="">Loteo</option>
                                                                                        <option value="">Reloteo</option>
                                                                                        <option value="">Incorporacion de Propiedad Horizontal</option>
                                                                                        <option value="">Conservar Predio Matriz</option>
                                                                                        <option value="">Cancelar Predio Matriz</option>
                                                                                        <option value="">Reforma al Reglamento de Propiedad Horizonta</option>
                                                                                        <option value=""> Conservar Predio Matriz</option>
                                                                                        <option value="">Cancelar Predio Matriz</option>
                                                                                        <option value="">--Mutacion de tercera clase</option>
                                                                                        <option value="">Incorporacion de construcciones</option>
                                                                                        <option value="">Demolicion de construcciones</option>
                                                                                        <option value="">Modificacion de Construcciones</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                        </fieldset>

                                                        <br>

                                                        <fieldset class="scheduler-border scheduler-border shadow p-3 mb-5 bg-white rounded">
                                                            <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                <p style="font-size: 15px;"><b>Ver Informacion</b></p>
                                                            </legend>
                                                            <div class="mapouter">
                                                                <div class="gmap_canvas">
                                                                    <center>
                                                                        <iframe width="900" height="267" id="gmap_canvas" style=" box-shadow: 10px 5px 5px #CCD1D1;" src="https://maps.google.com/maps?q=Cali&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                                    </center>
                                                                </div>
                                                            </div>

                                                    </div>

                                                    <label style="margin-left: -0px; color:black;"><b>Observaciones:</b></label>
                                                    <div class="row text-left">
                                                        <div class="col-sm-10">
                                                            <div class="row layout-top-spacing" id="cancel-row">
                                                                <div class="container-fluid mb-5 ml-4 ">
                                                                    <div class="form-group">

                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="width: 800px;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </fieldset>

                                            </div>

                                            <div style="text-align: center;" class="mb-5">
                                                <button class="btn btn-success" id="btnasignar_tramite"onclick="llamar_vista('e_digitartramite_view')">Digitar Tramite
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                        <polyline points="2 17 12 22 22 17"></polyline>
                                                        <polyline points="2 12 12 17 22 12"></polyline>
                                                    </svg>
                                                </button>
                                                <br>
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

<script src="<?php echo base_url(); ?>/assets/js/editor/editor.js"></script>