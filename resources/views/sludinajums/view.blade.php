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
                Auto Marka un modelis : {{$sludinajums->Marka}} {{$sludinajums->Modelis}}
            </h1 class="title">

    <hr>
    <br>
    <br>
            
        <div>
            <div class="attelsDiv">
                <img src="/{{$sludinajums->Atteli}}" class="crudAttels">
            </div>

            <h2 class="crudH2">
                Pieprasītā cena : {{$sludinajums->Cena}}
            </h2>

            <h2 class="crudH2">
                Tehniskie Dati
            </h2>

            <p>
                Auto Ātrumkārba : {{$sludinajums->Atrumkarba}}
            </p>
            <p>
                Motora Tiplums : {{$sludinajums->MotoraTilpums}}
            </p>
            <p>
                Degvielas Tips : {{$sludinajums->DegvielasTips}}
            </p>

            <h2 class="crudH2">
                Fiziskais Apraksts
            </h2>
            <p>
                Bojājumi : {{$sludinajums->Bojajumi}}
            </p>
            <p>
                Krāsa : {{$sludinajums->Krasa}}
            </p>
            <p>
                Virsbūves Veids : {{$sludinajums->VirsbuvesVeids}}
            </p>
            <p>
                Papilus Informācija : {{$sludinajums->PapildusInfo}}
            </p>

            <h2 class="crudH2">
                Pārējie dati
            </h2>
            <p>
                Ražošanas Gads : {{ date('F j, Y', strtotime($sludinajums->IzdosanasDatums)) }}
            </p>
            <p>
                Tehniskā Apskate Derīga Līdz : {{ date('F j, Y', strtotime($sludinajums->TehniskaApskate)) }}
            </p>
            <p>
                Auto Vin Nummurs : {{$sludinajums->VinNummurs}}
            </p>
            <p>
                Nummura Zīme : {{$sludinajums->NummuraZime}}
            </p>

            <h2 class="crudH2">
                Kontaktu Informācija
            </h2>
            <p>
                Īpašnieka Vārds : {{$sludinajums->user->name}}
            </p>
            <p>
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