
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<div class="m-content">

            <div class="m-content">

							<!-- BEGIN: Subheader -->

								<div class="d-flex align-items-center info-subheader">
									<div class="mr-auto">
										<h3 class="m-subheader__title">
											<i style="font-size: 1.7rem" class="la la-users"></i>
											Administrador
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
                <div class="col-xl-8 p-0">
              <!--begin:: Widgets/Best Sellers-->
              <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                  <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                      <h3 class="m-portlet__head-text">
                        Productos más vendidos
                      </h3>
                    </div>
                  </div>
                  <div class="m-portlet__head-tools">
                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                      <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
                          Último mes
                        </a>
                      </li>
                      <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab">
                          Último año
                        </a>
                      </li>
                      <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
                          Todos los tiempos
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="m-portlet__body">
                  <!--begin::Content-->
                  <div class="tab-content">
                    <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">
                      <!--begin::m-widget5-->
                      <div class="m-widget5">

                      <?php foreach ($productos as $producto) { ?>
                        <div class="m-widget5__item">
                          <div class="m-widget5__pic">
                            <?php $imagen = $this->productos_model->getImagenProducto($producto->id_producto); ?>
                            <img class="m-widget7__img" src="<?php echo base_url(); ?>assets/img/<?php echo $imagen->path; ?>" alt="">
                          </div>
                          <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                              <?php echo $producto->nombre_producto; ?>
                            </h4>
                            <span class="m-widget5__desc">
                              <?php echo $producto->descripcion_producto; ?>
                            </span>
                            <div class="m-widget5__info">
                              <span class="m-widget5__author">
                                Precio:
                              </span>
                              <span class="m-widget5__info-label">
                                <?php echo $producto->precio_producto . "€"; ?>
                              </span>
                              
                            </div>
                          </div>
                          <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                              100
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                              ventas
                            </span>
                          </div>
                          <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                              <?php echo $producto->precio_producto * 100; echo "€"; ?>
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                              Ganancias
                            </span>
                          </div>
                        </div>

                      <?php } ?>

                        
                      </div>
                      <!--end::m-widget5-->
                    </div>
                    <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">
                      <!--begin::m-widget5-->
                      <div class="m-widget5">
                      <?php foreach ($productos as $producto) { ?>
                        <div class="m-widget5__item">
                          <div class="m-widget5__pic">
                            <?php $imagen = $this->productos_model->getImagenProducto($producto->id_producto); ?>
                            <img class="m-widget7__img" src="<?php echo base_url(); ?>assets/img/<?php echo $imagen->path; ?>" alt="">
                          </div>
                          <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                              <?php echo $producto->nombre_producto; ?>
                            </h4>
                            <span class="m-widget5__desc">
                              <?php echo $producto->descripcion_producto; ?>
                            </span>
                            <div class="m-widget5__info">
                              <span class="m-widget5__author">
                                Precio:
                              </span>
                              <span class="m-widget5__info-label">
                                <?php echo $producto->precio_producto . "€"; ?>
                              </span>
                              
                            </div>
                          </div>
                          <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                              100
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                              ventas
                            </span>
                          </div>
                          <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                              <?php echo $producto->precio_producto * 100; echo "€"; ?>
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                              Ganancias
                            </span>
                          </div>
                        </div>

                      <?php } ?>
                      </div>
                      <!--end::m-widget5-->
                    </div>
                    <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">
                      <!--begin::m-widget5-->
                      <div class="m-widget5">
                      <?php foreach ($productos as $producto) { ?>
                        <div class="m-widget5__item">
                          <div class="m-widget5__pic">
                            <?php $imagen = $this->productos_model->getImagenProducto($producto->id_producto); ?>
                            <img class="m-widget7__img" src="<?php echo base_url(); ?>assets/img/<?php echo $imagen->path; ?>" alt="">
                          </div>
                          <div class="m-widget5__content">
                            <h4 class="m-widget5__title">
                              <?php echo $producto->nombre_producto; ?>
                            </h4>
                            <span class="m-widget5__desc">
                              <?php echo $producto->descripcion_producto; ?>
                            </span>
                            <div class="m-widget5__info">
                              <span class="m-widget5__author">
                                Precio:
                              </span>
                              <span class="m-widget5__info-label">
                                <?php echo $producto->precio_producto . "€"; ?>
                              </span>
                              
                            </div>
                          </div>
                          <div class="m-widget5__stats1">
                            <span class="m-widget5__number">
                              100
                            </span>
                            <br>
                            <span class="m-widget5__sales">
                              ventas
                            </span>
                          </div>
                          <div class="m-widget5__stats2">
                            <span class="m-widget5__number">
                              <?php echo $producto->precio_producto * 100; echo "€"; ?>
                            </span>
                            <br>
                            <span class="m-widget5__votes">
                              Ganancias
                            </span>
                          </div>
                        </div>

                      <?php } ?>
                      </div>
                      <!--end::m-widget5-->
                    </div>
                  </div>
                  <!--end::Content-->
                </div>
              </div>
              <!--end:: Widgets/Best Sellers-->
            </div>

            <div class="col-xl-4">
								<!--begin:: Widgets/Last Updates-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Latest Updates
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
														Today
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">
																					Activity
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">
																					Messages
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">
																					FAQ
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">
																					Support
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<!--begin::widget 12-->
										<div class="m-widget4">
											<div class="m-widget4__item">
												<div class="m-widget4__ext">
													<span class="m-widget4__icon m--font-brand">
														<i class="flaticon-interface-3"></i>
													</span>
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__text">
														Make Metronic Great Again
													</span>
												</div>
												<div class="m-widget4__ext">
													<span class="m-widget4__number m--font-info">
														+500
													</span>
												</div>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__ext">
													<span class="m-widget4__icon m--font-brand">
														<i class="flaticon-folder-4"></i>
													</span>
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__text">
														Green Maker Team
													</span>
												</div>
												<div class="m-widget4__ext">
													<span class="m-widget4__number m--font-info">
														-64
													</span>
												</div>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__ext">
													<span class="m-widget4__icon m--font-brand">
														<i class="flaticon-line-graph"></i>
													</span>
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__text">
														Make Apex Great Again
													</span>
												</div>
												<div class="m-widget4__ext">
													<span class="m-widget4__number m--font-info">
														+1080
													</span>
												</div>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__ext">
													<span class="m-widget4__icon m--font-brand">
														<i class="flaticon-diagram"></i>
													</span>
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__text">
														A Programming Language
													</span>
												</div>
												<div class="m-widget4__ext">
													<span class="m-widget4__number m--font-info">
														+19
													</span>
												</div>
											</div>
											<div class="m-widget4__item m-widget4__item-border">
												<div class="m-widget4__ext">
													<span class="m-widget4__icon m--font-brand">
														<i class="flaticon-music"></i>
													</span>
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__text">
														Red Painted Truck
													</span>
												</div>
												<div class="m-widget4__ext">
													<span class="m-widget4__number m--font-info">
														+134
													</span>
												</div>
											</div>
											<div class="m-widget4__item m-widget4__item-border">
												<div class="m-widget4__ext">
													<span class="m-widget4__icon m--font-brand">
														<i class="flaticon-user"></i>
													</span>
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__text">
														New Customer
													</span>
												</div>
												<div class="m-widget4__ext">
													<span class="m-widget4__number m--font-info">
														+13%
													</span>
												</div>
											</div>
										</div>
										<!--end::Widget 12-->
									</div>
								</div>
								<!--end:: Widgets/Last Updates-->
							</div>
            </div>




              </div>

            </div>

          </div>

      </div>
    </div>
