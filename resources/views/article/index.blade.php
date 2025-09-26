<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 mt-5 text-main">Tutti gli articoli</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly">
             @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card cardC" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="imgCard" alt="Immagine articolo {{$article->name}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-subtitle">{{$article->subtitle}}</p>
                      <p class="small text-muted">Categoria: <a href="{{route('article.byCategory', $article->category->name)}}" class="text-capitalize  text-decoration-none text-main">{{$article->category->name}}</a></p>
                    </div>
                    <div class="card-footer bg-secondaryC d-flex justify-content-between align-items-center">
                        <p>Scritto il {{$article->created_at->format('d/m/Y')}} <br>
                        da <a class="text-decoration-none text-main" href="{{route('article.byUser', $article->user)}}">{{$article->user->name}}</a></p>
                      <a href="{{route('article.show', $article)}}" class="btnCard text-decoration-none text-blackC">Leggi<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
     @endforeach
        </div>
    </div>
</x-layout>