<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <h1>
        Sludinajumi
    </h1>
    <div>
        <table border="1">
            <tr>
                <th>Attels</th>
                <th>Marka</th>
                <th>Modelis</th>
                <th>Gads</th>
                <th>Ātrumkārba</th>
                <th>Apskatīt</th>
                <th>Rediģēt</th>
            </tr>
            @foreach($sludinajumi as $sludinajums)
            <tr>
                <td><img src="/{{$sludinajums->Atteli}}" alt="" class="attels"></td>
                <td>{{$sludinajums->Marka}}</td>
                <td>{{$sludinajums->Modelis}}</td>
                <td>{{ date('F j, Y', strtotime($sludinajums->IzdosanasDatums)) }}</td>
                <td>{{$sludinajums->Atrumkarba}}</td>
                <td>
                    <a href="{{route('sludinajums.view', ['sludinajums' => $sludinajums])}}">Apskatīt</a>
                </td>
                <td>
                    <a href="{{route('sludinajums.edit', ['sludinajums' => $sludinajums])}}">Rediģēt</a>
                </td>
            </tr>
            @endforeach
        </table>
</x-app-layout>