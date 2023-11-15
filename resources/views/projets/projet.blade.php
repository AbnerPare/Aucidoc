<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="container-fluid text-center mt-2 gradient-background">
        <h1 class="h1 text-white">Résumés des rapports de projet</h1>
        <div class="mt-5 container-fluid" style="height: 100% ;">
            <div class="row justify-content-center">
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/ded') }}" style="background-color: #979187; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Actions <br> DED</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/dhc') }}" style="background-color: #979187; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Actions <br> DHC</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/logistique') }}" style="background-color: #979187; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Action <br> logistique
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/protection') }}" style="background-color: #979187; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Actions <br> protection
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6 col-sm-4 mt-1 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/administrative') }}" style="background-color: #979187; display: block; border-radius: 50%; text-decoration:none; ">
                        <div style="border-radius: 50%;">
                            <div class="card-body d-flex flex-column align-items-center"
                                style="text-align: center; height: 100%;">
                                <img src="img/logo.png" alt="..." width="50%">
                                <h5 style="margin-top: 10px; margin-bottom: 20px; color: white;">Actions <br> administrative
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
