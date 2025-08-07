@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">🍼 Bebek İzlem Formu(Evde)</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('bebek.store') }}">
        @csrf

        {{-- Temel Bilgiler --}}
        <div class="card shadow mb-4">
            <div class="card-header bg-primary text-white">👶 Temel Bilgiler</div>
            <div class="card-body row g-3">
                <div class="col-md-3">
                    <label>Doğum Tarihi</label>
                    <input type="date" name="dogum_tarihi" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Kaç Haftalık</label>
                    <input type="text" name="kac_haftalik" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Muayene Tarihi</label>
                    <input type="date" name="muayene_tarihi" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>İzlem Sayısı</label>
                    <input type="number" name="izlem_sayisi" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Termin Durumu</label>
                    <select name="termin_durumu" class="form-control">
                        <option>Term</option>
                        <option>Prematür</option>
                        <option>Postmatür</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Cinsiyet</label>
                    <select name="cinsiyet" class="form-control">
                        <option>Erkek</option>
                        <option>Kız</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Kaçıncı Çocuk</label>
                    <input type="number" name="kacinci_cocuk" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Kan Grubu</label>
                    <select name="kan_grubu" class="form-control">
                        <option value="">Seçiniz</option>
                        <option value="A Rh+">A Rh+</option>
                        <option value="A Rh-">A Rh-</option>
                        <option value="B Rh+">B Rh+</option>
                        <option value="B Rh-">B Rh-</option>
                        <option value="AB Rh+">AB Rh+</option>
                        <option value="AB Rh-">AB Rh-</option>
                        <option value="0 Rh+">0 Rh+</option>
                        <option value="0 Rh-">0 Rh-</option>
                    </select>
                </div>
                
            </div>
        </div>

        {{-- Vital Bulgular --}}
        <div class="card shadow mb-4">
            <div class="card-header bg-success text-white">💓 Vital Bulgular</div>
            <div class="card-body row g-3">
                <div class="col-md-2"><label>Ateş (°C)</label><input type="number" step="0.1" name="ates" class="form-control"></div>
                <div class="col-md-2"><label>Nabız</label><input type="number" name="nabiz" class="form-control"></div>
                <div class="col-md-2"><label>Solunum</label><input type="number" name="solunum" class="form-control"></div>
                <div class="col-md-2"><label>Kilo (kg)</label><input type="number" step="0.01" name="kilo" class="form-control"></div>
                <div class="col-md-2"><label>Boy (cm)</label><input type="number" step="0.01" name="boy" class="form-control"></div>
                <div class="col-md-2"><label>Baş Çevresi (cm)</label><input type="number" step="0.01" name="bas_cevresi" class="form-control"></div>
                <div class="col-md-2"><label>Göğüs Çevresi (cm)</label><input type="number" step="0.01" name="gogus_cevresi" class="form-control"></div>
            </div>
        </div>

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

            $secenekler = [
                'deri' => ['Pembe,gergin,pürüzsüz', 'İşilik','Pişik', 'Sarılık', 'Siyanoz', 'Diğer'],
                'bas' => ['Fontaneller de açıklık', 'Konak', 'Bit', 'Sefal hematom', 'Diğer'],
                'gozler' => ['Çapaklanma', 'Kızarıklık', 'İltihaplanma','Akıntı', 'Şaşılık','Ödem','Sulanma', 'Diğer'],
                'burun' => ['Akıntı', 'Tıkanıklık', 'Burun kanallarının solunuma katılması', 'Diğer'],
                'agiz' => ['Pamukçuk', 'Yarık damak', 'Yarık dudak', 'Diğer'],
                'kulak' => ['Ağrı','Akıntı', 'Düşük kulak', 'Diğer'],
                'boyun' => ['Şişlik', 'Tortikolis', 'Diğer'],
                'gogus' => ['Şişlik', 'Süt akması', 'Diğer'],
                'abdomen' => ['Kanama', 'Akıntı','Kızarıklık','Isı artışı','Göbek granülomu', 'Distansiyon', 'Göbek fıtığı', 'Diğer'],
                'kasik' => ['Kasık fıtığı', 'Diğer'],
                'genital' => ['Fimozis', 'İnmemiş testis', 'Hipospadias', 'Epispadias','Anuste açıklık','Vajinal akıntı', 'Diğer'],
                'solunum_sistemi' => ['Solunum sıkıntısı', 'Siyanoz', 'Apne', 'Pnomoni', 'Diğer'],
                'kvs' => ['Taşikardi', 'Bradikardi', 'Siyanoz', 'Diğer'],
                'gis' => ['Gaita yapma sıklığı','Kusma', 'Konstipasyon', 'Diare', 'Dehidratasyon', 'Diğer'],
                'uriner' => ['İdrar yapma sıklığı','İdrar yaparken zorluk,sınıtı,ağlama', 'İdrar renginde değişiklik','İdrarın damla damla yapılması', 'Diğer'],
                'kas_iskelet' => ['DKÇ', 'Ekstremite anomalisi', 'Diğer'],
                'norolojik' => ['Konvülsiyon', 'Diğer']
            ];
        @endphp

        @foreach ($kategoriler as $alan => $baslik)
            <div class="card shadow mb-4">
                <div class="card-header bg-secondary text-white">{{ $baslik }}</div>
                <div class="card-body">
                    @foreach ($secenekler[$alan] as $opt)
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="{{ $alan }}[]" value="{{ $opt }}" class="form-check-input">
                            <label class="form-check-label">{{ $opt }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-success btn-lg w-100">✅ Kaydet</button>
    </form>
</div>
@endsection
