
      <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
          <div class="m-content">
            <div class="d-flex align-items-center info-subheader">
                <div class="mr-auto">
                    <h3 class="m-subheader__title">
                        <i style="font-size: 1.7rem" class="la la-users"></i>
                        Añadir producto
                        <small>Panel de administrador de la tienda</small>
                    </h3>
                </div>
                <div class="opciones_productos">
                  <a href="<?php echo base_url() . 'admin/anadir_producto'; ?>">
                    <button>
                      añadir producto
                    </button>
                  </a>
                  <a href="<?php echo base_url() . 'admin/productos'; ?>">
                    <button>
                      ver productos
                    </button>
                  </a>
               </div>
                  </div>
                  <div style="padding: 0;" class="col-lg-12">
            <!--begin::Portlet-->
                    <div class="row">
                      <div class="col-xl-12 p-0">
                                    <!--begin:: Widgets/Best Sellers-->
                        <div class="m-portlet m-portlet--full-height ">
                          <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                              <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                  Información nuevo producto
                                </h3>
                              </div>
                              
                            </div>
                          </div>
                          <div class="m-portlet__body">
                          <form method="post" enctype="multipart/form-data">
                            <div class="col-md-10 centrar">
                            <div class="row">
                                <div class="col-md-6 vertical-col">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="nombre-producto" placeholder="Nombre del producto">
                                  </div> 
                                  <div class="form-group">
                                  
                                    <textarea class="form-control" rows="5" name="descripcion-producto" placeholder="Descripción del producto"></textarea>
                                    
                                  </div> 
                                  <div class="form-group">
                                      <input type="number" placeholder="Precio" name="precio-producto" class="form-control precio_producto_administrador">
                                  </div>
                                  <a class="mas-info">
                                    <span>Más info</span>                                  
                                  </a>
                                  <div class="mas-info-bloc hidden">
                                    <div class="form-group mt-5">
                                      <h4 style="display: inline-block">Tallas</h4>
                                      <div class="tallas-actuales ml-3" style="display: inline-block;">
                                        
                                      </div>
                                      <div class="col-md-12 row text-center nml nmr no-padding mt-4">
                                        <input type="text" class="do-tallas form-control col-md-12">   
                                        <ul class="option-tallas">

                                        </ul>                                    
                                      </div>
                                      
                                      
                                   </div> 
                                  </div>
                                </div>
                                <div class="col-md-6 vertical-col no-padding">
                                 
                                    <label class="col-md-12">
                                      <div class="add-image p-4">
                                        <span class="text-add-image">Añadir imagen</span>
                                        <img class="hidden" height="100%" id="blah" src="#" alt="your image" />           
                                      </div>
                                      <input class="hidden" name="imagen-producto" type='file' id="imgInp" />
                                    </label>                            
                                  
                                
                                  <div class="col-md-12">
                                    <input class="guardar-producto mt-4" type="submit" value="Guardar producto">                                  
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
            </div>
        </div>
    </div>
</div>