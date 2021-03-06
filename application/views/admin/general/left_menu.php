<!-- begin::Body -->
  <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
    <!-- BEGIN: Left Aside -->
    <button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn">
      <i class="la la-close"></i>
    </button>
    <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
      <!-- BEGIN: Aside Menu -->
<div
id="m_ver_menu"
class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-aside-menu--dropdown "
data-menu-vertical="true"
 data-menu-dropdown="true" data-menu-scrollable="true" data-menu-dropdown-timeout="500"
>
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item <?php if ($this->uri->segment(2) == 'dashboard') {
            echo 'm-menu__item--active';
          } else {
            echo 'm-menu__item--submenu';
          }; ?>" aria-haspopup="true" >
            <a  href="<?php echo base_url() . "index.php/admin/dashboard"; ?>" class="m-menu__link ">
              <span class="m-menu__item-here"></span>
              <i class="m-menu__link-icon flaticon-graph"></i>
              <span class="m-menu__link-text">
                principal
              </span>
            </a>
          </li>

          <li class="m-menu__item  <?php if ($this->uri->segment(2) == 'administrador') {
              echo 'm-menu__item--active';
            } else {
              echo 'm-menu__item--submenu';
            }; ?>" aria-haspopup="true"  data-menu-submenu-toggle="hover" data-redirect="true">
            <a  href="<?php echo base_url() . "admin/administrador"; ?>" class="m-menu__link ">
              <span class="m-menu__item-here"></span>
              <i class="m-menu__link-icon flaticon-users"></i>
              <span class="m-menu__link-text">
                administrador
              </span>
              <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
          </li>

          
          <li class="m-menu__item  <?php if ($this->uri->segment(2) == 'pedidos') {
              echo 'm-menu__item--active';
            } else {
              echo 'm-menu__item--submenu';
            }; ?>" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle">
              <span class="m-menu__item-here"></span>
              <i class="m-menu__link-icon flaticon-notes"></i>
              <span class="m-menu__link-text">
                pedidos
              </span>
              <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
              <span class="m-menu__arrow"></span>
              <ul class="m-menu__subnav">
                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                  <span class="m-menu__link">
                    <span class="m-menu__item-here"></span>
                    <span class="m-menu__link-text">
                      Layouts
                    </span>
                  </span>
                </li>
                <li class="m-menu__item " aria-haspopup="true" >
                  <a  href="builder.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Layout Builder
                    </span>
                  </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="builder.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Boxed Layout
                    </span>
                  </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="builder.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Right Sidebar
                    </span>
                  </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="builder.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Fixed Footer
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          
          <li class="m-menu__item  <?php if ($this->uri->segment(2) == 'facturacion') {
              echo 'm-menu__item--active';
            } else {
              echo 'm-menu__item--submenu';
            }; ?>" aria-haspopup="true"  data-menu-submenu-toggle="hover" data-redirect="true">
            <a  href="#" class="m-menu__link m-menu__toggle">
              <span class="m-menu__item-here"></span>
              <i class="m-menu__link-icon flaticon-piggy-bank"></i>
              <span class="m-menu__link-text">
                facturación
              </span>
              <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu ">
              <span class="m-menu__arrow"></span>
              <ul class="m-menu__subnav">
                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  data-redirect="true">
                  <span class="m-menu__link">
                    <span class="m-menu__item-here"></span>
                    <span class="m-menu__link-text">
                      Support
                    </span>
                  </span>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="inner.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Reports
                    </span>
                  </a>
                </li>
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover" data-redirect="true">
                  <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Cases
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                  </a>
                  <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                      <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                        <a  href="inner.html" class="m-menu__link ">
                          <i class="m-menu__link-icon flaticon-computer"></i>
                          <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                              <span class="m-menu__link-text">
                                Pending
                              </span>
                              <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--warning m-badge--wide">
                                  10
                                </span>
                              </span>
                            </span>
                          </span>
                        </a>
                      </li>
                      <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                        <a  href="inner.html" class="m-menu__link ">
                          <i class="m-menu__link-icon flaticon-signs-2"></i>
                          <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                              <span class="m-menu__link-text">
                                Urgent
                              </span>
                              <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--danger m-badge--wide">
                                  6
                                </span>
                              </span>
                            </span>
                          </span>
                        </a>
                      </li>
                      <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                        <a  href="inner.html" class="m-menu__link ">
                          <i class="m-menu__link-icon flaticon-clipboard"></i>
                          <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                              <span class="m-menu__link-text">
                                Done
                              </span>
                              <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--success m-badge--wide">
                                  2
                                </span>
                              </span>
                            </span>
                          </span>
                        </a>
                      </li>
                      <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                        <a  href="inner.html" class="m-menu__link ">
                          <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                          <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                              <span class="m-menu__link-text">
                                Archive
                              </span>
                              <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--info m-badge--wide">
                                  245
                                </span>
                              </span>
                            </span>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="inner.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Clients
                    </span>
                  </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="inner.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Audit
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          

          <li class="m-menu__item  <?php if ($this->uri->segment(2) == 'configuracion') {
              echo 'm-menu__item--active';
            } else {
              echo 'm-menu__item--submenu';
            }; ?> m-menu__item--bottom-2" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            <a  href="#" class="m-menu__link m-menu__toggle">
              <i class="m-menu__link-icon flaticon-cogwheel"></i>
              <span class="m-menu__link-text">
                configuración
              </span>
              <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu m-menu__submenu--up">
              <span class="m-menu__arrow"></span>
              <ul class="m-menu__subnav">
                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-2" aria-haspopup="true" >
                  <span class="m-menu__link">
                    <span class="m-menu__link-text">
                      Settings
                    </span>
                  </span>
                </li>
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover" data-redirect="true">
                  <a  href="inner.html" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Profile
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                  </a>
                  <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                      <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                        <a  href="inner.html" class="m-menu__link ">
                          <i class="m-menu__link-icon flaticon-computer"></i>
                          <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                              <span class="m-menu__link-text">
                                Pending
                              </span>
                              <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--warning">
                                  10
                                </span>
                              </span>
                            </span>
                          </span>
                        </a>
                      </li>
                      <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                        <a  href="inner.html" class="m-menu__link ">
                          <i class="m-menu__link-icon flaticon-signs-2"></i>
                          <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                              <span class="m-menu__link-text">
                                Urgent
                              </span>
                              <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--danger">
                                  6
                                </span>
                              </span>
                            </span>
                          </span>
                        </a>
                      </li>
                      <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                        <a  href="inner.html" class="m-menu__link ">
                          <i class="m-menu__link-icon flaticon-clipboard"></i>
                          <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                              <span class="m-menu__link-text">
                                Done
                              </span>
                              <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--success">
                                  2
                                </span>
                              </span>
                            </span>
                          </span>
                        </a>
                      </li>
                      <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                        <a  href="inner.html" class="m-menu__link ">
                          <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                          <span class="m-menu__link-title">
                            <span class="m-menu__link-wrap">
                              <span class="m-menu__link-text">
                                Archive
                              </span>
                              <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--info m-badge--wide">
                                  245
                                </span>
                              </span>
                            </span>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="inner.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Accounts
                    </span>
                  </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="inner.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Help
                    </span>
                  </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                  <a  href="inner.html" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--line">
                      <span></span>
                    </i>
                    <span class="m-menu__link-text">
                      Notifications
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
         
        </ul>
      </div>
      <!-- END: Aside Menu -->
    </div>
