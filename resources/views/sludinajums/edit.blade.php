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
        Rediģēt Sludinajumu
    </h1>

    <hr>

    <form method="post" action="{{route('sludinajums.update', ['sludinajums' => $sludinajums])}}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    
        <div class="crudContainer">

            <h2 class="crudH2">
                Attēli
            </h2>
            <div>
                <input type="file" name="Atteli" class="form-control" value="{{$sludinajums->Atteli}}" />
            </div>
            <h2 class="crudH2">
                Auto Marka un Modelis
            </h2>
            <input class="crudDouble" type="text" name="Marka" placeholder="Marka" value="{{$sludinajums->Marka}}">
            <input class="crudDouble" type="text" name="Modelis" placeholder="Modelis" value="{{$sludinajums->Modelis}}">
            <br>

            <h2 class="crudH2">
                Cena
            </h2>
            <input class="crudText" type="decimal" name="Cena" placeholder="Cena" value="{{$sludinajums->Cena}}">
            <br>

            <h2 class="crudH2">
                Ātruma Kārba
            </h2>
            <select class="dropdown" placeholder="Ātrumkārba" name="Atrumkarba">
                <option disabled selected>Izvēlies Ātrumkārbu</option>
                <option value="Manuāls">Manuāls</option>
                <option value="Automāts">Automāts</option>
            </select>

            <br>

            <h2 class="crudH2">
                Motora Tilpums
            </h2>
            <input class="crudText" type="decimal" name="MotoraTilpums" placeholder="Motora Tilpums" value="{{$sludinajums->MotoraTilpums}}">
            <br>

            <h2 class="crudH2">
                Degviela
            </h2>
            <select class="dropdown" placeholder="Degviela" name="DegvielasTips">
                <option disabled selected>Izvēlies Degvielas Tipu</option>
                <option value="Benzīns">Benzīns</option>
                <option value="Dīzelis">Dīdelis</option>
                <option value="Elektrība">Elektrība</option>
                <option value="Hibrids">Hibīds</option>
            </select>
            <br>

            <h2 class="crudH2">
                Krāsa
            </h2>
            <input class="crudText" type="text" name="Krasa" placeholder="Krāsa" value="{{$sludinajums->Krasa}}">
            <br>

            <h2 class="crudH2">
                Virsbūves Veids
            </h2>
            <input class="crudText" type="text" name="VirsbuvesVeids" placeholder="Virsbūves Veids" value="{{$sludinajums->VirsbuvesVeids}}">
            <br>

            <h2 class="crudH2">
                Bojājumi
            </h2>
            <input class="crudText" type="text" name="Bojajumi" placeholder="Bojājumi" value="{{$sludinajums->Bojajumi}}">
            <br>

            <h2 class="crudH2">
                Papildus Informācija
            </h2>
            <input class="crudText" type="text" name="PapildusInfo" placeholder="Papildus Informācija" value="{{$sludinajums->PapildusInfo}}">
            <br>

            <h2 class="crudH2">
                Ražošanas Gads
            </h2>
            <input class="crudText" type="date" name="IzdosanasDatums" placeholder="Izdošanas Datums" value="{{$sludinajums->IzdosanasDatums}}">
            <br>

            <h2 class="crudH2">
                Tehniskā Apskate Derīga Līdz
            </h2>
            <input class="crudText" type="date" name="TehniskaApskate" placeholder="Tehniksā Apskate" value="{{$sludinajums->TehniskaApskate}}">
            <br>

            <h2 class="crudH2">
                Vin Nummurs
            </h2>
            <input class="crudText" type="text" name="VinNummurs" placeholder="Vin Nummurs" value="{{$sludinajums->VinNummurs}}">
            <br>

            <h2 class="crudH2">
                Numurs
            </h2>
            <input class="crudText" type="text" name="NummuraZime" placeholder="Numura Zīme" value="{{$sludinajums->NummuraZime}}">
            <br>
            <br>
            <br>
            <br>

         <div>
            <input class="basicBtn" type="submit" value="Rediģēt Sludinājumu">
        </div>
        <br>

    </div>
</form>

    <div class="outerBtn">
            <form action="{{ route('sludinajums.destroy', $sludinajums->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="basicBtn">
                    Delete
                </button>
            </form>
    </div>

    <br>
    <br>

    <hr>
</x-app-layout>