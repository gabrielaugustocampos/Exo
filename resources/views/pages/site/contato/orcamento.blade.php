@extends('base.site.index')
@section('content')

    @component('base.site.componentes.navbar', ["segmentos" => $segmentos, "redes_sociais_navbar" => $redes_sociais_navbar, "array_produtos_merge" => $array_produtos_merge])
        @slot('blog')
            #blog
        @endslot
        @slot('allseg')
            #allseg
        @endslot
    @endcomponent

    <section class="events3 cid-rAghLg91pJ" id="events3-2g">
        <div class="container">
            <div class="row align-items-center mbr-white">
                <span class="fa fa-envelope-open-text fa-2x d-flex align-items-center mr-2"></span><p class="custom-section-text-title mbr-bold mbr-fonts-style mbr-ib display-2">{{$orcamento->titulo}}</p>
            </div>
        </div>
    </section>


    <section style="margin-top: 3rem;margin-bottom: 4rem;">
        
        <div class="container">
            <div class="row">
                <div class="mbr-col-md-6 mbr-col-sm-12 align-items-center">
                    
                    <div class="row p-2">
                        <div class="col-12 d-flex align-items-center justify-content-center mb-3">
                            <img src="{{asset('imagens_paginas'.'/'.$orcamento->imagem)}}" class="img-fluid w-75">
                        </div>
                        {!!$orcamento->texto!!}
                        {{-- <p class="mbr-fonts-style text-black display-7 mr-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
                    </div>
                </div>
                
                <div class="mbr-col-md-6 mbr-col-sm-12 align-items-center">
                     <form class="mbr-form display-4 mt-3" action="{{route('enviar_orcamento')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 p-2">
                                <input type="text" class="form-control input" placeholder="Nome*" name="nome"
                                    title="Preencha este campo" required>
                            </div>
                            <div class="col-md-12 p-2">
                                <input type="email" class="form-control input" placeholder="Email*" name="email"
                                    title="Preencha este campo" required>
                            </div>
                            <div class="col-md-12 p-2">
                                <input type="text" class="form-control phone" placeholder="Telefone/Celular*"
                                    name="telefone" title="Preencha este campo" id="telefone" required>
                            </div>
                            <div class="col-md-12 p-2">
                                <p class="mbr-fonts-style text-black display-6 mbr-semibold">Qual sua necessidade?</p>
                                <div class="form-check">
                                  <input selected class="form-check-input" type="checkbox" name="opcao[]" value="Cameras" id="defaultCheck1">
                                  <label class="form-check-label display-7 mbr-semibold" for="defaultCheck1">Câmeras</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="opcao[]" value="Alarmes" id="defaultCheck2">
                                  <label class="form-check-label display-7 mbr-semibold" for="defaultCheck2">Alarmes</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="opcao[]" value="Fechaduras" id="defaultCheck3">
                                  <label class="form-check-label display-7 mbr-semibold" for="defaultCheck3">Fechaduras</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="opcao[]" value="Automação" id="defaultCheck4">
                                  <label class="form-check-label display-7 mbr-semibold" for="defaultCheck4">Automação</label>
                                </div>
                            </div>
                            <div class="col-md-12 p-2">
                                <p class="mbr-fonts-style text-black display-6 mbr-semibold">Já conhecia a Allseg?</p>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="conhecia" id="inlineRadio1" value="Sim">
                                  <label class="form-check-label display-7 mbr-semibold" for="inlineRadio1">Sim</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="conhecia" id="inlineRadio2" value="Nao">
                                  <label class="form-check-label display-7 mbr-semibold" for="inlineRadio2">Não</label>
                                </div>
                            </div>
                            <div class="col-md-12 p-2">
                                <button type="submit" class="btn btn-sm-m btn-primary display-7">Enviar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>


    </section>
@if (session('success'))
    <script>
        Swal.fire(
            title: 'Sucesso',
            text: '{{session('success')}}',
            type: 'success'
        )
    </script>
@endif

@endsection


