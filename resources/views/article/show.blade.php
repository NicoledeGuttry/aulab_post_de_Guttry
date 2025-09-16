<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1">{{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 d-flex flex-column">
                <img src="{{Storage::url($article->image)}}" class="img-fluid" alt="Immagine dell'articolo {{$article->title}}">
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <p class="fs-5">Categoria:
                        <a href= "{{route('article.byCategory', $article->category->name)}}" class="text-capitalize text-muted fw-bold">{{$article->category->name}}</a>
                    </p>
                    <div class="text-muted my-3">
                        <p>Scritto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.byUser', $article->user)}}">{{$article->user->name}}</a></p>
                    </div>
                </div>
                <hr>
                <p>{{$article->body}}</p>
                <div class="text-center">
                    <a href="{{route('article.index')}}">Lista articoli completa</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>