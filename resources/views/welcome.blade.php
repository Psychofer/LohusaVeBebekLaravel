@extends('layouts.app')

@section('content')
<style>
    .form-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .form-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .btn-glow {
        transition: box-shadow 0.3s ease;
    }
    .btn-glow:hover {
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }
    .page-header {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: white;
        padding: 40px 20px;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container py-5">
    <div class="page-header text-center mb-5">
        <h1 class="display-4">📋 Atatürk Üniversitesi<br> Sağlık Bilimleri Fakültesi<br> Ebelik Bölümü </h1>
        <p class="lead">Aşağıdan Lohusa ve Bebek İzlem Formlarını doldurmak için seçim yapabilirsiniz.</p>
    </div>

    <div class="row justify-content-center g-4">
        <div class="col-md-5">
            <div class="card form-card shadow text-center border-primary">
                <div class="card-header bg-primary text-white">👩‍🍼 Lohusa İzlem Formu</div>
                <div class="card-body">
                    <p class="card-text">Lohusa kadınlara yönelik izlem formunu doldurmak için tıklayın.</p>
                    <a href="{{ route('lohusa.create') }}" class="btn btn-outline-primary btn-glow">Formu Aç</a>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card form-card shadow text-center border-success">
                <div class="card-header bg-success text-white">🧒 Bebek İzlem Formu</div>
                <div class="card-body">
                    <p class="card-text">Yenidoğan bebek için yapılan izlem formunu doldurmak için tıklayın.</p>
                    <a href="{{ route('bebek.create') }}" class="btn btn-outline-success btn-glow">Formu Aç</a>
                </div>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header bg-dark text-white">📌 Son Kayıtlar</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($sonLohusaKayitlar as $kayit)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $kayit->ad_soyad }} - {{ $kayit->created_at->format('d.m.Y H:i') }}</span>
                            <a href="{{ route('lohusa.pdf', $kayit->id) }}" class="btn btn-sm btn-outline-secondary">
                                📄 PDF İndir
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background: linear-gradient(to bottom right, #f0f4ff, #e6f7ff);
        transition: background 0.5s ease-in-out;
    }

</style>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.querySelector('.page-header');
        header.style.opacity = 0;
        header.style.transform = 'translateY(-20px)';

        setTimeout(() => {
            header.style.transition = 'all 0.8s ease';
            header.style.opacity = 1;
            header.style.transform = 'translateY(0)';
        }, 100);
    });
</script>
@endsection


