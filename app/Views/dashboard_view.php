 <!--  BEGIN CONTENT PART  -->
 <div id="content" class="main-content">
     <div class="layout-px-spacing">
         <div class="page-header">
             <nav class="breadcrumb-one" aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboad</a></li>
                     <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">General</a>
                     </li>
                 </ol>
             </nav>
             <div class="dropdown filter custom-dropdown-icon">
                 <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false"><span class="text"><span>Mostrar</span> : Analítica del
                         día</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-chevron-down">
                         <polyline points="6 9 12 15 18 9"></polyline>
                     </svg></a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                     <a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics"
                         href="javascript:void(0);">Analítica del día</a>
                     <a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics"
                         href="javascript:void(0);">Semana Analítica</a>
                     <a class="dropdown-item" data-value="<span>Show</span> : Monthly Analytics"
                         href="javascript:void(0);">Mes AnAnalíticaalytics</a>
                     <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Descargar Todo</a>
                     <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Compartir
                         estadísticas</a>
                 </div>
             </div>
         </div>

         <div class="row layout-top-spacing">

             <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                 <div class="widget widget-one">
                     <div class="widget-heading">
                         <h6 class="">Terceros</h6>

                         <div class="task-action">
                             <div class="dropdown">
                                 <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-horizontal">
                                         <circle cx="12" cy="12" r="1"></circle>
                                         <circle cx="19" cy="12" r="1"></circle>
                                         <circle cx="5" cy="12" r="1"></circle>
                                     </svg>
                                 </a>

                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask"
                                     style="will-change: transform;">
                                     <a class="dropdown-item" href="javascript:void(0);">Ver</a>
                                     <a class="dropdown-item" href="javascript:void(0);">Descargar</a>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <div class="w-chart">

                         <div class="w-chart-section total-visits-content">

                             <div class="w-detail">
                                 <p class="w-title">Nº Terceros</p>
                                 <p class="w-stats" id="tterceros">0</p>
                             </div>

                         </div>


                         <div class="w-chart-section paid-visits-content">
                             <div class="w-detail">
                                 <p class="w-title">Nº Clientes</p>
                                 <p class="w-stats" id="tclientes">0</p>
                             </div>

                         </div>

                         <div class="w-chart-section paid-visits-content">
                             <div class="w-detail">
                                 <p class="w-title">Nº Proveedores</p>
                                 <p class="w-stats" id="tproveedores">0</p>
                             </div>

                         </div>

                     </div>
                 </div>
             </div>

             <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="row widget-statistic">
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                         <div class="widget widget-one_hybrid widget-followers">
                             <div class="widget-heading">
                                 <div class="w-title">
                                     <div class="w-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-users">
                                             <path d="M17 21v-2a4 4 0 0 0-4-4H4a4 4 0 0 0-4 4v2"></path>
                                             <circle cx="9" cy="7" r="4"></circle>
                                             <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                             <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                         </svg>
                                     </div>
                                     <div class="">
                                         <p class="w-value" id="tusuarios">0</p>
                                         <H4 class="">Usuarios</H4>
                                     </div>
                                 </div>
                             </div>
                             <div class="widget-content">
                                 <div class="w-chart">
                                     <div id="hybrid_followers"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                         <div class="widget widget-one_hybrid widget-referral">
                             <div class="widget-heading">
                                 <div class="w-title">
                                     <div class="w-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-link">
                                             <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                             </path>
                                             <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                             </path>
                                         </svg>
                                     </div>
                                     <div class="">
                                         <p class="w-value" id="tproyectos">0</p>
                                         <H4 class="">Proyectos</H4>
                                     </div>
                                 </div>
                             </div>
                             <div class="widget-content">
                                 <div class="w-chart">
                                     <div id="hybrid_followers1"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                         <div class="widget widget-one_hybrid widget-engagement">
                             <div class="widget-heading">
                                 <div class="w-title">
                                     <div class="w-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-message-circle">
                                             <path
                                                 d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                             </path>
                                         </svg>
                                     </div>
                                     <div class="">
                                         <p class="w-value" id="tsolicitudes">0</p>
                                         <H4 class="">Solicitudes</H4>
                                     </div>
                                 </div>
                             </div>
                             <div class="widget-content">
                                 <div class="w-chart">
                                     <div id="hybrid_followers3"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

       

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                
             </div>

     

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
          
             </div>








         </div>



         <!--  END CONTENT PART  -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
         <script src="<?php echo base_url(); ?>/assets/js/dashboard/dashboard.js"></script>
        
