<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Paginas;
use App\Fotos;
use App\Localizacao_Galeria;
use App\Localizacao;
use App\Icone;
use App\Segmentos;
use App\Videos;
use App\Cases;
use App\Meta;
use App\Arquivo;



class SiteHomeController extends Controller
{
  public function index(){
  
    $banners_desk = Banner::select('titulo', 'descricao', 'imagem', 'nome_botao', 'url_botao', 'is_mobile')
    ->where('excluido', 0)
    ->where('is_mobile', 0)
    ->get();

    $servicos = Paginas::where('localizacao', 3)->where('excluido', 0)->with('categorias')->with('icones')->get();

    $sobre = Paginas::where('localizacao', 4)->where('excluido', 0)->with('categorias')->get();

    $home = Paginas::where('localizacao', 5)->where('excluido', 0)->with('categorias')->with('icones')->with('gallery')->get();

    $equipe = Paginas::where('localizacao', 6)->where('excluido', 0)->with('categorias')->get();

    $parceiros = Paginas::where('localizacao', 7)->where('excluido', 0)->with('categorias')->get();

    $blog = Paginas::where('localizacao', 8)->where('excluido', 0)->orderBy('created_at','desc')->get();
  
    $metas = Meta::where('ativo', 1)->get();

    $contato = Paginas::where('localizacao', 9)->where('excluido', 0)->with('categorias')->with('icones')->get();

    $rodape = Paginas::where('excluido', 0)->where('localizacao', 10)->with('categorias')->get();
 
    $logo = Paginas::where('localizacao', 2)->where('excluido', 0)->with('categorias')->first();
    
    return view('pages.site.home.index', compact(
      'banners_desk',
      'servicos',
      'sobre',
      'home',
      'equipe',
      'parceiros',
      'blog',
      'metas',
      'contato',
      'rodape',
      'logo'
    ));
  }

  public function sobre(){

    $sobre = Paginas::where('localizacao', 4)->where('excluido', 0)->with('categorias')->get();
    
    $contato = Paginas::where('localizacao', 9)->where('excluido', 0)->with('categorias')->with('icones')->get();

    $rodape = Paginas::where('excluido', 0)->where('localizacao', 10)->with('categorias')->get();
 
    $logo = Paginas::where('localizacao', 2)->where('excluido', 0)->with('categorias')->first();
    
    return view('pages.site.sobre.index', compact(
      'sobre',
      'metas',
      'contato',
      'rodape',
      'logo'
    ));
  }

  

  public function produto($id, $nome){

    $metas = Meta::where('ativo', 1)->get();
    $redes_sociais_navbar = Paginas::where('localizacao', 25)->where('excluido', 0)->first();

    $produto_busca = Paginas::findOrFail($id);
    $galeria = Fotos::where('excluido', 0)->where('localizacao', $produto_busca->galeria)->get();
    
    $segmentos = Segmentos::select('id', 'titulo', 'descricao', 'imagem')->where('excluido', 0)->get();
    $produtos = Localizacao::select('nome', 'id_localizacao_texto')->where('is_product', 1)->where('excluido', 0)->get();
    $array_produtos_merge = [];
    $modal = Paginas::where('excluido', 0)->where('localizacao', 20)->first();
    $rodape = Paginas::where('excluido', 0)->where('localizacao', 26)->with('icones')->first();

    foreach ($produtos as $key => $produto) {
      $produtos_join = Localizacao::
              join('tb_texto', 'tb_localizacao_texto.id_localizacao_texto', '=', 'tb_texto.localizacao')
              ->select('tb_texto.id_texto', 'tb_texto.titulo')
              ->where('tb_texto.localizacao', $produto->id_localizacao_texto)
              ->get();
      
      $array_produtos_merge[$produto->nome] =  $produtos_join->toArray();
      
    }


    return view('pages.site.produtos.index', compact(
      'produto_busca', 
      'galeria',
      'metas',
      'redes_sociais_navbar',
      'segmentos',
      'array_produtos_merge',
      'modal',
      'rodape'
    ));
  }

  public function segmentos_ajax(Request $request){
    $segmentos = Segmentos::select('id', 'titulo', 'descricao', 'imagem')->where('excluido', 0)->get();

    return view('pages.site.home.componentes.segmentos_ajax', compact('segmentos'));
  }

