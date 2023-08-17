// Esta es una función que define el código que queremos agregar.
function remove_custom_html_elements() {
    // Aquí estamos agregando un bloque de código JavaScript.
    echo "
    <script>
        // Este código se ejecuta cuando todo el contenido de la página ha cargado.
        document.addEventListener('DOMContentLoaded', function() {
            // Creamos una lista de los IDs de los elementos que queremos eliminar.
            var idsToRemove = [
                'id-element-html-1',
                'id-element-html-2',
                'id-element-html-3'
            ];
            
            // Para cada ID en nuestra lista, ejecutamos la función siguiente.
            idsToRemove.forEach(function(id) {
                // Buscamos el elemento con el ID actual en el navegador.
                var elem = document.getElementById(id);
                
                // Si el elemento existe, lo eliminamos.
                if (elem) {
                    elem.parentNode.removeChild(elem);
                }
            });
        });
    </script>";
}

// Esta es una acción de WordPress que agrega la función anterior al pie de página de WordPress.
// Esto significa que nuestro código JavaScript se imprimirá en el pie de página de cada página de nuestro sitio.
add_action('wp_footer', 'remove_custom_html_elements');
