@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Bebek İzlem Formları</h2>

    <a href="{{ route('bebek.create') }}" class="btn btn-primary mb-3">➕ Yeni Form Oluştur</a>
    <a href="{{ url('/') }}" class="btn btn-secondary mb-3">🏠 Ana Sayfa</a>


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Doğum Tarihi</th>
                <th>Cinsiyet</th>
                <th>Kaçıncı Çocuk</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
                <tr>
                    <td>{{ $form->id }}</td>
                    <td>{{ $form->dogum_tarihi }}</td>
                    <td>{{ $form->cinsiyet }}</td>
                    <td>{{ $form->kacinci_cocuk }}</td>
                    <td>
                        <a href="{{ route('bebek.show', $form->id) }}" class="btn btn-info btn-sm">Görüntüle</a>
                        <a href="{{ route('bebek.pdf', $form->id) }}" class="btn btn-outline-primary btn-sm" target="_blank">
                            🖨️ PDF Olarak İndir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