  public function catalogos(){
    $array_produtos_merge = [];
    $rodape = Paginas::where('excluido', 0)->where('localizacao', 26)->with('icones')->first();

    $modal = Paginas::where('excluido', 0)->where('localizacao', 20)->first();
    $redes_sociais_navbar = Paginas::where('localizacao', 25)->where('excluido', 0)->first();

    $metas = Meta::where('ativo', 1)->get();
    $catalogos = Arquivo::where('excluido', 0)->get();
    $banner_catalogo = Banner::findOrFail(6);
    $segmentos = Segmentos::select('id', 'titulo', 'descricao', 'imagem')->where('excluido', 0)->get();
    return view('pages.site.catalogos.index', compact(
      'catalogos', 
      'banner_catalogo', 
      'metas', 
      'segmentos', 
      'modal',
      'redes_sociais_navbar',
      'array_produtos_merge',
      'rodape'
    ));
  }

  public function aovivo(){
        $metas = Meta::where('ativo', 1)->get();
        $redes_sociais_navbar = Paginas::where('localizacao', 25)->where('excluido', 0)->first();

        $segmentos = Segmentos::select('id', 'titulo', 'descricao', 'imagem')->where('excluido', 0)->get();
        $modal = Paginas::where('excluido', 0)->where('localizacao', 20)->first();
        $rodape = Paginas::where('excluido', 0)->where('localizacao', 26)->with('icones')->first();
        $aovivo = Paginas::where('localizacao', 33)->where('excluido', 0)->first();


        $produtos = Localizacao::select('nome', 'id_localizacao_texto')->where('is_product', 1)->where('excluido', 0)->get();
        $array_produtos_merge = [];
        foreach ($produtos as $key => $produto) {
          $produtos_join = Localizacao::
                  join('tb_texto', 'tb_localizacao_texto.id_localizacao_texto', '=', 'tb_texto.localizacao')
                  ->select('tb_texto.id_texto', 'tb_texto.titulo')
                  ->where('tb_texto.localizacao', $produto->id_localizacao_texto)
                  ->get();
          
          $array_produtos_merge[$produto->nome] =  $produtos_join->toArray();
           }
        // $id_produto_banner = $array_produtos_merge[array_key_first($array_produtos_merge)][0]['id_texto'];
        $logo = Paginas::where('localizacao', 29)->take(6)->orderBy('created_at','desc')->get();

          return view('pages.site.aovivo.index', compact( 
            'segmentos',
            'metas',
            'logo',
            'produtos',
            'array_produtos_merge',
            'redes_sociais_navbar',
            'modal',
            'rodape',
            'aovivo'
          ));
  }

  public function blog($id){
    $array_cats_relacionadas = [];
    $rodape = Paginas::where('excluido', 0)->where('localizacao', 26)->with('icones')->first();

    $modal = Paginas::where('excluido', 0)->where('localizacao', 20)->first();
    $redes_sociais_navbar = Paginas::where('localizacao', 25)->where('excluido', 0)->first();

    $segmentos = Segmentos::select('id', 'titulo', 'descricao', 'imagem')->where('excluido', 0)->get();
    $metas = Meta::where('ativo', 1)->get();
    $blog = Paginas::with(['categorias' => function($query) {
      $query->where('tb_categorias.excluido', 0);
    }])->findOrFail($id);


    foreach ($blog->categorias as $key => $value) {
      // dd($value->id);
      $cats = Paginas::
      join('tb_categorias_tb_texto', 'tb_categorias_tb_texto.id_texto_cat', '=', 'tb_texto.id_texto')
      ->join('tb_categorias', 'tb_categorias_tb_texto.id_categoria', '=', 'tb_categorias.id')
      ->where('tb_categorias_tb_texto.id_categoria', $value->id)
      ->select('tb_texto.id_texto', 'tb_texto.titulo', 'tb_texto.descricao', 'tb_texto.imagem', 'tb_texto.created_at')
      ->get();
      
      array_push($array_cats_relacionadas, $cats);
    }

    // dd($array_cats_relacionadas);

    $produtos = Localizacao::select('nome', 'id_localizacao_texto')->where('is_product', 1)->where('excluido', 0)->get();

    $array_produtos_merge = [];
    foreach ($produtos as $key => $produto) {
      $produtos_join = Localizacao::
              join('tb_texto', 'tb_localizacao_texto.id_localizacao_texto', '=', 'tb_texto.localizacao')
              ->select('tb_texto.id_texto', 'tb_texto.titulo')
              ->where('tb_texto.localizacao', $produto->id_localizacao_texto)
              ->get();
      
      $array_produtos_merge[$produto->nome] =  $produtos_join->toArray();
    }

    return view('pages.site.blog.index', compact(
      'blog', 
      'metas', 
      'segmentos', 
      'modal',
      'redes_sociais_navbar',
      'array_produtos_merge',
      'rodape'
    ))->with([
      'array_cats_relacionadas' => $array_cats_relacionadas
    ]);
  }

}
