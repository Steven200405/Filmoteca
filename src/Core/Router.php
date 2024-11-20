<?php

namespace App\Core;

class Router
{
    public function route()
    {
        /**
         * echo '<pre>';
         * var_dump($_SERVER);
         * echo '</pre>';die;
         */

        // Récupère l'URL demandée (sans le domaine et la racine)
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        
        // Découpe l'URI demandée sans le domaine et la racine
        $parts = explode('/',uri);
        $route = $parts[0] ?? null;
        $action = $parts[1] ?? null;

        

        // Définit les routes et leurs contrôleurs associés
        $routes = [
            'films' => 'FilmController',
            'contact' => 'ContactController',
        ];

        if (array_key_exists($route, $routes)) {
            $controllerName = 'App\\Controller\\' . $routes[$route];
            if(!class_exists($controllerName)){
                //Crée dynamiquement le contrôleur
                echo "Controller '$controllerName' not found";
                return;
            }

            $controller = new $controllerName;

            //Vérifie si la méthode existe dans le contrôleur 
            if(method_exists($controller,$action)){
                $queryParams = $_GET; // Récupère les paramètres éventuels 
                $controller->$action($queryParams); // Appelle la méthode dynamique 
            }else{
                echo "Action '$action' not found in '$controllerName'";
            }
        }
            else{
                //Page non trouvée
                echo "404 Not Found";
            }

            // Appelle une méthode spécifique avec les paramètres de la requête (par exemple, index())
            $controller->index($queryParams); // On passe les paramètres à la méthode index()
        } else {
            // Page non trouvée
            echo "404 Not Found";
        }
    }
}