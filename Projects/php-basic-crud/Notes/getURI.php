<?php
/**
lets say we have http://localhost:3000/home/index?name=maryam
the output will be:
    Full Request URI: /home/index?name=maryam
    Path only: /home/index
    Query String: name=maryam
    Path parts: Array ( [0] => home [1] => index )
    Controller: home
    Method: index
*/


// Method 1: Get the full request URI (includes everything after domain)
if (isset($_SERVER['REQUEST_URI'])) {
    echo "Full Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";
} // Full Request URI: /home/index?name=maryam


/*
parse_url, it takes the URL and an optional component
without the component it returns something like this:
    Array
    (
        [scheme] => https
        [host] => example.com
        [port] => 8080
        [path] => /path/to/page
        [query] => name=John&age=30
        [fragment] => section
    )
*/
// Method 2: Get just the path component (without query string)
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo "Path only: " . $path . "<br>";
// Path only: /home/index

// Method 3: Get query string
if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
    echo "Query String: " . $_SERVER['QUERY_STRING'] . "<br>";
} // Query String: name=maryam

// Method 4: Parse the path into controller/method
$pathParts = explode('/', trim($path, '/'));
echo "Path parts: " . print_r($pathParts, true) . "<br>";
// Path parts: Array ( [0] => home [1] => index )

if (!empty($pathParts[0])) {
    echo "Controller: " . $pathParts[0] . "<br>";
} // Controller: home
if (!empty($pathParts[1])) {
    echo "Method: " . $pathParts[1] . "<br>";
} // Method: index
