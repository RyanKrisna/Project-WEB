<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AritmatikaController extends Controller
{
    //Tugas 1 deret Fibonacci
    public function tugas1()
    {
        $angka_0=2;
        $angka_1=5;
        $jumlah=10;
        $deret=[$angka_0,$angka_1];
        // dd($deret);
        for ($i=1; $i <= 10; $i++) { 
           $deret[$i+1]=$deret[$i-1]+$deret[$i];
        }
        return view('tugas1',compact('deret'));
    }

    //Tugas 2 derert aritmatika
    public function tugas2()
    {
        $angka1=3;
        $angka2=7;
        $jumlah=10;
        $deret=[$angka1,$angka2];
        $selisih=$angka2-$angka1;
        for ($i=1; $i <= 9; $i++) { 
           $deret[$i+1]=$deret[$i]+$selisih;
        }
        // dd($deret);
        return view('tugas2', compact('selisih','deret'));
    }
}
