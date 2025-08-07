@extends('layouts.app')

@section('content')

<div class="container py-4">
    <h3 class="mb-4">👩‍🍼 Lohusa İzlem Formu (Adım Adım)</h3>

    <!-- İlerleme Çubuğu -->
    <div class="progress mb-4">
        <div id="formProgress" class="progress-bar bg-danger" role="progressbar" style="width: 0%;">
            %0 tamamlandı
        </div>
    </div>

    <form id="lohusaForm" action="{{ route('lohusa.store') }}" method="POST">
        @csrf

        <!-- Adımlar -->
        <div id="step-1" class="step">@include('lohusa.steps.step1_tanitici')</div>
        <div id="step-2" class="step d-none">@include('lohusa.steps.step2_dogum')</div>
        <div id="step-3" class="step d-none">@include('lohusa.steps.step3_lohusa')</div>
        <div id="step-4" class="step d-none">@include('lohusa.steps.step4_aile')</div>
        <div id="step-5" class="step d-none">@include('lohusa.steps.step5_menstruel')</div>
        <div id="step-6" class="step d-none">@include('lohusa.steps.step6_gecmis_obstetrik')</div>
        <div id="step-7" class="step d-none">@include('lohusa.steps.step7_postpartum_donem_obstretik')</div>
        <div id="step-8" class="step d-none">@include('lohusa.steps.step8_fiziksel_muayene')</div>
        <div id="step-9" class="step d-none">@include('lohusa.steps.step9_psikolojik_degerlendirme')</div>
        <div id="step-10" class="step d-none">@include('lohusa.steps.step10_anne_bebek')</div>
        <div id="step-11" class="step d-none">@include('lohusa.steps.step11_emzirmenin_degerlendirilmesi')</div>
        <div id="step-12" class="step d-none">@include('lohusa.steps.step12_egitim_istekleri')</div>
        <div id="step-13" class="step d-none">@include('lohusa.steps.step13_ebenin_degerlendirmesi')</div>
        <div id="step-14" class="step d-none">@include('lohusa.steps.step14_bebek_bilgileri')</div>
        <div id="step-15" class="step d-none">@include('lohusa.steps.step15_vital_bulgular')</div>
        <div id="step-16" class="step d-none">@include('lohusa.steps.step16_diger_bilgiler')</div>

        <!-- Butonlar -->
        <div class="mt-4 d-flex justify-content-between">
            <button type="button" class="btn btn-secondary" onclick="prevStep()">← Geri</button>
            <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextStep()">İleri →</button>
        </div>

        <div class="mt-3 text-end">
            <button type="submit" class="btn btn-success d-none" id="submitBtn">✅ Kaydet</button>
        </div>
    </form>
</div>

