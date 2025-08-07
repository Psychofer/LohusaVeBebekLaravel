@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h2 class="mb-0">📋 Lohusa ve Bebek İzlem Formları</h2>
            <div>
                <a href="{{ route('lohusa.create') }}" class="btn btn-light btn-sm me-2">➕ Yeni Form Oluştur</a>
                <a href="{{ url('/') }}" class="btn btn-light btn-sm">🏠 Ana Sayfa</a>
            </div>
        </div>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Arama ve Filtreleme Alanı (Opsiyonel - Backend Gerekir) --}}
            {{--
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Ad Soyad'a göre ara...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Tüm Alanlar</option>
                        <option value="ad_soyad">Ad Soyad</option>
                        <!-- Diğer filtreleme seçenekleri eklenebilir -->
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-outline-secondary w-100">Ara</button>
                </div>
            </div>
            --}}

            <div class="table-responsive">
                <table class="table table-hover table-striped border">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Ad Soyad</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($forms as $form)
                            <tr>
                                <td>{{ $form->id }}</td>
                                <td>{{ $form->ad_soyad }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('lohusa.show', $form->id) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" title="Detay Görüntüle">🔍 Detay</a>

                                        {{-- Düzenleme butonu eklenebilir --}}
                                        {{-- <a href="{{ route('lohusa.edit', $form->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" title="Düzenle">✏️ Düzenle</a> --}}

                                        <form action="{{ route('lohusa.destroy', $form->id) }}" method="POST" onsubmit="return confirm('Silmek istediğinize emin misiniz?')" class="m-0 p-0 d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Formu Sil">🗑️ Sil</button>
                                        </form>
                                        <a href="{{ route('lohusa.pdf', $form->id) }}" class="btn btn-outline-primary btn-sm" target="_blank" data-bs-toggle="tooltip" title="PDF İndir">🖨️ PDF</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Henüz Lohusa ve Bebek İzlem Formu bulunmamaktadır.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination (Opsiyonel - Backend Gerekir) --}}
            {{--
            <div class="d-flex justify-content-center">
                 {{ $forms->links() }}
            </div>
            --}}

        </div>
    </div>
</div>
@endsection

{{-- Tooltip'leri etkinleştirmek için script (layouts/app.blade.php içinde de olabilir) --}}
{{--
@push('scripts')
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
@endpush
--}}

