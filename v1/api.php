<?php
// api.php

// Función para obtener los servicios desde la API
function obtenerServicios() {
    // Endpoint para obtener los servicios
    $endpoint_servicios = 'https://ciisa.coningenio.cl/v1/services/';

    // Token de autorización
    $token = 'ciisa';

    // Opciones del contexto para la solicitud HTTP
    $opciones = [
        'http' => [
            'header' => "Authorization: Bearer $token"
        ]
    ];

    // Contexto para la solicitud HTTP
    $contexto = stream_context_create($opciones);

    // Realizar la solicitud GET al endpoint con el contexto de autenticación
    $response = file_get_contents($endpoint_servicios, false, $contexto);

    // Decodificar la respuesta JSON
    $data = json_decode($response, true);

    // Verificar si la respuesta contiene datos
    if (isset($data['data'])) {
        return $data['data'];
    } else {
        return false;
    }
}


// Endpoint para obtener la información de "Nosotros"
$endpoint_nosotros = 'https://ciisa.coningenio.cl/v1/about-us/';

// Hacer la solicitud GET al endpoint con la autenticación
$response = file_get_contents($endpoint_nosotros, false, stream_context_create([
    'http' => [
        'method' => 'GET',
        'header' => 'Authorization: Bearer ciisa'
    ]
]));

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si la respuesta contiene datos
if (isset($data['data']['mision']) && isset($data['data']['vision'])) {
    $mision = $data['data']['mision'];
    $vision = $data['data']['vision'];
?>

    

<?php
} else {
    // Mostrar un mensaje de error si no se encontraron datos de "Nosotros"
    echo 'No se encontró la información de "Nosotros".';
}

?>
