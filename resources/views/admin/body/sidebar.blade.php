<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">

          <img src="{{ asset('frontend/img/logo-central-w.jpg') }}" alt="Central Logo" width="100" >

        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
         <!--   <li class="nav-item nav-category">web apps</li>
         <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Email</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/email/inbox.html') }}" class="nav-link">Inbox</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/email/read.html') }}" class="nav-link">Read</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/email/compose.html') }}" class="nav-link">Compose</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ asset('../backend/pages/apps/chat.html') }}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Forum</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('../backend/pages/apps/calendar.html') }}" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>-->
          <li class="nav-item nav-category">Components</li>

        <!-- User Block -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="users">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Users</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="users">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="active-users" class="nav-link">Active</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">For Approval</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Inactive</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Org Contacts</a>
                </li>
              </ul>
            </div>
          </li>

            <!-- Article block -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#journals" role="button" aria-expanded="false" aria-controls="journals">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Journals</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="journals">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('admin.active-articles') }}" class="nav-link">Active</a>
                </li>
                <li class="nav-item">
                  <a href="/admin/feature-articles" class="nav-link">Featured</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.new-article') }}" class="nav-link">New Journal Form</a>
                </li>
                <li class="nav-item">
                  <a href="/admin/inactive-articles" class="nav-link">Inactive</a>
                </li>
                <!-- <li class="nav-item">
                  <a href="{{ route('admin.new-article-wizard') }}#" class="nav-link">New Journals Wizard</a>
                </li> -->
              </ul>
            </div>

          </li>

        <!-- Article Block -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#articles" role="button" aria-expanded="false" aria-controls="articles">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Articles</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="articles">
              <ul class="nav sub-menu">
                 <li class="nav-item">
                  <a href="{{ route('admin.active-banners') }}" class="nav-link">Banners</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.new-banner') }}" class="nav-link">New Banner</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.active-pages') }}" class="nav-link">Pages</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.new-page') }}" class="nav-link">New Page</a>
                </li>
              </ul>
            </div>
        </li>

        <!-- Index Block  -->
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Indexes</span>
            </a>
        </li>

        <!-- Publisher Block  -->
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Publishers</span>
            </a>
        </li>

        <!-- Organization Block  -->
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Organizations</span>
            </a>
        </li>

 <!--          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">UI Kit</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/accordion.html') }}" class="nav-link">Accordion</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/alerts.html') }}" class="nav-link">Alerts</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/badges.html') }}" class="nav-link">Badges</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/breadcrumbs.html') }}" class="nav-link">Breadcrumbs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/buttons.html') }}" class="nav-link">Buttons</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/button-group.html') }}" class="nav-link">Button group</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/cards.html') }}" class="nav-link">Cards</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/carousel.html') }}" class="nav-link">Carousel</a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('../backend/pages/ui-components/collapse.html') }}" class="nav-link">Collapse</a>
                  </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/dropdowns.html') }}" class="nav-link">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/list-group.html') }}" class="nav-link">List group</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/media-object.html') }}" class="nav-link">Media object</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/modal.html') }}" class="nav-link">Modal</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/navs.html') }}" class="nav-link">Navs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/navbar.html') }}" class="nav-link">Navbar</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/pagination.html') }}" class="nav-link">Pagination</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/popover.html') }}" class="nav-link">Popovers</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/progress.html') }}" class="nav-link">Progress</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/scrollbar.html') }}" class="nav-link">Scrollbar</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/scrollspy.html') }}" class="nav-link">Scrollspy</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/spinners.html') }}" class="nav-link">Spinners</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/tabs.html') }}" class="nav-link">Tabs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/ui-components/tooltips.html') }}" class="nav-link">Tooltips</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Advanced UI</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/advanced-ui/cropper.html') }}" class="nav-link">Cropper</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/advanced-ui/owl-carousel.html') }}" class="nav-link">Owl carousel</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/advanced-ui/sortablejs.html') }}" class="nav-link">SortableJs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/advanced-ui/sweet-alert.html') }}" class="nav-link">Sweet Alert</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Forms</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/forms/basic-elements.html') }}" class="nav-link">Basic Elements</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/forms/advanced-elements.html') }}" class="nav-link">Advanced Elements</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/forms/editors.html') }}" class="nav-link">Editors</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/forms/wizard.html') }}" class="nav-link">Wizard</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Charts</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/charts/apex.html') }}" class="nav-link">Apex</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/charts/chartjs.html') }}" class="nav-link">ChartJs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/charts/flot.html') }}" class="nav-link">Flot</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/charts/morrisjs.html') }}" class="nav-link">Morris</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/charts/peity.html') }}" class="nav-link">Peity</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/charts/sparkline.html') }}" class="nav-link">Sparkline</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Table</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/tables/basic-table.html') }}" class="nav-link">Basic Tables</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/tables/data-table.html') }}" class="nav-link">Data Table</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Icons</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/icons/feather-icons.html') }}" class="nav-link">Feather Icons</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/icons/flag-icons.html') }}" class="nav-link">Flag Icons</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/icons/mdi-icons.html') }}" class="nav-link">Mdi Icons</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Special pages</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/general/blank-page.html') }}" class="nav-link">Blank page</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/general/faq.html') }}" class="nav-link">Faq</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/general/invoice.html') }}" class="nav-link">Invoice</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/general/profile.html') }}" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/general/pricing.html') }}" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/general/timeline.html') }}" class="nav-link">Timeline</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Authentication</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="authPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/auth/login.html') }}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/auth/register.html') }}" class="nav-link">Register</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Error</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="errorPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/error/404.html') }}" class="nav-link">404</a>
                </li>
                <li class="nav-item">
                  <a href="{{ asset('../backend/pages/error/500.html') }}" class="nav-link">500</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="https://www.nobleui.com/html/documentation/docs.html') }}" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </div>
    </nav>

