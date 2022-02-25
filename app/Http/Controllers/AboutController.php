<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return '<center>
        NIM : 204172004<br>
        Nama : Pranata Dito Fitriyansyah<br>
        No. Absen : 17</center>';
    }

}
