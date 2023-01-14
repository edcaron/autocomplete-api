<?php

namespace App\Http\Controllers;

use App\Services\AutoCompleteService;
use Illuminate\Http\Request;

class AutoCompleteController extends Controller
{
    private AutoCompleteService $service;

    public function __construct(AutoCompleteService $service = NULL)
    {
        $this->service = $service ?? new AutoCompleteService;
    }

    public function getSuggestions(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);

        $words = $this->service->getSuggestions($request->query('search'), 10);

        return response()->json([
            "data" => $words
        ]);
    }
}
