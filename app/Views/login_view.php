<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>OSC - Login Page</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>public/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/forms/switches.css">
</head>

<body class="form">






    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content" id="i_login" name="i_login">

                        <h1 class="">Log In to <a href="<?php echo base_url(); ?>"><span
                                    class="brand-name">PREDIUMTECH</span></a></h1>
                        <p class="signup-link">Hola, Nos encanta verte por acá!!! </p>
                        <form class="text-left">
                            <div class="form">
                                <div id='msgerror' class="alert alert-danger" role="alert">Los datos son incorrectos
                                </div>

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="username" type="text" class="form-control"
                                        placeholder="Usuario">
                                    <div id='msg_username' class="padding"></div>
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="Password">
                                    <div id='msg_password' class="padding"></div>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Mostrar Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button id="btn_acceder" onclick="logeo()" class="btn btn-primary"
                                            value="">Acceder</button>
                                    </div>



                                </div>

                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" class="new-control-input">
                                            <span class="new-control-indicator"></span>Mantenerme conectado
                                        </label>
                                    </div>
                                </div>

                                <div class="field-wrapper">
                                    <a href="" onclick="olvide_password()" class="forgot-pass-link">Olvidaste la
                                        Password?</a>
                                </div>

                            </div>
                        </form>
                        <p class="terms-conditions">© 2022 All Rights Reserved. <a href="index.html">DELOGICA
                                COLOMBIA</a> es propietaria del producto. <a href="javascript:void(0);">Cookie
                                Preferencias</a>, <a href="javascript:void(0);">Privacidad</a>, y <a
                                href="javascript:void(0);">Terminos</a>.</p>

                    </div>

                    <div class="form-content" id="recuperar" name="recuperar">
                    <div id='msgerror1' class="alert alert-danger" role="alert">Los datos suministrados son incorrectos</div>

                        <h1 class="">Recuperar Password</h1>
                        <p class="signup-link">Ingrese su correo electrónico y se le enviarán instrucciones!</p>
                        <form class="text-left">
                            <div class="form">

                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-at-sign">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                    <input id="email" name="email" type="text" value="" placeholder="Email">
                                    <div id='msg_email' class="padding"></div>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="button" onclick="recuperar_password()" class="btn btn-primary"
                                            value="" id="btn_recuperar">Recuperar</button>
                                    </div>
                                </div>

                            </div>

                        </form>


                        <p class="terms-conditions">© 2022 All Rights Reserved. <a href="index.html">DELOGICA
                                COLOMBIA</a> es propietaria del producto. <a href="javascript:void(0);">Cookie
                                Preferencias</a>, <a href="javascript:void(0);">Privacidad</a>, y <a
                                href="javascript:void(0);">Terminos</a>.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url(); ?>/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/bootstrap/js/popper.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url(); ?>/assets/js/authentication/form-1.js"></script>

    <script src="<?php echo base_url(); ?>public/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>public/plugins/sweetalerts/custom-sweetalert.js"></script>


</body>

</html>