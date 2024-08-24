<?php

namespace App\Http\Controllers;

use App\Models\Reception;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           //Product is the model
      $reception = Reception::latest()->paginate(5);
      return view('pages.reception.index',compact('reception'))
             ->with("i",(request()->input('page',1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.reception.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           //  dd($request->all());

    $request->validate([
        'societe' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|string|email|max:255|unique:users,email',
        'nombreFacture' => 'required|integer|min:0',
        'nombreDocumentbanquaire' => 'required|integer|min:0',
        'action' => 'required|in:create,update,delete',

    ]);

    $input = $request->all();

    User::create($input);
    return redirect()->route('pages.reception.index')
        ->with("success", "element added successfully");


    }

    /**
     * Display the specified resource.
     */
    public function show(Reception $reception)
    {
        //walo imkn

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reception $reception)
    {
        return view('pages.reception.edit',compact('reception')); // return view('users.edit', ['product' => $product]); meme chose

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reception $reception)
    {
        $request->validate([
            'societe' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'nombreFacture' => 'required',
            'nombreDocumentbanquaire' => 'required',
        ]);
        $input=$request->all(); // stocker les elements de request dans le input tout les elements

        $reception->update($input); // cette element est venue de Route::resource('users',ProductController::class);

        return redirect()->route('pages.reception.index')
                ->with("success","element updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reception $reception)
    {
        $reception->delete();
        return redirect()->route('pages.reception.index')
                ->with("success","element deleted successfully");
    }
}
