<div class="navcontainer">
    <nav class="navbar">
        <a href="/" @class(['active' => request()->is('/')])>Home</a>
        <a href="/profile" @class(['active' => request()->is('profile')])>Profile</a>
        <a href="/about" @class(['active' => request()->is('about')])>About</a>
        <a href="/contact" @class(['active' => request()->is('contact')])>Contact</a>
        <a href="{{ url('products') }}" @class(['active' => Route::is('products')])>Products</a>
    </nav>
</div>