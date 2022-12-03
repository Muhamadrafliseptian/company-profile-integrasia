<section>
    <aside id="leftsidebar" class="sidebar">
        <div class="user-info">
            <div class="image">
                <img src="{{ url('/desain') }}/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mohammad Ilham</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ url('/desain') }}/index.html">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                        <span>Example Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('/desain') }}/pages/examples/profile.html">Profile</a>
                        </li>
                        <li>
                            <a href="{{ url('/desain') }}/pages/examples/sign-in.html">Sign In</a>
                        </li>
                        <li>
                            <a href="{{ url('/desain') }}/pages/examples/sign-up.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="{{ url('/desain') }}/pages/examples/forgot-password.html">Forgot Password</a>
                        </li>
                        <li class="active">
                            <a href="{{ url('/desain') }}/pages/examples/blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="{{ url('/desain') }}/pages/examples/404.html">404 - Not Found</a>
                        </li>
                        <li>
                            <a href="{{ url('/desain') }}/pages/examples/500.html">500 - Server Error</a>
                        </li>
                    </ul>
                </li>
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
</section>
