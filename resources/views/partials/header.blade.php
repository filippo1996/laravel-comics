<header>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a href="#"><img class="logo" src="{{ asset('storage/images/dc-logo.png') }}" alt="logo DC"></a>
            </div>
            <div class="col-10 d-flex items-center justify-content-end">
                <ul>
                    <li><a class="{{ (request()->is('blog*')) ? 'active' : '' }}" href="#">Blog</a></li>
                    <li><a class="{{ (request()->is('contact*')) ? 'active' : '' }}" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>