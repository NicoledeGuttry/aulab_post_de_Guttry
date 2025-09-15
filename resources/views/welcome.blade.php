@if (session ('message'))
<div class="alert alert-success">
    {{session ('message')}}
</div>
@endif
<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <img class="heroImg mb-3" src="media/vintage.png" alt="Illustrazione di una macchina da scrivere">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-main mb-5">The Aulab Post</h1>
            </div>
        </div>
         <div class="row justify-content-center mt-5">
            <div class="col-12">
                <h2 class="display-4 text-blackC text-start">Le ultime notizie:</h2>
            </div>
        </div>
    </div>
</x-layout>