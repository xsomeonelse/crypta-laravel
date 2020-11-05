<header class="ae-container-fluid ae-container-fluid--full rk-header header">
	<div class="ae-container-fluid topbar">
		<h1 class="logo-img2"><a href="/"><img src="img/cripta-min.png" alt="CRYPTA logo"></a></h1>
		<h1 class="logo"><a href="/">ENERGÍAS RENOVABLES<br><sup>CRYPTA</sup></a></h1>
		<nav class="navigation">
			<ul class="menu">
				<li class="{{ setActive('home') }}, menu_item"><a href="/" class="menu_link">Home</a></li>
				<li class="menu_item"><a href="#" class="menu_link">Energías</a>
					<nav class="menu_sub">
						<ul class="container">
							<li class="{{ setActive('solar') }}, menu_item"><a class="menu_link" href="/solar">Solar</a></li>
							<li class="{{ setActive('eolica') }}, menu_item"><a class="menu_link" href="/eolica">Eólica</a></li>
							<li class="{{ setActive('hidraulica') }}, menu_item"><a class="menu_link" href="/hidraulica">Hidráulica</a></li>
							<li class="{{ setActive('biogas') }}, menu_item"><a class="menu_link" href="/biogas">Biogas</a></li>
							<li class="{{ setActive('biomasa') }}, menu_item"><a class="menu_link" href="/biomasa">Biomasa</a></li>
							<li class="{{ setActive('geotermica') }}, menu_item"><a class="menu_link" href="/geotermica">Geotérmica</a></li>
						</ul>
					</nav>
				</li>
				<li class="{{ setActive('contact') }}, menu_item"><a class="menu_link" href="/contact">Contacto</a></li>
				<li class="{{ setActive('legal') }}, menu_item"><a class="menu_link" href="/legal">Legal</a></li>
				@auth
					<li><a href="#" class="menu_link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    @lang('Logout')</a></li>
				@else
					<li class="menu_item"><a class="menu_link" href="{{ route('login') }}">@lang('Login')</a></li>
					<li class="menu_item"><a class="menu_link" href="{{ route('register') }}">@lang('Register')</a></li>
				@endauth
			</ul>
		</nav>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
	</div>
</header>