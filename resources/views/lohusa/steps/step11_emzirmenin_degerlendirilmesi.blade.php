        <div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">İ. Emzirmenin Değerlendirilmesi</div>
            <div class="card-body">

                @php
                $emzirme_bulgular = [
                    'Emzirmenin sonrası yumuşak memeler', 'İleri uzamış dik meme uçları', 'Sağlıklı görünen deri', 'Emzirirken anne gevşek rahat pozisyonda',
                    'Bebeğin vücudu anneye ve bebeğe yakın','Bebeğin başı ve vücudu düz aynı hizada','Bebeğin ağzı genişçe açık', 'Dudaklar dışa dönük', 'Yanaklar yuvarlak',
                    'Ağız üzerinde daha fazla areola', 'Yavaş ve derin emme ve arada dinlenme', 'Göğüs ucunda ağrı ve acı yok'
                ];
                @endphp

                @foreach ($emzirme_bulgular as $bulgu)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="emzirme_bulgular[]" value="{{ $bulgu }}">
                        <label class="form-check-label">{{ $bulgu }}</label>
                    </div>
                @endforeach

                <div class="mt-3">
                    <label>Emzirme süresi (dakika):</label>
                    <input type="number" name="emzirme_suresi" class="form-control">
                </div>

                @php
                $sut_bulgular = [
                    'Bebek yeterli süt alıyor mu?', 'Günde en az 8 kez emzirme', 'Bebeğin gaitası sarı',
                    'Bebek günde 6-8 kez idrar yapıyor mu (hazır bez 5-6)', 'Bebek günde 2-5 kez guitasını yapıyor mu', 'Bir göğüsten 4 dk az, yarım saatten fazla emiyor mu?'
                ];
                @endphp

                <div class="mt-3">
                    <label class="fw-bold text-danger">Bebekte süt yeterliliği göstergeleri:</label>
                    <br>
                    @foreach ($sut_bulgular as $item)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="sut_yeterliligi[]" value="{{ $item }}">
                            <label class="form-check-label">{{ $item }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>