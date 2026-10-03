@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<div class="container">

    <div class="card" style="
        text-align: center;
        padding: 60px 30px;
    ">

        <p style="
            color: #6c4ab6;
            font-weight: bold;
            font-size: 18px;
        ">
            WELCOME TO MY PORTFOLIO
        </p>

        <h1 style="
            font-size: 38px;
            margin: 15px 0;
        ">
            Halo, Saya Annisa Oktora Nurusyifa 👋
        </h1>

        <h2 style="
            font-weight: normal;
            color: #555;
        ">
            Mahasiswa Teknik Informatika
        </h2>

        <p style="
            max-width: 650px;
            margin: 25px auto;
            line-height: 1.8;
        ">
            Selamat datang di portfolio saya.
            Saya memiliki ketertarikan pada Artificial Intelligence,
            Machine Learning, dan Web Development serta terus
            mengembangkan kemampuan di bidang teknologi.
        </p>

        <div style="margin-top: 30px;">

            <a href="/biodata" style="
                display: inline-block;
                padding: 13px 25px;
                background: #6c4ab6;
                color: white;
                text-decoration: none;
                border-radius: 10px;
                font-weight: bold;
                margin: 5px;
            ">
                Lihat Profil
            </a>

            <a href="/kontak" style="
                display: inline-block;
                padding: 13px 25px;
                background: white;
                color: #6c4ab6;
                text-decoration: none;
                border: 2px solid #6c4ab6;
                border-radius: 10px;
                font-weight: bold;
                margin: 5px;
            ">
                Hubungi Saya
            </a>

        </div>

    </div>

</div>

@endsection
