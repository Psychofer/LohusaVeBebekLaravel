<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BebekForm;
use Barryvdh\DomPDF\Facade\Pdf;

class BebekFormController extends Controller
{
    public function index()
    {
        $forms = BebekForm::orderBy('created_at', 'desc')->get();
        return view('bebek.index', compact('forms'));
    }

    public function create()
    {
        return view('bebek.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'dogum_tarihi' => 'nullable|date',
            'kac_haftalik' => 'nullable|string',
            'muayene_tarihi' => 'nullable|date',
            'izlem_sayisi' => 'nullable|integer',
            'termin_durumu' => 'nullable|string',
            'cinsiyet' => 'nullable|string',
            'kacinci_cocuk' => 'nullable|integer',
            'kan_grubu' => 'nullable|string',
            'ates' => 'nullable|numeric',
            'nabiz' => 'nullable|integer',
            'solunum' => 'nullable|integer',
            'kilo' => 'nullable|numeric',
            'boy' => 'nullable|numeric',
            'bas_cevresi' => 'nullable|numeric',
            'gogus_cevresi' => 'nullable|numeric',
        ]);

        // Alanların tamamını birleştir
        $data = array_merge($validated, [
            
            'deri' => $request->input('deri', []),
            'bas' => $request->input('bas', []),
            'gozler' => $request->input('gozler', []),
            'burun' => $request->input('burun', []),
            'agiz' => $request->input('agiz', []),
            'kulak' => $request->input('kulak', []),
            'boyun' => $request->input('boyun', []),
            'gogus' => $request->input('gogus', []),
            'abdomen' => $request->input('abdomen', []),
            'kasik' => $request->input('kasik', []),
            'genital' => $request->input('genital', []),
            'solunum_sistemi' => $request->input('solunum_sistemi', []),
            'kvs' => $request->input('kvs', []),
            'gis' => $request->input('gis', []),
            'uriner' => $request->input('uriner', []),
            'kas_iskelet' => $request->input('kas_iskelet', []),
            'norolojik' => $request->input('norolojik', []),
        ]);

        BebekForm::create($data);

        return redirect()->route('bebek.index')->with('success', 'Bebek formu kaydedildi.');
    }

    public function show(BebekForm $bebekForm)
    {
        return view('bebek.show', compact('bebekForm'));
    }

    public function exportPdf($id)
    {
        $bebekForm = BebekForm::findOrFail($id);

        $pdf = Pdf::loadView('bebek.pdf', ['bebekForm' => $bebekForm])->setPaper('a4', 'portrait');

        return $pdf->download('bebek-izlem-formu.pdf');
    }

}
