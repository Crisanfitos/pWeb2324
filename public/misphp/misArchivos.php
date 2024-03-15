<?php
function displayDirectoryContent($dir)
{
    $files = scandir($dir);
    echo "<ul>";
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            echo "<li> " . $file . " (dir) </li>";
        } else {
            echo "<li> " . $file . "</li>";
        }
    }
    echo "  </ul>\n";
}

echo "<h1> Contenido de la carpeta public: </h1>";
displayDirectoryContent('/Programas/laragon/www/pWeb2324/public');
 
echo "<h1> Contenido de la carpeta practicas: </h1>";
displayDirectoryContent('/Programas/laragon/www/pWeb2324/practicas');

echo "<h1> Contenido de la carpeta misphp: </h1>";
displayDirectoryContent('/Programas/laragon/www/pWeb2324/public/misphp');
