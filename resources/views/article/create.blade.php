<x-layout>
    <div class="container-fluid p-5 text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-main">Inserisci un articolo</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{-- Form creazione --}}
                <form action="{{route('article.store')}}" method="POST" class="card p-5 shadow bg-whiteC" enctype="multipart/form-data">
                  @csrf
                    {{-- titolo --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                        @error('title')
                        <span class="text-danger">{{'message'}}</span>
                        @enderror
                    </div>
                    {{-- sottotitolo --}}
                      <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                        @error('subtitle')
                        <span class="text-danger">{{'message'}}</span>
                        @enderror
                       </div>
                       {{-- immagine --}}
                          <div class="mb-3">
                            <label for="image" class="form-label">Immagine</label>
                            <input type="file" name="image" class="form-control" id="image">
                           @error('image')
                            <span class="text-danger">{{'message'}}</span>
                           @enderror
                          </div>
                          {{-- scelta categoria --}}
                          <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select name="category" id="category" class="form-control">
                                <option selected disabled>Seleziona categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="text-danger">{{'message'}}</span>
                            @enderror
                          </div>
                          {{-- testo articolo --}}
                            <div class="mb-3">
                              <label for="body" class="form-label">Articolo</label>
                              <textarea name="body" class="form-control" cols="30" rows="7" id="body">{{old('body')}}</textarea>
                              @error('body')
                              <span class="text-danger">{{'message'}}</span>
                              @enderror
                            </div>
                            {{-- bottone --}}
                              <div class="mt-3 d-flex justify-content-center flex-column align-items-center">
                                <button type="submit" class="btnC">Inserisci</button>
                                <a class="text-decoration-none text-main" href="{{route('homepage')}}" class="mt-2">Torna alla homepage</a>
                              </div>
                
                            </form>
            
                        </div>
        
                    </div>
    
                </div>

            </x-layout>