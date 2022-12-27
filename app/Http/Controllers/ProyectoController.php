<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Validator;

class ProyectoController extends Controller
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
        $proyectos = Proyecto::all();
        return view('admin/proyectos/index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/proyectos/crear');
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
            'titulo'   => 'required|min:10|max:200',
            'ciudad'   => 'required|min:10|max:200',
            'descripcion'   => 'required|min:10|max:200',
            'imagen_1'   => 'required|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_2'   => 'required|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_3'   => 'required|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_4'   => 'required|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_5'   => 'required|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_6'   => 'required|file|max:2024|mimes:jpeg,bmp,png,jpg',
        ]);


        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
        } else {

            $imagen_1 = "";
            if ($request->hasfile('imagen_1')) {
                $avatar = $request->file('imagen_1');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_1 = '/theme/assets/img/portfolio/' . $filename;

            }

            $imagen_2 = "";
            if ($request->hasfile('imagen_2')) {
                $avatar = $request->file('imagen_2');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_2 = '/theme/assets/img/portfolio/' . $filename;

            }

            $imagen_3 = "";
            if ($request->hasfile('imagen_3')) {
                $avatar = $request->file('imagen_3');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_3 = '/theme/assets/img/portfolio/' . $filename;

            }

            $imagen_4 = "";
            if ($request->hasfile('imagen_4')) {
                $avatar = $request->file('imagen_4');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_4 = '/theme/assets/img/portfolio/' . $filename;

            }


            $imagen_5 = "";
            if ($request->hasfile('imagen_5')) {
                $avatar = $request->file('imagen_5');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_5 = '/theme/assets/img/portfolio/' . $filename;

            }


            $imagen_6 = "";
            if ($request->hasfile('imagen_6')) {
                $avatar = $request->file('imagen_6');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_6 = '/theme/assets/img/portfolio/' . $filename;

            }

            $proyecto = new Proyecto();

            $proyecto->titulo = $request->input('titulo');
            $proyecto->ciudad = $request->input('ciudad');
            $proyecto->descripcion = $request->input('descripcion');
            $proyecto->foto1 = $imagen_1;
            $proyecto->foto2 = $imagen_2;
            $proyecto->foto3 = $imagen_3;
            $proyecto->foto4 = $imagen_4;
            $proyecto->foto5 = $imagen_5;
            $proyecto->foto6 = $imagen_6;
            $proyecto->save();
        }



        return redirect()->route('proyecto.index')
            ->with('status_success', 'Proyecto creado con éxito ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        return view('admin/proyectos/editar', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $validator = Validator::make($request->all(), [
            'titulo'   => 'required|min:10|max:200',
            'ciudad'   => 'required|min:10|max:200',
            'descripcion'   => 'required|min:10|max:200',
            'imagen_1'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_2'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_3'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_4'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_5'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'imagen_6'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',


        ]);


        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
        } else {
            $image_path = "";
            $imagen_1 = "";
            if ($request->hasfile('imagen_1')) {
                $avatar = $request->file('imagen_1');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_1 = '/theme/assets/img/portfolio/' . $filename;
                $image_path = public_path().$proyecto->foto1;
                unlink($image_path);

            } else {
                $imagen_1 = $proyecto->foto1;
            }


            $imagen_2 = "";
            if ($request->hasfile('imagen_2')) {
                $avatar = $request->file('imagen_2');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_2 = '/theme/assets/img/portfolio/' . $filename;
                $image_path = public_path().$proyecto->foto2;
                unlink($image_path);

            } else {
                $imagen_2 = $proyecto->foto2;
            }

            $imagen_3 = "";
            if ($request->hasfile('imagen_3')) {
                $avatar = $request->file('imagen_3');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_3 = '/theme/assets/img/portfolio/' . $filename;
                $image_path = public_path().$proyecto->foto3;
                unlink($image_path);

            } else {
                $imagen_3 = $proyecto->foto3;
            }


            $imagen_4 = "";
            if ($request->hasfile('imagen_4')) {
                $avatar = $request->file('imagen_4');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_4 = '/theme/assets/img/portfolio/' . $filename;

                $image_path = public_path().$proyecto->foto4;
                unlink($image_path);

            } else {
                $imagen_4 = $proyecto->foto4;
            }


            $imagen_5 = "";
            if ($request->hasfile('imagen_5')) {
                $avatar = $request->file('imagen_5');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_5 = '/theme/assets/img/portfolio/' . $filename;

                $image_path = public_path().$proyecto->foto5;
                unlink($image_path);

            } else {
                $imagen_5 = $proyecto->foto5;
            }


            $imagen_6 = "";
            if ($request->hasfile('imagen_6')) {
                $avatar = $request->file('imagen_6');
                $filename = Str::random(5) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(600, 450)->save(public_path('/theme/assets/img/portfolio/' . $filename));
                $imagen_6 = '/theme/assets/img/portfolio/' . $filename;

                $image_path = public_path().$proyecto->foto6;
                unlink($image_path);

            } else {
                $imagen_6 = $proyecto->foto6;
            }



            $proyecto->titulo = $request->input('titulo');
            $proyecto->ciudad = $request->input('ciudad');

            $proyecto->update([
                'titulo' => $request->input('titulo'),
                'ciudad' => $request->input('ciudad'),
                'descripcion' => $request->input('descripcion'),
                'foto1' => $imagen_1,
                'foto2' => $imagen_2,
                'foto3' => $imagen_3,
                'foto4' => $imagen_4,
                'foto5' => $imagen_5,
                'foto6' => $imagen_6,

            ]);

        }



        return redirect()->route('proyecto.index')
            ->with('status_success', 'Proyecto actualizado con éxito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        $image_path = public_path().$proyecto->foto1;
        unlink($image_path);
        $image_path = public_path().$proyecto->foto2;
        unlink($image_path);
        $image_path = public_path().$proyecto->foto3;
        unlink($image_path);
        $image_path = public_path().$proyecto->foto4;
        unlink($image_path);
        $image_path = public_path().$proyecto->foto5;
        unlink($image_path);
        $image_path = public_path().$proyecto->foto6;
        unlink($image_path);
        $proyecto->delete();
       return redirect()->route('proyecto.index')
       ->with('status_success','Proyecto eliminado  con éxito ');
    }
}
