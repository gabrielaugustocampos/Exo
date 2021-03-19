<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContatoRequest;
use App\Http\Requests\NewsletterRequest;
use App\Http\Requests\PagContatoRequest;
use Illuminate\Support\Facades\Auth;
use App\Contato;
use App\Meta;
use App\Paginas;
use App\Segmentos;
use App\Localizacao;
use Mail;
use App\Mail\SendMail;
use App\Mail\PagContatoMail;
use App\MailModel;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $contatos = Contato::all();
        
        return view('pages.painel.listar.contatos.index', compact('user', 'contatos'));
    }

    public function contato(){
        $metas = Meta::where('ativo', 1)->get();
        $redes_sociais_navbar = Paginas::where('localizacao', 25)->where('excluido', 0)->first();
        $contato = Paginas::where('localizacao', 34)->where('excluido', 0)->first();
        $segmentos = Segmentos::select('id', 'titulo', 'descricao', 'imagem')->where('excluido', 0)->get();
        $modal = Paginas::where('excluido', 0)->where('localizacao', 20)->first();
        $rodape = Paginas::where('excluido', 0)->where('localizacao', 26)->with('icones')->first();



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

        return view('pages.site.contato.contato', compact( 'segmentos',
          'metas',
          'logo',
          'produtos',
          'array_produtos_merge',
          'redes_sociais_navbar',
          'modal',
          'rodape',
          'contato'
        ));
    }

    public function orcamento(){
        $metas = Meta::where('ativo', 1)->get();
        $redes_sociais_navbar = Paginas::where('localizacao', 25)->where('excluido', 0)->first();
        $orcamento = Paginas::where('localizacao', 35)->where('excluido', 0)->first();
        $segmentos = Segmentos::select('id', 'titulo', 'descricao', 'imagem')->where('excluido', 0)->get();
        $modal = Paginas::where('excluido', 0)->where('localizacao', 20)->first();
        $rodape = Paginas::where('excluido', 0)->where('localizacao', 26)->with('icones')->first();



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

            return view('pages.site.contato.orcamento', compact( 'segmentos',
              'metas',
              'logo',
              'produtos',
              'array_produtos_merge',
              'redes_sociais_navbar',
              'modal',
              'rodape',
              'orcamento'
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function enviar_formulario_contato(ContatoRequest $request)
    {
        try {
            $data = new MailModel;

            $data->nome = $request->nome;
            $data->email = $request->email;
            $data->telefone = $request->telefone;
            $data->texto = "Estou com dúvida";
            $data->subject = 'Pop up Dúvidas';


            // Mail::to('allseg@allseg.com.br')->send(new SendMail($data));
            Mail::to('webdesign01@soitic.com')->send(new SendMail($data));


            $contato = new Contato;

            $contato->nome = $request->nome;
            $contato->email = $request->email;
            $contato->telefone = $request->telefone;
            $contato->texto = "Estou com dúvida";
            $contato->localizacao = 'Popup Dúvidas';

            $contato->save();

            return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');

        } catch (Exception $e) {

            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function enviarOrcamento(Request $request) {
        $mail = new MailModel;

        $opcoes = '';
        foreach ($request->opcao as $key => $value) {
            if (count($request->opcao) - 1 == $key) {
                $opcoes = $opcoes . $value;
            }
            else {
                $opcoes = $opcoes . $value . ', ';
            }
        }

        $mail->nome = $request->nome;
        $mail->email = $request->email;
        $mail->telefone = $request->telefone;
        $mail->texto = '<br>Conhecia a allseg: ' . $request->conhecia . '<br>      Necessidades: ' . $opcoes;
        $mail->subject = 'Página Orçamento';

        Mail::to('webdesign01@soitic.com')->send(new SendMail($mail));

        $contato = new Contato;

        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        $contato->texto = 'Conhecia a allseg: ' . $request->conhecia . '<br>Necessidades: ' . $opcoes;
        $contato->localizacao = 'Página Orçamento';

        $contato->save();

        return redirect()->back()->with('success', 'Orçamento pedido com sucesso');
    }

    public function paginaContato(PagContatoRequest $request) {
        $data = new MailModel;

        $data->nome = $request->nome;
        $data->email = $request->email;
        $data->telefone = $request->telefone;
        $data->texto = $request->texto;
        $data->subject = 'Página Contato';

        Mail::to('webdesign01@soitic.com')->send(new SendMail($data));

        $contato = new Contato;

        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        $contato->texto = $request->texto;
        $contato->localizacao = 'Página Contato';

        $contato->save();

        return redirect()->back()->with('success', 'Contato enviado com sucesso');
    }

    public function newsletter_enviar(NewsletterRequest $request){
        try {
            $data = new MailModel;

            // $data->nome = '';
            // $data->email = $request->email;
            // $data->telefone = '';
            // $data->mensagem = "Estou interessado na sua newsletter";
            // $data->subject = 'Newsletter';


            // Mail::to('allseg@allseg.com.br')->send(new SendMail($data));
            // Mail::to('webdesign01@soitic.com')->send(new SendMail($data));

            $contato = new Contato;

            $contato->nome = $request->input('nome');
            $contato->email = $request->input('email');
            $contato->telefone = $request->input('telefone');
            $contato->texto = 'Estou interessado na sua newsletter!';
            $contato->localizacao = 'Newsletter Rodapé';
            $contato->save();

            return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');

        } catch (Exception $e) {

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function get_info(Request $request){
        $contato = Contato::findOrFail($request->id_contato);
        return view('pages.painel.listar.contatos.componentes.modal_ajax', compact('contato'));
    }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
}
