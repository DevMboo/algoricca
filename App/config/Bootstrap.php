<?php

namespace App\config;

class Bootstrap
{
    /**
     * Método responsável por carregar estrutura do servidor
     * @return mixed
     */
    public function handle()
    {
        try {
            //code...
            $routesPath = __DIR__ . '/../routes/routes.php';
            if (!file_exists($routesPath)) {
                throw new \Exception("Arquivo de rotas não encontrado em: {$routesPath}");
            }
            $routes = require $routesPath;

            $path = $_SERVER['PATH_INFO'] ?? '/';
            $method = $_SERVER['REQUEST_METHOD'];

            foreach ($routes as $route) {
                if ($route['path'] === trim($path, '/') && $route['method'] === $method) {
                    $controllerClass = "App\\controller\\" . $route['controller'];
                    $function = $route['func'] ?? 'index';
                    $param = $route['param'] ?? null;

                    if (class_exists($controllerClass)) {
                        $controller = new $controllerClass();

                        if (method_exists($controller, $function)) {
                            $paramValue = $_GET[$param] ?? null;

                            return $controller->$function($paramValue);
                        } else {
                            http_response_code(404);
                            echo "Método '{$function}' não encontrado no controlador '{$controllerClass}'.";
                            return;
                        }
                    } else {
                        http_response_code(404);
                        echo "Controller '{$controllerClass}' não encontrado.";
                        return;
                    }
                }
            }

            http_response_code(404);
            echo "Route not found.";
        } catch (\Throwable $th) {
            //throw $th;
            echo $th;
        }
    }
}
