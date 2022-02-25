<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles($id) {
        return 'Ini merupakan halaman artikel dengan ID '.$id;
    }
}
