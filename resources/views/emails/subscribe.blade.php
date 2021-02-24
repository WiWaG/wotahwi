@component('mail::message')

# Abonneer Wotahwi B&B {{ $topic }}

Geachte heer/mevrouw
Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores soluta voluptatibus nemo! Quisquam, eaque officiis illo maiores necessitatibus dolorum dolore. Illum dolorum vero minus quam ut quos aliquid quod facere.

- Laravel
- PHP
- Tailwind

Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae architecto, vel quis sed adipisci consectetur inventore officiis odit cumque voluptatibus maiores, facilis doloribus consequatur. Quis provident sequi ipsam quod quibusdam?

@component('mail::button' , ['url'=>'https://codegorilla.nl/'])
Bootcamp CodeGorilla
@endcomponent

Met vriendelijke groet, <br>
{{ config('app.name') }}
@endcomponent
