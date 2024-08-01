<?php 

/**
 * Get the base path 
 * @param string $path
 * @return string
 */

 function basePath($path = '')
{
    return __DIR__ .'/'. $path;

}

/**
 * load a view
 * @param string $name
 * @return void
 */

 function loadview($name)
 {
    require basePath("view/{$name}.view.php");
 }

 /**
 * load a partial
 * @param string $name
 * @return void
 */

 function loadpartial($name)
 {
    require basePath("view/partials/{$name}.php");
 }