<div>
    <h1>{{ $nombre_titulo }}</h1>
    <ul>
    @foreach ($datos_modelo as $dato)
        <li> {{ $dato["meme"] }}  -  {{ $dato["usuario"] }} </li>
    @endforeach
    </ul>
</div>
