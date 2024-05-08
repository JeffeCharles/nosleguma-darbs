<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <br>
    <br>
    <br>
    <br>
    <br>

    <hr>
            <h1 class="title">
                {{$sludinajums->Marka}} {{$sludinajums->Modelis}}
            </h1 class="title">

    <hr>
    <br>
    <br>
            
        <div class="viewContainer">
            <div class="attelsDiv">
                <img src="/{{$sludinajums->Atteli}}" class="crudAttels">
            </div>
            <div>
            <h2 class="crudH2">
            Pieprasītā cena : {{$sludinajums->Cena}} EUR
            </h2>

            <br>

            <h2 class="crudH2">
                Tehniskie Dati
            </h2>

            <p class="crudP">
                Auto Ātrumkārba : {{$sludinajums->Atrumkarba}}
            </p>
            <p class="crudP">
                Motora Tiplums : {{$sludinajums->MotoraTilpums}}
            </p>
            <p class="crudP">
                Degvielas Tips : {{$sludinajums->DegvielasTips}}
            </p>
            <p class="crudP">
                Nobraukums : {{$sludinajums->nobraukums}} Km
            </p>
            <br>

            <h2 class="crudH2">
                Fiziskais Apraksts
            </h2>
            <p class="crudP">
                Bojājumi : {{$sludinajums->Bojajumi}}
            </p>
            <p class="crudP">
                Krāsa : {{$sludinajums->Krasa}}
            </p>
            <p class="crudP">
                Virsbūves Veids : {{$sludinajums->VirsbuvesVeids}}
            </p>
            <p class="crudP">
                Papildus Informācija : {{$sludinajums->PapildusInfo}}
            </p>
            <br>

            <h2 class="crudH2">
                Pārējie dati
            </h2>
            <p class="crudP">
                Ražošanas Gads : {{ date('F j, Y', strtotime($sludinajums->IzdosanasDatums)) }}
            </p>
            <p class="crudP">
                Tehniskā Apskate Derīga Līdz : {{ date('F j, Y', strtotime($sludinajums->TehniskaApskate)) }}
            </p>
            <p class="crudP">
                Auto Vin Nummurs : {{$sludinajums->VinNummurs}}
            </p>
            <p class="crudP">
                Nummura Zīme : {{$sludinajums->NummuraZime}}
            </p>

            <h2 class="crudH2">
                Kontaktu Informācija
            </h2>
            <p class="crudP">
                Īpašnieka Vārds : {{$sludinajums->user->name}}
            </p>
            <p class="crudP">
                Īpašnieka Tālruņa Numurs : {{$sludinajums->user->number}}
            </p>
        </div>

        <br>
        <br>
        <br>

    <div>
        <a href="..">
            <button class="basicBtn">
                 Visi Sludinajumi
            </button>
        </a>    
            <a href="../../dashboard">
                <button class="basicBtn">
                    Izvēlne
                </button>
            </a>
    </div>

    <br>
    <br>
    
    <hr>

</x-app-layout>