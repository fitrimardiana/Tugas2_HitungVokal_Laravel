@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        <h1>Hitung Huruf Vokal</h1>
        <hr>
        <h5>Program ini akan mencetak huruf vokal yang terdapat pada kata atau kalimat yang diinputkan di bawah ini</h5>
        <br>
        <form action="/hasil" method="POST">
            @csrf
            <div>
                <textarea name="kata" id="kata" class="form-control" placeholder="Masukkan kata atau kalimat"></textarea> 
                <br>
                <input type="submit" class="btn btn-primary" value="Hasil">
            </div>
        </form>
    </div>
@endsection