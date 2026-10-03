@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<div class="container">

    <div class="card" style="text-align: center;">

        <h1>Hubungi Saya</h1>

        <p>
            Jika ingin menghubungi saya atau melihat karya saya,
            silakan melalui kontak berikut.
        </p>

        <div style="
            max-width: 500px;
            margin: 30px auto;
            text-align: left;
        ">

            <div style="
                padding: 20px;
                background: #f5f3ff;
                border-radius: 15px;
                margin-bottom: 15px;
            ">
                <strong>📧 Email</strong>
                <p style="margin-bottom: 0;">
                    nitoruciane@gmail.com
                </p>
            </div>

            <div style="
                padding: 20px;
                background: #f5f3ff;
                border-radius: 15px;
                margin-bottom: 15px;
            ">
                <strong>💻 GitHub</strong>
                <p style="margin-bottom: 0;">
                    <a href="https://github.com/Oktora15" target="_blank">
                        Lihat GitHub Saya
                    </a>
                </p>
            </div>

            <div style="
                padding: 20px;
                background: #f5f3ff;
                border-radius: 15px;
            ">
                <strong>📱 Instagram</strong>
                <p style="margin-bottom: 0;">
                    <a href="https://instagram.com/Oktoradeinggrid" target="_blank">
                        Lihat Instagram Saya
                    </a>
                </p>
            </div>

        </div>

    </div>

</div>

@endsection
