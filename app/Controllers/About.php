<?php

namespace App\Controllers;

class About extends BaseController
{
    // Static page: no database, no model.
    public function index(): string
    {
        return view('about', ['title' => 'About']);
    }
}
