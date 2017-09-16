@component('mail::message')
# Hai {{ $user->name }},

Selamat datang di {{ config('app.name') }}

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
