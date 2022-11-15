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
                                                            <p style="font-size: 15px;"><b>Analisis del tramite</b></p>
                                                        </legend>

                                                        <div class="row text-center">
                                                            <div class="col-sm-3">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Numero de Radicado</label>
                                                                    <a href="" id="numradicado" class="link-primary" style="color: blue;">7600300000001 </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Fecha radicado</label>
                                                                    <input type="text" class="form-control" id="fecharadicado" placeholder="10/11/2021: 10:05 am">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Tipo Edicion</label>
                                                                    <select class="form-select form-control" name="" id="select">
                                                                        <option value="">Edicion alfanumerica y cartografia</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr>

                                                        <label for="" style="color: red;">
                                                            Operación Catastral (Esta pantalla es solo demostrativa y no debe tenerse en cuenta para implementar)
                                                        </label>

                                                        <div class="container-fluid shadow p-3 mb-5 bg-white rounded">
                                                            <center><label for="" style="color: black;">
                                                                    Si la digitación de la operación es mutación de Segunda Mostrara opciones de Submenus:
                                                                </label></center>
                                                            <hr style="color: black;">

                                                            <div class="row">
                                                                <div class="col-sm-11 lg-10 mb-3">
                                                                    <div class="row text-center">
                                                                        <div class="col-sm-4">
                                                                            <label for="">Operaciones englobe:</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Englobe de predios
                                                                                </label>
                                                                            </div>
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Englobe de mejora y terreno
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3 text-left">
                                                                            <button type="button" onclick="llamar_vista('en_Editor_view')" style="width: 150px;" class="btn btn-outline-primary">Englobar</button>
                                                                        </div>
                                                                    </div>

                                                                    <hr>

                                                                    <div class="row text-center">
                                                                        <div class="col-sm-4">
                                                                            <label for="">Operaciones desenglobe:</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Segregacion
                                                                                </label>
                                                                            </div>
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Division material
                                                                                </label>
                                                                            </div>
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Loteo
                                                                                </label>
                                                                            </div>
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Reloteo
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3 text-left">
                                                                            <button type="button" onclick="llamar_vista('en_Editor_view')" style="width: 150px;" class="btn btn-outline-primary">Desenglobar</button>
                                                                        </div>
                                                                    </div>

                                                                    <hr>

                                                                    <div class="row text-center">
                                                                        <div class="col-sm-5">
                                                                            <select class="form-select form-control" name="" id="select">
                                                                                <option value="">Incorporacion de propiedad horizontal</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row text-center">
                                                                        <div class="col-sm-4">
                                                                            <label for="">Operaciones incorporacion:</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Conservar predio matriz
                                                                                </label>
                                                                            </div>
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Cancelar predio matriz
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3 text-left">
                                                                            <button type="button" onclick="llamar_vista('en_Editor_view')" style="width: 150px;" class="btn btn-outline-primary">Incorporar PH</button>
                                                                        </div>
                                                                    </div>

                                                                    <hr>

                                                                    <div class="row text-center">
                                                                        <div class="col-sm-5">
                                                                            <select class="form-select form-control" name="" id="select">
                                                                                <option value="">Reforma al reglamento de propiedad horizontal</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row text-center">
                                                                        <div class="col-sm-4">
                                                                            <label for="">Operaciones reforma PH:</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Conservar predio matriz
                                                                                </label>
                                                                            </div>
                                                                            <div class="n-chk">
                                                                                <label class="new-control new-radio radio-classic-primary">
                                                                                    <input type="radio" class="new-control-input" name="custom-radio-2">
                                                                                    <span class="new-control-indicator"></span>Cancelar predio matriz
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3 text-left">
                                                                            <button type="button" onclick="llamar_vista('en_Editor_view')" class="btn btn-outline-primary">Reforma reglamento PH</button>
                                                                        </div>
                                                                    </div>

                                                                    <hr>

                                                                    <center><label for="" style="color: black;">
                                                                            Si la digitación de la operación es mutación de Tercera
                                                                        </label></center>
                                                                    <hr>

                                                                    <div class="row mb-3 text-center">
                                                                        <div class="col-sm-1"></div>
                                                                        <div class="col-sm-6">
                                                                            <select class="form-select form-control" name="" id="select">
                                                                                <option value="">Incorporacion de construcciones</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <button type="button" style="width: 260px;" onclick="llamar_vista('ecmt_Editor_view')" class="btn btn-outline-primary">Incorporacion de construcciones</button>
                                                                        </div>
                                                                    </div>

                                                                    <hr>

                                                                    <div class="row mb-3 text-center">
                                                                        <div class="col-sm-1"></div>
                                                                        <div class="col-sm-6">
                                                                            <select class="form-select form-control" name="" id="select">
                                                                                <option value="">Demolicion de construcciones</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <button type="button" style="width: 260px;" onclick="llamar_vista('ecmt_Editor_view')" class="btn btn-outline-primary">Demolicion de construcciones</button>
                                                                        </div>
                                                                    </div>

                                                                    <hr>

                                                                    <div class="row mb-3 text-center">
                                                                        <div class="col-sm-1"></div>
                                                                        <div class="col-sm-6">
                                                                            <select class="form-select form-control" name="" id="select">
                                                                                <option value="">Modificacion de construcciones</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <button type="button" style="width: 260px;" onclick="llamar_vista('ecmt_Editor_view')" class="btn btn-outline-primary">Modificacion de construcciones</button>
                                                                        </div>
                                                                    </div>
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

<script src="<?php echo base_url(); ?>/assets/js/analista_cartografico/analista_cartografico.js"></script>