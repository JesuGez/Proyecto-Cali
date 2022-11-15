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
                                                            <p style="font-size: 15px;"><b>Terreno</b></p>
                                                        </legend>


                                                        <div class="row layout-top-spacing" id="cancel-row">
                                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                                                                <div class="row">
                                                                    <div class="col-sm-2"></div>
                                                                    <div class="col-sm-5">
                                                                        <div class="row text-sm-left mb-4">
                                                                            <div class="col-sm-6">
                                                                                <label for="">Identificacion del predio</label>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" id="id_predio" placeholder="12345" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row text-sm-left mb-4">
                                                                            <div class="col-sm-3">
                                                                                <label for="">NPN:</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" id="npn" placeholder="760050100020000110000900000001" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <hr>

                                                                <div class="row text-left mb-5">
                                                                    <div class="col-sm-8">
                                                                        <div class="row layout-top-spacing" id="cancel-row">
                                                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                                                                                <table id="table_terreno" class="table table-hover non-hover table-responsive">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Unidad Terreno</th>
                                                                                            <th>Vige_Terreno</th>
                                                                                            <th>Ubicacion</th>
                                                                                            <th>Area de Terreno</th>
                                                                                            <th>ZH</th>
                                                                                            <th>ZHFisica</th>
                                                                                            <th>%_Z</th>
                                                                                            <th>Area com</th>
                                                                                            <th>Area Total Terreno</th>
                                                                                            <th>Valor Terreno</th>
                                                                                            <th>Estado_Terreno</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>2022</td>
                                                                                            <td>U</td>
                                                                                            <td>1340.90</td>
                                                                                            <td>23</td>
                                                                                            <td>7800004</td>
                                                                                            <td>40%</td>
                                                                                            <td>659.1</td>
                                                                                            <td>2000.00</td>
                                                                                            <td>$400.000</td>
                                                                                            <td>Activo</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>2022</td>
                                                                                            <td>R</td>
                                                                                            <td>1340.90</td>
                                                                                            <td>23</td>
                                                                                            <td>7800004</td>
                                                                                            <td>60%</td>
                                                                                            <td>659.1</td>
                                                                                            <td>2000.00</td>
                                                                                            <td>$100.000</td>
                                                                                            <td>Activo</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="row text-center">
                                                                            <div class="col">
                                                                                <label for="">Editar terreno</label>
                                                                                <button id="btneditarterreno" class="btn btn-outline-primary mt-4">Editar</button>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="">Retirar terreno</label>
                                                                                <button id="btnretirarterreno" class="btn btn-outline-secondary mt-4">Retirar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <div class="col-xl-12 col-lg-7 col-md-7 col-sm-5 text-center align-self-center">
                                                                        <div class="row">
                                                                            <div class="col-sm-10 text-right">
                                                                            </div>
                                                                            <div class="col-sm-2 text-left">
                                                                                <button id="btnagregarterreno" class="btn btn-primary mb-2 mr-2 rounded-circle">
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

</div>

<script src="<?php echo base_url(); ?>/assets/js/editor/editor.js"></script>