<div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">Diğer Kısımlar</div>
    <div class="card-body">
        @php
        $kategoriler = [
            'deri' => ['Pembe', 'İşilik', 'Pişik', 'Sarılık', 'Siyanoz', 'Diğer'],
            'bas' => ['Fontanel açıklığı', 'Konak', 'Bit', 'Sefal hematom', 'Diğer'],
            'gozler' => ['Çapak', 'Kızarıklık', 'İltihap', 'Akıntı', 'Şaşılık', 'Ödem', 'Diğer'],
            'burun' => ['Akıntı', 'Tıkanıklık', 'Burun kanadı solunuma katılıyor', 'Diğer'],
            'agiz' => ['Pamukçuk', 'Yarık damak', 'Yarık dudak', 'Diğer'],
            'kulak' => ['Ağrı', 'Akıntı', 'Düşük kulak', 'Diğer'],
            'boyun' => ['Şişlik', 'Tortikolis', 'Diğer'],
            'gogus' => ['Şişlik', 'Süt akması', 'Diğer'],
            'abdomen' => ['Kanama', 'Akıntı', 'Kızarıklık','Isı Artışı','Göbek Gronülomu','Göbek fıtığı', 'Distansiyon', 'Diğer'],
            'kasik' => ['Kasık fıtığı', 'Diğer'],
            'genital' => ['Fimozis', 'İnmemiş testis', 'Hipospadias', 'Epispadias','Anuste açıklık','Vajinal akıntı', 'Diğer'],
            'solunum_sistemi' => ['Solunum sıkıntısı', 'Siyanoz', 'Apne', 'Pnomoni', 'Diğer'],
            'kvs' => ['Taşikardi', 'Bradikardi', 'Siyanoz', 'Diğer'],
            'gis' => ['Gaita yapma sıklığı','Kusma', 'Konstipasyon', 'Diare', 'Dehidratasyon', 'Diğer'],
            'uriner' => ['İdrar yapma sıklığı','Zor idrar', 'İdrar rengi değişik', 'Damla damla idrar', 'Diğer'],
            'kas_iskelet' => ['DKÇ', 'Ekstremite anomalisi', 'Diğer'],
            'norolojik' => ['Konvülsiyon', 'Diğer']
        ];
        @endphp

        @foreach ($kategoriler as $alan => $secenekler)
            <div class="mt-4">
                <h5>{{ strtoupper($alan) }}</h5>
                @foreach ($secenekler as $secenek)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="{{ $alan }}[]" value="{{ $secenek }}" class="form-check-input">
                        <label class="form-check-label">{{ $secenek }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>