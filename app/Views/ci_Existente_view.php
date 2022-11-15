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
                                                        </div><br><br><br>
                                                        <center>
                                                            <h2>Ingrese el número de documento:</h2><br><br>
                                                            <div class="row">
                                                                <div class="col-sm-6 m-auto">
                                                                    <center><label>Documento de Identificación: </label>
                                                                        <input type="text" id="doc_id" class="form-control" value="12345">
                                                                    </center>
                                                                </div>
                                                            </div><br>
                                                            <center><button class="btn btn-primary warning cancel mt-3" onclick="llamar_vista('en_espera_de_nombre')">Consultar</button></center>
                                                            <div class="row text-sm-left col-sm-12">
                                                                <div class="col-sm-12">
                                                                    <br>
                                                                    <label>Si el número de documento consultado existe en la base de datos del sistema, deberá redireccionarlo a la asociación de información con la fuente administrativa</label>
                                                                    <br>
                                                                    <br>
                                                                    <label>Si el número de documento consultado no existe en la base de datos del sistema, mostrará un mensaje informativo con el texto "No existe el número de identificación consultado"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <a href="#" onclick="llamar_vista('mi_Existente_view')" style="color: blue; text-decoration: underline;">Si el número de identificación no existe</a></label>
                                                                    <button class="btn btn-primary warning cancel mt-3" onclick="llamar_vista('mi_Existente_view')" style="float: right;">Incorporar Nuevo Interesado</button> 
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
                    <!-- Modal -->
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>/assets/js/lider_mutacion/lider_mutacion.js"></script>