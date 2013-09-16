<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Lessy Origin and Destination
    |--------------------------------------------------------------------------
    |
    | The place where the the tree of less files will be loaded and where the
    | compile result will be dumped. Relative to app folder.
    |
    */

    'origin'          => 'less',

    'destination'     => '../public/assets/css',

    /*
    |--------------------------------------------------------------------------
    | Force Compile
    |--------------------------------------------------------------------------
    |
    | This option will force the application to check if any less file have
    | changed in order to compile it no matter the environment that is running.
    | This way you can compile less files in production environment.
    |
    | PS: Even with force compile set to true, the compilation will only occur
    | if changes are detected within the .less files in the origin directory.
    |
    */

    'force_compile' => false,

    /*
    |--------------------------------------------------------------------------
    | Manual Compilation
    |--------------------------------------------------------------------------
    |
    | This option will disable the autocompilation. So in order to actually
    | compile the less files you will have to call the compilation commands in
    | the before filter.
    |
    */

    'manual_compile_only' => false,

    /*
    |--------------------------------------------------------------------------
    | Singe File
    |--------------------------------------------------------------------------
    |
    | This option will force all less output into a single file and cache it.
    |
    */

    'single_file'     => 'false',

    // source file responisble for glueing together the less files into a single
    // css output file
    'originFile'      => 'less/main.less',

    // file to be compiled from the less source files
    'destinationFile' => '../public/assets/css/main.css',

    // the formatting for the outputted css file
    'formatter'       => 'lessjs',

);
