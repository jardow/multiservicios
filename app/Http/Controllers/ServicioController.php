<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Validator;


class ServicioController extends Controller
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

        $servicios=Servicio::All();
        return view('admin/servicios/index',compact('servicios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/servicios/crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'imagen'   => 'required|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'titulo'   => 'required|min:10|max:200',
            'descripcion'   => 'required|min:10|max:200',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
        return redirect()->back()->withErrors($errors);
        } else

        {
            $imagen = "";
            if ($request->hasfile('imagen')) {
                $avatar = $request->file('imagen');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(500, 500)->save(public_path('/theme/assets/img/services/' . $filename));
                $imagen= '/theme/assets/img/services/' . $filename;

            }

            $servicio = new Servicio();
            $servicio->titulo = $request->input('titulo');
            $servicio->descripcion = $request->input('descripcion');
            $servicio->foto = $imagen;
            $servicio->save();



        }
     return redirect()->route('servicio.index')
       ->with('status_success','Servicio creado con éxito ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {

       // return $servicio;

       return view('admin/servicios/editar',compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $validator = Validator::make($request->all(), [
            'imagen'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'titulo'   => 'required|min:10|max:200',
            'descripcion'   => 'required|min:10|max:200',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
        return redirect()->back()->withErrors($errors);
        } else

        {
            $imagen = "";
            $image_path = "";

            if ($request->hasfile('imagen')) {
                $avatar = $request->file('imagen');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(500, 500)->save(public_path('/theme/assets/img/services/' . $filename));
                $imagen= '/theme/assets/img/services/' . $filename;
                $image_path = public_path().$servicio->foto;
                unlink($image_path);
            } else {
                $imagen = $servicio->foto;
            }


            $servicio->update([
                'foto' => $imagen,
                'titulo' => $request->input('titulo'),
                'descripcion' => $request->input('descripcion'),

            ]);


        }
     return redirect()->route('servicio.index')
       ->with('status_success','Servicio actualizado con éxito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {

        $image_path = public_path().$servicio->foto;
        unlink($image_path);
        $servicio->delete();
       return redirect()->route('servicio.index')
       ->with('status_success','Servicio eliminado  con éxito ');


        }
}
