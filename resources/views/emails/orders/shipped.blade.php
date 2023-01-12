<x-mail::message>
# Hey

    Je bent door {{ 'group_leader_naam' }} toegevoegd aan groep {{ 'groepnaam' }}
    Log in op {{ 'website' }} om de groep te bekijken.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
