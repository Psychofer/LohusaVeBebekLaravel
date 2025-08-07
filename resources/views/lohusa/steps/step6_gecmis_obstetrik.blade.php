<div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">E. Geçmiş Obstetrik Öykü</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3"><label>Para</label><input type="number" name="para" class="form-control"></div>
            <div class="col-md-3"><label>Abortus</label><input type="number" name="abortus" class="form-control"></div>
            <div class="col-md-3"><label>Yaşayan</label><input type="number" name="yasayan" class="form-control"></div>
            <div class="col-md-3"><label>Gravida</label><input type="number" name="gravida" class="form-control"></div>
        </div>

        <div class="mt-3">
            <label>Yaşayan çocukların cinsiyeti:</label>
            <textarea name="cocuklarin_cinsiyeti" class="form-control only-letters"></textarea>
        </div>

        <div class="mt-3">
            <label>Sağlık durumları:</label>
            <textarea name="cocuklarin_saglik_durumu" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Doğumlarını yaptırdığı yer, yaptıran kişi, doğum şekli: </label>
            <textarea name="dogum_yeri_kisi_sekli" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Abortuslarını yaptırdığı yer, yaptıran kişi, doğum şekli:</label>
            <textarea name="abortus_yeri_kisi" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label class="fw-bold text-danger">Önceki gebeliklerinizde ve en son gebeliğinizde aşağıdaki problemlerden herhangi biri oldu mu?</label>
            @php
            $gebelik_problemleri = [
                'Hipertansiyon', 'Ödem', 'Anemi', 'Kanama', 'Enfeksiyon', 'Psikolojik problemler', 'Abortus', 'Diğer problemler'
            ];
            $dogum_problemleri = [
                'Sezeryan', 'Forseps', 'Vakum', 'Uzun doğum', 'Hızlı doğum', 'İkiz doğum', 'Aşırı kanama', 'EMR',
                'Uterus inversiyonu', 'Epizyotomi', 'Laserasyon', 'Plasenta retansiyonu', 'Ölü doğum',
                'Problemli bebek', 'Konjenital anomali', 'Sarılık', 'Diğer'
            ];
            $postpartum_problemleri = ['Kanama', 'Enfeksiyon', 'Toksemi', 'Hematom', 'Psikolojik problemler', 'Diğer'];
            @endphp

            <div class="mt-4">
                <label>En Son Gebelik Problemleri:</label>
                @foreach ($gebelik_problemleri as $problem)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="gebelik_problemleri_son[]" value="{{ $problem }}" class="form-check-input">
                        <label class="form-check-label">{{ $problem }}</label>
                    </div>
                @endforeach
            </div>

            <div class="mt-3">
                <label>Önceki Gebelik Problemleri:</label>
                @foreach ($gebelik_problemleri as $problem)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="gebelik_problemleri_onceki[]" value="{{ $problem }}" class="form-check-input">
                        <label class="form-check-label">{{ $problem }}</label>
                    </div>
                @endforeach
            </div>
            

            <div class="mt-3">
                <label class="fw-bold text-danger">Önceki doğumlarınızda ve en son doğumunuzda aşağıdaki problemlerden herhangi biri oldu mu?</label>
                <br>
                <br>
                <label>En Son Doğum Problemleri:</label>
                @foreach ($dogum_problemleri as $problem)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="dogum_problemleri_son[]" value="{{ $problem }}" class="form-check-input">
                        <label class="form-check-label">{{ $problem }}</label>
                    </div>
                @endforeach
            </div>

            <div class="mt-3">
                <label>Önceki Doğum Problemleri:</label>
                @foreach ($dogum_problemleri as $problem)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="dogum_problemleri_onceki[]" value="{{ $problem }}" class="form-check-input">
                        <label class="form-check-label">{{ $problem }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-3">
            
            <label class="fw-bold text-danger">Önceki doğumlarınızda postpartum dönemde aşağıdaki problemlerden herhangi bir oldu mu?</label>
            <br>
            <br>
            <label>Postpartum Dönemde Problemler:</label>
            @foreach ($postpartum_problemleri as $problem)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="postpartum_problemleri[]" value="{{ $problem }}" class="form-check-input">
                    <label class="form-check-label">{{ $problem }}</label>
                </div>
            @endforeach
        </div>
    </div>
</div>