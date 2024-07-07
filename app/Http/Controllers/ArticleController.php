<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article=Article::all();

        if($article->isEmpty()){
            $data=[
                'message'=>'no se encontraron articulos',
                'status'=>404
            ];
            return response()->json($data,404);
        }
       
        $data=[
            'message'=>'articulos encontradas',
            'articles'=>$article,
            'status'=>200,
        ];
        return response()->json($data,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $search = Article::find($id);

        if(!$search){
            $data=[
                'message'=>'articulo no encontrado',
                'status'=>404
            ];
            return response()->json($data,404);
        }

        $data=[
            'message'=>'articulo encontrado',
            'articles'=>$search,
            'status'=>200
        ];
        return response()->json($data,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
