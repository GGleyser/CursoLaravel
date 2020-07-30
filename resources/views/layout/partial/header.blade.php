<nav>
    <ul class="">
        <li class="nav-item"><a href="/" class="nav-link">home</a></li>
        <li class="nav-item"><a href="/contato" class="nav-link">contato</a></li>
        @if(Auth::guest())
            <li class="nav-item"><a href="/login" class="nav-link">login</a></li>
        @else
            <li class="nav-item"><a href="/perfil" class="nav-link">{{ Auth::user }}</a></li>
            <li class="nav-item"><a href="/logout" class="nav-link">logout</a></li>
        @endif
    </ul>
</nav>