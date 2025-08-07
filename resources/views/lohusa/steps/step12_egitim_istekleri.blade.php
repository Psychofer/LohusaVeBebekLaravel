        <div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">J. Eğitim İstekleri</div>
            <div class="card-body">

                @php
                $egitim_konulari = [
                    'Lohusalıkta fiziksel ve psikolojik değişiklikler', 'Kişisel hijyen', 'Göğüs bakımı',
                    'Sağma teknikleri', 'Beslenme', 'Aile planlaması', 'Egzersizler', 'Perine bakımı',
                    'Cinsel yaşam', 'Emzirme', 'Annelik becerileri', 'Anne-bebek ilişkisi',
                    'Bebek banyosu', 'Göbek bakımı', 'Pişik', 'Büyüme-gelişim', 'Aşılar',
                    'Biberonla besleme', 'Ek besinler', 'Gaz çıkarma', 'Diğer'
                ];
                @endphp
                <label class="fw-bold text-danger">Aşağıdaki konulardan hangileri hakkında eğitim almak istersiniz?</label>
                <br>
                @foreach ($egitim_konulari as $konu)

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="egitim_istekleri[]" value="{{ $konu }}">
                        <label class="form-check-label">{{ $konu }}</label>
                    </div>
                @endforeach
            </div>
        </div>