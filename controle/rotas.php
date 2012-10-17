<?php
    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode("?", $uri);
    $uri = $uri[0];
    $route = explode("/", $uri);
    $resource = $route[3];
    $action = $route[4];
    $root = $_SERVER['DOCUMENT_ROOT'];
    $templates_dirname = "modulo_b_trabalho_final/templates";
    $templates_path = $root."/".$templates_dirname;
    if ($resource == '') {
        $resource = 'alunos';
        $action = 'index';
    }
    $final_path = $templates_path."/".$resource."/".$action.".php";

    include($final_path);
?>





