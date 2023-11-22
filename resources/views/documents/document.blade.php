<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h1">
                        Documents
                    </h1>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid text-center mt-4  ">
        <div class="container-fluid mt-5" style="height: 100%  ">
            <div class="row justify-content-center">
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fichedecontrat') }}"
                        style="background-color: black; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; color: white;">Fiches de <br> contrat</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4  mt-1" id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fichedemission') }}"
                        style="background-color: black; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px;color: white;">Fiches de <br> mission</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fichedecongé') }}"
                        style="background-color: black; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; color: white;">Fiches de <br> congé</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/rapport') }}"
                        style="background-color: black; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; color: white;">Rapport de <br> project</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
