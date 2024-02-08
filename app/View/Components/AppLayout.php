

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Head contents like meta tags, title, and CSS links -->
    <title>JS Year Calendar Demo</title>
    <!-- Incluye el archivo JavaScript de JS Year Calendar -->
    <script src="js/js-year-calendar.min.js"></script>
</head>
<body>
    @include('components.header')

    @include('navigation-menu') <!-- O @include('components.nav') si creaste un menú personalizado -->

    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    @include('components.footer')
    <div id="calendar"></div>

<!-- JavaScript personalizado para inicializar el calendario -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendar = new Calendar('#calendar', {
            // Configuración y opciones de JS Year Calendar
        });
    });
</script>    
</body>
</html>