<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class PartnerController extends Controller
{
    public function partners() {
        $partners = Partner::all();
        return view('static-pages.partners', compact('partners'));
    }

}
