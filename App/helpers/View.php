<?php

namespace App\helpers;

class View
{
    /**
     * Renderiza uma página PHP com os dados fornecidos.
     *
     * @param string $view Nome do arquivo de view (ex.: "listar.php").
     * @param array $data Dados a serem passados para a view.
     * @return void
     */
    public static function render(string $view, array $data = []): void
    {
        $viewPath = __DIR__ . '/../resources/public/pages/' . $view;

        $viewPath = realpath($viewPath);

        if ($viewPath === false || !file_exists($viewPath)) {
            http_response_code(404);
            echo "A view '{$view}' não foi encontrada.";
            return;
        }

        extract($data);

        include $viewPath;
    }
}
