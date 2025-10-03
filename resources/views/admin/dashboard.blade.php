

<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Bentornato {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    {{-- tabella 1 --}}
    <div class="container my-5">
        <div class="row judtify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di Amministratore:</h2>
                <x-requests-table :roleRequests="adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    {{-- tabella 2 --}}
     <div class="container my-5">
        <div class="row judtify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di Revisore:</h2>
                <x-requests-table :roleRequests="revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
    {{-- tabella 3 --}}
      <div class="container my-5">
        <div class="row judtify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di Redattore:</h2>
                <x-requests-table :roleRequests="writerRequests" role="redattore"/>
            </div>
        </div>
    </div>
</x-layout>