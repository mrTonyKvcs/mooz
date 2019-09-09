<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    /**
     * subscribe to newsletter
     *
     */
    public function subscribe(Request $request)
    {
        Newsletter::create([$request->email]);

        return back();
    }
}
