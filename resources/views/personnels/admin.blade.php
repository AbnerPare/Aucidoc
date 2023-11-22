<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot> --}}
    <br><br><br>
    <div class="container-fluid services mb-5">
        <div class="container-fluid">
            <div class="row services-inner">
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Résumé DED</h6>
                        <a href="{{ URL::to('/dedcreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Résumé DHC</h6>
                        <a href="{{ URL::to('/dhccreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Résumé Logistique</h6>
                        <a href="{{ URL::to('/logistiquecreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Résumé des actions protections</h6>
                        <a href="{{ URL::to('/protectioncreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Résumé des actions administratives</h6>
                        <a href="{{ URL::to('/administrativecreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'un nouveau personnel</h6>
                        <a href="{{ URL::to('/personnelcreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'un contrat</h6>
                        <a href="{{ URL::to('/fichedecontratcreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'une mission</h6>
                        <a href="{{ URL::to('/fichedemissioncreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'un congé</h6>
                        <a href="{{ URL::to('/fichedecongécreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'un fichier DED </h6>
                        <a href="{{ URL::to('/fichededcreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'un fichier DHC </h6>
                        <a href="{{ URL::to('/fichedhccreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'un fichier protection </h6>
                        <a href="{{ URL::to('/ficheprotectioncreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'un fichier administrative </h6>
                        <a href="{{ URL::to('/ficheadministrativecreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 mb-4 bm-4 wow fadeIn" data-wow-delay=".5s">
                    <div style="background-color: rgb(145, 167, 167)" class="pb-4 pt-4 text-center services-content">
                        <h6>Ajout d'un fichier logistique </h6>
                        <a href="{{ URL::to('/fichelogistiquecreate') }}" class="btn btn-success btn-xs py-0 ">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
