        <nav class="navbar main-navbar navbar-expand-lg bg-color-000000" id="navbar">
            <div class="container-fluid side-padding position-relative">
                <a class="navbar-brand logo-brand p-0" href="./">
                    <img src="assets/images/mixed_bb_logo_light.svg" width="200" alt="image">
                </a>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php if ($page == 'Home') {echo 'active';} ?>" href="./">
                                Home
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link <?php if ($page == 'Products') {echo 'active';} ?>" href="products">
                                Products
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if($page=='FAQ' || $page=='How it Works'){echo 'active';}?>" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Resources
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="https://rates.billbuddy.africa" target="_blank">
                                        Rate Calculator
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item <?php if($page=='FAQ'){echo 'active';}?>" href="faq">
                                        FAQ's
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if($page=='About Us' || $page=='Careers' || $page=='Contact Us'){echo 'active';}?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Company
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item <?php if($page=='About Us'){echo 'active';}?>" href="about">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item <?php if($page=='Contact Us'){echo 'active';}?>" href="contact">
                                       Contact Us
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="others-options">
                    <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled">
                        <li>
                            <a href="https://app.billbuddy.africa/login" target="_blank" class="search-btn login"><i class="ri-account-circle-line"></i> Log in</a>
                        </li>
                        <li>
                            <a href="https://app.billbuddy.africa/signup" target="_blank" class="default-btn two">Get Started <i class="ri-arrow-right-up-line"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>