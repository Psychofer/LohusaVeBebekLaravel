<div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">C. Geçmiş Tıbbi Öykü</div>

    <div class="card-body">
        <div class="mb-3">
            <label>Aşağıdaki durumlardan herhangi biri sizde ya da ailenizde oldu mu?</label>
        </div>

        <p><strong>Kendisi İçin</strong></p>
        @php
        $conditions = [
        'Operasyon', 'Cinsel yolla bulaşan hastalık', 'Kalp hastalığı', 'Romatik fever',
        'Hipertansiyon', 'Tüberküloz', 'Astım', 'Sarılık', 'Ülser', 'Diyabet', 'Varikoz venler',
        'Tromboflebit', 'Troid problemleri', 'Depresyon veya gerginlik', 'Cinsel problemler',
        'İdrar yolları enfeksiyonu', 'Diğer problemler'
        ];
        @endphp

        @foreach ($conditions as $index => $item)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="gecmis_tibbi_oyku_kendisi[]" value="{{ $item }}">
            <label class="form-check-label">{{ $item }}</label>
        </div>
        @endforeach

        <p class="mt-3"><strong>Ailesi İçin</strong></p>
        @foreach ($conditions as $index => $item)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="gecmis_tibbi_oyku_ailesi[]" value="{{ $item }}">
            <label class="form-check-label">{{ $item }}</label>
        </div>
        @endforeach

        <div class="mt-3">
            <label>Diğer Problemler Açıklama:</label>
            <textarea name="gecmis_tibbi_oyku_diger_aciklama" class="form-control"></textarea>
        </div>
    </div>
</div>