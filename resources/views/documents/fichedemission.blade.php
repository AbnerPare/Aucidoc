<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h1">
                        Fiches de Mission
                    </h1>
                </div>
            </div>
        </div>
    </x-slot>

    <div>
        <div class="container-fluid mb-5">
            <div class="row" style="border-radius: 20px">
                @foreach ($fiches as $fiche)
                    <div class="col-6 col-md-2 col-sm-6 mb-4 wow fadeIn" id="maCarte">
                        <a href="{{ asset('storage/' . $fiche->pdf_path) }}" target="_blank" class="card"
                            style=" text-decoration:none; background-color: #a7c0da; text-align: center; color: black;">
                            <h6 class="text-danger">{{ $fiche->created_at->format('Y-m-d H:i:s') }}</h6>
                            <h6 style="text-transform: uppercase">{{ $fiche->Lieu }}</h6>
                            <h6>Région : {{ $fiche->Région }}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
