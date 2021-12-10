<?php
namespace core;

class Controller {

    private $messages = [
        '200' => 'La solicitud ha tenido éxito',
        '201' => 'Recurso creado con éxito',
        '204' => 'No contenido',
        '400' => 'Solicitud erronea',
        '401' => 'Credenciales erroneas',
        '404' => 'Recurso no encontrado',
    ];

    protected function echoResponse ($error, $statusCode, $data){
        $response['error'] = $error;
        $response['message'] = $statusCode . " - " . $this->messages[$statusCode];
        $response['data'] = $data;
        \http_response_code($statusCode);
        exit(json_encode($response));
    }
}