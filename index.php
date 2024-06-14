<?php


function getRequestType($param) {
    return filter_input(INPUT_GET, $param, FILTER_SANITIZE_STRING) ?? '';
}

$type = getRequestType('type');


$plataformas = [
    [
        'nome' => 'Plataforma 1',
        'link' => 'https://plataforma1.com',
        'logo' => 'img/plataforma1-logo.png'
    ],
    
];

$ferramentas = [
    [
        'nome' => 'Ferramenta 1',
        'link' => 'https://ferramenta1.com',
        'logo' => 'img/ferramenta1-logo.png'
    ],
    
];


function sendJsonResponse($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

switch ($type) {
    case 'plataformas':
        sendJsonResponse($plataformas);
        break;
    case 'ferramentas':
        sendJsonResponse($ferramentas);
        break;
    default:
        sendJsonResponse([]);
        break;
}

?>
