@component('mail::message')
# Introduction

Thank you so much for registering!

- One
- Two
- Three

@component('mail::button', ['url' => 'https://laracasts.com/series/laravel-from-scratch-2017/episodes/27?autoplay=true'])

Start Browsing

@endcomponent

@component('mail::panel', ['url' => ''])

Some inspirational quote to go here ;-)

@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent
