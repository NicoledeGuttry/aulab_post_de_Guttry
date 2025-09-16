 <x-layout>
 <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-capitalize">Tutti gli articoli scritti da {{$user->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly">
             @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine articolo {{$article->name}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-subtitle">{{$article->subtitle}}</p>
                        <p class="small text-muted">Categoria: <a href="{{route('article.byCategory', $article->category->name)}}" class="text-capitalize text-muted">{{$article->category->name}}</a></p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <p>Scritto il {{$article->created_at->format('d/m/Y')}}</p>
                      <a href="{{route('article.show', $article)}}" class="btn btn-primary">Articolo completo</a>
                    </div>
                </div>
            </div>
     @endforeach
        </div>
    </div>
 </x-layout>