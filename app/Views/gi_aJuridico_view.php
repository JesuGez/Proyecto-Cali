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

                                                

                                                    <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded">
                                                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                            <p style="font-size: 15px;"><b>INFORME FISICO JURIDICO:</b></p>
                                                        </legend>
                                                        <div>
                                                        <div class="row">
                                                            <div class="col-lg-12 mx-auto">
                                                                <div class="row">
                                                                    <div class="col-sm-4">Ver ficha catastral de radicado: <b>7600300000001</b></div>
                                                                    <div class="col-sm-4" style="text-align: left;">Fecha Radicación:<b>10/10/2021</b></div>
                                                                    <div class="col-sm-4">
                                                                        <label class="dob-input">Dias tramite:</label>
                                                                        <input type="text" id="dias_tramite" class="form-control mb-4" style="width: 20%; background-color: green;" disabled placeholder="" value="29">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                                    <div class="col-sm-2">

                                                                        <label class="dob-input">Id predio:</label>
                                                                        <input type="text" id="id_predio" class="form-control" disabled placeholder="" value="12345">


                                                                    </div>
                                                                    <div class="col-sm-2">

                                                                        <label class="dob-input">#Nupre:</label>
                                                                        <input type="text" id="id_nupre" class="form-control">


                                                                    </div>
                                                                    <div class="col-sm-2" >

                                                                        <label class="dob-input">#NPN: </label>
                                                                        <input type="text" id="id_matricula" class="form-control" disabled placeholder="" value="7600500039000">

                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <br>
                                                                        <br>
                                                                        <button type="button" onclick="llamar_vista('fp_aJuridico_view')" class="btn btn-outline-primary" style="margin: -10px;">Ver ficha predial</button>
                                                                    </div>  
                                                                    <div class="col-sm-2">
                                                                        <br>
                                                                        <br>
                                                                        <button type="button" class="btn btn-outline-dark" style="margin: -10px;">Ver Expediente</button>

                                                                    </div>

                                                                </div>
                                                                <br>
                                                    </fieldset>
                                                    <br>

                                                    <br>

                                                    <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded">                                                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                            <p style="font-size: 15px;"><b>Informacion fisica del predio:</b></p>
                                                        </legend>
                                                        
                                                            <br>
                                                            <div class="row text-left">
                                                                <div class="col-sm-7">
                                                                    <div class="row layout-top-spacing" id="cancel-row">
                                                                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                            <div class="widget-content widget-content-area br-6 mr-6 ml-4">
                                                                                <table id="table_analista" class="table table-hover non-hover table-responsive">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Id de Predio</th>
                                                                                            <th>NPN</th>
                                                                                            <th>Info Terreno</th>
                                                                                            <th>Info Construccion</th>
                                                                                            <th>Observacion</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>12345</td>  
                                                                                            <td>7600500039000</td>
                                                                                            <td>area (1800mts)</td>
                                                                                            <td>650mts</td>
                                                                                            <td>Predio Matriz</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>52345</td>  
                                                                                            <td>1860003900061</td>
                                                                                            <td>area (4800mts)</td>
                                                                                            <td>450mts</td>
                                                                                            <td>Predio Matriz</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>34579</td>  
                                                                                            <td>6630420390100</td>
                                                                                            <td>area (8800mts)</td>
                                                                                            <td>550mts</td>
                                                                                            <td>Predio Matriz</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                             
                                                                <div class="col-sm-3">
                                                                    <label class="dob-input"> </label>
                                                                    <br>
                                                                    <i class=" fa fa-trash ml-4" style="font-size:30px; color:red;"></i>
                                                                    <button type="button" class="btn btn-outline-dark">+Predio a Informe</button>
                                                                    <br>
                                                                    <br>
                                                                    <i class=" fa fa-trash ml-4" style="font-size:30px; color:red;"></i>
                                                                    <button type="button" class="btn btn-outline-dark">+Predio a Informe</button>
                                                                    <br>
                                                                    <br>
                                                                    <i class=" fa fa-trash ml-4" style="font-size:30px; color:red;"></i>
                                                                    <button type="button" class="btn btn-outline-dark">+Predio a Informe</button>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    
                                                                    <br>        
                                                                    <form class="d-flex" role="search">
                                                                    <i class=" fa fa-search" style="font-size:22px; color:blue;"></i>
                                                                    <input class="form-control mr-4" type="search" placeholder="Buscar.." aria-label="Search">
                                                                    </form>
                                                                    <br>        
                                                                    <form class="d-flex" role="search">
                                                                    <i class=" fa fa-search" style="font-size:22px; color:blue;"></i>
                                                                    <input class="form-control mr-4" type="search" placeholder="Buscar.." aria-label="Search">
                                                                    </form>
                                                                    <br>        
                                                                    <form class="d-flex" role="search">
                                                                    <i class=" fa fa-search" style="font-size:22px; color:blue;"></i>
                                                                    <input class="form-control mr-4" type="search" placeholder="Buscar.." aria-label="Search" style="padding: left 30px;">
                                                                    </form>
                                                                </div>
                                                                <label style="margin-left: 30px;"><b>Observaciones</b></label>
                                                                <div class="container-fluid mb-6">
                                                                    <textarea  maxlength="350" id="observaciones" spellcheck="false" style="padding-left:20px; padding-top:20px; width: 900px; height: 100px; border: 1px solid #DCE6E6;" placeholder="Envío para analisis fisico juridico y verificación sobre pertinencia de la información a incorporar, posterior a la revisión técnica fisica juridica el tramite debe ser enviado al digitador o editor fulanito de tal para la generación de la pre resolución respectiva."></textarea>
                                                                    <script>
                                                                            $('#observaciones').maxlength({
                                                                                warningClass: "badge badge-success",
                                                                                alwaysShow: true
                                                                            });
                                                                    </script>
                                                                </div>   
                                                                
                                                            </div>
                                                            </div>
                                                            <br><br>

                                                            <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded">
                                                                <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                    <p style="font-size: 15px;"><b>Informacion Juridica del predio:</b></p>
                                                                </legend>
                                                                <br>
                                                                <fieldset class="scheduler-border mx-2 my-2 shadow-sm p-3 mb-5 bg-white rounded">
                                                                <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                    <p style="font-size: 15px;"><b>Certificacion de tradicion:</b></p>
                                                                </legend>
                                                                <div class="row text-left">
                                                                    <div class="col-sm-10">
                                                                        <div class="row layout-top-spacing" id="cancel-row">
                                                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                                <div class="widget-content widget-content-area br-6 mr-6 ml-4">
                                                                                    <table id="table_analista" class="table table-hover non-hover table-responsive">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Folio de matricula Inmboliaria</th>
                                                                                                <th>Estado Foli</th>
                                                                                                <th>Are Titulo</th>
                                                                                                <th>Zona Ori</th>
                                                                                                <th>Titulo Asociado Matriz</th>
                                                                                                <th>Observacion</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>232</td>  
                                                                                                <td>ACTIVO</td>
                                                                                                <td>120</td>
                                                                                                <td>371</td>
                                                                                                <td>Notaria 1</td>
                                                                                                <td>Adquisicion Compraventa</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>232</td>  
                                                                                                <td>ACTIVO</td>
                                                                                                <td>120</td>
                                                                                                <td>371</td>
                                                                                                <td>Notaria 1</td>
                                                                                                <td>Adquisicion Compraventa</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>232</td>  
                                                                                                <td>ACTIVO</td>
                                                                                                <td>120</td>
                                                                                                <td>371</td>
                                                                                                <td>Notaria 1</td>
                                                                                                <td>Adquisicion Compraventa</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="col-sm-2">
                                                                        <label class="dob-input"> </label>
                                                                        <br><br><br><br><br>
                                                                        <b><a style="color:blue;"href="https://drive.google.com/file/d/1BRUJ1gKDGm7_5Jlrhl0UFEdBsvWziyIr/view?usp=sharing">Ver</a></b>
                                                                        <i class=" fa fa-trash ml-4" style="font-size:30px; color:red;"></i>
                                                                        <i class=" fa fa-pencil ml-4" style="font-size:30px; color:green;"></i>
                                                                    </div>
                                                                    
                                                                    <center><button class="btn btn-outline-success" id="btncertificado_pdf">+ Certificados de Tradición(otros)-PDF
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                                                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                                                <polyline points="2 17 12 22 22 17"></polyline>
                                                                                <polyline points="2 12 12 17 22 12"></polyline>
                                                                            </svg>
                                                                        </button><center><br><hr>
                                                                        
                                                                        
                                                                        <label style="margin-left: 30px;"><b>Observaciones</b></label>
                                                                        <div class="container-fluid mb-6">
                                                                            
                                                                        <textarea  maxlength="350" id="observaciones_2" style="padding-left:20px; padding-top:20px; width: 900px; height: 100px; border: 1px solid #DCE6E6;" spellcheck="false" placeholder="Envío para analisis fisico juridico y verificación sobre pertinencia de la información a incorporar, posterior a la revisión técnica fisica juridica el tramite debe ser enviado al digitador o editor fulanito de tal para la generación de la pre resolución respectiva."></textarea>
                                                                        <script>$('#observaciones_2').maxlength({
                                                                            warningClass: "badge badge-primary",
                                                                                alwaysShow: true
                                                                                });
                                                                        </script>
                                                                        </div>
                                                                    
                                                                
                                                                </fieldset>
                                                                
                                                                <br><br><br>
                                                                <fieldset class="scheduler-border mx-2 my-2 shadow-sm p-3 mb-5 bg-white rounded">
                                                                <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                    <p style="font-size: 15px;"><b>Escritura Publica:</b></p>
                                                                </legend>
                                                                <div class="row text-left">
                                                                    <div class="col-sm-10">
                                                                        <div class="row layout-top-spacing" id="cancel-row">
                                                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                                <div class="widget-content widget-content-area br-6 mr-6 ml-4">
                                                                                    <table id="table_analista" class="table table-hover non-hover table-responsive">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Escritura Publica</th>
                                                                                                <th> Fecha Escritura</th>
                                                                                                <th>Notaria-Sentencia</th>
                                                                                                <th>Ciudad-Notaria</th>
                                                                                                <th>Propietarios/Interesados</th>
                                                                                                <th>Observaciones</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>678</td>  
                                                                                                <td>11/08/2015</td>
                                                                                                <td>VENTIUNO</td>
                                                                                                <td>Buga</td>
                                                                                                <td>Pepito Perez</td>
                                                                                                <td>Sin observaciones</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>9190</td>  
                                                                                                <td>10/07/2014</td>
                                                                                                <td>UNICA</td>
                                                                                                <td>Pereira</td>
                                                                                                <td>Sutanito Rodriguez</td>
                                                                                                <td>Sin observaciones</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>232</td>  
                                                                                                <td>11/08/2015</td>
                                                                                                <td>VEINTIUNO</td>
                                                                                                <td>Buga</td>
                                                                                                <td>Pepito Perez</td>
                                                                                                <td>Sin observaciones</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="col-sm-2">
                                                                        <label class="dob-input"> </label>
                                                                        <br><br><br><br><br>
                                                                        <b><a style="color:blue;"href="https://drive.google.com/file/d/1BRUJ1gKDGm7_5Jlrhl0UFEdBsvWziyIr/view?usp=sharing">Ver</a></b>
                                                                        <i class=" fa fa-trash ml-4" style="font-size:30px; color:red;"></i>
                                                                        <i class=" fa fa-pencil ml-4" style="font-size:30px; color:green;"></i>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    <center><button class="btn btn-outline-success" id="btnescritura_pdf">+ Escritura o Sentencia- PDF
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                                                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                                                <polyline points="2 17 12 22 22 17"></polyline>
                                                                                <polyline points="2 12 12 17 22 12"></polyline>
                                                                            </svg>
                                                                        </button><center><br><hr>
                                                                        
                                                                        
                                                                        <label style="margin-left: 30px;"><b>Observaciones</b></label>
                                                                        <div class="container-fluid mb-6">
                                                                            
                                                                        <textarea  maxlength="350" id="observaciones" style="padding-left:20px; padding-top:20px; width: 900px; height: 100px; border: 1px solid #DCE6E6;" spellcheck="false" placeholder="Envío para analisis fisico juridico y verificación sobre pertinencia de la información a incorporar, posterior a la revisión técnica fisica juridica el tramite debe ser enviado al digitador o editor fulanito de tal para la generación de la pre resolución respectiva."></textarea>
                                                                        <script>$('#observaciones').maxlength({
                                                                                alwaysShow: true,
                                                                            });</script>
                                                                        </div>
                                                                    
                                                                </fieldset>
                                                                
                                                                



                                                                <br><br><br>
                                                                <fieldset class="scheduler-border mx-2 my-2 shadow-sm p-3 mb-5 bg-white rounded">
                                                                <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                    <p style="font-size: 15px;"><b>Linderos:</b></p>
                                                                </legend>
                                                                <div class="row text-left">
                                                                    <div class="col-sm-10">
                                                                        <div class="row layout-top-spacing" id="cancel-row">
                                                                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                                                                <div class="widget-content widget-content-area br-6 mr-6 ml-4">
                                                                                    <table id="table_analista" class="table table-hover non-hover table-responsive">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Número Predial/Lote</th>
                                                                                                <th> Linderos</th>
                                                                                                <th>Colindantes</th>
                                                                                                <th>Longitud (m)</th>
                                                                                                <th>Area (Metros²)</th>
                                                                                                <th>Observaciones</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Lote 2</td>  
                                                                                                <td>Norte</td>
                                                                                                <td>Arbol grande</td>
                                                                                                <td>3 Mts</td>
                                                                                                <td>Sin Area</td>
                                                                                                <td>Sin observaciones</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Lote 3</td>  
                                                                                                <td>Sur</td>
                                                                                                <td>Rio</td>
                                                                                                <td>5 Mts</td>
                                                                                                <td>Sin Area</td>
                                                                                                <td>Sin observaciones</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Lote 4</td>  
                                                                                                <td>Oriente</td>
                                                                                                <td>Acueducto</td>
                                                                                                <td>23 Mts</td>
                                                                                                <td>Sin Area</td>
                                                                                                <td>Sin observaciones</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Lote 4</td>  
                                                                                                <td>Occidente</td>
                                                                                                <td>Via principal</td>
                                                                                                <td>78 Mts</td>
                                                                                                <td>Sin Area</td>
                                                                                                <td>Sin observaciones</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="col-sm-2">
                                                                        <label class="dob-input"> </label>
                                                                        <br><br><br><br><br>
                                                                       
                                                                        <i class=" fa fa-trash ml-4" style="font-size:30px; color:red;"></i>
                                                                        <i class=" fa fa-pencil ml-4" style="font-size:30px; color:green;"></i>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    <center><button class="btn btn-outline-success" id="btnescritura_pdf">+ Info Linderos
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                                                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                                                <polyline points="2 17 12 22 22 17"></polyline>
                                                                                <polyline points="2 12 12 17 22 12"></polyline>
                                                                            </svg>
                                                                        </button><center><br><hr>
                                                                        
                                                                        
                                                                        <label style="margin-left: 30px;"><b>Observaciones</b></label>
                                                                        <div class="container-fluid mb-6">
                                                                            
                                                                        <textarea  maxlength="350" id="observaciones" style="padding-left:20px; padding-top:20px; width: 900px; height: 100px; border: 1px solid #DCE6E6;" spellcheck="false" placeholder="Envío para analisis fisico juridico y verificación sobre pertinencia de la información a incorporar, posterior a la revisión técnica fisica juridica el tramite debe ser enviado al digitador o editor fulanito de tal para la generación de la pre resolución respectiva."></textarea>
                                                                        <script>$('#observaciones').maxlength({
                                                                                alwaysShow: true,
                                                                            });</script>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                    </div>
                                                                </fieldset>
                                                            </fieldset>

                                                            <br><br>


                                                            <fieldset class="scheduler-border mx-4 shadow p-3 mb-5 bg-white rounded">
                                                                <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                    <p style="font-size: 15px;"><b>Analisis Para Vista Terreno:</b></p>
                                                                </legend>
                                                                
                                                                <div class="row">
                                                                    <div class="col-lg-12 mx-auto">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 ml-4" style="text-align: left;">Requiere Visitas Terreno:
                                                                                <div class="form-check form-check-reverse">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                                                                    <label class="form-check-label" for="reverseCheck1">
                                                                                        SI
                                                                                    </label><br>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                                                                    <label class="form-check-label" for="reverseCheck1">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6" style="text-align: left;">Requiere Revision Cartografica:
                                                                                <div class="form-check form-check-reverse">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                                                                    <label class="form-check-label" for="reverseCheck1">
                                                                                        SI
                                                                                    </label><br>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                                                                    <label class="form-check-label" for="reverseCheck1">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <br><hr>
                                                                <label style="margin-left: 60px;"><b>Observaciones Sobre la Vista:</b></label>
                                                                                <div class="container-fluid mb-5">
                                                                                    <p style="color: black;">Envío para analisis fisico juridico y verificación sobre pertinencia de la información a incorporar, posterior a la revisión
                                                                                        técnica fisica juridica el tramite debe ser enviado al digitador o editor fulanito de tal para la generación de la pre
                                                                                        resolución respectiva.</p>
                                                                                </div>
                                                             </fieldset>
                                                             <br><br>




                                                            <fieldset class="scheduler-border mx-4 shadow p-3 mb-5 bg-white rounded">
                                                                <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                    <p style="font-size: 15px;"><b>Informacion Cartográfica Aportada En Documentos</b></p>
                                                                </legend>
                                                                
                                                                <div class="row">
                                                                    <div class="col-lg-12 mx-auto">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 ml-4" style="text-align: left;">Levantamiento Topografico:
                                                                                <div class="form-check form-check-reverse">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                                                                    <label class="form-check-label" for="reverseCheck1">
                                                                                        SI
                                                                                    </label><br>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                                                                    <label class="form-check-label" for="reverseCheck1">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4" style="text-align: left;">
                                                                                <label class="dob-input">Plano Protocolizado:</label>
                                                                                 <input type="text" id="dias_tramite" class="form-control mb-4" style="width: 50%;" value="">
                                                                            </div>
                                                                            <div class="col-sm-2" style="text-align: left;">
                                                                                <label class="dob-input">Tipo de formato:</label>
                                                                                <select class="form-control" aria-label="Default select example">
                                                                                    <option selected>Monotona</option>
                                                                                    <option value="1">Analoga</option>
                                                                                    <option value="2">Digital</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mx-auto">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 ml-4" style="text-align: left;">Esquemas:
                                                                                <div class="form-check form-check-reverse">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                                                                    <label class="form-check-label" for="reverseCheck1">
                                                                                        SI
                                                                                    </label><br>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                                                                    <label class="form-check-label" for="reverseCheck1">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4" style="text-align: left;">
                                                                                <label class="dob-input">Planos Arquitectonicos:</label>
                                                                                 <input type="text" id="dias_tramite" class="form-control mb-4" style="width: 50%;" value="">
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>

                                                                </div> <br><hr>
                                                                <label style="margin-left: 30px;"><b>Observaciones</b></label>
                                                                    <div class="container-fluid mb-6">
                                                                        
                                                                    <textarea  maxlength="350" id="observaciones" style="padding-left:20px; padding-top:20px; width: 900px; height: 100px; border: 1px solid #DCE6E6;" spellcheck="false" placeholder="Envío para analisis fisico juridico y verificación sobre pertinencia de la información a incorporar, posterior a la revisión técnica fisica juridica el tramite debe ser enviado al digitador o editor fulanito de tal para la generación de la pre resolución respectiva."></textarea>
                                                                    <script>$('#observaciones').maxlength({
                                                                            alwaysShow: true,
                                                                        });</script>
                                                                    </div>
                                                            </fieldset><br><br>




                                                            <fieldset class="scheduler-border mx-4 shadow p-3 mb-5 bg-white rounded">
                                                                <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                                                                    <p style="font-size: 15px;"><b>Conclusiones Del Analisis</b></p>
                                                                </legend>
                                                                
                                                                
                                                                
                                                                    <div class="container-fluid mb-3">
                                                                        <p style="color: black;">El proyecto -  CONJUNTO RESIDENCIAL, ETAPAS 1, 11, III, IV YV consto de un total de 160 unidades jurídicas de las cuales 160 corresponde apartamentos.
                                                                            Cabe aclarori que una vez verificada la Ventanilla Única de Registro VOR se evidencia que la tradición jurídico del folio de matrícula inmobiliaria 370-1504 (anotación 21), 
                                                                            título de Escritura Pública Reformo Reglamento Propiedad Horizontal No. 3378 del 2711012021 Notaría 16 de Bugq con la cual se inscribe la Etapa V del proyecto No obstante, 
                                                                            la petición con radicado 760010001 de fecha 25/1012021 corresponde o la incorporación de la Etapa VI En este sentido, el análisis de títulos efectuado corresponde a lo 
                                                                            requerido por el peticionario, dado que hosta el momento no se evidencio que lo Constructora CASA LINDA adicione documentos ol radicado, y la Etapa VI se pueda encontrar en proceso de construcción.
                                                                        </p>
                                                                    </div>
                                                            </fieldset>



                                                            <hr>                                                            


                                                </div>


                                                <div style="text-align: center;" class="mb-5">
                                                    <button onclick="llamar_vista('tabs_aJuridico_view')" class="btn btn-primary" id="btnasignar_tramite">Guardar Informe y Continuar
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                            <polyline points="2 17 12 22 22 17"></polyline>
                                                            <polyline points="2 12 12 17 22 12"></polyline>
                                                        </svg>
                                                    </button>
                                                    <button onclick="" class="btn btn-dark" id="btnbandeja_entrada">Editar Tramite
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
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
                                                        </svg></button>
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

<script src="<?php echo base_url(); ?>/assets/js/analista_juridico/analista_juridico.js"></script>