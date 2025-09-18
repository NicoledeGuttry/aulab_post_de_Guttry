<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Lavora con noi</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('careers.submit')}}" method="POST" class="card p-5 shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Quale posizione ti interessa?</label>
                        <select name="role" id="role" class="form-control">
                            @if (!Auth::user()->is_admin)
                            <option value="admin">Amministratore</option>
                            @endif
                            @if (!Auth::user()->is_revisor)
                            <option value="revisor">Revisore</option>
                            @endif
                            @if (!Auth::user()->is_writer)
                            <option value="writer">Redattore</option>
                            @endif
                        </select>
                        @error('role')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Raccontaci il perchè della tua scelta:</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{old('message')}}</textarea>
                        @error('message')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-secondary">Invio</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 p-5">
                <h2>Lavora come Amministratore</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, incidunt?</p>
                <h2>Lavora come Revisore</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, culpa!</p>
                <h2>Lavora come Redattore</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, explicabo!</p>
            </div>
        </div>
    </div>
</x-layout>