<?php
define("DS", DIRECTORY_SEPARATOR); // gets separator '/' in linux '\' in windows
define("ROOT_PATH", __DIR__ . DS); // used __DIR__ instead of dirname(__DIR__)
define("APP", ROOT_PATH . 'app' . DS);
define("CORE", APP . 'Core' . DS);
define("CONFIG", APP . 'Config' . DS);
define("CONTROLLERS", APP . 'Controllers' . DS);
define("MODELS", APP . 'Models' . DS);
define("VIEWS", APP . 'Views' . DS);
define("UPLOADS", ROOT_PATH . 'public' . DS . 'uploads' . DS);

require_once(CONFIG . 'config.php');
require_once(CONFIG . 'helpers.php');


$modules = [ROOT_PATH, APP, CORE, VIEWS, CONTROLLERS, MODELS, CONFIG];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload'); // removed false because it is deprecated

new App();