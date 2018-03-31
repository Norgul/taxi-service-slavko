<header id="header">
    <div class="logo">
        <span class="icon fa-taxi"></span>
    </div>
    <div class="content">
        <div class="inner">
            <h1>{{ strtoupper(env('APP_NAME')) }}</h1>
            <p>@lang('content.landing_page')
            <p>
                HR / EN
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