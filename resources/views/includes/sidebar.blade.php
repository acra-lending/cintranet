    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset ('img/CscLogo-red.png') }}" alt="Citadel-Logo" class="brand-image img-rounded" id="brand-logo">
        <span class="brand-text font-weight-light">Cintranet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{ (Auth::user()->avatar) ? url('storage/avatars/' .Auth::user()->avatar) : asset('img/avatar1.png') }}" alt="user-photo" class="img-circle elevation-1">
            </div>
            <div class="info">
            <a href="/usermanagement/profile/{{ Auth::user()->id}}" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" id="slim2">
            <li class="nav-item">
                <a href="/" class="nav-link {{ Request::path() === '/' ? 'active': ''}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            @can('view-wp-users')
            <li class="nav-item has-treeview {{ Request::is('usermanagement/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                @can('edit-users')
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/usermanagement/profile/{{ Auth::user()->id}}" class="nav-link {{ Request::is('usermanagement/profile/*') ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}" class="nav-link {{ Request::is('usermanagement/user') ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                </ul>
                @endcan
                @can('view-wp-users')
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/usermanagement/wp-users" class="nav-link {{ Request::path() === 'usermanagement/wp-users' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>WP Users</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/usermanagement/brokerportalrequests" class="nav-link {{ Request::path() === 'usermanagement/brokerportalrequests' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Create WP User</p>
                        </a>
                    </li>
                </ul> --}}
                @endcan
                {{-- @can('edit-posts')
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/turntimes" class="nav-link {{ Request::path() === 'turntimes' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Wholesale Turn Times</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/ild/turntimes" class="nav-link {{ Request::path() === 'ild/turntimes' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>ILD Turn Times</p>
                        </a>
                    </li>
                </ul>
                @endcan --}}
            </li>
            @endcan
            
            <li class="nav-item">
                <a href="/monthlymeetings" class="nav-link {{ Request::path() === 'monthlymeetings' ? 'active': ''}}">
                    <i class="nav-icon fas fa-video"></i>
                    <p>Monthly Meetings</p>
                </a>
            </li>
            <li class="nav-item has-treeview {{ Request::is('directory/*') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-address-book"></i>
                    <p>Directory
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/directory/search" class="nav-link {{ Request::path() === 'directory/search' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Search</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/directory/pods" class="nav-link {{ Request::path() === 'directory/pods' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>POD Listing</p>
                        </a>
                    </li>
                </ul> --}}
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/directory/tmteams" class="nav-link {{ Request::path() === 'directory/tmteams' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>TM Teams</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/directory/uwteams" class="nav-link {{ Request::path() === 'directory/uwteams' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>UW Teams</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/directory/cdlteams" class="nav-link {{ Request::path() === 'directory/cdlteams' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>CDL Teams</p>
                        </a>
                    </li>
                </ul> --}}
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
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Announcements</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/learning/guides" class="nav-link {{ Request::path() === 'learning/guides' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Guides</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/learning/posts" class="nav-link {{ Request::path() === 'learning/posts' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Building Relationships</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{ Request::is('learning/courses/*') ? 'menu-open': ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                            Courses
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/learning/courses/catalog" class="nav-link {{ Request::path() === 'learning/courses/catalog' ? 'active': ''}}">
                                    <i class="far fa-circle text-circle nav-icon"></i>
                                    <p>Course Catalog</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/learning/courses/fullcalendar" class="nav-link {{ Request::path() === 'learning/courses/fullcalendar' ? 'active': ''}}">
                                    <i class="far fa-circle text-circle nav-icon"></i>
                                    <p>Calendar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/learning/courses/industryterms" class="nav-link {{ Request::path() === 'learning/courses/industryterms' ? 'active': ''}}">
                                    <i class="far fa-circle text-circle nav-icon"></i>
                                    <p>Industry Terms</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- <li class="nav-item has-treeview {{ Request::is('procedures/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>Procedures & Guides
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/procedures/documents" class="nav-link {{ Request::path() === 'procedures/documents' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Wholesale</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/learning/guides" class="nav-link {{ Request::path() === 'learning/guides' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Correspondent</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/learning/posts" class="nav-link {{ Request::path() === 'learning/posts' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Investor Loan Division</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/learning/guides" class="nav-link {{ Request::path() === 'learning/guides' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Consumer Direct</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/learning/guides" class="nav-link {{ Request::path() === 'learning/guides' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Shared Services</p>
                        </a>
                    </li>
                </ul>
            </li> -->

            <li class="nav-item has-treeview {{ Request::is ('legal/*') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link">  
                    <i class="nav-icon fas fa-gavel"></i>
                    <p>Legal
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/legal/documents" class="nav-link {{ Request::path() === 'legal/documents' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/legal/videos" class="nav-link {{ Request::path() === 'legal/videos' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview {{ 
                    (Request::is('humanresources/*') ? 'menu-open'
                    : Request::is('humanresources/employee/*')) ? 'menu-open'
                    : ''
                }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Human Resources
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @can('edit-posts')
                    <li class=" nav-item has-treeview {{ Request::is('humanresources/employee/*') ? 'menu-open': ''}}">
                        <a href="#" class="nav-link" style="{{ Request::is('humanresources/employee/*') ? 'background-color: var(--primary-color); color: #FFF': '' }}">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>Employee Status<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/humanresources/employee/newhire" class="nav-link {{ Request::path() === 'humanresources/employee/newhire' ? 'active': ''}}">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>New Hire Form</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/humanresources/employee/outofoffice" class="nav-link {{ Request::path() === 'humanresources/employee/outofoffice' ? 'active': ''}}">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>Out Of Office Form</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/humanresources/employee/reminders" class="nav-link {{ Request::path() === 'humanresources/employee/reminders' ? 'active': ''}}">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>Reminders</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/humanresources/employee/statuschange" class="nav-link {{ Request::path() === 'humanresources/employee/statuschange' ? 'active': ''}}">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>Status Change Form</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/humanresources/employee/termination" class="nav-link {{ Request::path() === 'humanresources/employee/termination' ? 'active': ''}}">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>Termination Form</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                </ul>
                @can('edit-posts')
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/audit" class="nav-link {{ Request::path() === 'humanresources/audit' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Audit - Time</p>
                        </a>
                    </li>
                </ul>
                @endcan
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/401k" class="nav-link {{ Request::path() === 'humanresources/401k' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>401(k)</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/careers" class="nav-link {{ Request::path() === 'humanresources/careers' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Careers</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/dayforce" class="nav-link {{ Request::path() === 'humanresources/dayforce' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Dayforce</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/documents" class="nav-link {{ Request::path() === 'humanresources/documents' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
                <!--
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/expensereport" class="nav-link {{ Request::path() === 'humanresources/expensereport' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Expense Reporting</p>
                        </a>
                    </li>
                </ul>
                -->
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/health" class="nav-link {{ Request::path() === 'humanresources/health' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Health Plan</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/better" class="nav-link {{ Request::path() === 'humanresources/better' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>BetterVet</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/paylocity" class="nav-link {{ Request::path() === 'humanresources/paylocity' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Paylocity</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/recruitment" class="nav-link {{ Request::path() === 'humanresources/recruitment' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Recruitment</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/schedulesforms" class="nav-link {{ Request::path() === 'humanresources/schedulesforms' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Schedules & Forms</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/stateposters" class="nav-link {{ Request::path() === 'humanresources/stateposters' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Workplace Posters</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/videos" class="nav-link {{ Request::path() === 'humanresources/videos' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/humanresources/mvp" class="nav-link {{ Request::path() === 'humanresources/mvp' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>MVP Spotlight</p>
                        </a>
                    </li>
                </ul> --}}

            </li>    

            
            <li class="nav-item has-treeview {{ Request::is('operations/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>Operations
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                @can('edit-users')
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/operations/daily" class="nav-link {{ Request::path() === 'operations/daily' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Daily Dashboard</p>
                        </a>
                    </li>
                </ul> --}}
                @endcan
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/operations/forms" class="nav-link {{ Request::path() === 'operations/forms' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/operations/processes" class="nav-link {{ Request::path() === 'operations/processes' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Processes</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/operations/empower" class="nav-link {{ Request::path() === 'operations/empower' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Empower - Wholesale</p>
                        </a>
                    </li>
                </ul> --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/operations/usefullinks" class="nav-link {{ Request::path() === 'operations/usefullinks' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Useful Links</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/operations/videos" class="nav-link {{ Request::path() === 'operations/videos' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('integrations/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-project-diagram"></i>
                    <p>Business Integration
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/integrations/requests" class="nav-link {{ Request::path() === 'integrations/requests' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Integration Requests</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/correspondent/forms" class="nav-link {{ Request::path() === 'correspondent/forms' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Forms</p>
                        </a>
                    </li>
                </ul> --}}
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/correspondent/jobaides" class="nav-link {{ Request::path() === 'correspondent/jobaides' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Job Aides</p>
                        </a>
                    </li>
                </ul> --}}
            </li>
            <li class="nav-item has-treeview {{ Request::is('compliance/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-hand-paper"></i>
                    <p>Compliance
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/Compliance/Et8tw8TuLrtOv0AMSZLigLYBxFWwQa0NxyfuU01knST2hw?e=QKDEx0" class="nav-link" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Policies and Procedures</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/correspondent/forms" class="nav-link {{ Request::path() === 'correspondent/forms' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Forms</p>
                        </a>
                    </li>
                </ul> --}}
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/correspondent/jobaides" class="nav-link {{ Request::path() === 'correspondent/jobaides' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Job Aides</p>
                        </a>
                    </li>
                </ul> --}}
            </li>
            <li class="nav-item">
                <a href="/ratesheets" class="nav-link {{ Request::path() === 'ratesheets' ? 'active': ''}}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Rate Sheets</p>
                </a>
            </li>            
            <li class="nav-item has-treeview {{ Request::is('sales/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-hand-holding-usd"></i>
                    <p>Wholesale
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                @can('edit-users')
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/data" class="nav-link {{ Request::path() === 'sales/data' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Data</p>
                        </a>
                    </li>
                </ul> --}}
                @endcan
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/documents" class="nav-link {{ Request::path() === 'sales/documents' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/forms" class="nav-link {{ Request::path() === 'sales/forms' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Forms</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/flyers" class="nav-link {{ Request::path() === 'sales/flyers' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Flyers & Programs</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/sites/Marketing/Events/Marketing%20Calendar.aspx" class="nav-link" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Marketing Calendar</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/Wholesale2/Eo_Svk7jkTNLvo4C9Qw1zosBCvOlrUzPHnCa_g-lWgJMMA?e=XvMEYR" class="nav-link" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Procedures & Guides</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sales/videos" class="nav-link {{ Request::path() === 'sales/videos' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('correspondent/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>Correspondent
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/Correspondent2/Ehf81TXe-V1AvI9t0eCo7CwBqJjDnLa6GoSUnspucIQVgg?e=hV5Kj2" class="nav-link {{ Request::path() === 'correspondent/documents' ? 'active': ''}}" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Sales Tool Kit</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/Correspondent2/Ej28AO_9YRxHhyH1NXsF18UBAoOQrngWyKiK8Ebb8nghpw?e=5FjFvw" class="nav-link {{ Request::path() === 'correspondent/forms' ? 'active': ''}}" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Operations</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/Correspondent2/Eh7uL8IrfjZNorQQ1uXEa9YBDkM03Wd8VueQXP3OqOdtBg?e=gAdAX0" class="nav-link {{ Request::path() === 'correspondent/forms' ? 'active': ''}}" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Procedures & Guides</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/correspondent/jobaides" class="nav-link {{ Request::path() === 'correspondent/jobaides' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Job Aides</p>
                        </a>
                    </li>
                </ul> --}}
            </li>
            <li class="nav-item has-treeview {{ Request::is('consumerdirect/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sign"></i>
                        <p>Consumer Direct</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/ConsumerDirectLending/EiOoA2VcPOlDiuf-CD-TzgsBPmt0xJsVDwvVeOsVuYKZLQ?e=ZDFUDs" class="nav-link {{ Request::path() === 'consumerdirect/documents' ? 'active': ''}}" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/ConsumerDirectLending/Erf7HS_WfUhIvkV9aCP8emABi33XcjOTOkDkL4mNq9a-jg?e=LdjdO8" class="nav-link {{ Request::path() === 'consumerdirect/forms' ? 'active': ''}}" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Forms</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/ConsumerDirectLending/EqmMK3-i0b9KhZgOVkdj4d8Bc1J3BMziXl7g2OhUbB7Z-A?e=PbuuXi" class="nav-link {{ Request::path() === 'consumerdirect/processes' ? 'active': ''}}" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Procedures & Guides</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/ConsumerDirectLending/EmP0jot_npdOoe05PPGQtH0BixXopjwu8FkypnVUeOvkVg?e=NfW4zJ" class="nav-link {{ Request::path() === 'consumerdirect/processes' ? 'active': ''}}" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Processes</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/consumerdirect/videos" class="nav-link {{ Request::path() === 'consumerdirect/videos' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('fixandflip/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tools"></i>
                    <p>Investor Loan Division
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/InvestorLoanDivision/EqCloARjiwNMjRHu-r7tWS4BvNNzwUvjfKZRuc2WTqisPA?e=LVfgkP" class="nav-link" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Sales Tool Kit</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/InvestorLoanDivision/EsDuvISu-NZJoInwLO-UtWkBYv1ACTbkRDQN7KFIEZPESg?e=eUmlqS" class="nav-link" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Operations</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/InvestorLoanDivision/Eh_BQf4tPZxFo3oRc5qlm7sBr1MERDh6KI41I7pJCOwW4A?e=h3ygDd" class="nav-link" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>ILD Guidelines & Credit Grids</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/InvestorLoanDivision/Eq1tsxj7fcFGiDFCkZlE4uwBDPcl7B62yIsig5Dtp42y9A?e=PG4nkk" class="nav-link" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Procedures & Guides</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/fixandflip/videos" class="nav-link {{ Request::path() === 'fixandflip/videos' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('sharedservices/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Shared Services
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://citadelservicing.sharepoint.com/:f:/s/SharedServices/EqyzYQRbWrtMoLnTiQ6i4vUBR8CvRVretc_BmzC82_fXgw?e=wdYtKJ" class="nav-link" target="_blank">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Procedures & Guides</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('marketing/*') ? 'menu-open': ''}}">
                <a href="/marketing" class="nav-link">
                    <i class="nav-icon fas fa-rocket"></i>
                    <p>Marketing
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/marketing/resources" class="nav-link {{ Request::path() === 'marketing/resources' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Resources</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item has-treeview {{ Request::is('marketing/calendar/*') ? 'menu-open': ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                            Calendars
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/marketing/calendar/wholesale" class="nav-link {{ Request::path() === 'marketing/calendar/wholesale' ? 'active': ''}}">
                                    <i class="far fa-circle text-circle nav-icon"></i>
                                    <p>Wholesale</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/marketing/calendar/cdl" class="nav-link {{ Request::path() === 'marketing/calendar/cdl' ? 'active': ''}}">
                                    <i class="far fa-circle text-circle nav-icon"></i>
                                    <p>CDL</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul> --}}
            </li>   
            <li class="nav-item has-treeview {{ Request::is('servicing/*') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link">  
                    <i class="nav-icon fas fa-headset"></i>
                    <p>Servicing
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/servicing/documents" class="nav-link {{ Request::path() === 'servicing/documents' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/servicing/tools" class="nav-link {{ Request::path() === 'servicing/tools' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Tools</p>
                        </a>
                    </li>
                </ul>
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
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Submit Ticket</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/infotech/newprojectrequests" class="nav-link {{ Request::path() === 'infotech/newprojectrequests' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>New Project Requests</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/infotech/ratesheetupdates" class="nav-link {{ Request::path() === 'infotech/ratesheetupdates' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Ratesheet Updates</p>
                        </a>
                    </li>
                </ul>
                @can('edit-posts')
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/infotech/documents" class="nav-link {{ Request::path() === 'infotech/documents' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Documents</p>
                        </a>
                    </li>
                </ul>
                @endcan
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/infotech/videos" class="nav-link {{ Request::path() === 'infotech/videos' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('Facilities/*') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link">  
                    <i class="nav-icon fas fa-building"></i>
                    <p>Facilities
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class=" nav-item has-treeview {{ Request::is('facilities/*') ? 'menu-open': ''}}">
                        <a href="#" class="nav-link" style="{{ Request::is('facilities/*') ? 'background-color: var(--primary-color); color: #FFF': '' }}">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>Seating Request<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="https://citadelservicing.sharepoint.com/:u:/s/Reception/EajauNBuVJdGlVufMyRmRYQBgOoG7dvI9qCPTzsNQ0sfbw?e=4%3Agozm8j&at=9" class="nav-link" target="_blank">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>Seating Chart Floor Plan</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/facilities/seatingrequest" class="nav-link {{ Request::path() === 'facilities/seatingrequest' ? 'active': ''}}">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>Seating Request Form</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="https://citadelservicing.sharepoint.com/sites/ITInfrastructure2/Shared%20Documents/Forms/AllItems.aspx?id=%2Fsites%2FITInfrastructure2%2FShared%20Documents%2FUser%20Guides%20and%20Tutorials%2FSeating%20Request%20Guide%2Epdf&parent=%2Fsites%2FITInfrastructure2%2FShared%20Documents%2FUser%20Guides%20and%20Tutorials&p=true&wdLOR=c14C84C91%2D6296%2D4BE7%2DA669%2D0C905A2D2F54&ct=1687988046631&or=Outlook%2DBody&cid=9EB7095D%2D927F%2D4A4B%2D8553%2D512C0DBD63AC&ga=1" class="nav-link" target="_blank">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>Seating Request Guide</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                        @can('edit-posts')
                            <li class="nav-item">
                            <a href="https://citadelservicing.sharepoint.com/sites/ITInfrastructure2/Shared%20Documents/Forms/AllItems.aspx?id=%2Fsites%2FITInfrastructure2%2FShared%20Documents%2FGuides%20and%20Tutorials%2FSeating%20Chart%20Management%20Guide%2Epdf&parent=%2Fsites%2FITInfrastructure2%2FShared%20Documents%2FGuides%20and%20Tutorials&p=true&ct=1687988096753&or=Teams%2DHL&ga=1" class="nav-link" target="_blank">
                                    <i class="far fa-dot-circle text-circle nav-icon"></i>
                                    <p>SR Management Guide</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/facilities/ticket" class="nav-link {{ Request::path() === 'facilities/ticket' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Submit Ticket</p>
                        </a>
                    </li>
                </ul>
            </li>
            @can('edit-users')
            <li class=" nav-item has-treeview {{ Request::is('mediamanager/*') ? 'menu-open': ''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-hdd"></i>
                    <p>File Manager</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/mediamanager/upload" class="nav-link {{ Request::path() === 'mediamanager/upload' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>File Upload</p>
                        </a>
                    </li>
                </ul>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/mediamanager/uploadjumbo" class="nav-link {{ Request::path() === 'mediamanager/uploadjumbo' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Jumbo Prime Upload</p>
                        </a>
                    </li>
                </ul> --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/mediamanager/uploadratesheets" class="nav-link {{ Request::path() === 'mediamanager/uploadratesheets' ? 'active': ''}}">
                            <i class="far fa-circle text-circle nav-icon"></i>
                            <p>Ratesheets Upload</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>