<style>
    .form-check-inline { margin-right: 15px; margin-bottom: 10px; }
    .form-check-group { display: flex; flex-wrap: wrap; gap: 10px; }
    .form-check.bg-checked { background-color: rgba(25, 135, 84, 0.15); border-radius: 0.375rem; }
    .progress-bar { transition: width 0.4s ease, background-color 0.4s ease; }
    .form-section { background-color: #ffffff; transition: none !important; }
    .bg-checked { background-color: #d1e7dd !important; border-radius: 0.375rem; }
</style>

<script>
    let currentStep = 1;
    const totalSteps = 16;

    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('lohusaForm');
        const progressBar = document.getElementById('formProgress');
        const input = document.getElementById("ad_soyad");
        const errorMsg = document.getElementById("ad_soyad_error");
        const patterns = {
            "only-letters": /^[\p{L}\s]*$/u,
            "only-numbers": /^[0-9]*$/,
            "no-special": /^[\p{L}\d\s]*$/u
        };
        Object.keys(patterns).forEach(cls => {
            document.querySelectorAll(`.${cls}`).forEach(input => {
                input.addEventListener("input", function () {
                    const value = input.value;
                    const regex = patterns[cls];
                    if (!regex.test(value)) {
                        input.classList.add("is-invalid");
                        if (!input.nextElementSibling || !input.nextElementSibling.classList.contains('invalid-feedback')) {
                            const warning = document.createElement('div');
                            warning.classList.add('invalid-feedback');
                            warning.textContent = cls === 'only-letters' ? "Sadece harf ve boşluk girilmelidir."
                                : cls === 'only-numbers' ? "Sadece rakam girilmelidir." : "Özel karakter kullanılamaz.";
                            input.parentNode.appendChild(warning);
                        }
                        input.nextElementSibling?.classList.remove("d-none");
                    } else {
                        input.classList.remove("is-invalid");
                        input.nextElementSibling?.classList.add("d-none");
                    }
                });
            });
        });
        if (input) {
            input.addEventListener("input", function () {
                const regex = /^[\p{L}\s]*$/u;
                if (!regex.test(this.value)) {
                    input.classList.add("is-invalid");
                    errorMsg.classList.remove("d-none");
                } else {
                    input.classList.remove("is-invalid");
                    errorMsg.classList.add("d-none");
                }
            });
        }

        form.querySelectorAll('.form-check-input').forEach(input => {
            input.addEventListener('change', function () {
                const parent = this.closest('.form-check');
                if (parent) {
                    parent.classList.toggle('bg-checked', this.checked);
                }
            });
        });

        form.addEventListener('input', calculateProgress);
        form.addEventListener('change', calculateProgress);

        setTimeout(() => calculateProgress(), 100);
        showStep(currentStep);
    });

    function calculateProgress() {
        const form = document.getElementById('lohusaForm');
        const progressBar = document.getElementById('formProgress');
        const inputs = Array.from(form.querySelectorAll('input, select, textarea')).filter(el => el.type !== 'hidden');
        let filled = 0;
        const checkboxGroupMap = {};

        inputs.forEach(el => {
            if (el.type === 'checkbox') {
                const name = el.name.replace(/\[\]$/, '');
                checkboxGroupMap[name] = checkboxGroupMap[name] || [];
                checkboxGroupMap[name].push(el);
            } else if (el.value.trim() !== '') {
                filled++;
            }
        });

        Object.values(checkboxGroupMap).forEach(group => {
            if (group.some(chk => chk.checked)) filled++;
        });

        const normalFields = inputs.filter(el => el.type !== 'checkbox').length;
        const total = normalFields + Object.keys(checkboxGroupMap).length;
        const percent = total === 0 ? 0 : Math.round((filled / total) * 100);

        progressBar.style.width = percent + '%';
        progressBar.innerText = `%${percent} tamamlandı`;

        progressBar.classList.remove('bg-success', 'bg-warning', 'bg-danger');
        progressBar.classList.add(
            percent < 50 ? 'bg-danger' :
            percent < 80 ? 'bg-warning' : 'bg-success'
        );
    }

    function showStep(step) {
        document.querySelectorAll('.step').forEach(el => el.classList.add('d-none'));
        const current = document.getElementById(`step-${step}`);
        if (current) current.classList.remove('d-none');

        const submitBtn = document.getElementById('submitBtn');
        const prevBtn = document.querySelector('button[onclick="prevStep()"]');
        const nextBtn = document.querySelector('button[onclick="nextStep()"]');

        // Gönder butonu sadece son adımda görünsün
        if (submitBtn) {
            submitBtn.classList.toggle('d-none', step !== totalSteps);
        }

        // geri butonu sadece 1. adımdan farklıysa gösterilsin
        if (prevBtn) {
            prevBtn.classList.toggle('d-none', step === 1);
        }

        // İleri butonu sadece son adımdan farklıysa gösterilsin
        if (nextBtn) {
            nextBtn.classList.toggle('d-none', step === totalSteps);
        }
    }


    function nextStep() {
        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }


</script>
@endsection








