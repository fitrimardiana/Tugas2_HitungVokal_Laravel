@extends('layouts.app')
@section('title', 'Hasil')
@section('content')
<div>
    <a class="nav-link active" href="/"><- Back to Home</a>
</div>
<div class="container">   
    <h1>Hasil</h1>
    <br>
    @if ($jumlah !==0)
    Terdapat {{ $jumlah }} huruf vokal yaitu @foreach ($hasil as $data) {{ $data }} @endforeach
    @else
    Tidak ada huruf vokal
    @endif
</div>
@endsection