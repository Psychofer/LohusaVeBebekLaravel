@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Bebek İzlem Form Detayı</h3>

    <table class="table table-bordered mt-3">
        <tr><th>Doğum Tarihi</th><td>{{ $bebekForm->dogum_tarihi }}</td></tr>
        <tr><th>Kaç Haftalık</th><td>{{ $bebekForm->kac_haftalik }}</td></tr>
        <tr><th>Muayene Tarihi</th><td>{{ $bebekForm->muayene_tarihi }}</td></tr>
        <tr><th>İzlem Sayısı</th><td>{{ $bebekForm->izlem_sayisi }}</td></tr>
        <tr><th>Termin Durumu</th><td>{{ $bebekForm->termin_durumu }}</td></tr>
        <tr><th>Cinsiyet</th><td>{{ $bebekForm->cinsiyet }}</td></tr>
        <tr><th>Kaçıncı Çocuk</th><td>{{ $bebekForm->kacinci_cocuk }}</td></tr>
        <tr><th>Kan Grubu</th><td>{{ $bebekForm->kan_grubu }}</td></tr>

        {{-- Vital Bulgular --}}
        <tr><th colspan="2" class="table-primary text-center">💓 Vital Bulgular</th></tr>
        <tr><th>Ateş (°C)</th><td>{{ $bebekForm->ates }}</td></tr>
        <tr><th>Nabız</th><td>{{ $bebekForm->nabiz }}</td></tr>
        <tr><th>Solunum</th><td>{{ $bebekForm->solunum }}</td></tr>
        <tr><th>Kilo (kg)</th><td>{{ $bebekForm->kilo }}</td></tr>
        <tr><th>Boy (cm)</th><td>{{ $bebekForm->boy }}</td></tr>
        <tr><th>Baş Çevresi (cm)</th><td>{{ $bebekForm->bas_cevresi }}</td></tr>
        <tr><th>Göğüs Çevresi (cm)</th><td>{{ $bebekForm->gogus_cevresi }}</td></tr>

        {{-- Gözlem Alanları --}}
        @php
            $kategoriler = [
                'deri' => '🩸 Deri',
                'bas' => '🧠 Baş',
                'gozler' => '👁️ Gözler',
                'burun' => '👃 Burun',
                'agiz' => '👄 Ağız',
                'kulak' => '👂 Kulak',
                'boyun' => '🧍‍♂️ Boyun',
                'gogus' => '🫁 Göğüs',
                'abdomen' => '🩻 Abdomen',
                'kasik' => '🦵 Kasık',
                'genital' => '🍑 Genital',
                'solunum_sistemi' => '🌬️ Solunum Sistemi',
                'kvs' => '❤️ Kardiyovasküler Sistem',
                'gis' => '🍽️ Gastrointestinal Sistem',
                'uriner' => '💧 Üriner Sistem',
                'kas_iskelet' => '🦴 Kas-İskelet Sistemi',
                'norolojik' => '🧠 Nörolojik Sistem'
            ];
        @endphp

        @foreach ($kategoriler as $alan => $baslik)
            <tr>
                <th>{{ $baslik }}</th>
                <td>{{ implode(', ', $bebekForm->$alan ?? []) }}</td>
            </tr>
        @endforeach

    </table>

    <a href="{{ route('bebek.index') }}" class="btn btn-secondary">Geri</a>
</div>
@endsection

