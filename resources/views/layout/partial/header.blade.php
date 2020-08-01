<nav>
    <div class="nav-wrapper light-blue darken-1">
        <div class="container">
            <a href="/" class="brand-logo">brand</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">home</a></li>
                <li><a href={{ route('admin.cursos') }}>Meus cursos</a></li>
                <li><a href="/login">login</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul>


<!-- <nav>
    <ul class="">
        <li class="nav-item"><a href="/" class="nav-link">home</a></li>
        <li class="nav-item"><a href="/contato" class="nav-link">contato</a></li>
        if(Auth::guest())
        <li class="nav-item"><a href="/login" class="nav-link">login</a></li>
        else
        <li class="nav-item"><a href="/perfil" class="nav-link">{ Auth::user }}</a></li>
        <li class="nav-item"><a href="/logout" class="nav-link">logout</a></li>
        endif
    </ul>
</nav> -->