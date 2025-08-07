<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bebek İzlem Formu</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        th, td {
            border: 1px solid #444;
            padding: 6px;
            text-align: left;
        }
        .section-title {
            background-color: #f0f0f0;
            font-weight: bold;
            padding: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h2>Bebek İzlem Formu</h2>

<div class="section-title">Genel Bilgiler</div>
<table>
    <tr><th>Doğum Tarihi</th><td>{{ $bebekForm->dogum_tarihi }}</td></tr>
    <tr><th>Kaç Haftalık</th><td>{{ $bebekForm->kac_haftalik }}</td></tr>
    <tr><th>Muayene Tarihi</th><td>{{ $bebekForm->muayene_tarihi }}</td></tr>
    <tr><th>İzlem Sayısı</th><td>{{ $bebekForm->izlem_sayisi }}</td></tr>
    <tr><th>Termin Durumu</th><td>{{ $bebekForm->termin_durumu }}</td></tr>
    <tr><th>Cinsiyet</th><td>{{ $bebekForm->cinsiyet }}</td></tr>
    <tr><th>Kaçıncı Çocuk</th><td>{{ $bebekForm->kacinci_cocuk }}</td></tr>
    <tr><th>Kan Grubu</th><td>{{ $bebekForm->kan_grubu }}</td></tr>
</table>

<div class="section-title">Vital Bulgular</div>
<table>
    <tr>
        <th>Ateş</th><td>{{ $bebekForm->ates }}</td>
        <th>Nabız</th><td>{{ $bebekForm->nabiz }}</td>
    </tr>
    <tr>
        <th>Solunum</th><td>{{ $bebekForm->solunum }}</td>
        <th>Kilo</th><td>{{ $bebekForm->kilo }}</td>
    </tr>
    <tr>
        <th>Boy</th><td>{{ $bebekForm->boy }}</td>
        <th>Baş Çevresi</th><td>{{ $bebekForm->bas_cevresi }}</td>
    </tr>
    <tr>
        <th>Göğüs Çevresi</th><td colspan="3">{{ $bebekForm->gogus_cevresi }}</td>
    </tr>
</table>

@php
    $jsonFields = [
        'deri', 'bas', 'gozler', 'burun', 'agiz', 'kulak', 'boyun', 'gogus', 'abdomen', 'kasik',
        'genital', 'solunum_sistemi', 'kvs', 'gis', 'uriner', 'kas_iskelet', 'norolojik'
    ];
@endphp

@foreach ($jsonFields as $field)
    @php
        $items = is_array($bebekForm->$field) ? $bebekForm->$field : json_decode($bebekForm->$field, true);
    @endphp
    @if (!empty($items))
        <div class="section-title">{{ strtoupper(str_replace('_', ' ', $field)) }}</div>
        <table>
            <tr><td>
                @foreach ($items as $item)
                    - {{ $item }}<br>
                @endforeach
            </td></tr>
        </table>
    @endif
@endforeach

</body>
</html>

