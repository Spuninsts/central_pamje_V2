<nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">

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
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
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
                  <a href="/admin/active/users?val=active" class="nav-link">Active</a>
                </li>
                  <li class="nav-item">
                      <a href="/admin/active/users?val=reviewer" class="nav-link">Reviewers</a>
                  </li>
                  <li class="nav-item">
                      <a href="/admin/active/users?val=editor" class="nav-link">Editors</a>
                  </li>
                <li class="nav-item">
                  <a href="/admin/active/users?val=approval" class="nav-link">Approvals</a>
                </li>
                <li class="nav-item">
                  <a href="/admin/active/users?val=organization" class="nav-link">Contacts</a>
                </li>
                <li class="nav-item">
                  <a href="/admin/active/users?val=inactive" class="nav-link">Inactive</a>
                </li>
                  <li class="nav-item">
                      <a href="/admin/active/users?val=admin" class="nav-link">Admin</a>
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
                  <a href="/admin/feature/articles" class="nav-link">Featured</a>
                </li>

                <li class="nav-item">
                  <a href="/admin/inactive/articles" class="nav-link">Inactive</a>
                </li>

                <li class="nav-item">
                  <a href="/admin/new/article" class="nav-link">NewJournal</a>
                </li>

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
                      <a href="{{ route('admin.active-pages') }}" class="nav-link">Pages</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.active-resources') }}" class="nav-link">Resources</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.active-announcements') }}" class="nav-link">Announcements</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.active-news') }}" class="nav-link">News</a>
                  </li>
                 <li class="nav-item">
                  <a href="{{ route('admin.active-banners') }}" class="nav-link">Banners</a>
                </li>
               <!--  <li class="nav-item">
                  <a href="{{ route('admin.new-banner') }}" class="nav-link">New Banner</a>
                </li> -->
                <!-- <li class="nav-item">
                  <a href="{{ route('admin.new-page') }}" class="nav-link">New Page</a>
                </li> -->
              </ul>
            </div>
        </li>

        <!-- Index Block  -->
        <li class="nav-item">
            <a href="/admin/active/indexes?val=index" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Indexes</span>
            </a>
        </li>

        <!-- Publisher Block  -->
        <li class="nav-item">
            <a href="/admin/active/publishers?val=publisher" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Publishers</span>
            </a>
        </li>

        <!-- Organization Block  -->
        <li class="nav-item">
            <a href="/admin/active/organizations" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Organizations</span>
            </a>
        </li>
        </ul>
      </div>
    </nav>

