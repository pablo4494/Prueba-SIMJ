import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function() {
    var calendar = new Calendar('#calendar', {
        // Otras opciones del calendario...
        mouseOnDay: function(e) {
            var $element = $(e.element);
            if ($element.hasClass('event')) {
                var name = $element.data('name');
                // Mostrar el nombre del día festivo al pasar el ratón por encima
                console.log(name);
                // Puedes mostrar el nombre en un tooltip o en cualquier otro lugar deseado
            }
        },
        dayClick: function(e) {
            var $element = $(e.element);
            if ($element.hasClass('event')) {
                var name = $element.data('name');
                // Mostrar el nombre del día festivo al hacer clic en él
                alert('Día Festivo: ' + name);
            }
        }
    });
});