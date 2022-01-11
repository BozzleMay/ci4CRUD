<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\TryCatch;

class Migrate extends BaseController{
    public function index()
    {
        $migrate = \Config\Services::migrations();
        try {
        $migrate ->latest();
        echo 'migrated';
        } catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}