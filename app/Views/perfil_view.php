<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?php echo base_url(); ?>/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plugins/dropify/dropify.min.css">
<link href="<?php echo base_url(); ?>/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />



<!--  BEGIN CONTENT AREA  -->



<div id="content" class="main-content">


    <div id="perfil_edit">
        <div class="layout-px-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Perfil</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Editar
                                Perfil</a></li>
                    </ol>
                </nav>
            </div>

            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                        data-offset="-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="general-info" class="section general-info">
                                    <div class="info">
                                        <h6 class="">Información General</h6>
                                        <div class="row">

                                            <div class="col-lg-11 mx-auto">
                                                <div class="col-md-12 text-right mb-5">
                                                    <button id="btn_grabar" class="btn btn-primary">Grabar</button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <input type="file" id="input-file-max-fs" class="dropify"
                                                                data-default-file="<?php echo base_url(); ?>/assets/img/200x200.jpg"
                                                                data-max-file-size="2M" />
                                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>
                                                                Cargar Imagen</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Nombre </label>
                                                                        <input type="text" class="form-control mb-4"
                                                                            id="nombre" placeholder=""
                                                                            value=" <?php echo $this->session->userdata['NombreUsuario']  ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Apellidos </label>
                                                                        <input type="text" class="form-control mb-4"
                                                                            id="apellidos"
                                                                            placeholder=" <?php echo $this->session->userdata['ApellidoUsuario'] ?>"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="profession">Cargo</label>
                                                                <input type="text" class="form-control mb-4"
                                                                    id="profession" placeholder=""
                                                                    value="<?php echo $this->session->userdata['Cargo']  ?>"
                                                                    readonly>

                                                            </div>

                                                            <div class="form-group">
                                                                <label class="dob-input">Fecha Cumpleaños</label>
                                                                <div class="d-sm-flex d-block">
                                                                    <div class="form-group mr-1">
                                                                        <select class="form-control"
                                                                            id="exampleFormControlSelect1">
                                                                            <option>Day</option>
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                            <option>7</option>
                                                                            <option>8</option>
                                                                            <option>9</option>
                                                                            <option>10</option>
                                                                            <option>11</option>
                                                                            <option>12</option>
                                                                            <option>13</option>
                                                                            <option>14</option>
                                                                            <option>15</option>
                                                                            <option>16</option>
                                                                            <option>17</option>
                                                                            <option>18</option>
                                                                            <option>19</option>
                                                                            <option selected>20
                                                                            </option>
                                                                            <option>21</option>
                                                                            <option>22</option>
                                                                            <option>23</option>
                                                                            <option>24</option>
                                                                            <option>25</option>
                                                                            <option>26</option>
                                                                            <option>27</option>
                                                                            <option>28</option>
                                                                            <option>29</option>
                                                                            <option>30</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group mr-1">
                                                                        <select class="form-control" id="month">
                                                                            <option>Mes
                                                                            </option>
                                                                            <option selected>Ene
                                                                            </option>
                                                                            <option>Feb</option>
                                                                            <option>Mar</option>
                                                                            <option>Abr</option>
                                                                            <option>May</option>
                                                                            <option>Jun</option>
                                                                            <option>Jul</option>
                                                                            <option>Ago</option>
                                                                            <option>Sep</option>
                                                                            <option>Oct</option>
                                                                            <option>Nov</option>
                                                                            <option>Dic</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group mr-1">
                                                                        <select class="form-control" id="year">
                                                                            <option>Año
                                                                            </option>
                                                                            <option>2018
                                                                            </option>
                                                                            <option>2017
                                                                            </option>
                                                                            <option>2016
                                                                            </option>
                                                                            <option>2015
                                                                            </option>
                                                                            <option>2014
                                                                            </option>
                                                                            <option>2013
                                                                            </option>
                                                                            <option>2012
                                                                            </option>
                                                                            <option>2011
                                                                            </option>
                                                                            <option>2010
                                                                            </option>
                                                                            <option>2009
                                                                            </option>
                                                                            <option>2008
                                                                            </option>
                                                                            <option>2007
                                                                            </option>
                                                                            <option>2006
                                                                            </option>
                                                                            <option>2005
                                                                            </option>
                                                                            <option>2004
                                                                            </option>
                                                                            <option>2003
                                                                            </option>
                                                                            <option>2002
                                                                            </option>
                                                                            <option>2001
                                                                            </option>
                                                                            <option>2000
                                                                            </option>
                                                                            <option>1999
                                                                            </option>
                                                                            <option>1998
                                                                            </option>
                                                                            <option>1997
                                                                            </option>
                                                                            <option>1996
                                                                            </option>
                                                                            <option>1995
                                                                            </option>
                                                                            <option>1994
                                                                            </option>
                                                                            <option>1993
                                                                            </option>
                                                                            <option>1992
                                                                            </option>
                                                                            <option>1991
                                                                            </option>
                                                                            <option>1990
                                                                            </option>
                                                                            <option selected>
                                                                                1989</option>
                                                                            <option>1988
                                                                            </option>
                                                                            <option>1987
                                                                            </option>
                                                                            <option>1986
                                                                            </option>
                                                                            <option>1985
                                                                            </option>
                                                                            <option>1984
                                                                            </option>
                                                                            <option>1983
                                                                            </option>
                                                                            <option>1982
                                                                            </option>
                                                                            <option>1981
                                                                            </option>
                                                                            <option>1980
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form id="contact" class="section contact">
                                    <div class="info">
                                        <h5 class="">Contacto</h5>
                                        <div class="row">
                                            <div class="col-md-11 mx-auto">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="country">Pais</label>
                                                            <select class="form-control" id="country">
                                                                <option value="70">
                                                                    COLOMBIA
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Teléfono</label>
                                                            <input type="text" class="form-control mb-4" id="phone"
                                                                placeholder=""
                                                                value="<?php echo $this->session->userdata['Telefono']  ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="text" class="form-control mb-4" id="email"
                                                                placeholder=""
                                                                value="<?php echo $this->session->userdata['E_mail']  ?>">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>












                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>


    <div id="perfil">
        <div class="layout-px-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Perfil</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">User
                                Profile</a></li>
                    </ol>
                </nav>
            </div>

            <div class="account-settings-container layout-top-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">Info</h3>
                                    <a href="javascript:void(0);" onclick="edit_perfil()" class="mt-2 edit-profile">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-3">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg></a>
                                </div>
                                <div class="text-center user-info">
                                    <img src="<?php echo base_url(); ?>/assets/img/90x90.jpg" alt="avatar">
                                    <p id="nombre_perfil" class="">
                                        <?php echo $this->session->userdata['NombreUsuario'] . ' ' . $this->session->userdata['ApellidoUsuario'] ?>
                                    </p>
                                </div>
                                <div class="user-info-list">

                                    <div class="">
                                        <ul class="contacts-block list-unstyled">
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-coffee">
                                                    <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                    <line x1="6" y1="1" x2="6" y2="4"></line>
                                                    <line x1="10" y1="1" x2="10" y2="4"></line>
                                                    <line x1="14" y1="1" x2="14" y2="4"></line>
                                                </svg> <?php echo $this->session->userdata['Cargo']  ?>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-calendar">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg><?php echo $this->session->userdata['F_Nacimiento']  ?>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-map-pin">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg><?php echo $this->session->userdata['Pais']  ?>
                                            </li>
                                            <li class="contacts-block__item">
                                                <a href="mailto:example@mail.com"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-mail">
                                                        <path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                    </svg></a><?php echo $this->session->userdata['E_mail']  ?>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-phone">
                                                    <path
                                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                    </path>
                                                </svg> <?php echo $this->session->userdata['Telefono']  ?>
                                            </li>
                                            <li class="contacts-block__item">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <div class="social-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-facebook">
                                                                <path
                                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div class="social-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-twitter">
                                                                <path
                                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div class="social-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-linkedin">
                                                                <path
                                                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                                </path>
                                                                <rect x="2" y="9" width="4" height="12"></rect>
                                                                <circle cx="4" cy="4" r="2"></circle>
                                                            </svg>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  datos extras 
                        <div class="education layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Formación</h3>
                                <div class="timeline-alter">
                                    <div class="item-timeline">
                                        <div class="t-meta-date">
                                            <p class="">01 Mar 2021</p>
                                        </div>
                                        <div class="t-dot">
                                        </div>
                                        <div class="t-text">
                                            <p>Módulo Talento Humano</p>
                                            <p>Sin activar</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="work-experience layout-spacing ">

                            <div class="widget-content widget-content-area">

                                <h3 class="">Experiencia Laborar</h3>

                                <div class="timeline-alter">

                                    <div class="item-timeline">
                                        <div class="t-meta-date">
                                            <p class="">01 Mar 2021</p>
                                        </div>
                                        <div class="t-dot">
                                        </div>
                                        <div class="t-text">
                                            <p>Módulo Talento Humano</p>
                                            <p>Sin activar</p>
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>

                        -->

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                        <div class="skills layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Cambiar Contraseña</h3>
                                <div class="col-xs-6 col-md-6">
                                    <label for="contrasena_actual">Contraseña Actual</label>
                                    <input type="text" class="form-control mb-4" id="contrasena_actual" placeholder=""
                                        value="">
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <label for="contrasena_nueva">Nueva Contraseña</label>
                                    <input type="text" class="form-control mb-4" id="nueva_contrasena" placeholder=""
                                        value="">
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <label for="contrasena_repetir">Repetir Contraseña</label>
                                    <input type="text" class="form-control mb-4" id="repetir_nueva_contrasena"
                                        placeholder="" value="">
                                </div>
                                <div class="col-md-12 text-right mb-5">
                                    <button id="btn_cambiar" class="btn btn-primary">Cambiar</button>
                                </div>
                            </div>
                        </div>
                        <!-- 
                        <div class="bio layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Bio</h3>
                                <p>Módulo Talento Humano.</p>

                                <p>Sin Activar.</p>

                                <div class="bio-skill-box">

                                    <div class="row">

                                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                            <div class="d-flex b-skills">
                                                <div>
                                                </div>
                                                <div class="">
                                                    <h5>Talento Humano</h5>
                                                    <p>sin activar.</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                            <div class="d-flex b-skills">
                                                <div>
                                                </div>
                                                <div class="">
                                                    <h5></h5>
                                                    <p></p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">

                                            <div class="d-flex b-skills">
                                                <div>
                                                </div>
                                                <div class="">
                                                    <h5></h5>
                                                    <p></p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">

                                            <div class="d-flex b-skills">
                                                <div>
                                                </div>
                                                <div class="">
                                                    <h5></h5>
                                                    <p></p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        -->
                    </div>

                </div>
            </div>
        </div>

    </div>


</div>



<!--  END CONTENT AREA  -->
<!-- END MAIN CONTAINER -->
<script src="<?php echo base_url(); ?>/plugins/dropify/dropify.min.js"></script>
<script src="<?php echo base_url(); ?>/plugins/blockui/jquery.blockUI.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/users/account-settings.js"></script>