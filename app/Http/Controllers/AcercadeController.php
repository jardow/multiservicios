<?php

namespace App\Http\Controllers;

use App\Models\Acercade;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Validator;

class AcercadeController extends Controller
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

        $acercade = Acercade::all();
        return view('admin/acercade/index',compact('acercade'));
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
     * @param  \App\Models\Acercade  $acercade
     * @return \Illuminate\Http\Response
     */
    public function show(Acercade $acercade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acercade  $acercade
     * @return \Illuminate\Http\Response
     */
    public function edit(Acercade $acercade)
    {
        return view('admin/acercade/editar', compact('acercade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acercade  $acercade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acercade $acercade)
    {
        $validator = Validator::make($request->all(), [

            'acercade'   => 'required|min:50|max:500',
            'f_acercade'   => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'mision'   => 'required|min:50|max:500',
            'f_mision'  => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'vision'   => 'required|min:50|max:500',
            'f_vision'  => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
            'valores'   => 'required|min:50|max:500',
            'f_valores'  => '|file|max:2024|mimes:jpeg,bmp,png,jpg',
        ]);

        $f_acercade = "";
        $f_mision = "";
        $f_vision = "";
        $f_valores = "";

        if ($validator->fails()) {
            $errors = $validator->errors();
        return redirect()->back()->withErrors($errors);
        } else
        {
            if ($request->hasfile('f_acercade')) {
                $avatar = $request->file('f_acercade');
                $filename = '1' . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(200, 200)->save(public_path('/theme/assets/img/about/' . $filename));
                $f_acercade= 'theme\assets\img\about\\' . $filename;
            } else {
                $f_acercade = $acercade->foto1;
            }


            if ($request->hasfile('f_mision')) {
                $avatar = $request->file('f_mision');
                $filename = '2' . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(200, 200)->save(public_path('/theme/assets/img/about/' . $filename));
                $f_mision= 'theme\assets\img\about\\' . $filename;
            } else {
                $f_mision = $acercade->foto2;
            }

            if ($request->hasfile('f_vision')) {
                $avatar = $request->file('f_vision');
                $filename = '3' . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(200, 200)->save(public_path('/theme/assets/img/about/' . $filename));
                $f_vision= 'theme\assets\img\about\\' . $filename;
            } else {
                $f_vision = $acercade->foto3;
            }

            if ($request->hasfile('f_valores')) {
                $avatar = $request->file('f_valores');
                $filename = '4' . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(200, 200)->save(public_path('/theme/assets/img/about/' . $filename));
                $f_valores= 'theme\assets\img\about\\' . $filename;
            } else {
                $f_valores = $acercade->foto4;
            }

            //Actualizar
            $acercade->update([
                'acercade' => $request->input('acercade'),
                'foto1' =>$f_acercade,
                'mision' => $request->input('mision'),
                'foto2' =>$f_mision,
                'vision' => $request->input('vision'),
                'foto3' =>$f_vision,
                'valores' => $request->input('valores'),
                'foto4' =>$f_valores,
            ]);

        }
        return redirect()->route('acercade.index')
        ->with('status_success','Acerca de actualizado con éxito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acercade  $acercade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acercade $acercade)
    {
        //
    }
}
