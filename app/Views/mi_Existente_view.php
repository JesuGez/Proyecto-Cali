

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
                                                    <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded" style="border-radius: 10px; color:black;">
                                                        <legend style="border-bottom:none; padding:0 10px;">
                                                        <p style="font-size: 15px;"><b>Información Jurídica</b></p>
                                                    </legend>
                                                    <div class="row text-sm-left col-sm-12">
                                                        <div class="col-sm-6">
                                                            <label for="id_predio">Identificación del predio:</label>
                                                            <input type="text" id="id_predio" class="form-control" value="12345" disabled>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="npn">NPN:</label>
                                                            <input type="text" id="npn" class="form-control" value="760050100020000000000900000001" disabled>
                                                        </div>
                                                    </div><br><br><br><center><h2>Ingrese el numero de documento:</h2><br><br>
                                                    <div class="row">
                                                        <div class="col-sm-6 m-auto">
                                                       
                                                        <center><label>Documento de Identificación: </label>
                                                            <input type="text" id="doc_id" class="form-control" value="12345"> </center>
                                                        </div>                                                   
                                                    </div><br>
                                                    <center><button class="btn btn-primary warning cancel mt-3">Consultar</button></center>
                                                    <div class="row text-sm-left col-sm-12">
                                                        <div class="col-sm-12">
                                                            <br>
                                                            <label style>Si el número de documento consultado no existe en la base de datos de la aplicación movil, mostrará un mensaje informativo
con el texto "No existe el número de identificación consultado</label>  
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

    <script>
                                            $('.widget-content .warning.cancel').on('click', function () {
                                                const swalWithBootstrapButtons = swal.mixin({
                                                confirmButtonClass: 'btn btn-outline-success mt-2',
                                                cancelButtonClass: 'btn btn-outline-danger ',
                                                buttonsStyling: false,
                                                })
                                            
                                                swalWithBootstrapButtons({
                                                title: 'Verifique! No existe esta identificación',
                                                text: "¿Desea crear una nuevo interesado?",
                                                type: 'warning',
                                               
                                                showCancelButton: true,
                                                confirmButtonText: 'Aceptar',
                                                cancelButtonText: 'Cancelar',
                                                reverseButtons: true,
                                                padding: '0.5em'
                                                }).then(function(result) {
                                                if (result.value) {
                                                    swalWithBootstrapButtons(
                                                    'Asignado!',
                                                    'Tramite asignado correctamente',
                                                    'success'
                                                    )
                                                } else if (
                                                    // Read more about handling dismissals
                                                    result.dismiss === swal.DismissReason.cancel
                                                ) {
                                                    swalWithBootstrapButtons(
                                                    'Cancelado!',
                                                    'No se ha creado ningun interesado',
                                                    'error'
                                                    )
                                                }
                                                })
                                            })
                                        </script>

    <!-- Modal -->
    
</div>
</div>

</div>

<script src="<?php echo base_url(); ?>/assets/js/lider_mutacion/lider_mutacion.js"></script>