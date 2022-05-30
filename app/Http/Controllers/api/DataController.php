<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Indikator;
use App\Models\IndikatorProduk;
use App\Models\Merk;
use App\Models\KelompokIndikator;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    // public function getCategory(){
    //     $kategori = Kategori::all();
    //     return $kategori;
    // }

    public function getMerk()
    {
        $merk = Merk::all();
        return $merk;
    }

    public function getProduct()
    {
        $produk = Produk::all();
        return $produk;
    }

    public function getProductByMerk($id)
    {
        $produk = Produk::where('merk', $id)->get();
        return $produk;
    }

    public function getProductById($id)
    {
        $produk = Produk::where('id', $id)->get();
        return $produk;
    }

    public function getProductByPromo($promo)
    {
        $produk = Produk::where('promo', 1)->get();
        return $produk;
    }

    public function testData()
    {
        $id = [1, 6, 8, 11];
        $indikator = Indikator::whereIn('id', $id);

        return $indikator;
    }

    public function getKI()
    {
        $data = KelompokIndikator::get();

        $isData = [];
        foreach ($data as $key => $item) {
            $isData[$key]['id'] =  $item->id;
            $isData[$key]['pertanyaan'] =  $item->pertanyaan;
            $isData[$key]['isi'] = $item->indikators;
        }
        return response()->json($isData);
    }

    public function getIndikatorList(Request $request)
    {

        $idIndikator = [];
        foreach ($request->all() as $key =>  $isd) {
            $idIndikator[$key] = $isd['isi'];
        }

        $inData =
            DB::table(DB::raw('indikator_produk as ak'))
            ->join('indikator_produk as bk', 'ak.id_produk', '=', "bk.id_produk")
            ->join('indikator_produk as ck', 'bk.id_produk', '=', "ck.id_produk")
            ->join('indikator_produk as dk', 'ck.id_produk', '=', "dk.id_produk")
            ->where('ak.id_indikator', '=', $idIndikator[0])
            ->where('bk.id_indikator', '=', $idIndikator[1])
            ->where('ck.id_indikator', '=', $idIndikator[2])
            ->where('dk.id_indikator', '=', $idIndikator[3])
            // ->where('bk.id_produk', '=', 'ak.id_produk')
            // ->where('ck.id_produk', '=', 'bk.id_produk')
            // ->where('dk.id_produk', '=', 'ck.id_produk')
            ->get()->groupBy('ak.id_produk')->flatten(1);

        // $output = [];

        // foreach ($inData as $key => $item) {
        //     $output['idProduk'] = $item[$key]->id_produk;
        // }


        return response()->json($inData);
    }



    // public function getCategoryName($id){
    //     $kategori = Kategori::where('id', $id)->get();
    //     return $kategori[0]->nama;
    // }
}
