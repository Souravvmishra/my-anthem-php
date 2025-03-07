<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dreamform;
use App\Models\Contactform;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'passion' => 'required',
            'age' => 'required|numeric',
            'school' => 'required',
            'parents' => 'required',
            'contact' => 'required|numeric'
        ]);

        Dreamform::create($request->all());

        return redirect()->route('submitted')->with('success', 'Form created successfully.');
    }
    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'occupation' => 'required',
            'email' => 'required',
            'contact' => 'required|numeric',
            'description' => 'required',
        ]);

        Contactform::create($request->all());

        return redirect()->route('submitted')->with('success', 'Form created successfully.');
    }
}
