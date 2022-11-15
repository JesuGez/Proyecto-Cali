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
                                                            <p style="font-size: 15px;"><b>Construcción</b></p>
                                                        </legend>


                                                        <div class="row layout-top-spacing" id="cancel-row">
                                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                                                                <div class="row mb-5">
                                                                    <div class="col-sm-1"></div>
                                                                    <div class="col-sm-5">
                                                                        <div class="row text-sm-left mb-4">
                                                                            <div class="col-sm-6">
                                                                                <label for="">Identificacion del predio</label>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" id="id_predio" placeholder="Autogenerado" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row text-sm-left mb-4">
                                                                            <div class="col-sm-3">
                                                                                <label for="">NPN:</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" id="npn" placeholder="Autogenerado" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-5">
                                                                    <div class="col-sm-10 lg-10 text-center">
                                                                        <label for="" style="font-size: 18px;"><b>Seleccione el tipo de construcción a crear</b></label>
                                                                        <div class="row">
                                                                            <div class="col"></div>
                                                                            <div class="col ml-5">
                                                                                <button id="btnconvencional" class="btn btn-outline-primary" onclick="llamar_vista('crear_constr_view')">Convencional</button>
                                                                            </div>
                                                                            <div class="col mr-5">
                                                                                <button id="btnconvencional" class="btn btn-outline-primary" onclick="llamar_vista('Contruccion1_view')">No Convencional</button>
                                                                            </div>
                                                                            <div class="col"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-right">
                                                                    <button id="btnagregarcontac" class="btn btn-primary mb-2 mr-2 rounded-circle">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill:#FFFFFF;">
                                                                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0
                                                                                         45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                                                        </svg></button>
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