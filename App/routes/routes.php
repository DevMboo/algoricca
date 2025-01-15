<?php

$routes = [
    'criar' => [
        'controller' => 'CriarController',
        'path' => 'criar',
        'method' => 'GET',
        'func' => 'index'
    ],
    'cadastrar' => [
        'controller' => 'CriarController',
        'path' => 'cadastrar',
        'method' => 'POST',
        'param' => 'q',
        'func' => 'store'
    ],
    'calculadora' => [
        'controller' => 'CalculadoraController',
        'path' => 'calculadora',
        'method' => 'GET',
        'func' => 'index'
    ],
    'formatar' => [
        'controller' => 'FormatarController',
        'path' => 'formatar',
        'method' => 'GET',
        'func' => 'index'
    ],
    'formated' => [
        'controller' => 'FormatarController',
        'path' => 'formated',
        'method' => 'POST',
        'func' => 'formated'
    ],
    'calculate' => [
        'controller' => 'CalculadoraController',
        'path' => 'calculate',
        'method' => 'POST',
        'func' => 'calculate'
    ],
    'listar' => [
        'controller' => 'ListarController',
        'path' => 'listar',
        'method' => 'GET',
        'func' => 'index'
    ],
    'edicao' => [
        'controller' => 'EdicaoController',
        'path' => 'edicao',
        'param' => 'q',
        'method' => 'GET',
        'func' => 'index'
    ],
    'atualizar' => [
        'controller' => 'EdicaoController',
        'path' => 'atualizar',
        'param' => 'q',
        'method' => 'POST',
        'func' => 'updated'
    ],
    'visualizar' => [
        'controller' => 'VisualizarController',
        'path' => 'visualizar',
        'param' => 'q',
        'method' => 'GET',
        'func' => 'index'
    ],
    'deletar' => [
        'controller' => 'DeletarController',
        'path' => 'deletar',
        'method' => 'GET',
        'param' => 'q',
        'func' => 'index'
    ],
    'remove' => [
        'controller' => 'DeletarController',
        'path' => 'remove',
        'method' => 'POST',
        'param' => 'q',
        'func' => 'remove'
    ],
    
];

return $routes;
    