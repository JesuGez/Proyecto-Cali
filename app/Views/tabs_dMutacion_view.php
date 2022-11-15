<!--  BEGIN MAIN CONTAINER  -->

<link href="<?php echo base_url(); ?>/assets/css/claves/auth-cover.css" rel="stylesheet" type="text/css" />

<div id="listado_empleados">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN CONTENT AREA  -->

    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row layout-top-spacing">
                        <div id="tabsSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="widget-content widget-content-area simple-tab">
                                <div class="widget-content widget-content-area underline-content">
                                    <ul class="nav nav-tabs  mb-3" id="animateLine" role="tablist">
                                        <li class="nav-item" id="ta_dmutacion">
                                            <a class="nav-link active" id="animated-underline-home-tab" data-toggle="tab" onclick="llamar_vista('ta_dMutacion_view')" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
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
                                                </svg> Trámites Por Aprobar</a>
                                        </li>
                                        <li class="nav-item" id="dt_dmutacion">
                                            <a class="nav-link" id="animated-underline-profile-tab" data-toggle="tab" onclick="llamar_vista('dt_dMutacion_view')" role="tab" aria-controls="animated-underline-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg> Devolver Trámites </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-contact-tab" data-toggle="tab" href="#Tramites_devueltos" role="tab" aria-controls="animated-underline-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                    <polyline points="2 17 12 22 22 17"></polyline>
                                                    <polyline points="2 12 12 17 22 12"></polyline>
                                                </svg> Generar Informes</a>
                                        </li>
                                    </ul>
                                    <style>
                                        #ta_dmutacion a:hover {
                                            background-color: #0D1A59;
                                            box-shadow: 0 0 2.5px 1.5px rgba(178, 174, 235, .3);
                                            color: white;
                                            transform: scale(1.1);
                                            transition-duration: .6s;
                                        }

                                        #dt_dmutacion a:hover {
                                            background-color: #0D1A59;
                                            box-shadow: 0 0 2.5px 1.5px rgba(178, 174, 235, .3);
                                            color: white;
                                            transform: scale(1.1);
                                            transition-duration: .6s;
                                        }
                                    </style>


                                    <div class="row">
                                        <div class="col-md-12">

                                            <div id="contenedor_view" class="content"></div>
                                        </div>
                                    </div>









                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--  BEGIN CONTENT AREA  -->
            </div>
        </div>
    </div>



    <!-- END MAIN CONTAINER -->

    <!-- END MAIN CONTAINER -->

    <script src="<?php echo base_url(); ?>/assets/js/director_mutacion/director_mutacion.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/claves/bootstrap.bundle.min.js"></script>


    </script>

    <script>
        llamar_vista('ta_dMutacion_view')
        $('#ver_empleados').hide();
        $('#alta_empleados').hide();
        $('#listado_empleados').show();
    </script>