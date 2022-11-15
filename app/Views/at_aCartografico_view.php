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

                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-sm-4">Número de Radicación: 7600300000001</div>
                                                                <div class="col-sm-4" style="text-align: left;">Fecha Radicación:10/10/2021</div>
                                                                <div class="col-sm-4">
                                                                    <div class="row" style="text-align: right;">
                                                                        <div class="col-sm-8"><label class="dob-input">Dias tramite:</label></div>
                                                                        <div class="col-sm-4"><input type="text" id="dias_tramite" class="form-control mb-4" style="width: 40%;" disabled placeholder="" value="14"></div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin-top: -1%;">


                                                    <fieldset class="scheduler-border" style="border: 1px solid black; border-radius: 10px; color:black;">
                                                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                            <p style="font-size: 15px;"><b>Datos del tramite:</b></p>
                                                        </legend>
                                                        <div>
                                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="row">
                                                                            <div class="col-sm-5" style="text-align: right;">
                                                                                <label class="dob-input">Id predio:</label>
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <input type="text" id="id_predio" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="row">
                                                                            <div class="col-sm-4" style="text-align: right;">
                                                                                <label class="dob-input">Nupre:</label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" id="id_nupre" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="row">
                                                                            <div class="col-sm-4" style="text-align: right;">
                                                                                <label class="dob-input">Matricula: </label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" id="id_matricula" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="row">
                                                                            <div class="col-sm-5" style="text-align: right;">
                                                                                <label class="dob-input">NPN: </label>
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <input type="text" id="id_npm" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr><br>



                                                            <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                <div class="row text-center">
                                                                    <div class="col-sm-6">
                                                                        <label for="" style="text-align: right;">Proceso catastral: </label>
                                                                        <select class="form-select form-control lg mb-5" id="select_procesocat">
                                                                            <option selected>Mutacion de segunda clase</option>
                                                                            <option value="">Mutacion de tercera clase</option>
                                                                        </select>
                                                                    </div>


                                                                    <div class="col-sm-6">
                                                                        <label for="" style="text-align: right;">Tramite: </label>
                                                                        <select class="form-select form-control lg" id="select_tramite">
                                                                            <option selected>--Mutacion de segunda clase</option>
                                                                            <option value="">Englobe de predios</option>
                                                                            <option value="">Desenglobe de predios</option>
                                                                            <option value="">Loteo de Terreno</option>
                                                                            <option value="">Reloteo de Terreno</option>
                                                                            <option value="">Incorporacion de propiedad horizontal</option>
                                                                            <option value="">Reforma al reglamento de propiedad</option>
                                                                            <option value="">--Mutacion de tercera clase</option>
                                                                            <option value="">Incorporacion de construcciones</option>
                                                                            <option value="">Demolicion de construcciones</option>
                                                                            <option value="">Cancelacion de mejoras</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <label for="" style="text-align: right;">Tipo edicion: </label>
                                                                        <select class="form-select form-control lg mb-5" id="select_tipo_edicion">
                                                                            <option selected>Edicion alfanumerica</option>
                                                                            <option value="">Edicion cartografica</option>
                                                                            <option value="">Edicion alfanumerica y cartografica</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <br>

                                                    <fieldset class="scheduler-border" style="border: 1px solid black; border-radius: 10px; color:black;">
                                                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                            <p style="font-size: 15px;"><b>Asignar tramite</b></p>
                                                        </legend>
                                                        <div class="container-fluid mb-5" style="border: 1px solid black; width: 90%; border-radius: 10px;">
                                                            <br>
                                                            <div class="row text-left">
                                                                <div class="col-sm-2">
                                                                    <div class="n-chk" style="margin-top: 40%;">
                                                                        <label class="new-control new-radio radio-success">
                                                                            <input type="radio" id="radio_opcion" class="new-control-input" name="custom-radio-1">
                                                                            <span class="new-control-indicator"></span>Opcion 1
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <label>Tecnico vistas terreno asignado:</label>
                                                                    <div class="row layout-top-spacing" id="cancel-row">
                                                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                                                                            <table id="table_analistacart" class="table table-hover non-hover table-responsive">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Seleccion Analista</th>
                                                                                        <th>Nombre Tecnico de vistas Terreno</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="n-chk">
                                                                                                <label class="new-control new-checkbox checkbox-outline-primary">
                                                                                                    <input type="checkbox" id="check_editor" class="new-control-input">
                                                                                                    <span class="new-control-indicator"></span>
                                                                                                    <span style="visibility: hidden;">.</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>Jhoana Perez</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="n-chk">
                                                                                                <label class="new-control new-checkbox checkbox-outline-primary">
                                                                                                    <input type="checkbox" id="check_editor" class="new-control-input">
                                                                                                    <span class="new-control-indicator"></span>
                                                                                                    <span style="visibility: hidden;">.</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>Fulanito de tal</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div style="margin-top: 20%;">
                                                                        <label for="">Fecha de Asignacion: </label>
                                                                        <input type="date" class="form-control" id="fecha_asignacion">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr>

                                                            <div class="row text-left">
                                                                <div class="col-sm-2">
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Editor o Digitador Asignado por Lider de Mutación:</label>
                                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2"></div>
                                                                <div class="col-sm-3">
                                                                    <div>
                                                                        <label for="">Fecha de Asignacion radicacion: </label>
                                                                        <input type="date" class="form-control" id="fecha_asignacion">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="container-fluid mb-5" style="border: 1px solid black; width: 90%; border-radius: 10px;">
                                                            <br>
                                                            <div class="row text-left">
                                                                <div class="col-sm-2">
                                                                    <div class="n-chk" style="margin-top: 40%;">
                                                                        <label class="new-control new-radio radio-success">
                                                                            <input type="radio" id="radio_opcion" class="new-control-input" name="custom-radio-1">
                                                                            <span class="new-control-indicator"></span>Opcion 2
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <label>Devolver a lider de mutacion</label>
                                                                    <div class="row layout-top-spacing" id="cancel-row">
                                                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                                                                            <table id="table_analistacart" class="table table-hover non-hover table-responsive" style="border-radius: 10px;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Seleccion el editor o digitador</th>
                                                                                        <th>Nombre del editor</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="n-chk">
                                                                                                <label class="new-control new-checkbox checkbox-outline-primary">
                                                                                                    <input type="checkbox" class="new-control-input">
                                                                                                    <span class="new-control-indicator"></span>
                                                                                                    <span style="visibility: hidden;">.</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>Lider de mutacion</td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div style="margin-top: 20%;">
                                                                        <label for="">Fecha de Asignacion radicacion: </label>
                                                                        <input type="date" class="form-control" id="fecha_asignacion">
                                                                    </div><br>
                                                                    <div class="n-chk">
                                                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                                                            <input type="checkbox" class="new-control-input">
                                                                            <span class="new-control-indicator"></span>Devolver por no procedencia
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>


                                                        <div class="container-fluid mb-5" style="border: 1px solid black; width: 90%; border-radius: 10px;">
                                                            <br>
                                                            <div class="row text-left mb-3">
                                                                <div class="col-sm-2">
                                                                    <div class="n-chk">
                                                                        <label class="new-control new-radio radio-success">
                                                                            <input type="radio" id="radio_opcion" class="new-control-input" name="custom-radio-1">
                                                                            <span class="new-control-indicator"></span>Opcion 3
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <label>Devolver a usuario anterior (Analista Fisico Juridico)</label>

                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div>
                                                                        <label for="">Fecha de Asignacion radicacion: </label>
                                                                        <input type="date" class="form-control" id="fecha_asignacion">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <label style="margin-left: 60px;"><b>Observaciones</b></label>
                                                        <div class="container-fluid mb-5" style="border: 1px solid black; width: 90%; border-radius: 10px;">
                                                            <p style="color: black;">Envío al Técnico de visitas terreno para verificar linderos del predio y posteriormente al digitador o editor fulanito de tal
                                                                para la generación de la pre resolución respectiva.
                                                            </p>
                                                        </div>
                                                    </fieldset>


                                                </div>

                                                <br>

                                                <div style="text-align: center;" class="mb-5">
                                                    <button class="btn btn-success warning cancel" id="btnasignar_tramite">Asignar Tramite
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                            <polyline points="2 17 12 22 22 17"></polyline>
                                                            <polyline points="2 12 12 17 22 12"></polyline>
                                                        </svg>
                                                    </button>
                                                    <button onclick="llamar_vista('be_aCartografico_view')" class="btn btn-primary" id="btnbandeja_entrada">Bandeja de entrada
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

            <script>
                                                $('.widget-content .warning.cancel').on('click', function() {
                                                    const swalWithBootstrapButtons = swal.mixin({
                                                        confirmButtonClass: 'btn btn-outline-success mt-2',
                                                        cancelButtonClass: 'btn btn-outline-danger ',
                                                        buttonsStyling: false,
                                                    })

                                                    swalWithBootstrapButtons({
                                                        title: 'El tramite se asignara al: <br>Tecnico de visita terreno: Jhoana Perez',
                                                        text: "Confirma que desea reasignar esta radicacion?",
                                                        type: 'question',

                                                        showCancelButton: true,
                                                        confirmButtonText: 'Aceptar',
                                                        cancelButtonText: 'Cancelar',
                                                        reverseButtons: true,
                                                        padding: '0.5em'
                                                    }).then(function(result) {
                                                        if (result.value) {
                                                            swalWithBootstrapButtons(
                                                                'Asignado!',
                                                                'Tramite reasignado correctamente',
                                                                'success'
                                                            )
                                                        } else if (
                                                            // Read more about handling dismissals
                                                            result.dismiss === swal.DismissReason.cancel
                                                        ) {
                                                            swalWithBootstrapButtons(
                                                                'Cancelado!',
                                                                'Tramite no reasignado',
                                                                'error'
                                                            )
                                                        }
                                                    })
                                                })
                                            </script>
           

        </div>
    </div>

</div>

<script src="<?php echo base_url(); ?>/assets/js/analista_cartografico/analista_cartografico.js"></script>