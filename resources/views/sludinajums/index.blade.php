<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1 class="title">
        Sludinajumi
    </h1>

    <div>
        <table>
            <tr>
                <th>Attels</th>
                <th>Marka</th>
                <th>Modelis</th>
                <th>Gads</th>
                <th>Ātrumkārba</th>
                <th>Cena</th>
                <th>Apskatīt</th>
            </tr>
            @foreach($sludinajumi as $sludinajums)
            <tr>
                <td><img src="/{{$sludinajums->Atteli}}" alt="" class="attels"></td>
                <td>{{$sludinajums->Marka}}</td>
                <td>{{$sludinajums->Modelis}}</td>
                <td>{{ date('F j, Y', strtotime($sludinajums->IzdosanasDatums)) }}</td>
                <td>{{$sludinajums->Atrumkarba}}</td>
                <td>{{$sludinajums->Cena}} EUR</td>
                <td>
                    <a href="{{route('sludinajums.view', ['sludinajums' => $sludinajums, 'users' => $users])}}">Apskatīt</a>
                </td>
            </tr>
            @endforeach
        </table>
</x-app-layout>