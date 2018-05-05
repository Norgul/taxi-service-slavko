<article id="contact">
    <h2 class="major">@lang('content.menu.contact')</h2>
    <form method="post" action="#">
        <div class="field half first">
            <label for="name">@lang('content.contact.name')</label>
            <input type="text" name="name" id="name"/>
        </div>
        <div class="field half">
            <label for="email">@lang('content.contact.email')</label>
            <input type="text" name="email" id="email"/>
        </div>
        <div class="field">
            <label for="message">@lang('content.contact.message')</label>
            <textarea name="message" id="message" rows="4"></textarea>
        </div>
        <ul class="actions">
            <li><input type="submit" value="@lang('content.contact.send')" class="special"/></li>
            <li><input type="reset" value="@lang('content.contact.reset')"/></li>
        </ul>
    </form>
    <ul class="icons">
        {{--<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>--}}
        <li><a href="https://www.facebook.com/taxitransferi/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        {{--<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>--}}
        {{--<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>--}}
    </ul>
</article>