<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        // return "Bienvevnido ala pagina principal";
        // $cursos = Curso::all(); 
        // Con  el siguiente metodo se hace una paginacion automatica con tus registros    
        $cursos = Curso::orderBy('id', 'desc')->paginate();      
        return view('cursos.index', compact('cursos'));        
    }

    public function create()
    {
        // return "En esta pagina puedes crear un curso";
        return view('cursos.create');
    }

    // Este metodo recibe una peticion POST del formulario para crear cursos, obtiene la info del formulario y guarda un nuevo curso en base de datos
    public function store(StoreCurso $request)
    {
        // En este curso el $request Informacion proveniente del formulario crear curso es validado por el form request llamado StoreCurso
        $curso = new Curso();
        // Asignacion Normal
        // $curso->name = $request->name;
        // $curso->description = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();       
        // Este metodo crea un objeto de tipo curso y ademas salva los cambios en la base de datos
        // $curso = Curso::create([
        //     "name" => $request->name,
        //     "description" => $request->descripcion,
        //     "categoria" => $request->categoria
        // ]);
         // Asignacion Masiva
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function show($id)
    {
        // Se obtiene el id del curso, con el cual se obtiene informacion detallada del curso y se envia a la vista
        $curso = Curso::find($id);
        // Mandar Variable auna vista
        return view('cursos.show', ["curso" => $curso]);
        // Otra manera muy practica es utilizando compact ...
        // return view('cursos.show', compact(curso));

    }

    // Este metodo recibe el id del curso, obtiene el curso y envia la informacion a la vista editar curso
    public function edit(Curso $curso)
    {
        return view('cursos.edit', ["curso" => $curso]);
    }

    public function update(Curso $curso, Request $request)
    {
        // El siguiente codigo es para realizar una validacion al formulario antes de guardar los datos
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);
        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}
