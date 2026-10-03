@extends('layouts.app')

@section('title', 'Data Diri')

@section('content')

<div class="container">
    <div class="card" style="text-align: center;">

        <h1>Data Diri</h1>

        <img src="/images/foto.jpeg"
             alt="Foto Annisa"
             style="
                width: 180px;
                height: 180px;
                object-fit: cover;
                border-radius: 50%;
                margin: 20px 0;
             ">

        <h2>Annisa Oktora Nurusyifa</h2>

        <p>
            Saya adalah mahasiswa Teknik Informatika yang memiliki
            ketertarikan pada teknologi, khususnya Artificial Intelligence,
            Machine Learning, dan Web Development.
        </p>

        <div style="
            max-width: 500px;
            margin: 30px auto;
            text-align: left;
            line-height: 1.8;
        ">

            <p><strong>Program Studi:</strong> Teknik Informatika</p>

            <p><strong>Universitas:</strong> UNSIQ</p>

            <p><strong>Semester:</strong> 5</p>

            <p><strong>Minat:</strong> Artificial Intelligence & Web Development</p>

        </div>

    </div>
</div>

@endsection
