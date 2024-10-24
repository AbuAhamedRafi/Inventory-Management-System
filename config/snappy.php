<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Snappy PDF / Image Configuration
    |--------------------------------------------------------------------------
    |
    | This option contains settings for PDF generation.
    |
    | Enabled:
    |
    |    Whether to load PDF / Image generation.
    |
    | Binary:
    |
    |    The file path of the wkhtmltopdf / wkhtmltoimage executable.
    |
    | Timout:
    |
    |    The amount of time to wait (in seconds) before PDF / Image generation is stopped.
    |    Setting this to false disables the timeout (unlimited processing time).
    |
    | Options:
    |
    |    The wkhtmltopdf command options. These are passed directly to wkhtmltopdf.
    |    See https://wkhtmltopdf.org/usage/wkhtmltopdf.txt for all options.
    |
    | Env:
    |
    |    The environment variables to set while running the wkhtmltopdf process.
    |
    */

    'pdf' => [
        'enabled' => true,
        // 'binary' => base_path('vendor\wemersonjanuario\wkhtmltopdf-windows\bin\64bit\wkhtmltopdf'),
        'binary'  => env('WKHTML_PDF_BINARY', base_path('vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltopdf.exe'),),
        'binary'  => env('WKHTML_PDF_BINARY', 'C:\xampp\htdocs\triangle-pos\vendor\h4cc\wkhtmltopdf-amd64\bin\wkhtmltopdf-amd64'),
        // 'binary' => 'C:\xampp\htdocs\triangle-pos\wkhtmltopdf',
        'timeout' => false,
        'options' => [
            'enable-local-file-access' => true,
            'print-media-type' => true
        ],
        'env'     => [],
    ],

    'image' => [
        'enabled' => true,
        // 'binary'  => env('WKHTML_IMG_BINARY', ''),
        'binary'  => env('WKHTML_PDF_BINARY', base_path('vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltoimage.exe'),),
        'binary'  => env('WKHTML_IMG_BINARY', 'C:\xampp\htdocs\triangle-pos\vendor\h4cc\wkhtmltopdf-amd64\bin\wkhtmltoimage-amd64'),
        // 'binary' => 'C:\xampp\htdocs\triangle-pos\wkhtmltoimage',
        'timeout' => false,
        'options' => [
            'enable-local-file-access' => true
        ],
        'env'     => [],
    ],

];
