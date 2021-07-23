<nav class="tabs is-boxed">
    <div class="container">
        <ul>
            {{-- For Bulma to apply the is-active styles, the links must be in a list --}}
            {{-- We can specify which tag will render the router-link with the att tag="" --}}
            <router-link tag="li" to="/" exact>
                {{-- We can omit the href attribute and Vue with add it for us --}}
                <a>Home</a>
            </router-link>

            <router-link tag="li" to="/about">
                <a>About</a>
            </router-link>

            <router-link tag="li" to="/contact">
                <a>Contact</a>
            </router-link>
        </ul>
    </div>
</nav>
