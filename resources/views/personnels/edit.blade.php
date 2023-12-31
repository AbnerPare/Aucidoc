{{-- <x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h2">
                        Statut du personnel
                    </h1>
    </x-slot>
    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-md-10 bg-dark mb-4" style="border-radius: 20px ; ">
                <div class="card " style="border-radius: 20px ">
                    <div class="card-header bg-dark text-center" style="color: #f1f7fa; font-weight: bold">
                        <h4>Modifier les informations</h4>
                    </div>
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body" style="background-color: rgb(206, 206, 195)">
                        <form class="w-px-500 p-3 p-md-3" action="{{ route('personnels.update', $user->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Utilise la méthode HTTP PUT pour l'édition -->

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Nom"
                                        value="{{ $user->Nom }}" @error('Nom') is-invalid @enderror>
                                    @error('Nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Prénom</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Prénom"
                                        value="{{ $user->Prénom }}" @error('Prénom') is-invalid @enderror>
                                    @error('Prénom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="Email"
                                        value="{{ $user->Email }}" @error('Email') is-invalid @enderror>
                                    @error('Email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Téléphone</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="Téléphone"
                                        value="{{ $user->Téléphone }}" @error('Téléphone') is-invalid @enderror>
                                    @error('Téléphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Département</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Département"
                                        value="{{ $user->département }}" @error('Département') is-invalid @enderror>
                                    @error('Département')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Statut de présence</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="Statut_de_présence">
                                        <option value="">Sélectionnez un statut</option>
                                        <option value="Disponible" @if ($user->Statut_de_présence === 'Disponible') selected @endif>
                                            Disponible</option>
                                        <option value="En mission" @if ($user->Statut_de_présence === 'En mission') selected @endif>En
                                            mission</option>
                                        <option value="En congé" @if ($user->Statut_de_présence === 'En congé') selected @endif>En
                                            congé</option>
                                        <option value="Non disponible"
                                            @if ($user->Statut_de_présence === 'Non disponible') selected @endif>Autre</option>
                                    </select>
                                    @error('Statut_de_présence')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Precision</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Precision" placeholder="Precision"
                                        @error('Precision') is-invalid @enderror>
                                    @error('Precision')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-success active text-white">Modiffier</button>
                                    <a href="{{ route('personnels.personnel') }}"
                                        class="btn btn-danger float-end">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}
