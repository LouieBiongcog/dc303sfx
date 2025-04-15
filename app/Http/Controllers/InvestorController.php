<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index() {
        $investors = Investor::orderBy('last_name')->paginate(10);

        return inertia('Investor/Index' , compact('investors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'investment_type' => 'required|string|in:micro,sponsor,benefactor',
        ]);

        $investor = Investor::create($validated);

        return redirect()->route('investors.index')->with('success', 'Investor created successfully!');
    }


}
