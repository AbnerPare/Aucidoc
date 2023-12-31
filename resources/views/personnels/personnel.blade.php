<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h2">
                        Statut du personnel
                    </h1>
                    <div class="container-fluid">
                        <div class="container text-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut-filter" id="all"
                                    value="all" checked>
                                <label class="form-check-label" for="all">Tous les statuts</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut-filter" id="disponible"
                                    value="Disponible">
                                <label class="form-check-label" for="disponible">Disponible</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut-filter" id="mission"
                                    value="En mission">
                                <label class="form-check-label" for="mission">En mission</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut-filter" id="conge"
                                    value="En congé">
                                <label class="form-check-label" for="conge">En congé</label>
                            </div>
                            {{-- <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut-filter" id="non-disponible"
                                    value="Non disponible">
                                <label class="form-check-label" for="non-disponible">Non disponible</label>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
    </x-slot>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>
                                    <h6>Nom</h6>
                                </th>
                                <th>
                                    <h6>Prénom</h6>
                                </th>
                                <th>
                                    <h6>Email</h6>
                                </th>
                                <th>
                                    <h6>Téléphone</h6>
                                </th>
                                <th>
                                    <h6>Département</h6>
                                </th>
                                <th>
                                    <h6>Statut de présence</h6>
                                </th>
                                <th>
                                    <h6>Plus de precision</h6>
                                </th>
                                <th>
                                    <h6>Actions</h6>
                                </th>

                            </tr>
                        </thead>
                        <tbody style="font-size: 20px; background-color:rgb(188, 204, 243) ">
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <h5 style="font-size: 20px; text-transform: uppercase;">{{ $user->Nom }}
                                        </h5>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 20px; text-transform: capitalize;">{{ $user->Prénom }}
                                        </h6>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 20px"><a href="mailto:{{ $user->Email }}"
                                                style="text-decoration: none">
                                                {{ $user->Email }}</a></h6>
                                    </td>

                                    <td>
                                        <a href="tel:{{ $user->Téléphone }}"
                                            style="text-decoration: none">{{ $user->Téléphone }}</a>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 20px">{{ $user->Département }}</h6>
                                    </td>
                                    <td
                                        class="statut-cell @if ($user->Statut_de_présence == 'Disponible') bg-success @elseif ($user->Statut_de_présence == 'En mission') bg-info @elseif ($user->Statut_de_présence == 'En congé') bg-warning @else bg-danger @endif text-white">
                                        {{ $user->Statut_de_présence }} <br>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 20px">{{ $user->Precision }}</h6>
                                    </td>
                                    {{-- <td>
                                        <a href="{{ route('personnels.edit', $user->id) }}"
                                            class="btn btn-primary">Modifier</a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
