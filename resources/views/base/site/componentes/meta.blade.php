<link rel="shortcut icon" href="{{asset('assets_site/images/favicon.png')}}" type="image/x-icon">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<meta name="robots" content="index, follow">
<meta property="og:url" content="https://pucpcaldas.br">
<meta name="author" content="TD">
<title>Exo Design</title>

{{-- @foreach ($metas as $meta)
@if ($meta->tipo_meta == 0)
@if ($meta->name == "og:image")
<meta property="{{$meta->name}}" content="{{asset('imagens_meta/'.$meta->content)}}">            
@else
<meta property="{{$meta->name}}" content="{{$meta->content}}">
@endif
@else
<meta name="{{$meta->name}}" content="{{$meta->content}}">
@endif
@endforeach --}}

