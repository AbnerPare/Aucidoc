<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h2">
                        Formulaire DED
                    </h1>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="container mb-5"><br>
        <div class="row justify-content-center ">
            <div class="col-md-6 bg-dark" style="border-radius: 20px;>
                <div class="card"
                style="border-radius: 20px ; border: none ">
                @if ($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif

                <div class="card-body"style="background-color: rgb(206, 206, 195)">
                    <form class="w-px-500 p-3 p-md-3 dark-text" action="{{ route('documents.storefichedecongé') }}"
                        method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-3 text-dark col-form-label">Nom</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Nom" placeholder="Nom"
                                    @error('Nom') is-invalid @enderror>
                                @error('Nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 text-dark col-form-label">Prénom</label>
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
                            <label class="col-sm-3 text-dark col-form-label">Fichier PDF</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="pdf_file">
                                @error('pdf_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn active btn-primary">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</x-app-layout>
