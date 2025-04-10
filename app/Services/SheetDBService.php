<?php

namespace App\Services;

use SheetDB\SheetDB;

class SheetDBService
{
    protected $sheetdb;

    public function __construct()
    {
        $this->sheetdb = new SheetDB('4ur0e3ofn95ep');
    }

    public function append(array $data)
    {
        return $this->sheetdb->create($data);
    }
}
