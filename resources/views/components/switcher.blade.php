@php
$locale = LaravelLocalization::getCurrentLocale() =='ar'? 'EN':'AR';
@endphp
<a class="nav-link text-muted my-2" href="{{  LaravelLocalization::getLocalizedURL(strtolower($locale)) }}" id="langSwitcher">
{{  $locale }}
</a>