        <div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">H. Psikolojik Değerlendirme</div>
            <div class="card-body">

                @php
                $psikolojik_belirtiler = [
                    'Aşırı sağlama periyodları', 'Uykusuzluk', 'Anoreksia', 'Sinirlilik', 'Mutsuzluk',
                    'Yerinde duramama', 'Aile üyelerine ve bebeğe öfke', 'Dikkat azlığı',
                    'Mood değişikliği', 'Sosyal izolasyon', 'Depresyon', 'Kendine güvensizlik',
                    'Aşırı yorulma', 'Sorumluluklarda artma', 'Enfeksiyon-ağrı', 'Bebek hakkında endişe',
                    'Emzirmede güçlük', 'Eş geçimsizliği', 'Aile içi ilişki bozukluğu',
                    'Alkolik eş', 'Evde sakat birey', 'Diğer'
                ];
                @endphp

                @foreach ($psikolojik_belirtiler as $belirti)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="psikolojik_belirtiler[]" value="{{ $belirti }}" class="form-check-input">
                        <label class="form-check-label">{{ $belirti }}</label>
                    </div>
                @endforeach

                <div class="mt-3">
                    <label>Diğer Belirtiler Açıklama:</label>
                    <textarea name="psikolojik_diger_aciklama" class="form-control" rows="2" placeholder="Varsa açıklayınız..."></textarea>
                </div>
            </div>
        </div>