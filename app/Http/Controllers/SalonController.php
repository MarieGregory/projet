<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salon = Salon::orderBy('created_at', 'DESC')->get();

        return view('salon.index', compact('salon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salon.create_salon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $salon = Salon::create([
            'nom' => $data['nom'],
            'adresse' => $data['adresse'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'ifu' => $data['ifu'],
            'ville' => $data['ville']
        ]);
        return redirect()->route('salon')->with('success','le salon a été creer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salon = Salon::findOrFail($id);

        return view('salon.show', compact('salon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salon = Salon::findOrFail($id);

        return view('salon.edit', compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salon = Salon::findOrFail($id);
        $salon->update($request->all());
        return redirect()->route('salon')->with('success', 'le salon a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salon = Salon::findOrFail($id);
        $salon->delete();
        return redirect()->route('salon')->with('success', 'le salon a été supprimé avec succès');
    }
}
