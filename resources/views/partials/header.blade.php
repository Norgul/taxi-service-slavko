<header id="header">
    <div class="logo">
        <span class="icon fa-taxi"></span>
    </div>
    <div class="content">
        <div class="inner">
            <h1>{{ strtoupper(env('APP_NAME')) }}</h1>
            <h2><a href="tel:+385915142776">+385 91 514 2776</a></h2>
            <p>@lang('content.landing_page')
            <p>
                <a href="{{ route('locale.switch', 'hr') }}">HR</a> / <a href="{{ route('locale.switch', 'en') }}">EN</a>
            </p>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="#intro">@lang('content.menu.intro')</a></li>
            <li><a href="#work">@lang('content.menu.work')</a></li>
            <li><a href="#about">@lang('content.menu.about')</a></li>
            <li><a href="#contact">@lang('content.menu.contact')</a></li>
            {{--<li><a href="#elements">Elements</a></li>--}}
        </ul>
    </nav>
</header>