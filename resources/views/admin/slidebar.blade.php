<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Content</div>
                             <!-- Category  -->
                            <a class="nav-link" href="/category/create">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Category ( Yoon  )
                            </a>
                            <a class="nav-link" href="/mcategory/create">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Category ( Malibu  )
                            </a>
                            <!-- Menu  -->
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu ( Yoon )
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/menu/create">Create</a>
                                    <a class="nav-link" href="/menu/view">View</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsMalibu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu ( Malibu )
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsMalibu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/mmenu/create">Create</a>
                                    <a class="nav-link" href="/mmenu/view">View</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#event" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Event ( Yoon )
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="event" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/event/create">Create</a>
                                    <a class="nav-link" href="/event/view">View</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#mevent" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Event ( Malibu )
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="mevent" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/mevent/create">Create</a>
                                    <a class="nav-link" href="/mevent/view">View</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Configuration</div>
                            <!-- <a class="nav-link" href="/contact-data">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                               Contact Data Management
                            </a> -->
                            <a class="nav-link" href="/about-content">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                               About Page Content Management
                            </a>
                            <a class="nav-link" href="/social-content-setting">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                                Social Configuration
                            </a>
                            <a class="nav-link" href="/account">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-alien"></i></div>
                                Admin Account Management
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        @auth 
                            {{Auth::user()->name}}
                        @endauth
                    </div>
                </nav>
            </div>