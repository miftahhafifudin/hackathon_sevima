<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class VaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vaksin = Vaksin::orderBy('nama', 'DESC');

        return view('vaksin.index', [
            'vaksin' => $vaksin
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'nik' => ['required', 'numeric'],
            'no_telp' => ['required', 'numeric'],
            'email' => ['required'],
            'tgl_lahir' => ['required'],
            'riwayat_penyakit' => ['required', 'nullable']
        ]);

            $vaksin = Vaksin::create($request->all());
            
            return view('vaksin.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function show(Vaksin $vaksin)
    {
        $vaksin = Vaksin::orderby('created_at','desc')->paginate(10); 
        return view('vaksin.show')->with('vaksin', $vaksin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaksin $vaksin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function put(Request $request, $id)
    {
        
        $validated = $request->validate([
            'nama' => ['required'],
            'nik' => ['required', 'numeric'],
            'no_telp' => ['required', 'numeric'],
            'email' => ['required'],
            'tgl_lahir' => ['required'],
            'riwayat_penyakit' => ['required', 'nullable']
        ]);

            $vaksin = Vaksin::update($request->all());
            
            return view('home');
    }

    public function update($vaksin)
    {
        $vaksins = Vaksin::find($vaksin);
        return view('vaksin.update', [
            'vaksins' => $vaksins
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function destroy($vaksin)
    {
        $vaksins = Vaksin::find($vaksin);
        $vaksins->delete();
    }
}
