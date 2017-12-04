<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view("listadoProductos", compact("products"));
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
        $reglas = [
            "nombre" => "required|string",
            "precio" => "required|numeric|min:0",
            "stock" => "required|numeric|min:0",
            "descripcion" => "required|max:1000",
            "imagen" => "required|image"
        ];

        $mensajes = [
            "required" => "El campo :attribute es requerido",
            "numeric" => "El campo :attribute debe ser un número",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximo de :max",
            "image" => "El campo :attribute debe ser una imagen"
        ];

        $this->validate($request, $reglas, $mensajes);

        $foto = $request->file("imagen");

        $nombreFoto = $foto->store("public/products");

        $nombreFoto = str_replace("public", "storage", $nombreFoto);

        $producto = new Product();
        $producto->name = $request["nombre"];
        $producto->price = $request["precio"];
        $producto->stock = $request["stock"];
        $producto->description = $request["descripcion"];
        $producto->category_id = $request["categoria"];
        $producto->image = $nombreFoto;

        $producto->save();

        return redirect("/productos/" . $producto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        $wishlist = session("wishlist");
        $inWishlist = false;
        if ($wishlist && in_array($id, $wishlist)) {
            $inWishlist = true;
        }

        return view("detalleProducto", compact("product", "inWishlist"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $request){
        $producto = Product::find($request["id"]);
        $producto->delete();
        return redirect("/productos")->with("status", "Borraste el producto " . $producto->name . " con éxito");
    }

    public function add(){
        $categories = Category::all();
        return view("agregarProducto", compact("categories"));
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request){
        $buscar = $request["buscar"];
        $products = Product::where("name", "LIKE", "%$buscar%")->paginate(3);

        return view("resultadoBusqueda", compact("products","buscar"));
    }

    public function wishlist(){
        $products =[];
        $wishlist = session ("wishlist");

        if($wishlist){
            foreach ($wishlist as $wish){
                $products[] = Product::find($wish);
            }
        }
        return view ("wishlist", compact("products"));
    }

    public function addWishlist(Request $request){

        $wishlist = session ("wishlist");

        if(!$wishlist){
            $wishlist = [];
        }

        $wishlist[] = $request["id"];

        session(["wishlist" => $wishlist]);
        return back()->with("status", "Producto agregado a la wishlist");
    }

    public function removeWishlist(Request $request) {
        $wishlist = session("wishlist");

        foreach ($wishlist as $key => $wish) {
            if ($wish == $request["id"]) {
                unset($wishlist[$key]);
            }
        }

        session(["wishlist" => $wishlist]);

        return back()->with("status", "Producto eliminado de wishlist");
    }
}
