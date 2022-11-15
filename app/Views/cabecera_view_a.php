<?php /*
$logueo = $this->session->userdata('logueo');
$session = $this->session->userdata('session_id');
$tipo_menu = $this->session->userdata('tipo_menu');
if ($logueo <> "SI") { /* por seguridad hacemos doble verificación; aunque estas
                                               * 2 variables siempre van a tener el mismo estado */
   // redirect('login');
   // exit();
//}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sistema De Gestión CATASTRO-CALI </title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/favicon.ico" />
    <link href="<?php echo base_url(); ?>/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>/assets/js/loader.js"></script>



    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plugins/select2/select2.min.css">

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>/plugins/bootstrap-select/bootstrap-select.min.css">


    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->




    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo base_url(); ?>/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  END CUSTOM STYLE FILE  -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plugins/dt/dt-global_style.css">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plugins/dt/custom_dt_html5.css">
    <!-- END PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL STYLES -->
    <link href="<?php echo base_url(); ?>/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/components/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/components/tabs-accordian/custom-tabs.css" rel="stylesheet"
        type="text/css" />

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plugins/dropify/dropify.min.css">
    <link href="<?php echo base_url(); ?>/assets/css/users/account-setting.css" rel="stylesheet"
        type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->


    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>/assets/css/forms/theme-checkbox-radio.css">
    <link href="<?php echo base_url(); ?>/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"
        type="text/css" />

    <link href="<?php echo base_url(); ?>/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />


    <!--  BEGIN CUSTOM STYLE FILE  -->

    <link href="<?php echo base_url(); ?>/assets/css/users/account-setting.css" rel="stylesheet"
        type="text/css" />
    

    <!--  END CUSTOM STYLE FILE  -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>/plugins/table/datatable/dt-global_style.css">
    <link href="<?php echo base_url() ?>/assets/css/forms/switches.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->



</head>

<link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/font-icons/fontawesome/css/regular.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/font-icons/fontawesome/css/fontawesome.css">

<link href="<?php echo base_url(); ?>/assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>/assets/css/apps/invoice-list.css" rel="stylesheet" type="text/css" />


<link href="<?php echo base_url(); ?>/assets/css/apps/invoice-preview.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/assets/css/apps/invoice-edit.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plugins/dropify/dropify.min.css">
<link rel="stylesheet" type="text/css"
    href="<?php echo base_url(); ?>/assets/css/forms/theme-checkbox-radio.css">
<link href="<?php echo base_url(); ?>/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>/plugins/editors/markdown/simplemde.min.css" rel="stylesheet"  type="text/css" />


