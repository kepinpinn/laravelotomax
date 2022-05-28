<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;
use App\Models\Indikator;
use App\Models\KelompokIndikator;
use App\Models\Merk;

use File;

class DashboardController extends Controller
{
    public function indexProduk(){
        $produk = Produk::paginate(5);

        return view('admin.produk.index', compact(['produk']));
    }

    public function addProduk(){
        $merk = Merk::all();
        $indikator = Indikator::all();
        return view('admin.produk.tambah', compact(['merk', 'indikator']));
    }

    public function saveProduk(Request $req){
        if($req->file('gambar_produk')){
            $file = $req->file('gambar_produk');
            $filename = $file->getClientOriginalName();
            $path = $file->move(public_path('images'), $filename);
        }

        $produk = Produk::create([
            'nama_produk' => $req->nama_produk,
            'harga_produk' => $req->harga_produk,
            'deskripsi_produk' => $req->deskripsi_produk,
            'merk' => $req->merk,
            'link' => $req->link,
            'gambar_produk' => $filename,
            'promo' => $req->promo 
        ]);

        foreach($req->indikator as $i){
            $produk->indikators()->attach($i);
        }

        $produk->save();

        return redirect()->route('admin.indexProduk');
    }

    public function editProduk($id){
        $merk = Merk::all();
        $produk = Produk::findOrFail($id);
        $indikator = Indikator::all();

        return view('admin.produk.edit', compact(['produk', 'merk', 'indikator']));
    }

    public function updateProduk(Request $req, $id){
        $produk = Produk::findOrFail($id);

        if($req->file('gambar_produk')){
            File::delete('images/'.$produk->gambar_produk);
            $file = $req->file('gambar_produk');
            $filename = $file->getClientOriginalName();
            $path = $file->move(public_path('images'), $filename);
        }else{
            $filename = $produk->gambar_produk;
        }

        $produk->nama_produk = $req->nama_produk;
        $produk->harga_produk = $req->harga_produk;
        $produk->deskripsi_produk = $req->deskripsi_produk;
        $produk->merk = $req->merk;
        $produk->link = $req->link;
        $produk->gambar_produk = $filename;
        $produk->promo = $req->promo;
        
        if($req->indikator == NULL){
            $produk->indikators()->detach();
        }else{
            $produk->indikators()->detach();
            foreach($req->indikator as $indikator){
                $produk->indikators()->attach($indikator);
            }
        }

        $produk->save();

        return redirect()->route('admin.indexProduk');
    }

    public function deleteProduk($id){
        $produk = Produk::findOrFail($id);
        File::delete('images/'.$produk->gambar_produk);
        Produk::destroy($id);

        return redirect()->route('admin.indexProduk');
    }

    public function indexMerk(){
        $merk = Merk::paginate(5);

        return view('admin.merk.index', compact(['merk']));
    }

    public function addMerk(){
        return view('admin.merk.tambah');

    }

    public function saveMerk(Request $req){
        $path = '';
        if($req->file('gambar')){
            $file = $req->file('gambar');
            $filename = $file->getClientOriginalName();
            $path = $file->move(public_path('images'), $filename);
        }else{
            $filename = "";
        }

        $merk = Merk::create([
            'merek' => $req->nama,
            'foto_merek' => $filename
        ]);

        $merk->save();

        return redirect()->route('admin.indexMerk');
    }

    public function editMerk($id){
        $merk = Merk::findOrFail($id);

        return view('admin.merk.edit', compact(['merk']));
    }

    public function updateMerk(Request $req, $id){
        $merk = Merk::findOrFail($id);
        
        if($req->file('gambar')){
            File::delete('images/'.$merk->foto_merek);
            $file = $req->file('gambar');
            $filename = $file->getClientOriginalName();
            $path = $file->move(public_path('images'), $filename);
        }else{
            $filename = "";
        }

        $merk->merek = $req->nama;
        $merk->foto_merek = $filename;
        $merk->save();

        return redirect()->route('admin.indexMerk');
    }

    public function deleteMerk($id){
        $merk = Merk::findOrFail($id);
        File::delete('images/'.$merk->foto_merek);
        Merk::destroy($id);

        return redirect()->route('admin.indexMerk');
    }

    public function indexIndikator(){
        $indikator = Indikator::paginate(5);
        
        return view('admin.indikator.index', compact(['indikator']));
    }

    public function addIndikator(){
        $kelompokindikator = KelompokIndikator::all();
        return view('admin.indikator.tambah', compact(['kelompokindikator']));
    }

    public function saveIndikator(Request $req){
        $indikator = Indikator::create([
            'nama_indikator' => $req->indikator,
            'id_kelompok' => $req->pertanyaan
        ]);
        
        $indikator->save();
        return redirect()->route('admin.indexIndikator');
    }

    public function editIndikator($id){
        $indikator = Indikator::findOrFail($id);
        $kelompokindikator = Kelompokindikator::all();

        return view('admin.indikator.edit', compact(['indikator', 'kelompokindikator']));
    }

    public function updateIndikator(Request $req, $id){
        $indikator = Indikator::findOrFail($id);
        $indikator->nama_indikator = $req->nama_indikator;
        $indikator->id_kelompok = $req->pertanyaan;
        $indikator->save();

        return redirect()->route('admin.indexIndikator');
    }

    public function deleteIndikator($id){
        Indikator::destroy($id);

        return redirect()->route('admin.indexIndikator');
    }

    public function indexKelompokIndikator(){
        $kelompokindikator = KelompokIndikator::paginate(5);

        return view('admin.kelompokindikator.index', compact(['kelompokindikator']));
    }

    public function addKelompokIndikator(){
        $indikator = Indikator::all();
        return view('admin.kelompokindikator.tambah', compact(['indikator']));
    }

    public function saveKelompokIndikator(Request $req){
        
        $pertanyaan = KelompokIndikator::create([
            'pertanyaan' => $req->pertanyaan
        ]);
        if($req->indikator != NULL){
            foreach($req->indikator as $i){
                $indikator = Indikator::findOrFail($i);
                $indikator->id_kelompok = $pertanyaan->id;
                $indikator->save();
            }
        }
        $pertanyaan->save();
        return redirect()->route('admin.indexKelompokIndikator');
    }

    public function editKelompokIndikator($id){
        $kelompokindikator = KelompokIndikator::findOrFail($id);
        $indikator = Indikator::all();

        return view('admin.kelompokindikator.edit', compact(['kelompokindikator', 'indikator']));
    }

    public function updateKelompokIndikator(Request $req, $id){
        $kelompokindikator = KelompokIndikator::findOrFail($id);
        $kelompokindikator->pertanyaan = $req->pertanyaan;
        if($req->indikator != NULL){
            foreach($req->indikator as $i){
                $indikator = Indikator::findOrFail($i);
                $indikator->id_kelompok = $kelompokindikator->id;
                $indikator->save();
            }
        }
        $kelompokindikator->save();

        return redirect()->route('admin.indexKelompokIndikator');
    }

    public function deleteKelompokIndikator($id){
        KelompokIndikator::destroy($id);

        return redirect()->route('admin.indexKelompokIndikator');
    }

    public function indexRules(){
        $produk = Produk::paginate(5);

        return view('admin.rule.index', compact(['produk']));
    }
}
