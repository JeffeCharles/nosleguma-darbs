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
        Izveidot Sludinajumu
    </h1>
    <hr>

    <form method="post" action="{{route('sludinajums.store')}}" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="error">
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                    <br>
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
                <input type="file" name="Atteli"/>
            </div>
            
            <h2 class="crudH2">
                Auto Marka un Modelis
            </h2>
            <input class="crudDouble" type="text" name="Marka" placeholder="Marka">
            <input class="crudDouble" type="text" name="Modelis" placeholder="Modelis">
            <br>

            <h2 class="crudH2">
                Cena
            </h2>
            <input class="crudText" type="decimal" name="Cena" placeholder="Cena">
            <br>

            <h2 class="crudH2">
                Ātruma Kārba
            </h2>
            <select placeholder="Ātrumkārba" name="Atrumkarba" class="dropdown">
                <option disabled selected>Izvēlies Ātrumkārbu</option>
                <option value="Manuāls">Manuāls</option>
                <option value="Automāts">Automāts</option>
            </select>
            <br>

            <h2 class="crudH2">
                Motora Tilpums
            </h2>
            <input class="crudText" type="decimal" name="MotoraTilpums" placeholder="Motora Tilpums">
            <br>

            <h2 class="crudH2">
                Degviela
            </h2>
            <select placeholder="Degviela" name="DegvielasTips" class="dropdown">
                <option disabled selected>Izvēlies Degvielas Tipu</option>
                <option value="Benzīns">Benzīns</option>
                <option value="Dīzelis">Dīzelis</option>
                <option value="Elektrība">Elektrība</option>
                <option value="Hibrids(benzins)">Hibīds(benzīns)</option>
                <option value="Hibrids(dizelis)">Hibīds(dīzelis)</option>

            </select>

            <br>

            <h2 class="crudH2">
                Krāsa
            </h2>
            <input class="crudText" type="text" name="Krasa" placeholder="Krāsa">
            <br>

            <h2 class="crudH2">
                Virsbūves Veids
            </h2>

            <select placeholder="Virsbūves Veids" name="VirsbuvesVeids" class="dropdown">
                <option disabled selected>Izvēlies Virsbūves Veidu</option>
                <option value="Sedans">Sedans</option>
                <option value="Universāls">Universāls</option>
                <option value="Kupeja">Kupeja</option>
                <option value="Limozīns">Limozīns</option>
                <option value="Hečbeks">Hečbeks</option>
                <option value="Minivens">Minivens</option>
                <option value="Hārdtops">Hārdtops</option>
                <option value="Liftbeks">Liftbeks</option>
                <option value="Kabriolets">Kabriolets</option>
                <option value="Targa">Targa</option>
                <option value="Roadsters">Roadsters</option>
                <option value="Lando">Lando</option>
                <option value="Featons">Featons</option>
                <option value="Spaiders">Spaiders</option>
                <option value="Brogams">Brogams</option>
                <option value="Furgons">Furgons</option>
                <option value="Pikaps">Pikaps</option>
                <option value="SUV">SUV</option>
            </select>


            <h2 class="crudH2">
                Bojājumi
            </h2>
            <input class="crudText" type="text" name="Bojajumi" placeholder="Bojājumi">
            <br>

            <h2 class="crudH2">
                Papildus Informācija
            </h2>
            <input class="crudText" type="text" name="PapildusInfo" placeholder="Papildus Informācija">
            <br>

            <h2 class="crudH2">
                Nobraukums
            </h2>
            <input class="crudText" type="number" name="nobraukums" placeholder="Nobraukums">
            <br>

            <h2 class="crudH2">
                Ražošanas Gads
            </h2>
            <input class="crudText" type="date" name="IzdosanasDatums" placeholder="Izdošanas Datums">
            <br>

            <h2 class="crudH2">
                Tehniskā Apskate Derīga Līdz
            </h2>
            <input class="crudText" type="date" name="TehniskaApskate" placeholder="Tehniksā Apskate">
            <br>

            <h2 class="crudH2">
                Vin Nummurs
            </h2>
            <input class="crudText" type="text" name="VinNummurs" placeholder="Vin Nummurs">
            <br>

            <h2 class="crudH2">
                Numurs
            </h2>
            <input class="crudText" type="text" name="NummuraZime" placeholder="Numura Zīme">
            <br>
            <br>
            <br>

         <div>
            <input class="crudSubmit" type="submit" value="Publicēt Sludinājumu">
        </div>

        <br>

    </form>

    
</x-app-layout>