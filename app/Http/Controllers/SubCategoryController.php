<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    

        $subcategorias = Subcategory::select('c.name as cname','subcategory.*')
        ->join('category as c','subcategory.category_id','c.id')
        ->where('subcategory.state',1)->get();

        return view('admin3.subCategory.indexSubca',compact('subcategorias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $categorias = Category::where('state',1)->get();

        // $sub = Subcategory::all();
         return view('admin3.subCategory.createSubca', compact('categorias'));
    
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subCa = new Subcategory();
        $subCa->name = $request->name;
        $subCa->description = $request->description;
        $subCa->state = 1;
        $subCa->category_id = $request->categorySelect; 
        $subCa->save();

        return redirect(route('sub.index'))->with('success', 'El registro se ha creado exitosamente.');
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
        
        // $categoria = Category::findOrFail($id);
        // return  view('admin3.subCategory.editSubca',compact('categoria'));
        
        $subcategory = Subcategory::findOrFail($id);
        $category = Category::where('state',1)->get();
        
        return view('admin3.subCategory.editSubca', compact('subcategory', 'category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subcategory = subcategory::findOrFail($id);
        $subcategory->name=$request->name;
        $subcategory->description=$request->description;
        $subcategory->category_id=$request->category_id;
     

        $subcategory->update();

        return redirect(route('sub.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registros = Subcategory::find($id);


        if ($registros) {
            $registros->state = 0; 
            $registros->save();
    
            return redirect()->route('sub.index');
        }
    
        return redirect()->route('sub.index');
       /*/ if ($registros) {
            $registros->delete();
    
            return redirect()->route('products.index')
                ->with('success', 'Registro eliminado exitosamente.');
        }
    
        return redirect()->route('products.index')
            ->with('error', 'No se encontró el registro.');/*/
    }
    
}
