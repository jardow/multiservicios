<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Validator;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('soloadmin',['only'=>'index' ]);

    }
    public function index()
    {
        $equipos = Equipo::all();
        return view('admin/equipo/index',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        return view('admin/equipo/editar', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        $validator = Validator::make($request->all(), [
            'foto'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'nombres'   => 'required|min:5|max:200',
            'habilidad'   => 'required|min:5|max:200',
            'mensaje'   => 'required|min:10|max:200',
            'contacto'   => 'required|min:10|max:200',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
        return redirect()->back()->withErrors($errors);
        } else

        {
            $imagen = "";
            $image_path = "";

            if ($request->hasfile('foto')) {
                $avatar = $request->file('foto');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(500, 500)->save(public_path('/theme/assets/img/team/' . $filename));
                $imagen= '/theme/assets/img/team/' . $filename;
                $image_path = public_path().$equipo->foto;
                unlink($image_path);
            } else {
                $imagen = $equipo->foto;
            }


            $equipo->update([
                'foto' => $imagen,
                'nombres' => $request->input('nombres'),
                'habilidad' => $request->input('habilidad'),
                'mensaje' => $request->input('mensaje'),
                'contacto' => $request->input('contacto'),

            ]);


        }
     return redirect()->route('equipo.index')
       ->with('status_success','Equipo actualizado con éxito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
