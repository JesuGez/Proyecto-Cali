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
                              <div class="col-sm-4">

                                <label class="dob-input">#NPN: </label>
                                <input type="text" id="id_matricula" class="form-control" disabled placeholder="" value="7600500039000">

                              </div>
                              <div class="col-sm-2">
                                <br>
                                <br>
                                <button type="button" onclick="llamar_vista('tabs_aJuridico_view')" class="btn btn-outline-primary" style="margin: -10px;" disabled>Ver ficha catastral</button>
                              </div>


                            </div>
                            <br>
                        </fieldset>
                        <br>

                        <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded">
                          <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                            <p style="font-size: 15px;"><b>Leer Expediente</b></p>
                          </legend>
                          <div>
                            <div class="row">
                              <div class="col-lg-12 mx-auto">
                                <div class="row">
                                  <div class="col-sm-4">Ver ficha catastral de radicado: <b>7600300000001</b></div>
                                  <hr><br>
                                  <div class="col-sm-2">
                                    <button type="button" onclick="llamar_vista('tabs_aJuridico_view')" class="btn btn-outline-primary" style="margin: -500px;" disabled>Ir a Expediente</button>
                                    <br>
                                  </div>
                                </div>

                              </div>
                        </fieldset>
                        <br>
                        <hr>
                        <br>


                        <fieldset class="scheduler-border shadow p-3 mb-5 bg-white rounded">
                          <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                            <p style="font-size: 15px;"><b>Información del Plano Aportado</b></p>
                          </legend>
                          <br>
                          <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                            <p style="font-size: 15px;"><b>Observaciones Generales:</b></p>
                          </legend>
                          <div class="row text-left">
                            <div class="col-sm-10">
                              <div class="row layout-top-spacing" id="cancel-row">
                                <div class="container-fluid mb-5 pl-4 " style="padding: left 40px;">
                                  <p>El peticionario aporta (1) plano en formato análogo y digital (*dwg y .shp), donde se identifican los polígonos nombrados como Lotes 18 y
                                    19 y Lote 12. A partir de la información cartográfica entregada en digital, los polígonos antes descritos se migran a formato shapefile (
                                    shp) y se defienen en el Sistema de Referencia Magna Sirgas Origen Nacional.
                                    Posteriormente, se realiza el montaje cartográfico donde se observa que los polígonos migrados recaen sobre el predio 12345,
                                    presentan diferencias en forma con relación al terreno incorporado en la Base de Datos Cartográfica. Adicionalmente, se realiza la
                                    digitalización de los polígonos con respecto a los linderos descritos en los títulos, donde se identifican (3) lotes nombrados como Lotes
                                    2 y 3, Lotes 18, 19 y 20. Del ejercicio antes realizado, se evidencia que el polígono identificado como Lotes 6 y 7 presenta traslape con el
                                    predio colindante 123456.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      </fieldset>
                      <br><br>


                      <fieldset class="scheduler-border mx-2 my-2  shadow p-3 mb-5 bg-white rounded">
                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                          <p style="font-size: 15px;"><b>Verificación Cartografica</b></p>
                        </legend>
                        <div class="row text-left">
                          <div class="col-sm-10">
                            <div class="row layout-top-spacing" id="cancel-row">
                              <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6 mr-6 ml-4">
                                  <table id="table_analista" class="table table-hover non-hover table-responsive">
                                    <thead>
                                      <tr>
                                        <th>Lot</th>
                                        <th>Area según titulo</th>
                                        <th>Area calculadas segun plano aportado(M2</th>
                                        <th>Area calculadas segun linderos titulos (M2</th>
                                        <th>Diferencia de areas de titulos versus plano aportado</th>
                                        <th>Area segun base de datos de cartografica</th>
                                        <th>Area segun Base de datos alfanumerica</th>
                                      </tr>
                                    </thead>

                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-2">
                            <label class="dob-input"> </label>
                            <br><br>
                            <b><a style="color:blue;" href="https://drive.google.com/file/d/1BRUJ1gKDGm7_5Jlrhl0UFEdBsvWziyIr/view?usp=sharing">Ver</a></b>
                            <i class=" fa fa-trash ml-4" style="font-size:25px; color:#ABB89F"></i>
                            <i class=" fa fa-pencil ml-4" style="font-size: 25px;; color:#ABB89F"></i>


                          </div>

                          <center><button class="btn btn-outline-success" id="btnescritura_pdf">+ Soportes de Verificación-PDF
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                              </svg>
                            </button>
                            <center><br>


                              <label style="margin-left: -800px; color:black;"><b>Observaciones Generales</b></label>
                              <div class="row text-left">
                                <div class="col-sm-10">
                                  <div class="row layout-top-spacing" id="cancel-row">
                                    <div class="container-fluid mb-5 ml-4 ">
                                      <p>Existen diferencias entre las cabidas registradas en títulos con respecto a las áreas calculadas por el Equipo de Cartografía
                                        según el plano aportado por el solicitante, que superan los márgenes de error máximos permitidos por la Subdirección de
                                        Catastro. Así mismo, con relación a las áreas inscritas en la base de datos catastral (cartográfica y alfanumérica), estas
                                        desigualdades superan el rango establecido.<br>


                                        De otra parte, se evidencian diferencias de àreas para el Lote 18 digitalizado con base en los linderos descritos en titulos, las
                                        cuales sobrepasan los màrgenes permitidos; sin embargo para el poligono denominado "Lotes 6 y 7" aunque el àrea calculada
                                        es similiar a la registrada en el folio No. 370-532, el poligono generado a partir de las cotas que se detallan en la Escritura
                                        Pùblica No. 671, difere en forma con respecto al terreno visualizado en la ortofotografìa, traslapandose en un 50% con el predio
                                        colindante.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>

                      </fieldset>


                      <br>
                      <fieldset class="scheduler-border mx-2 my-2  shadow p-3 mb-5 bg-white rounded">
                        <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                          <p style="font-size: 15px;"><b>Verificación de Traslapes</b></p>
                        </legend>
                        <div class="row text-left">
                          <div class="col-sm-9">
                            <div class="row layout-top-spacing" id="cancel-row">
                              <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6 mr-6 ml-4">
                                  <table id="table_analista" class="table table-hover non-hover table-responsive">
                                    <thead>
                                      <tr>
                                        <th>Predio Traslapado</th>
                                        <th> Area de predio</th>
                                        <th>Area traslapada (M2)</th>
                                        <th>Porcentaje de area traslapada</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>123456</td>
                                        <td>200</td>
                                        <td>50</td>
                                        <td>45%</td>

                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-2">
                            <label class="dob-input"> </label>
                            <br><br>

                            <i class=" fa fa-trash ml-4" style="font-size:25px; color:#ABB89F"></i>
                            <i class=" fa fa-pencil ml-4" style="font-size:25px; color:#ABB89F"></i>
                            <b><a style="color:blue;" href="https://drive.google.com/file/d/1BRUJ1gKDGm7_5Jlrhl0UFEdBsvWziyIr/view?usp=sharing">Ver</a></b>


                          </div>

                          <center><button class="btn btn-outline-success" id="btnescritura_pdf">+ Soportes de Traslapes-PDF
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                              </svg>
                            </button>
                            <center>
                              <br><br><br>
                              <label style="margin-left: -500px; color:black;"><b>Observaciones Generales</b></label>
                              <div class="row text-left">
                                <div class="col-sm-10">
                                  <div class="row layout-top-spacing" id="cancel-row">
                                    <div class="container-fluid mb-5 ml-4 ">
                                      <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="width: 800px;"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    </fieldset>
                    </fieldset>

                    <br><br>


                    <fieldset class="scheduler-border mx-4 pb-6 shadow p-3 mb-5 bg-white rounded">
                      <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                        <p style="font-size: 15px;"><b>Montaje Cartográfico</b></p>
                      </legend>
                      <div class="row">
                        <div class="col-lg-12 mx-auto">
                          <div class="row">
                            <center>
                              <label class="text-align-left">Previsualización Montaje: </label>
                              <div class="col-sm-4 ml-4" style="text-align: left;">
                                <b><a style="color:blue;" href="https://drive.google.com/file/d/1BRUJ1gKDGm7_5Jlrhl0UFEdBsvWziyIr/view?usp=sharing">Ver</a></b>


                                <img src="<?php echo base_url(); ?>public/assets/img/mapa.png" alt="" style="margin-left: -150px;">
                                <i class=" fa fa-file-pdf-o" style="font-size: 25px;; color:#ABB89F"></i>
                                <i class="fa fa-upload" style="font: size 30px; color:#ABB89F; margin-left:10px"></i>
                                <i class="fa fa-spinner" style="font: size 30px; color:black; margin-left:10px"></i>
                                <i class="fa fa-check" style="font-size:30px; color:#ABB89F;margin-left:10px"></i></i>


                              </div>
                            </center>
                          </div>
                        </div>

                    </fieldset>
                    <br><br>

                    <fieldset class="scheduler-border mx-4 shadow p-3 mb-5 bg-white rounded">
                      <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                        <p style="font-size: 15px;"><b>Información de Zonas</b></p>
                      </legend>
                      <div class="row text-left">
                        <div class="col-sm-10">
                          <div class="row layout-top-spacing" id="cancel-row">
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                              <div class="widget-content widget-content-area br-6 mr-6 ml-4">
                                <table id="table_analista" class="table table-hover non-hover table-responsive">
                                  <thead>
                                    <tr>
                                      <th>Matricula Inmobiliaria</th>
                                      <th>NPN</th>
                                      <th>Area de Terreno (M2)</th>
                                      <th>ZHF</th>
                                      <th>ZHG</th>
                                      <th>Porcentaje de area por(ZHG)</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>123456</td>
                                      <td>predio nuevo</td>
                                      <td>500</td>
                                      <td>2390000</td>
                                      <td>56</td>
                                      <td>60%</td>

                                  </tbody>

                                  <tbody>
                                    <tr>
                                      <td>54321</td>
                                      <td>760020678700000</td>
                                      <td>200</td>
                                      <td>1477000</td>
                                      <td>87</td>
                                      <td>40%</td>

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-2">
                          <label class="dob-input"> </label>
                          <br><br><br><br><br>
                          <b><a style="color:blue;" href="https://drive.google.com/file/d/1BRUJ1gKDGm7_5Jlrhl0UFEdBsvWziyIr/view?usp=sharing">Ver</a></b>
                          <i class=" fa fa-trash ml-4" style="font-size:25px; color:#ABB89F"></i>
                          <i class=" fa fa-pencil ml-4" style="font-size:25px; color:#ABB89F"></i>


                        </div>

                        <center><button class="btn btn-outline-success" id="btnescritura_pdf">+ Zonas
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                              <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                              <polyline points="2 17 12 22 22 17"></polyline>
                              <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                          </button>
                          <center>

                            <br>
                            <label style="margin-left: -500px; color:black;"><b>Observaciones Generales</b></label>
                            <div class="row text-left">
                              <div class="col-sm-10">
                                <div class="row layout-top-spacing" id="cancel-row">
                                  <div class="container-fluid mb-5 ml-4 ">
                                    <div class="form-group">

                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="width: 800px;"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                      </div>
                    </fieldset>




                    <fieldset class="scheduler-border mx-4 shadow p-3 mb-5 bg-white rounded">
                      <legend style="border-bottom:none;  width:inherit; padding:0 10px;">
                        <p style="font-size: 15px;"><b>Conclusiones Del Analisis Cartografico</b></p>
                      </legend>


                      <div class="row text-left">
                        <div class="col-sm-10">
                          <div class="row layout-top-spacing" id="cancel-row">
                            <div class="container-fluid mb-5 ml-4 ">
                              <p>
                                Una vez realizado el estudio jcartográfico por parte de los Equipos de Trabajo de Cartografía, conforme a la información entregada por el
                                solicitante, se concluye que aunque No es Procedente dar continuidad al trámite de Rectificación en la Inscripción Catastral del predio
                                12345, al evidenciarse inconsistencias entre la informaciòn cartogràfica aportada y los lotes descritos en los titulos.

                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>



                    <hr>


                  </div>


                  <div style="text-align: center;" class="mb-5">
                    <button onclick="llamar_vista('tabs_aJuridico_view')" class="btn btn-primary" id="btnasignar_tramite">Guardar Informe y Continuar a Bandeja de Entrada
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                      </svg>
                    </button>
                    <button onclick="" class="btn btn-dark" id="btnbandeja_entrada">Editar Informe Cartografico
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