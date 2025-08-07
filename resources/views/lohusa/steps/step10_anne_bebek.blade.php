        <div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">I. Annelik ve Anne-Bebek İlişkisi</div>
            <div class="card-body">


                <label class="fw-bold text-danger">Emzirme sırasında, ya da emzirme dışında aşağıdaki davranışlar gösteriliyor mu?</label>
                <br>
                <br>
                @php
                $iliskiler = [
                    'Bebeğe dokunma, sevme, okşama', 'Göz iletişiminde bulunma', 'Bebekle konuşma, sesler çıkarma',
                    'Bebeği ile üyelerinden birine benzetme', 'Bebeğine ismiyle kızım-oğlum şeklinde hitap etme', 'Bebeğin bakım aktivitelerini yerine getirme',
                    'Emzirme', 'Gazını çıkarma', 'Bebekle oynama', 'Bebek ağldığında gecikmeden olumlu tepkiler gösterme',
                    'Bebekle ilgilenme', 'Diğer'
                ];
                @endphp
                
                @foreach ($iliskiler as $item)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="anne_bebek_iliskisi[]" value="{{ $item }}">
                        <label class="form-check-label">{{ $item }}</label>
                    </div>
                @endforeach
            </div>
        </div>