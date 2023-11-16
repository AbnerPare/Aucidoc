<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h2">
                        Formulaire du personnel
                    </h1>
                </div>
            </div>
        </div>
    </x-slot>


    <div class="container mb-5"><br>
        <div class="row justify-content-center ">
            <div class="col-md-8 bg-dark" style="border-radius: 20px;>
                <div class="card" style="border-radius: 20px ; border: none ">
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif
                    <div class="card-body"style="background-color: rgb(206, 206, 195)">
                        <form class="w-px-500 p-3 p-md-3 dark-text" action="{{ route('personnels.storepersonnel') }}" method="post"
                        enctype="multipart/form-data" >
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nom</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Nom" placeholder="Nom"
                                    @error('Nom') is-invalid @enderror >
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
                                <input type="text" class="form-control" name="Prénom" placeholder="Prénom"
                                    @error('Prénom') is-invalid @enderror>
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
                                <input type="email" class="form-control" name="Email" placeholder="Email"
                                    @error('Email') is-invalid @enderror>
                                @error('Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong >{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Téléphone</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" name="Téléphone" placeholder="Téléphone"
                                    @error('Téléphone') is-invalid @enderror maxlength="8">
                                @error('Téléphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong >{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Département</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Département" placeholder="Département"
                                    @error('Département') is-invalid @enderror>
                                @error('Département')
                                    <span class="invalid-feedback" role="alert">
                                        <strong >{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Statut de présence</label>
                            <div class="col-sm-9 text-center">
                                <select class="form-control" name="Statut_de_présence">
                                    <option value="" aria-placeholder="Sélectionnez un statut"></option>
                                    <option value="Disponible" >Disponible</option>
                                    <option value="En mission" >En mission</option>
                                    <option value="En congé">En congé</option>
                                    <option value="Non disponible">Non disponible</option>
                                </select>
                                @error('Département')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Plus de precision</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Precision" placeholder="Plus de precision"
                                    @error('Precision') is-invalid @enderror>
                                @error('Precision')
                                    <span class="invalid-feedback" role="alert">
                                        <strong >{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-success text-white">Ajouter</button>
                                <a href="{{ route('personnels.personnel') }}" class="btn btn-danger  float-end">Annuler</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</x-app-layout>
