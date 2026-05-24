<x-layout>

    <div class="container-fluid text-center bg-azzurro">

        <div class="col-12">
            <h1 class="display-4 title">Presto.it</h1>
        </div>

        <div class="my-3">

            @auth
            <a href="{{route('create.article')}}" class="btn btn-primary">Pubblica un articolo</a>
            @endauth

        </div>

    </div>
    
</x-layout>