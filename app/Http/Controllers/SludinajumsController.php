<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sludinajums;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SludinajumsController extends Controller
{
    public function index(){
        $sludinajumi = Sludinajums::all();
        $users = User::all();
        return view('sludinajums.index', ['sludinajumi' => $sludinajumi, 'users' => $users]);
        }

    public function create(){
        return view('sludinajums.create');
    }

    public function store(Request $request){
        $data = $request->validate([
        'Marka' => 'required',
        'Modelis' => 'required',
        'IzdosanasDatums' => 'required',
        'MotoraTilpums' => 'required|decimal:1,1',
        'Cena' => 'required|decimal:0,2',
        'Bojajumi' => 'required',
        'Krasa' => 'required',
        'PapildusInfo' => 'max:500',
        'Atrumkarba' => 'required',
        'DegvielasTips' => 'required',
        'VirsbuvesVeids' => 'required',
        'TehniskaApskate' => 'required',
        'VinNummurs' => 'required|min:17|max:17',
        'NummuraZime' => 'required|min:7|max:7',
        'Atteli' => 'required|mimes:png,jpg,jpeg,webp'
        ]);

        $data['user_id'] = auth()->id();
        $data['Marka'] = strip_tags($data['Marka']);
        $data['Modelis'] = strip_tags($data['Modelis']);
        $data['IzdosanasDatums'] = strip_tags($data['IzdosanasDatums']);
        $data['MotoraTilpums'] = strip_tags($data['MotoraTilpums']);
        $data['Cena'] = strip_tags($data['Cena']);
        $data['Bojajumi'] = strip_tags($data['Bojajumi']);
        $data['Krasa'] = strip_tags($data['Krasa']);
        $data['PapildusInfo'] = strip_tags($data['PapildusInfo']);
        $data['Atrumkarba'] = strip_tags($data['Atrumkarba']);
        $data['DegvielasTips'] = strip_tags($data['DegvielasTips']);
        $data['VirsbuvesVeids'] = strip_tags($data['VirsbuvesVeids']);
        $data['TehniskaApskate'] = strip_tags($data['TehniskaApskate']);
        $data['VinNummurs'] = strip_tags($data['VinNummurs']);
        $data['NummuraZime'] = strip_tags($data['NummuraZime']);

        if($request->has('Atteli')){

            $file = $request->file('Atteli');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/category/';
            $file->move($path, $filename);
        }

        $data['Atteli'] = $path . $filename;


        Sludinajums::create($data);



        return redirect(route('sludinajums.index'));

    }

    public function edit(Sludinajums $sludinajums){

        if(auth()->user()->id !== $sludinajums->user_id){
            return redirect()->back();  
        }

        return view('sludinajums.edit', ['sludinajums' => $sludinajums]);
    }

    public function update(Sludinajums $sludinajums, Request $request){
        $data = $request->validate([
            'Atteli' => 'required|mimes:png,jpg,jpeg,webp',
            'Marka' => 'required',
            'Modelis' => 'required',
            'IzdosanasDatums' => 'required',
            'MotoraTilpums' => 'required|decimal:1,1',
            'Cena' => 'required|decimal:0,2',
            'Bojajumi' => 'required',
            'Krasa' => 'required',
            'Atrumkarba' => 'required',
            'DegvielasTips' => 'required',
            'VirsbuvesVeids' => 'required',
            'TehniskaApskate' => 'required',
            'VinNummurs' => 'required|min:17|max:17',
            'NummuraZime' => 'required|min:7|max:7'
            ]);

            if($request->has('Atteli')){

                $file = $request->file('Atteli');
                $extension = $file->getClientOriginalExtension();
    
                $filename = time().'.'.$extension;
    
                $path = 'uploads/category/';
                $file->move($path, $filename);
            }
    
            $data['Atteli'] = $path . $filename;

            $sludinajums->update($data);

            return redirect(route('sludinajums.index'));
    }

    public function destroy(Sludinajums $sludinajums) {

        if(auth()->user()->id !== $sludinajums->user_id){
            return redirect('sludinajums.index');  
        }

        $sludinajums->delete();
        return redirect(route('sludinajums.index'));
    }

    public function view(Sludinajums $sludinajums){
        return view('sludinajums.view', ['sludinajums' => $sludinajums]);
    }

}
                                             

        


    

