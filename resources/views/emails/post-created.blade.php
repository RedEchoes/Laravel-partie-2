@component('mail::message')
# Titre {{ $image->title }}

Vous avez inséré une nouvelle image.

@component('mail::button', ['url' => url('/images'. $image->id)])
Voir l'image
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
