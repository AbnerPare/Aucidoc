<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h1">
                        Fiches des rapports de projet
                    </h1>
                </div>
            </div>
        </div>
    </x-slot>

    <div>
        <div class="container-fluid mt-4" style="height: 100% ;">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-2  col-sm-4 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/ficheded') }}"
                        style=" text-decoration:none; display: block; border-radius: 50%;">
                        <div style="color: white; background-color: rgb(46, 44, 44)"
                            class="p-4 pb-4 pt-4 text-center services-content">
                            <h5 class="p-4" style="color: white">Fiches <br> DED</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  col-sm-4 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fichedhc') }}"
                        style=" text-decoration:none; display: block; border-radius: 50%;">
                        <div style="color: white; background-color: rgb(46, 44, 44)"
                            class="p-4 pb-4 pt-4 text-center services-content">
                            <h5 class="p-4" style="color: white">Fiches <br> DHC</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  col-sm-4  " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/ficheprotection') }}"
                        style=" text-decoration:none; display: block; border-radius: 50%;">
                        <div style="background-color: rgb(46, 44, 44)" class="pb-4 pt-4 text-center services-content">
                            <h5 class="p-4" style="color: white">Fiches <br> protection</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  col-sm-4 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/ficheadministrative') }}"
                        style=" text-decoration:none; display: block; border-radius: 50%;">
                        <div style="background-color: rgb(46, 44, 44)" class="pb-4 pt-4 text-center services-content">
                            <h5 class="p-4" style="color: white">Fiches <br> administrative</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  col-sm-4 just" id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fichelogistique') }}"
                        style=" text-decoration:none; display: block; border-radius: 50%;">
                        <div style="background-color: rgb(46, 44, 44)" class="pb-4 pt-4 text-center  services-content">
                            <h5 class="p-4" style="color: white">Fiches <br> logistique</h5>
                        </div>
                    </a>
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </div>
    </div>
</x-app-layout>
