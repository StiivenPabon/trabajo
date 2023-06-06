<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
        $registros = Product::select('c.name as cname','sub.name as subname','products.*')
                               ->join ('category as c','products.category_id', 'c.id')
                               ->join ('Subcategory as sub', 'products.subcategory_id' ,'sub.id')
                               ->where('products.state',1)->get();
                    return view('admin.products.index',compact('registros'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $category = Category::where('category.state',1)->get();
        $subcategory = Subcategory::where('subcategory.state',1)->get();
        return view('admin.products.create',compact('category','subcategory'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
            $Products=new Product();
            $Products->name=$request->name;
            $Products->price=$request->price;
            $Products->amount=$request->amount;
            $Products->state=1;
            $Products->category_id=$request->category_id;
            $Products->subcategory_id=$request->subcategory_id;
            $Products->save();
    
            return redirect(route('products.index'))->with('success', 'El registro se ha creado exitosamente.');
    
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
        
       // $product = Product::where('id',$id)->get();
        $product=Product::findOrFail($id);
        $category=Category::where('state',1)->get();
        $subcategory=Subcategory::where('state',1)->get();
        return  view('admin.products.edit', compact('product','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $registros = Product::findOrFail($id);
        $registros->name=$request->name;
        $registros->price=$request->price;
        $registros->amount=$request->amount;
        $registros->subcategory_id=$request->subcategory_id;
        $registros->category_id=$request->category_id;

        $registros->update();

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registros = Product::find($id);


        if ($registros) {
            $registros->state = 0; 
            $registros->save();
    
            return redirect()->route('products.index');
        }
    
        return redirect()->route('products.index');
       /*/ if ($registros) {
            $registros->delete();
    
            return redirect()->route('products.index')
                ->with('success', 'Registro eliminado exitosamente.');
        }
    
        return redirect()->route('products.index')
            ->with('error', 'No se encontró el registro.');/*/
    }
}
