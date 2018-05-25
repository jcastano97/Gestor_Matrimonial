@component('mail::message')
    Hola {{$user->name}}, gracias por registrarte.

    ¡Bienvenido al gestor matrimonial!

    Para ello simplemente haga click en el siguiente boton:

    @component('mail::button', ['url' => '', 'color' => 'blue'])
        Gestor matrimonial
    @endcomponent

@endcomponent
