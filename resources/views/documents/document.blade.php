<x-app-layout>
    <div class="container-fluid text-center mt-5  gradient-background">
        <h1 class="text-white mb-4 mt-4  h1">Documents</h1>
        <div class="container-fluid mt-4 mb-4" style="height: 100%  ">
            <div class="row justify-content-center">
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_de_congé') }}"
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
                <div class="col-md-2 col-6 col-sm-4  mt-1" id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_de_mission') }}"
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
                    <a href="{{ URL::to('/fiches_de_contrat') }}"
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
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/rapport_de_project') }}"
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