<link href="<?php echo base_url(); ?>/plugins/noUiSlider/custom-nouiSlider.css" rel="stylesheet"  type="text/css" />
<link href="<?php echo base_url(); ?>/plugins/bootstrap-range-Slider/bootstrap-slider.css" rel="stylesheet"  type="text/css" />



    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    
    <div class="header-container">
    
        <header class="header navbar navbar-expand-sm" id="background">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

                <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="" >
                 <img alt="logo" src="<?php echo base_url(); ?>/assets/img/cali.png" id="imagenPrevisualizacion"> <span
                        class="navbar-brand-name">CATASTRO CALI</span></a>
                </div>  
                <div class="file-select" >
                <input type="file" id="seleccionArchivos" accept="image/*"></div>
                    <br><br>
                    <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
                    

            <label for="exampleColorInput" class="form-label mt-2" style="color: white; padding: 10px;">Personaliza tu interfaz: </label>
            <input type="color" class=" form-control-color" id="colorPicker" value="" title="Escoge un color:">
            <button class="switchDark active ml-5" id="switch">
                <span id="span-dark"><i class="fa fa-sun-o" style="font-size:23px;"></i></span>
                <span id="span-dark"><i class="fa fa-moon-o" style="font-size:23px;" ></i></span>
                
            </button>
            <style>
                #colorPicker {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background-color: transparent;
                width: 50px;
                height: 50px;
                border: none;
                cursor: pointer;
                }
                #colorPicker::-webkit-color-swatch {
                border-radius: 50%;
                border: 4px solid #ffffff;
                }
                #colorPicker::-moz-color-swatch {
                border-radius: 50%;
                border: 4px solid #ffffff;
                }

            .file-select {
                position: relative;
            display: inline-block;
            }

            .file-select::before {
            background-color: transparent;
            
            
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            content: '.'; /* testo por defecto */
            
            
            margin-left:-300px;
            }

            .file-select input[type="file"] {
            opacity: 0;
            width: 20px;
            height: 20px;
            
            }
            .file-select1 {
                position: relative;
            display: inline-block;
            }

            .file-select1::before {
            background-color: transparent;
            
            
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            content: ''; /* testo por defecto */
            
            
            
            }

            .file-select1 input[type="file"] {
            opacity: 0;
            width: 20px;
            height: 20px;
            
            }

            #seleccionArchivos::before {
            content: '';
            }
            
            .oscuro{ 
                background-color: #1f1f1f; 
                color: #f1eded; 
            }
            .switchDark{
                background-color: #1f1f1f;
                display: flex;
                position: relative;
                cursor: pointer;
                outline: none;
                border: none;
                border-radius: 1rem;
                align-items: center;
                justify-content: space-between;
                box-shadow: 0 0 2.5px 1.5px rgba(250, 205, 182, .3);
               
            }
            .switchDark span{
                width: 32px;
                height: 27px;
                line-height: 35px;
                display: block;
                color: #fff;
                background: none;
                transition: .5s;
                -webkit-transition: .4s;
                
            }
            .switchDark::after{
                display: block;
                background: #fffbf5;
                width: 2.0rem;
                height: 1.8rem;
                position: absolute;
                top: 0;
                left: 0;
                right: unset;
                border-radius: 65%;
                box-shadow: 0 0 2.5px 1.5px rgba(250, 205, 182, .8);
                transition: .5s;
                -webkit-transition: .4s;
                content: "";
            }
            .switchDark.active{
                background: orange;
                
                
            }
            .switchDark.active::after{
                left: unset;
                right: 0;
                
               
            }

          
            body{
                background: #fff;
                color: #000;
                
            }
            body.dark{
                background: #222;
                color: #fff;
                transition: 2.4s ease all;
                
            }

            body.dark div {
                background: #222;
                background-color: #222;
                
            }
            body.dark div navbar-brand{
                background: #222;
                background-color: #222;
                
            }
            

            


            </style>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">

                </li>
            </ul>
            <script>
                let colorPicker = document.getElementById('colorPicker')

                colorPicker.addEventListener('input', e =>  {

                    let parametizable = document.getElementById('background')
                    background.style.background = e.target.value

                })
                const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
                    $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

                    // Escuchar cuando cambie
                    $seleccionArchivos.addEventListener("change", () => {
                    // Los archivos seleccionados, pueden ser muchos o uno
                    const archivos = $seleccionArchivos.files;
                    // Si no hay archivos salimos de la función y quitamos la imagen
                    if (!archivos || !archivos.length) {
                        $imagenPrevisualizacion.src = "";
                        return;
                    }
                    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                    const primerArchivo = archivos[0];
                    // Lo convertimos a un objeto de tipo objectURL
                    const objectURL = URL.createObjectURL(primerArchivo);
                    // Y a la fuente de la imagen le ponemos el objectURL
                    $imagenPrevisualizacion.src = objectURL;
                    });

                    function cambiarModo() { 
                        var cuerpoweb = document.body; 
                        cuerpoweb.classList.toggle("oscuro"); 
                    } 
                    const switchButton = document.getElementById('switch');
                        switchButton.addEventListener('click',()=>{
                            document.body.classList.toggle('dark');
                            switchButton.classList.toggle('active')
                        })
 
            </script>



            <ul class="navbar-item flex-row nav-dropdowns">

                <!-- NOTIFICACIONES Y MENSAJES -->




                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                        <div class="">
                            <a class="dropdown-item">  

                                <div class="data-info">
                                    <center><i class="fa fa-envelope" style="font-size: 20px; color: blue;"></i>
                                    
                                    <b><p class="">No tienes mensajes
                                        nuevos</p></b>
                                    <p class="">Hace 45 minutos</p></center>
                                </div> 

                            </a>
                            
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">38 Tramites por asignar</h6>
                                            <p class="">Hace 45 minutos</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 473.935 473.935" style="enable-background:new 0 0 473.935 473.935;" xml:space="preserve">
                                            <circle style="fill:#EFC849;" cx="236.967" cy="236.967" r="236.967"/>
                                            <path style="fill:#F5F5F5;" d="M144.396,93.788c-8.823,0-15.981,7.158-15.981,15.985v255.755c0,8.827,7.158,15.981,15.981,15.981
                                                h183.827c8.827,0,15.981-7.154,15.981-15.981V167.812l-77.047-74.024H144.396z"/>
                                            <path style="fill:#E1E1E1;" d="M344.207,167.812h-61.066c-8.827,0-15.981-7.154-15.981-15.981V93.788L344.207,167.812z"/>
                                            <g>
                                                <path style="fill:#C9C9C8;" d="M321.719,189.641c0,2.754-2.234,4.992-4.992,4.992H157.08c-2.754,0-4.988-2.238-4.988-4.992l0,0
                                                    c0-2.754,2.234-4.992,4.988-4.992h159.647C319.485,184.65,321.719,186.887,321.719,189.641L321.719,189.641z"/>
                                                <path style="fill:#C9C9C8;" d="M321.719,215.834c0,2.754-2.234,4.992-4.992,4.992H157.08c-2.754,0-4.988-2.238-4.988-4.992l0,0
                                                    c0-2.754,2.234-4.992,4.988-4.992h159.647C319.485,210.842,321.719,213.08,321.719,215.834L321.719,215.834z"/>
                                                <path style="fill:#C9C9C8;" d="M321.719,240.78c0,2.754-2.234,4.992-4.992,4.992H157.08c-2.754,0-4.988-2.238-4.988-4.992l0,0
                                                    c0-2.758,2.234-4.988,4.988-4.988h159.647C319.485,235.789,321.719,238.023,321.719,240.78L321.719,240.78z"/>
                                                <path style="fill:#C9C9C8;" d="M321.719,266.973c0,2.754-2.234,4.992-4.992,4.992H157.08c-2.754,0-4.988-2.238-4.988-4.992l0,0
                                                    c0-2.754,2.234-4.992,4.988-4.992h159.647C319.485,261.981,321.719,264.219,321.719,266.973L321.719,266.973z"/>
                                                <path style="fill:#C9C9C8;" d="M240.649,288.174H157.08c-2.754,0-4.988,2.238-4.988,4.992s2.234,4.992,4.988,4.992h83.569
                                                    c2.758,0,4.992-2.238,4.992-4.992S243.407,288.174,240.649,288.174z"/>
                                            </g>
                                            <circle style="fill:#49A0AE;" cx="328.23" cy="358.014" r="57.062"/>
                                            <g>
                                                <path style="fill:#FFFFFF;" d="M372.27,339.302c-2.496,0.015-4.992,0.015-7.484,0.022c-5.62-12.576-16.625-21.669-30.537-23.846
                                                    c-15.498-2.425-30.331,4.771-39.184,17.437c-3.925,5.62,5.31,10.889,9.205,5.313c12.131-17.373,38.035-15.802,48.681,1.126
                                                    c-2.305,0.007-4.606,0.015-6.915,0.015c-0.644,0-1.108,0.292-1.388,0.696c-0.464,0.498-0.636,1.22-0.146,1.972
                                                    c4.389,6.81,8.778,13.624,13.167,20.434c0.733,1.149,2.327,1.134,3.053-0.007c4.359-6.832,8.707-13.665,13.07-20.501
                                                    C374.512,340.836,373.554,339.302,372.27,339.302z"/>
                                                <path style="fill:#FFFFFF;" d="M353.49,376.697c-12.131,17.366-38.035,15.794-48.681-1.134c2.305-0.007,4.606-0.015,6.915-0.015
                                                    c0.644,0,1.108-0.292,1.388-0.696c0.464-0.498,0.636-1.22,0.153-1.979c-4.393-6.81-8.778-13.616-13.175-20.426
                                                    c-0.733-1.141-2.327-1.134-3.05,0.007c-4.359,6.832-8.711,13.665-13.074,20.501c-0.718,1.126,0.236,2.66,1.523,2.653
                                                    c2.496-0.007,4.992-0.007,7.484-0.015c5.62,12.576,16.625,21.669,30.537,23.846c15.498,2.425,30.331-4.771,39.184-17.429
                                                    C366.62,376.383,357.386,371.114,353.49,376.697z"/>
                                            </g>  
                                        </svg>                                       <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">10 Tramites devueltos</h6>
                                            <p class="">Hace 8 horas</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">26 Registros nuevos</h6>
                                            <p class="">Hace 5min.</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>












                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h4 style="color:white;">Analista Fisico Juridico</h4>
                                <h6><?php //echo $this->session->userdata('NombreUsuario'); ?> </h6>

                                <p><?php //echo $this->session->userdata('UserName'); ?></p>
                                <input type="hidden" class="form-control mb-4" id="id_usuario"
                                    value="<?php //echo $this->session->userdata['IdUsuario']  ?>">

                            </div>
                            <img src="<?php echo base_url(); ?>/assets/img/cali.png" style="height: 40px; width: 40px; border-radius: 100px;" alt="admin-profile" class="img-fluid mt-1" id="imagenPrevisualizacion2">

                            <span class="badge badge-success mr-lg-3 mb-1"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                         <div class="dropdown-item">
                            <div class="file-select1" >
                                <input type="file" id="seleccionArchivos2" accept="image/*"><i class="fa fa-picture-o mr-2" style="margin-left: -15px; font-size: 18px;"></i>Cambiar foto</div>
                        </div>  

                        <div class="dropdown-item" disable>
                            <a href="javascript:void(0);"
                                onclick="leoperfil('<?php //echo $this->session->userdata['UserName'] ?>')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span> Perfil</span>
                            </a>
                        </div>

                        <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg> <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="../login/logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Salir</span>
                            </a>
                        </div>
                             
                    </div>
                </li>
            </ul>
        </header>
    </div>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <!--  BEGIN TOPBAR  -->
        <?php //if ($tipo_menu == "COMPLETO") { ?>
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="<?php echo base_url(); ?>/assets/img/90x90.jpg" class="navbar-logo"
                                alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="<?php echo base_url(); ?>/login/logeo" class="nav-link"> OSC </a>
                    </li>
                </ul>
                <script>
                    
                    const $seleccionArchivos2 = document.querySelector("#seleccionArchivos2"),
                    $imagenPrevisualizacion2 = document.querySelector("#imagenPrevisualizacion2");

                    // Escuchar cuando cambie
                    $seleccionArchivos2.addEventListener("change", () => {
                    // Los archivos seleccionados, pueden ser muchos o uno
                    const archivos = $seleccionArchivos2.files;
                    // Si no hay archivos salimos de la función y quitamos la imagen
                    if (!archivos || !archivos.length) {
                        $imagenPrevisualizacion2.src = "";
                        return;
                    }
                    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                    const primerArchivo2 = archivos[0];
                    // Lo convertimos a un objeto de tipo objectURL
                    const objectURL = URL.createObjectURL(primerArchivo2);
                    // Y a la fuente de la imagen le ponemos el objectURL
                    $imagenPrevisualizacion2.src = objectURL;
                    });
                </script>

                <div id="menu">
                    <ul class="list-unstyled menu-categories" id="topAccordion">
                        <!--  DASHBOARD  -->
                       

                                               <!--  OPERACIONES  -->
                                               <li class="menu single-menu">
                            <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-slack">
                                        <path
                                            d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z">
                                        </path>
                                        <path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z">
                                        </path>
                                        <path
                                            d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z">
                                        </path>
                                        <path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z">
                                        </path>
                                        <path
                                            d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z">
                                        </path>
                                        <path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z">
                                        </path>
                                        <path
                                            d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z">
                                        </path>
                                        <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path>
                                    </svg>

                                    <span>Roles CALI</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                                 <li>
                                    <a href="<?php echo base_url(); ?>/Lider_mutacion/index">Lider Mutación </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/Director_mutacion/index"> Director Catastro</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/Analista_juridico/index"> Analista Físico Jurídico </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/Analista_cartografico/index"> Analista Cartográfico </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/Editor/index"> Editor </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/Tecnico_visitasTerreno/index"> Técnico Visitas Terreno</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/Analista_Calidad/index"> Analista de calidad </a>
                                </li>


                            </ul>
                        </li>


                        <!--  MAS  -->
                       
                    </ul>
                </div>
                <?php   // } ?>

            </nav>
        </div>
        <!--  END TOPBAR  -->


    </div>

    </div>
    <!-- END MAIN CONTAINER -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url(); ?>/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/app.js"></script>
    <script>
    $(document).ready(function() {
        App.init();
    });
    </script>


    <script src="<?php echo base_url(); ?>/plugins/flatpickr/flatpickr.js"></script>


    <script src="<?php echo base_url(); ?>/plugins/file-upload/file-upload-with-preview.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/perfil/perfil.js"></script>


    <script src="<?php echo base_url(); ?>/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url(); ?>/assets/js/perfil/perfil.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/table/datatable/datatables.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/sweetalerts/custom-sweetalert.js"></script>



    <script src="<?php echo base_url(); ?>/plugins/dropify/dropify.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/blockui/jquery.blockUI.min.js"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="<?php echo base_url(); ?>/assets/js/users/account-settings.js"></script>





    <!--  END CUSTOM SCRIPTS FILE  -->


    <script src="<?php echo base_url(); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/file-upload/file-upload-with-preview.min.js"></script>

    <script src="<?php echo base_url(); ?>/plugins/table/datatable/button-ext/dataTables.buttons.min.js">
    </script>
    <script src="<?php echo base_url(); ?>/plugins/table/datatable/button-ext/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/table/datatable/button-ext/buttons.print.min.js"></script>


    <!-- END MAIN CONTAINER -->
    <script src="<?php echo base_url(); ?>/plugins/highlight/highlight.pack.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url(); ?>/plugins/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/bootstrap-maxlength/custom-bs-maxlength.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <script src="<?php echo base_url(); ?>/plugins/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/select2/custom-select2.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/forms/bootstrap_validation/bs_validation_script.js">
    </script>

    <script src="<?php echo base_url(); ?>/assets/js/elements/tooltip.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/bancos/bancos.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/cabecera/cabecera.js"></script>

    <script src="<?php echo base_url(); ?>/plugins/editors/markdown/simplemde.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/editors/markdown/custom-markdown.js"></script>

   
    <script src="<?php echo base_url(); ?>/plugins/noUiSlider/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script>

    <body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
 