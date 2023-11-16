<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h2">
                        Actions DED
                    </h1>
                    <div class="container-fluid">
                        <div class="container text-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut-filter" id="all"
                                    value="all" checked>
                                <label class="form-check-label" for="all">Tous les états</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut-filter" id="encours"
                                    value="En cours">
                                <label class="form-check-label" for="encours">En cours</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut-filter" id="executee"
                                    value="Exécuté">
                                <label class="form-check-label" for="execute">Exécuté</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class=" gradient-background ">
        <div class="container-fluid mt-3  mb-5">
            <div class="row" style="border-radius: 20px">
                @foreach ($users as $user)
                    <div class="col-12 col-md-6 mb-2">
                        <div style="border: 2px solid #b1bdd7; border-radius: 20px; background-color:#9aadd6;">
                            <div class="d-flex align-items-center">
                                <div class="statut-cell mr-2">
                                    <h6>
                                        <span
                                            class="text-white p-1 {{ $user->Etat === 'En cours' ? 'bg-danger d-inline-block text-center' : ($user->Etat === 'Exécuté' ? 'bg-success d-inline-block text-center' : '') }}"
                                            style="border-radius: 20px">
                                            {{ $user->Etat }}
                                        </span>
                                    </h6>
                                </div>
                                <p>{{ $user['Description'] }}</p>
                                <a href="{{ asset('storage/' . $user->pdf_path) }}" target="_blank"
                                    class=" btn-sm ml-2 ">
                                    <span style=" font-size:20; color: rgb(187, 46, 14);"><i
                                            class="far fa-file-alt"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
