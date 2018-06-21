<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.html">
                <img src="/cms/images/profile.jpg" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">Tristan Pretty</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Web App developer <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li <?php if(Request::path() == '/admin/'): ?>
                class="active"
                <?php endif; ?>
            >
                <a href=""> <span class="nav-label">Home</span> </a>
            </li>
            <li>
                <a href=""> <span class="nav-label">Yachts</span> </a>
            </li>
            <li>
                <a href=""> <span class="nav-label">Brokers</span> </a>
            </li>
            <li>
                <a href=""> <span class="nav-label">Builders / Refitters</span> </a>
            </li>
            <li>
                <a href=""> <span class="nav-label">Architects</span> </a>
            </li>
            <li>
                <a href=""> <span class="nav-label">Designers</span> </a>
            </li>
            <li>
                <a href=""> <span class="nav-label">Marinas</span> </a>
            </li>
            <li>
                <a href=""> <span class="nav-label">Multimedia</span> </a>
            </li>
            <li>
                <span class="nav-label">------------------------------------------</span>
            </li>
            <li>
                <a href=""> <span class="nav-label">Data Admin</span> </a>
            </li>

        </ul>
    </div>
</aside>