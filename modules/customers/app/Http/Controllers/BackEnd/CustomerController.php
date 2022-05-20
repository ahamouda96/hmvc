<?php

namespace Customers\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        // return view('customers::backend.index');
        return loadViewsFrom('customers', 'backend.index');
    }
}
