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
                                                            <p style="font-size: 15px;"><b>Predio</b></p>
                                                        </legend>


                                                        <div class="row layout-top-spacing" id="cancel-row">
                                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                <div class="row">

                                                                    <div class="col-sm-5">
                                                                        <div class="row text-sm-left">
                                                                            <div class="col-sm-5">
                                                                                <label for="">Identificación del Predio: </label>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" id="idnumerodoc" class="form-control" value="12345" disabled>
                                                                            </div>

                                                                        </div>

                                                                        <br><br>

                                                                        <div class="row text-sm-left">
                                                                            <div class="col-sm-4">
                                                                                <label for="">NPN:</label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" id="idnumerodoc" class="form-control" value="760050100020000110000900000001" disabled>
                                                                            </div>

                                                                        </div>
                                                                        <br><br>

                                                                        <div class="row text-sm-left mb-5">
                                                                            <div class="col-sm-4">
                                                                                <label for="">Tipo de suelo: </label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-select form-control" id="selecttipodoc">
                                                                                    <option value="">URBANO</option>
                                                                                    <option value="">EXPANSION URBANA</option>
                                                                                    <option value="">RURAL</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row text-sm-left mb-5">
                                                                            <div class="col-sm-4">
                                                                                <label for="">Destinacion Tipo: </label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-select form-control" id="selecttipodoc">
                                                                                    <option value="">COMERCIAL</option>
                                                                                    <option value="">HABITACIONAL</option>
                                                                                    <option value="">INDUSTRIAL</option>
                                                                                    <option value="">Otras mas..</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row text-sm-left">
                                                                            <div class="col-sm-4">
                                                                                <label for="">Direccion Predio:</label>
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <input type="text" id="idnumerodoc" class="form-control" value="Cra 23 # 56 - 23" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <br>


                                                                        <div class="row text-sm-left mb-5">
                                                                            <div class="col-sm-4">
                                                                                <label for="">Direccion Notificacion:</label>
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <input type="text" id="idnumerodoc" class="form-control" value="Cra 23 # 56 - 23" disabled>

                                                                            </div>
                                                                        </div>






                                                                    </div>

                                                                    <div class="col-sm-1"></div>

                                                                    <div class="col-sm-5">
                                                                        <div class="row text-sm-left mb-5">
                                                                            <div class="col-sm-10">
                                                                                <label for="">Observaciones de reconocimiento:
                                                                                </label>
                                                                            </div>
                                                                            <textarea class="form-control ml-3" maxlength="350" id="observaciones" style="border: 1px solid #DCE6E6;" spellcheck="false" placeholder="Actualización Catastral 2021, se retira predio por tener doble inscripción catastral"></textarea>
                                                                            <script>
                                                                                $('#observaciones').maxlength({
                                                                                    alwaysShow: true,
                                                                                });
                                                                            </script>
                                                                        </div>


                                                                        <br>
                                                                        <div class="text-center" class="mb-1">
                                                                            <button class="btn btn-outline-primary warning cancel" onclick="llamar_vista('pag47_view')" id="btnguardarcontac">Retirar</button>
                                                                        </div>
                                                                        <script>
                                                                            $('.widget-content .warning.cancel').on('click', function() {
                                                                                const swalWithBootstrapButtons = swal.mixin({
                                                                                    confirmButtonClass: 'btn btn-outline-success mt-2',
                                                                                    cancelButtonClass: 'btn btn-outline-danger ',
                                                                                    buttonsStyling: false,
                                                                                })

                                                                                swalWithBootstrapButtons({
                                                                                    title: 'Solicitud De Retirar Predio!',
                                                                                    text: "¿Confirma que desea retirar este predio?",
                                                                                    type: 'question',

                                                                                    showCancelButton: true,
                                                                                    confirmButtonText: 'Aceptar',
                                                                                    cancelButtonText: 'Cancelar',
                                                                                    reverseButtons: true,
                                                                                    padding: '0.5em'
                                                                                }).then(function(result) {
                                                                                    if (result.value) {
                                                                                        swalWithBootstrapButtons(
                                                                                            'Retirado!',
                                                                                            'El predio fue retirado satisfactoriamente',
                                                                                            'success'
                                                                                        )
                                                                                    } else if (
                                                                                        // Read more about handling dismissals
                                                                                        result.dismiss === swal.DismissReason.cancel
                                                                                    ) {
                                                                                        swalWithBootstrapButtons(
                                                                                            'Cancelado!',
                                                                                            'Predio no retirado',
                                                                                            'error'
                                                                                        )
                                                                                    }
                                                                                })
                                                                            })
                                                                        </script>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br><br>
                                                        <div class="text-center" class="mb-1">
                                                            <button class="btn btn-success" onclick="llamar_vista('contactovisita_tv_view')" id="btnguardarcontac">Guardar</button>
                                                        </div>

                                                    </fieldset>
                                                </div>

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

</div>

<script src="<?php echo base_url(); ?>/assets/js/analista_cartografico/analista_cartografico.js"></script>