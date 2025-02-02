        <div class="mobile-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a href="./" class="logo d-inline-block">
                    <img src="assets/images/bb_logo_light.svg" width="200" alt="logo">
                </a>

                <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="close">
                    <i class="ri-close-fill"></i>
                </button>
            </div>

            <div class="offcanvas-body">
                <ul class="mobile-menu">
                    <li class="mobile-menu-list without-icon <?php if ($page == 'Home') {echo 'active';} ?>">
                        <a href="./" class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="mobile-menu-list <?php if($page=='Bill Payment' || $page=='Crypto' || $page=='Gift Cards'){echo 'active';}?>">
                        <a href="javascript:void(0);">
                            Products
                        </a>

                        <ul class="mobile-menu-items">
                            <li>
                                <a class="dropdown-item <?php if($page=='Bill Payment'){echo 'active';}?>" href="bill-payment">
                                    Bill Payment
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if($page=='Crypto'){echo 'active';}?>" href="crypto">
                                    Buy & Sell Crypto
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if($page=='Gift Cards'){echo 'active';}?>" href="gift-cards">
                                    Buy & Sell Gift Cards
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="mobile-menu-list <?php if($page=='FAQ' || $page=='How it Works'){echo 'active';}?>">
                        <a href="javascript:void(0);">
                            Resources
                        </a>

                        <ul class="mobile-menu-items">
                            <li>
                                <a class="dropdown-item" href="https://calculator.billbuddy.africa" target="_blank">
                                    Rate Calculator
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if($page=='FAQ'){echo 'active';}?>" href="faq">
                                    FAQ's
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if($page=='How it Works'){echo 'active';}?>" href="how-it-works">
                                    How it Works
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="mobile-menu-list <?php if($page=='About Us' || $page=='Careers' || $page=='Contact Us'){echo 'active';}?>">
                        <a href="javascript:void(0);">
                            Company
                        </a>

                        <ul class="mobile-menu-items">
                            <li>
                                <a class="dropdown-item <?php if($page=='About Us'){echo 'active';}?>" href="about">
                                    About Us
                                </a>
                            </li>
                            <!-- <li>
                                <a class="dropdown-item <?php if($page=='Careers'){echo 'active';}?>" href="#">
                                    Careers
                                </a>
                            </li> -->
                            <li>
                                <a class="dropdown-item <?php if($page=='Contact Us'){echo 'active';}?>" href="contact">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="others-options">
                    <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled">
                        <li>
                            <a href="https://app.billbuddy.africa/login" target="_blank" class="search-btn login"><i class="ri-account-circle-line"></i> Log in</a>
                        </li>
                        <li>
                            <a href="https://app.billbuddy.africa/signup" target="_blank" class="default-btn">Get Started <i class="ri-arrow-right-up-line"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>