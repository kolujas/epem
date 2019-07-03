<nav class="navbar navbar-expand-lg navbar-light top-top-menu">
    <button class="navbar-toggler patyMenu mr-auto"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars fa-lg text-dark"></i>
    </button>

    <a class="navbar-brand" href="/">
        <h1>EPEM</h1>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                @if(URL::current() == url('gracias'))
                    <a class="nav-link" href="/el-club#nuestros-servicios">Servicios</a>
                @else
                    <a class="nav-link" href="#nuestros-servicios">Servicios</a>
                @endif
            </li>
            <li class="nav-item">
                @if(URL::current() == url('gracias'))
                    <a class="nav-link" href="/el-club#el-club">El club</a>
                @else
                    <a class="nav-link" href="#el-club">El club</a>
                @endif
            </li>
            <li class="nav-item">
                @if(URL::current() == url('gracias'))
                    <a class="nav-link" href="/el-club#el-equipo">El equipo</a>
                @else
                    <a class="nav-link" href="#el-equipo">El equipo</a>
                @endif
            </li>
            <li class="nav-item">
                @if(URL::current() == url('gracias'))
                    <a class="nav-link" href="/el-club#contacto">Contacto</a>
                @else
                    <a class="nav-link" href="#contacto">Contacto</a>
                @endif
            </li>
        </ul>
    </div>
</nav>