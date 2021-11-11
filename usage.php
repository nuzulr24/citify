<!-- u can load path into array data of views like this -->

<?php

// defined of assetpath can u setting up at index.php and the format is like this.
define('ASSETPATH', 'assets'); // paste on main index.php

$vars['assetsjs'] = loadPath(ASSETPATH, array(
    'ext' => 'js',
    'assets' => 'frontend',
    'path' => 'js',
));
$vars['assetscss'] = loadPath(ASSETPATH, array(
    'ext' => 'css', // spesific file type what u want to load
    'assets' => 'frontend', // from assets path
    'path' => 'css', // from css path
));

// load the assets like this
foreach($assetsjs as $inlinejs) echo '<script src="'.base_url().$inlinejs.'"></script>';
?>