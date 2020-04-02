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
                    <p>User Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/usermanagement/profile" class="nav-link {{ Request::path() === 'usermanagement/profile' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                </ul>
            </li>
            <br/>

            <li class=" nav-item">
                <a href="/directory/directory" class="nav-link {{ Request::path() === 'directory/directory' ? 'active' : ''}}">
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
                        <a href="/learning/building" class="nav-link {{ Request::path() === 'learning/building' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Building Relationships</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{ Request::is('courses/*') ? 'menu-open': ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                            Courses
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
                        <a href="#" class="nav-link">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Benefits</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Careers</p>
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
                        <a href="/humanresources/mvp" class="nav-link {{ Request::path() === 'humanresources/mvp' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>MVP Spotlight</p>
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
                        <a href="#" class="nav-link">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Compliance</p>
                        </a>
                    </li>
                </ul>
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
                        <a href="#" class="nav-link {{ Request::path() === 'complianceforms' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Forms</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ Request::path() === 'loansetup' ? 'active': ''}}">
                            <i class="far fa-circle text-danger nav-icon"></i>
                            <p>Loan Set Up</p>
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
                            <p>Submit Ticket</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#" class="nav-link {{ Request::path() === '' ? 'active' : ''}}">
                    <i class="nav-icon fas fa-box-open"></i>
                    <p>Resources</p>
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