<?php

class View {
    public static function load($viewName, $data = []) {
        $viewPath = VIEWS . $viewName . '.php';
        if (file_exists($viewPath)) {
            ob_start();
            extract($data); // to convert array keys to variables
            require_once($viewPath);
            ob_end_flush();
        } else {
            echo "View file " . $viewName . " not found";
        }
    }
}