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
                                                            <p style="font-size: 15px;"><b>Terreno</b></p>
                                                        </legend>


                                                        <br>

                                                        <div class="row layout-top-spacing" id="cancel-row">
                                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                <div class="row">

                                                                    <div class="col-sm-5">
                                                                        <div class="row text-sm-left">
                                                                            <div class="col-sm-4">
                                                                                <label for="">Identificación del Predio</label>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <input type="text" id="idnumerodoc" class="form-control" value="Autogenerado" disabled>
                                                                            </div>

                                                                        </div>

                                                                        <br><br>

                                                                        <div class="row text-sm-left">
                                                                            <div class="col-sm-4">
                                                                                <label for="">NPN:</label>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <input type="text" id="idnumerodoc" class="form-control" value="Autogenerado" disabled>
                                                                            </div>

                                                                        </div>
                                                                        <br><br>

                                                                        <div class="row text-sm-left mb-5">
                                                                            <div class="col-sm-4">
                                                                                <label for="">Servidumbre</label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-select form-control" id="selecttipodoc">
                                                                                    <option value="">NO APLICA</option>
                                                                                    <option value="">TRANSITO</option>
                                                                                    <option value="">AGUAS_NEGRAS</option>
                                                                                    <option value="">AIRE</option>
                                                                                    <option value="">ENEREGIA_ELECTRICA</option>
                                                                                    <option value="">GASODUCTO</option>
                                                                                    <option value="">LUZ</option>
                                                                                    <option value="">OLEODUCTO</option>
                                                                                    <option value="">AGUA</option>
                                                                                    <option value="">LEGAL_HIDROCARBUROS</option>
                                                                                    <option value="">MEDIANERIA</option>
                                                                                    <option value="">ALCANTARILLADO</option>
                                                                                    <option value="">ACUEDUCTO</option>


                                                                                </select>
                                                                            </div>
                                                                        </div>



                                                                    </div>

                                                                    <div class="col-sm-1"></div>

                                                                    <div class="col-sm-5 mb-3">
                                                                        <div class="row text-sm-left mb-4">
                                                                            <div class="col-sm-6">
                                                                                <label for="">Area Terreno </label>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" id="idnumerodoc" class="form-control" value="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row text-sm-left mb-4">
                                                                            <div class="col-sm-6">
                                                                                <label for="">Area Terreno Comun</label>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" id="iddominotifi" placeholder="" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row text-sm-left mb-5">
                                                                            <div class="col-sm-6">
                                                                                <label for="">Area Total de Terreno
                                                                                    (metros)</label>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" id="idcelular" placeholder="2000" class="form-control" disabled>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row text-sm-left mb-3">
                                                                            <div class="col-sm-6">
                                                                                <label>Estado del Terreno</label>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                                        Retirar Terreno
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br><br>
                                                        <div class="text-center" class="mb-5">
                                                            <button class="btn btn-success warning cancel" id="btnretirar">Guardar</button>
                                                        </div>

                                                        <script>
                                                            $('.widget-content .warning.cancel').on('click', function() {
                                                                const swalWithBootstrapButtons = swal.mixin({
                                                                    confirmButtonClass: 'btn btn-success mt-1',
                                                                    cancelButtonClass: 'btn btn-danger mr-3',
                                                                    buttonsStyling: false,
                                                                })

                                                                swalWithBootstrapButtons({
                                                                    title: 'Alerta',
                                                                    text: "¿Confirma que desea retirar el terreno?",
                                                                    type: 'question',
                                                                    showCancelButton: true,
                                                                    confirmButtonText: 'Confirmar',
                                                                    cancelButtonText: 'Cancelar',
                                                                    reverseButtons: true,
                                                                    padding: '2em'
                                                                }).then(function(result) {
                                                                    if (result.value) {
                                                                        swalWithBootstrapButtons(
                                                                            'Terreno retirado',
                                                                            'El terreno fue retirado satisfactoriamente.',
                                                                            'success'
                                                                        )
                                                                    } else if (
                                                                        // Read more about handling dismissals
                                                                        result.dismiss === swal.DismissReason.cancel
                                                                    ) {
                                                                        swalWithBootstrapButtons(
                                                                            'Cancelado',
                                                                            'El terreno no fue retirado',
                                                                            'error'
                                                                        )
                                                                    }
                                                                })
                                                            })
                                                        </script>

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

<script src="<?php echo base_url(); ?>/assets/js/editor/editor.js"></script>