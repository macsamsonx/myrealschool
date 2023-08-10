<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-design.head />
    </head>
    <body class="">
        <x-design.header />
        {{ $slot }}
    </body>
</html>
