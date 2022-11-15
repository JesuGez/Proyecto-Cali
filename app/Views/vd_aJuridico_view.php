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

                                                <div class="info">
                                                    <h5 class="layout-spacing"></h5>

                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-lg-12 ">
                                                            <div class="row">
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-7">Ver ficha catastral de radicado actual: 7600300000001</div>
                                                                <div class="col-sm-4">
                                                                    <div class="row" style="text-align: right;">
                                                                        <div class="col-sm-8">
                                                                            <label class="dob-input">Dias Vencimiento:</label>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <input type="text" id="dias_vencimiento" class="form-control mb-4" style="width: 40%;" disabled placeholder="" value="14">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-6" style="text-align: right;">
                                                                                <label class="dob-input" aria-placeholder="12345">Id predio:</label>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" id="id_predio" class="form-control" value="12345">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-4" style="text-align: right;">
                                                                                <label class="dob-input">Nupre:</label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" id="id_nupre" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-5" style="text-align: right;">
                                                                                <label class="dob-input">Matricula: </label>
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <input type="text" id="id_matricula" class="form-control" value="232">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="row">
                                                                            <div class="col-sm-4" style="text-align: right;">
                                                                                <label class="dob-input">#NPN: </label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" id="id_npm" class="form-control" value="76005050000090000004">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <br><br>

                                                    <div class="row text-center">
                                                        <div class="col-sm-5">
                                                            <!--
                                                            <i class=" fa fa-file-pdf" style="font-size:30px; color:red;"></i>
                                                            <i class="fa fa-check" style="font-size:30px; color:green"></i>
                                                            -->
                                                            <div class="mb-3 row">
                                                                <label for="formFile" class="col-sm-2 col-form-label">Oficio: </label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="file" id="formFile">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <i class="fa fa-spinner" style="font-size:30px; color:black"></i>
                                                            <i class=" fa fa-file-pdf" style="font-size:30px; color:red;"></i>
                                                            <i class="fa fa-check" style="font-size:30px; color:green"></i>
                                                        </div>
                                                        <div class="col-sm-3" style="text-align: right;"><button id="cargardoc_aj" type="button" class="btn btn-dark" style="font-size: 13px;">Cargar y adicionar a expediente</button></div>
                                                        <div class="col-sm-1"><button id="eliminardoc_aj" type="button" class="btn btn-dark" style="font-size: 13px;">Eliminar</button></div>
                                                    </div>
                                                    <br><br>

                                                    <div class="container-fluid text-center" style="width: 80%;">
                                                        <fieldset class="scheduler-border" style="border: 1px solid black; border-radius: 10px; color:black;">
                                                            <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                <p style="font-size: 15px;"><b>Enviar comunicacion oficial</b></p>
                                                            </legend>




                                                            <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="row text-center">
                                                                    <div class="col-sm-8">
                                                                        <div class="row g-3">
                                                                            <label for="staticEmail2" class="col-sm-2 col-form-label">Email</label>
                                                                            <div class="col-sm-5">
                                                                                <input type="email" class="form-control" id="id_email" style="height: 90%;">
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <button type="submit" id="btncargar_oficio" class="btn btn-primary">Enviar oficio</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-sm-2">
                                                                        <i class="fa fa-spinner" style="font-size:30px; color:black"></i>
                                                                        <i class="fa fa-check" style="font-size:30px; color:green"></i>
                                                                    </div>
                                                                    <div class="col-sm-2 mb-4">
                                                                        <p style="font-size: 13px;">Articulo enviado</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </fieldset>

                                                        <br>

                                                        <fieldset class="scheduler-border" style="border: 1px solid black; border-radius: 10px; color:black;">

                                                            <br>

                                                            <div class="row layout-top-spacing" id="cancel-row">
                                                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                    <!--
                                                                            <div class="widget-content widget-content-area br-6">
                                                                            </div>
                                                                            -->
                                                                    <p>
                                                                        Se envia comunicación oficial por Inconsistencias en Información Juridica de Titulos 15/10/2021.
                                                                        <br><br>
                                                                        Se cierra orden de trabajo por falta de documentos en el tiempo requerido 11/11/2021.

                                                                    </p>
                                                                </div>
                                                            </div>


                                                        </fieldset>
                                                    </div>

                                                </div>

                                                <br>

                                                <div style="text-align: center;" class="mb-5">
                                                    <button onclick="llamar_vista('tabs_aMutacion_view')" class="btn btn-primary" id="btnbandeja_entrada_aj">Enviar y regresar a Bandeja de entrada
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
                                                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                                            <rect x="9" y="9" width="6" height="6"></rect>
                                                            <line x1="9" y1="1" x2="9" y2="4"></line>
                                                            <line x1="15" y1="1" x2="15" y2="4"></line>
                                                            <line x1="9" y1="20" x2="9" y2="23"></line>
                                                            <line x1="15" y1="20" x2="15" y2="23"></line>
                                                            <line x1="20" y1="9" x2="23" y2="9"></line>
                                                            <line x1="20" y1="14" x2="23" y2="14"></line>
                                                            <line x1="1" y1="9" x2="4" y2="9"></line>
                                                            <line x1="1" y1="14" x2="4" y2="14"></line>
                                                        </svg></button>
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

<script src="<?php echo base_url(); ?>/assets/js/lider_mutacion/lider_mutacion.js"></script>