
    </section>
    <section id="servicios">
        <h2>Nuestros Servicios</h2>
        <ul>
            <?php
            // Incluir el archivo api.php para la lógica de la API
            include_once 'api.php';

            // Obtener los servicios utilizando la función definida en api.php
            $services = obtenerServicios();

            // Verificar si se encontraron servicios
            if ($services) {
                // Iterar sobre los servicios y mostrarlos en la lista
                foreach ($services as $servicio) {
                    echo '<li>';
                    echo '<h3>' . $servicio['titulo']['esp'] . '</h3>';
                    echo '<p>' . $servicio['texto']['esp'] . '</p>';
                    echo '</li>';
                }
            } else {
                // Mostrar un mensaje de error si no se encontraron servicios
                echo '<li>No se encontraron servicios disponibles.</li>';
            }
            ?>
        </ul>
    </section>
    