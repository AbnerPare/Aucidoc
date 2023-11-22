<x-app-layout>
    <x-slot name="header">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="h2">
                        Fichiers  des actions logistiques
                    </h1>
                </div>
            </div>
        </div>
    </x-slot>

    <div>
        <div class="container-fluid mt-3  mb-5">
            <div class="row" style="border-radius: 20px">
                @foreach ($users as $user)
                    <div class="col-12 col-md-6 mb-2  table-hover">
                        <div style="border: 2px solid #131414; border-radius: 20px; background-color:#131414;">
                            <div class="d-flex align-items-center">
                                <p class="ml-1">
                                 <u class="text-danger">  {{ $user->created_at->format('Y-m-d') }} </u> {{ $user['Description'] }}</p>
                                <a href="{{ asset('storage/' . $user->pdf_path) }}" target="_blank"
                                    class=" btn-sm ml-2 ">
                                    <span style=" font-size:30; color: rgb(187, 46, 14);"><i
                                            class="far fa-file-alt"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
