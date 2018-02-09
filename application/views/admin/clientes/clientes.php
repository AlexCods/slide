
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<div class="m-content">

            <div class="m-content">

							<!-- BEGIN: Subheader -->

								<div class="d-flex align-items-center info-subheader">
									<div class="mr-auto">
										<h3 class="m-subheader__title">
											<i style="font-size: 1.7rem" class="la la-users"></i>
											clientes
											<small>Panel de gestión de clientes</small>
										</h3>
									</div>
								</div>

                <div style="padding: 0;" class="col-lg-12">
								<!--begin::Portlet-->
								<div class="m-portlet">

									<div class="m-portlet__body">
										<ul class="nav nav-tabs  m-tabs-line m-tabs-line--success" role="tablist">
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
													<i class="la la-users"></i>
													Lista de clientes
												</a>
											</li>
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
													<i class="la la-check-circle-o"></i>
													Pendientes de validación
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">


                        <div class="m-portlet__body">
              <!--begin: Search Form -->
              <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                  <div class="col-xl-8 order-2 order-xl-1">
                    <div class="form-group m-form__group row align-items-center">
                      <div class="col-md-4">
                        <div class="m-form__group m-form__group--inline">
                          <div class="m-form__label">
                            <label>
                              Status:
                            </label>
                          </div>
                          <div class="m-form__control">
                            <div class="btn-group bootstrap-select form-control m-bootstrap-select">

                              <div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">
                                All
                              </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">
                                Pending
                              </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">
                                Delivered
                              </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">
                                Canceled
                              </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul>
                            </div>
                            <select class="form-control m-bootstrap-select" id="m_form_status" tabindex="-98">
                              <option value="">
                                All
                              </option>
                              <option value="1">
                                Pending
                              </option>
                              <option value="2">
                                Delivered
                              </option>
                              <option value="3">
                                Canceled
                              </option>
                            </select></div>
                          </div>
                        </div>
                        <div class="d-md-none m--margin-bottom-10"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="m-form__group m-form__group--inline">
                          <div class="m-form__label">
                            <label class="m-label m-label--single">
                              Type:
                            </label>
                          </div>
                          <div class="m-form__control">
                            <div class="btn-group bootstrap-select form-control m-bootstrap-select"><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">
                                All
                              </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">
                                Online
                              </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">
                                Retail
                              </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">
                                Direct
                              </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control m-bootstrap-select" id="m_form_type" tabindex="-98">
                              <option value="">
                                All
                              </option>
                              <option value="1">
                                Online
                              </option>
                              <option value="2">
                                Retail
                              </option>
                              <option value="3">
                                Direct
                              </option>
                            </select></div>
                          </div>
                        </div>
                        <div class="d-md-none m--margin-bottom-10"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="m-input-icon m-input-icon--left">
                          <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                          <span class="m-input-icon__icon m-input-icon__icon--left">
                            <span>
                              <i class="la la-search"></i>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                    <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                      <span>
                        <i class="la la-cart-plus"></i>
                        <span>
                          New Order
                        </span>
                      </span>
                    </a>
                    <div class="m-separator m-separator--dashed d-xl-none"></div>
                  </div>
                </div>
              </div>
              <!--end: Search Form -->
  <!--begin: Datatable -->
              <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="ajax_data" style="">
                <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                  <thead class="m-datatable__head">
                    <tr class="m-datatable__row" style="height: 53px;">
                      <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 40px;">Código cliente</span>
                      </th>
                      <th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 150px;">Nombre</span>
                      </th>
                      <th data-field="ShipCountry" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 150px;">Apellidos</span>
                      </th>
                      <th data-field="ShipCity" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 110px;">Empresa - Centro</span>
                      </th>
                      <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 110px;">Status</span>
                      </th>

                      <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                        <span style="width: 110px;">Actions</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="m-datatable__body" style="">
                    <?php
                      $count = 0;
                      foreach ($lista_clientes as $cliente) {

                    ?>
                    <tr data-row="0" class="m-datatable__row <?php if($count == 1){ echo 'm-datatable__row--even'; $count = 0; } else { $count++; } ?>" style="height: 55px;">
                      <td data-field="RecordID" class="m-datatable__cell--center m-datatable__cell">
                        <span style="width: 40px;"><?php echo $cliente->client_code; ?></span>
                      </td>
                      <td data-field="OrderID" class="m-datatable__cell">
                        <span style="width: 150px;"><?php echo $cliente->name; ?></span>
                      </td>
                      <td data-field="ShipCountry" class="m-datatable__cell">
                        <span style="width: 150px;"><?php echo $cliente->surname; ?></span>
                      </td>
                      <td data-field="ShipCity" class="m-datatable__cell">
                        <span style="width: 110px;"><?php if ($cliente->client_business_name != ""){ echo $cliente->client_business_name; } else { echo " - "; } ?></span>
                      </td>

                      <td data-field="Status" class="m-datatable__cell">
                        <span style="width: 110px;">
                          <span class="m-badge  m-badge--success m-badge--wide">Success</span>
                        </span>
                      </td>

                      <td data-field="Actions" class="m-datatable__cell">
                        <span style="overflow: visible; width: 110px;">
                          <div class="dropdown ">
                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
                              <i class="la la-ellipsis-h"></i>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                             <a class="dropdown-item" href="#">
                               <i class="la la-edit"></i> Edit Details
                             </a>
                             <a class="dropdown-item" href="#">
                               <i class="la la-leaf"></i> Update Status
                             </a>
                             <a class="dropdown-item" href="#">
                               <i class="la la-print"></i> Generate Report
                             </a>
                           </div>
                         </div>
                         <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
                           <i class="la la-edit"></i>
                         </a>
                         <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                           <i class="la la-trash"></i>
                         </a>
                       </span>
                     </td>
                   </tr>
                   <?php
                    }
                   ?>
  		    	 	   </tbody>
               </table>

              <!-- Paginacion etc... -->
              <div class="m-datatable__pager m-datatable--paging-loaded clearfix"><ul class="m-datatable__pager-nav" style="display: none;"><li><a title="First" class="m-datatable__pager-link m-datatable__pager-link--first m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-double-left"></i></a></li><li><a title="Previous" class="m-datatable__pager-link m-datatable__pager-link--prev m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-left"></i></a></li><li style="display: none;"><a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-prev" data-page="1"><i class="la la-ellipsis-h"></i></a></li><li style="display: none;"><input type="text" class="m-pager-input form-control" title="Page number"></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number m-datatable__pager-link--active" data-page="1" title="1">1</a></li><li style="display: none;"><a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-next" data-page="1"><i class="la la-ellipsis-h"></i></a></li><li><a title="Next" class="m-datatable__pager-link m-datatable__pager-link--next m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-right"></i></a></li><li><a title="Last" class="m-datatable__pager-link m-datatable__pager-link--last m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-double-right"></i></a></li></ul><div class="m-datatable__pager-info"><div class="btn-group bootstrap-select m-datatable__pager-size" style="width: 70px;"><button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="Select page size"><span class="filter-option pull-left">Seleccionar</span>&nbsp;
              <span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">10</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">20</span>
              <span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">30</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
              <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">50</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
              <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">100</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div><span class="m-datatable__pager-detail">1 - 25 de 83 clientes</span></div></div></div>
              <!--end: Datatable -->
            </div>



                      </div>

											<div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
											</div>
										</div>
                  </div>
								</div>
								<!--end::Portlet-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="float: none; clear: both;"></div>
			<!-- end:: Body -->


		<!--end::Page Snippets -->
