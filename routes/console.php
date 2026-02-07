<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
// je sais pas leurs vraie travail mais bon en vue de la compréhension seulement 
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
