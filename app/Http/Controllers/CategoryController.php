<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Category::where('state',1)->get();
        return  view('admin2.category.indexCategory',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin2.category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Categorys nombre del modelo :) 
        $categorias =new Category();
        $categorias->name=$request->name;
        $categorias->description=$request->description;
        $categorias->state=1;
        $categorias->save();

        return redirect(route('categorys.index'))->with('success', 'El registro se ha creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Category::findOrFail($id);
        return  view('admin2.category.editCategory',compact('categoria'));

        //se debe llamar la carpeta en este caso admin luego la carpeta que esta dentro de ella y la vista//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Category::findOrFail($id);
        $categoria->name=$request->name;
        $categoria->description=$request->description;
     

        $categoria->update();

        return redirect(route('categorys.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorias = Category::find($id);


        if ($categorias) {
            $categorias->state = 0; 
            $categorias->save();
    
            return redirect()->route('categorys.index');
        }
    
        return redirect()->route('categorys.index');
    }
}
