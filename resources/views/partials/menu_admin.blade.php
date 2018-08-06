<div class="nav-side-menu">
    <div class="brand">Panel Administracyjny</div>
    <div class="menu-list">

        <ul id="menu-content" class="menu-content">
            <li>
                <a href="/admin/panel">
                    <i class="fa fa-dashboard fa-lg"></i>
                    Panel
                </a>
            </li>

            {{-- USERS --}}
            <li>
                <a href="/admin/users"><i class="fa fa-users fa-lg"></i> Użytkownicy <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu" id="products">
                <li><a href="/admin/users">Lista</a></li>
                <li><a href="/admin/usersAdmin">Lista Adminów</a></li>
            </ul>

            {{-- Pytania --}}
            <li>
                <a href="/admin/questions"><i class=""></i> Pytania do testów <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu" id="products">
                <li><a href="/admin/questions">Lista</a></li>
            </ul>

            {{-- Statystyki --}}
            <li>
                <a href="#"><i class=""></i> Statystyki <span class="arrow"></span></a>
            </li>

        </ul>
    </div>
</div>
