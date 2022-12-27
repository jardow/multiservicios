<?php

namespace App\Http\Controllers;

use App\Models\Portada;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Validator;

class PortadaController extends Controller
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
        $portada = Portada::all();
        return view('admin/portada/index',compact('portada'));
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
     * @param  \App\Models\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function show(Portada $portada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function edit(Portada $portada)
    {
    
       return view('admin/portada/editar', compact('portada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portada $portada)
    {
        $validator = Validator::make($request->all(), [
            'logo'   => '|file|max:2024|mimes:png',
            'titulo'   => 'required|min:10|max:100',
            'subtitulo'   => 'required|min:10|max:100',
            'fondo'  => '|file|max:2024|mimes:png',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
        return redirect()->back()->withErrors($errors);
        } else

        {
            $fondo = "";
            $logo = "";
            if ($request->hasfile('logo')) {
                $avatar = $request->file('logo');
                $filename = 'Servicios' . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(250, 250)->save(public_path('/theme/assets/img/' . $filename));
                $logo= 'theme\assets\img\\' . $filename;
            } else {
                $logo = $portada->logo;
            }
            if ($request->hasfile('fondo')) {
                $avatar = $request->file('fondo');
                $filename = 'header-bg' . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(1200, 800)->save(public_path('/theme/assets/img/' . $filename));
                $fondo= 'theme\assets\img\\' . $filename;
            }
            else {
                $fondo = $portada->fondo;
            }
            $portada->update([
                'logo' =>   $logo,
                'titulo1' => $request->input('titulo'),
                'titulo2' => $request->input('subtitulo'),
                'fondo' =>$fondo,
            ]);
        }
        return redirect()->route('portada.index')
        ->with('status_success','Portada actualizado con éxito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portada  $portada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portada $portada)
    {
        //
    }
}
