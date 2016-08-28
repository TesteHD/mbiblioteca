<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Livro;
use Request;
use App\Http\Requests\FormRequest;


class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index',compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequest $rq)
    {
        $livro= new Livro(array (
            "titulo" => $rq->get("titulo"),
            "autor"=> $rq->get("autor"),
            "editora"=> $rq->get("editora"),
            "publicacao"=> $rq->get("publicacao"),
            "descricao"=>$rq->get("descricao"),
            "image"=>$rq->file("image")->getClientOriginalName()
        ));
        
        $rq->file("image")->move( base_path() . '/public/img' , $rq->file("image")->getClientOriginalName());


          $livro->save();
        return redirect('livros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro=Livro::find($id);
        return view('livros.show',compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro=Livro::find($id);
        return view('livros.edit',compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequest $rq, $id)
    {
        $livro2= array (
            "titulo" => $rq->get("titulo"),
            "autor"=> $rq->get("autor"),
            "editora"=> $rq->get("editora"),
            "publicacao"=> $rq->get("publicacao"),
            "descricao"=>$rq->get("descricao"),
        );

        if(!($rq->file("image")===NULL)) {
            error_log($rq->file("image")->getClientOriginalName());
            $rq->file("image")->move(base_path() . '/public/img', $rq->file("image")->getClientOriginalName());
            $livro2["image"]  = $rq->file("image")->getClientOriginalName();

        }

        $livro=Livro::find($id);
        $livro->update($livro2);
        return redirect('livros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Livro::find($id)->delete();
        return redirect('livros');
    }
}
