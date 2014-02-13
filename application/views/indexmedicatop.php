         <div class="row"> 
         <div class="col-lg-12">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#service-one" data-toggle="tab">LISTADO</a>
                    </li>
                    <li><a href="#service-two" data-toggle="tab">MAPA</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="service-one">
                    <div class="results">
                    <div class="col-lg-6"><!--Mostrando 5 de 48 resultados--> resultado : <?php echo $totalmedicos ?></div>
                    <div class="col-lg-2">
                    Ordernar por: </div>
                    <div class="col-lg-4">
                    <select class="selectpicker order">
                    <option>Destacados</option>
                    </select>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                    <?php if($medicos<>false){ foreach($medicos as $row){
                              $titulo=$row->titulo;
                              $especialidad=$row->especialidad;
                              $direccion=$row->direccion;
                              $telefono=$row->telefono;
                          ?>
                  
                    <div class="content-panel filas">
                    <div class="row">
                    <div class="col-lg-12">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <a href="#"><img class="img-responsive thumbnail" src="/assets/images/thumbs/thumb-1.jpg"></a>
                    </div>
                    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-7">
                        <?php if($titulo!=""){ ?>
                        <h3><a href="#"><?php echo $titulo; ?></a></h3>
                        <?php } ?>
                        <?php if($especialidad!=""){ ?>
                        <p><a href="#"  class="bold"><?php echo $especialidad; ?></a></p>
                        <?php } ?>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row info">
                        <?php if($direccion!="") { ?>
                        <div class="col-xs-1"><i class="fa fa-map-marker"></i></div>
                        <div  class="col-lg-11 col-md-11 col-xs-10"><?php echo $direccion; ?> <br />
                        <?php }else{ ?>
                        <div class="col-xs-1"><i></i></div>
                        <div  class="col-lg-11 col-md-11 col-xs-10"><?php echo $direccion; ?> <br />
                        <?php } ?>
                        <!--<i>Aprox. 15 km de tu ubicación.</i>--></div>
                        <div class="clearfix"></div>
                        <?php if($telefono!="") { ?>
                        <div class="col-xs-1 "><i class="fa fa-phone"></i></div>
                        <div class="col-lg-8  col-md-8 col-xs-7"><span class="bold"><?php echo $telefono; ?></span></div>
                        <div class="col-lg-2  col-md-2 col-xs-3"><a href="/perfil/<?php echo $row->url; ?>" class="btn btn-primary">Ver perfil</a></div>
                        <?php } else { ?>
                        <div class="col-xs-1 "><i></i></div>
                        <div class="col-lg-8  col-md-8 col-xs-7"><span class="bold"><?php echo $telefono; ?></span></div>
                        <div class="col-lg-2  col-md-2 col-xs-3" align="right"><a href="/perfil/<?php echo $row->url; ?>" class="btn btn-primary">Ver perfil</a></div>
                        <?php } ?>
                        
                    </div></div>
                       
        				</div></div></div>
                     <?php }} ?>
                     <!--2-->
                    <!--<div class="content-panel filas">
                    <div class="row">
                    <div class="col-lg-12">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <a href="#"><img class="img-responsive thumbnail" src="/assets/images/thumbs/thumb-2.jpg"></a>
                    </div>
                    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-7">
                        <h3><a href="#">Martina Luján Lopez, MD</a></h3>
                        <p><a href="#" class="bold">Gineco-Obstetra</a></p>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row info">
                        <div class="col-xs-1"><i class="fa fa-map-marker"></i></div>
                        <div  class="col-lg-11 col-md-11 col-xs-10">
                        Calle 50 #235 x 31 y 33. Residencial Pensiones C.P. 97217. 
                        <br />
                        <i>Aprox. 12 km de tu ubicación.</i></div>
                        <div class="clearfix"></div>
                        <div class="col-xs-1"><i class="fa fa-phone"></i></div>
                        <div class="col-lg-8  col-md-8 col-xs-7"><span class="bold">(999) 9806722</span></div>
                        <div class="col-lg-2  col-md-2 col-xs-3"><a href="#" class="btn btn-primary">Ver perfil</a></div>
                    </div></div>
                       
        				</div></div>
                    </div>-->
                     <!--3-->
                    <!--<div class="content-panel filas">
                    <div class="row">
                    <div class="col-lg-12">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                    <a href="#"><img class="img-responsive thumbnail" src="/assets/images/thumbs/thumb-3.jpg"></a>
                    </div>
                    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-7">
                        <h3><a href="#">Gonzalo Enrique Argüelles Bastarrachea, MD</a></h3>
                        <p><a href="#" class="bold">Geriatra</a></p>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row info">
                        <div class="col-xs-1"><i class="fa fa-map-marker"></i></div>
                        <div  class="col-lg-11 col-md-11 col-xs-10">
                        Calle 7 #127 x 24 y 26 Clínica Pensiones, Consultorio 104. Residencial Pensiones II C.P. 97217. 
                        <br />
                        <i>Aprox. 12 km de tu ubicación.</i></div>
                        <div class="clearfix"></div>
                        <div class="col-xs-1"><i class="fa fa-phone"></i></div>
                        <div class="col-lg-8  col-md-8 col-xs-7"><span class="bold">(999) 9806722</span></div>
                        <div class="col-lg-2  col-md-2 col-xs-3"><a href="#" class="btn btn-primary">Ver perfil</a></div>
                    </div></div>
                       
        				</div></div>
                    </div>-->
                    <div class="results">
                    <div class="row text-center">

            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>
        			</div>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                       <p>
                    <iframe width="100%" height="550px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>

                       </p>
                    </div>
                </div>
            </div>
         </div>