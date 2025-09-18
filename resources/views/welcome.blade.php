@if (session ('message'))
<div class="alert alert-success">
    {{session ('message')}}
</div>
@endif
<x-layout>
    {{-- hero section --}}
    <div class="container-fluid  text-center">
        <div class="row heroSection justify-content-center">
            <div class="col-12 heroContent">
                <h1 class="display-1 text-main mb-5">The Aulab Post</h1>
            </div>
        </div>
    </div>
    {{-- sezione articoli recenti --}}
    <div class="container my-5">
        <div class="row justify-content-evenly">
            <div class="col-12">
                <h2 class="display-6 text-blackC text-start">Le ultime notizie:</h2>
            </div>
            {{-- <div class="col-6">
                <img class="heroImg mb-3" src="media/vintage.png" alt="Illustrazione di una macchina da scrivere">
            </div> --}}
            {{-- card articoli --}}
     @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card cardC" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="imgCard" alt="Immagine articolo {{$article->name}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-subtitle">{{$article->subtitle}}</p>
                      <p class="small text-muted">Categoria:<a href= "{{route('article.byCategory', $article->category->name)}}" class="text-capitalize text-main text-decoration-none">{{$article->category->name}}</a></p>
                    </div>
                    <div class="card-footer bg-secondaryC d-flex justify-content-between align-items-center">
                        <p>Scritto il {{$article->created_at->format('d/m/Y')}} <br>
                        da <a class="text-main text-decoration-none" href="{{route('article.byUser', $article->user)}}">{{$article->user->name}}</a></p>
                      <a href="{{route('article.show', $article)}}" class="btnCard text-blackC text-decoration-none">Leggi<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
     @endforeach
        </div>
    </div>
</x-layout>
