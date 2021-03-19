
<div class="mbr-row mbr-jc-c result_ajax_blog">
    @foreach ($galeria as $item)
        <div class="card col-md-3 mt-2 mb-2 mt-4">
            <img src="{{asset('imagens_galerias').'/'.$item->imagem}}">
        </div>
    @endforeach
</div>
