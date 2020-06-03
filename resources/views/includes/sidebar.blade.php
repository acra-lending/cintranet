    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset ('img/CscLogo-red.png') }}" alt="Citadel-Logo" class="brand-image img-rounded">
        <span class="brand-text font-weight-light">Cintranet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{ (Auth::user()->avatar) ? url(Auth::user()->avatar) : asset('img/avatar1.png') }}" alt="user-photo" class="img-circle img-fluid">
            </div>
            <div class="info">
            <a href="/usermanagement/profile/{{ Auth::user()->id}}" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/" class="nav-link {{ Request::path() === '/' ? 'active': ''}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <br/>

            <li class="nav-item has-treeview {{ Request::is('usermanagement/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/usermanagement/profile/{{ Auth::user()->id}}" class="nav-link {{ Request::is('usermanagement/profile/*') ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}" class="nav-link {{ Request::is('usermanagement/user') ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                </ul>
            </li>
            <br/>

            <li class=" nav-item">
                <a href="/directory/directory" class="nav-link {{ Request::is('directory/*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-address-book"></i>
                    <p>Directory</p>
                </a>
            </li>

            <li class="nav-item has-treeview {{ Request::is('learning/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-graduation-cap"></i>
                    <p>Learning
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/learning/announcements" class="nav-link {{ Request::path() === 'learning/announcements' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Announcements</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/learning/posts" class="nav-link {{ Request::path() === 'learning/posts' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Building Relationships</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/learning/posts/create" class="nav-link {{ Request::path() === 'learning/posts/create' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Create Post</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{ Request::is('courses/*') ? 'menu-open': ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                            Courses <p style="font-size: 10pt;">&nbsp;(coming soon)<p>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle text-danger nav-icon"></i>
                                    <p>Catalog</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle text-danger nav-icon"></i>
                                    <p>Calendar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle text-danger nav-icon"></i>
                                    <p>Industry Terms</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview {{ Request::is('courses/guides/*') ? 'menu-open': ''}}">
                                <a href="#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>
                                    Participant Guides
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle text-danger nav-icon"></i>
                                            <p>Operations</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle text-danger nav-icon"></i>
                                            <p>Servicing</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview {{ Request::is('humanresources/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Human Resources
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/benefits" class="nav-link {{ Request::path() === 'humanresources/benefits' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Benefits</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/schedulesforms" class="nav-link {{ Request::path() === 'humanresources/schedulesforms' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Schedules & Forms</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/paylocity" class="nav-link {{ Request::path() === 'humanresources/paylocity' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Paylocity</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/401k" class="nav-link {{ Request::path() === 'humanresources/401k' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>401(k)</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/mvp" class="nav-link {{ Request::path() === 'humanresources/mvp' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>MVP Spotlight</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/careers" class="nav-link {{ Request::path() === 'humanresources/careers' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Careers <p style="font-size: 10pt;">&nbsp;(coming soon)<p> </p>
                        </a>
                    </li>
                </ul>
            </li>    

            <li class="nav-item has-treeview {{ Request::is('operations/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>Operations
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/operations/daily" class="nav-link {{ Request::path() === 'operations/daily' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Daily Dashboard</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/operations/forms" class="nav-link {{ Request::path() === 'operations/forms' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview {{ Request::is('sales/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-hand-holding-usd"></i>
                    <p>Sales
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/data" class="nav-link {{ Request::path() === 'sales/data' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Data</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/documents" class="nav-link {{ Request::path() === 'sales/documents' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/ratesheets" class="nav-link {{ Request::path() === 'sales/ratesheets' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Rate Sheets</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/forms" class="nav-link {{ Request::path() === 'sales/forms' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Forms</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/flyers" class="nav-link {{ Request::path() === 'sales/flyers' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Flyers & Programs</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="/servicing/servicing" class="nav-link {{ Request::path() === 'servicing/servicing' ? 'active' : ''}}">
                    <i class="nav-icon fas fa-headset"></i>
                    <p>Servicing</p>
                </a>
            </li>

            <li class="nav-item has-treeview {{ Request::is('infotech/*') ? 'menu-open': ''}}">
                <a href="/infotech" class="nav-link">
                    <i class="nav-icon fas fa-sitemap"></i>
                    <p>IT Department
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/infotech/ticket" class="nav-link {{ Request::path() === 'infotech/ticket' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Submit Ticket <p style="font-size: 10pt;">&nbsp;(coming soon)<p></p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#" class="nav-link {{ Request::path() === '' ? 'active' : ''}}">
                    <i class="nav-icon fas fa-box-open"></i>
                    <p>Resources<p style="font-size: 10pt;">&nbsp;(coming soon)<p></p>
                </a>
            </li>
            <br/>
            <br/>
            <li class=" nav-item has-treeview {{ Request::is('mediamanager/*') ? 'menu-open': ''}}">
                <a href="/mediamanager/files" class="nav-link">
                    <i class="nav-icon fas fa-hdd"></i>
                    <p>File Manager</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/mediamanager/upload" class="nav-link {{ Request::path() === 'mediamanager/upload' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>File Upload</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>