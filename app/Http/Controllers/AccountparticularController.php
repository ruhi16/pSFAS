<?php

namespace App\Http\Controllers;

use App\Accountparticular;
use Illuminate\Http\Request;

class AccountparticularController extends Controller
{    
    public function index()
    {
        echo "accountparticular index";
        return view('admin.accountparticular.index');
    }

    public function create()
    {
        echo "accountparticular create";
    }

    public function store(Request $request)
    {
        echo "accountparticular store";
    }

    public function show(Accountparticular $accountparticular)
    {
        echo "accountparticular show";
    }

    public function edit(Accountparticular $accountparticular)
    {
        echo "accountparticular edit";
    }

    public function update(Request $request, Accountparticular $accountparticular)
    {
        echo "accountparticular update";
    }

    public function destroy(Accountparticular $accountparticular)
    {
        echo "accountparticular destroy";
    }
}
