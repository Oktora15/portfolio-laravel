@extends('layouts.app')

@section('title', 'Aktivitas')

@section('content')

<div class="container">

    <div class="card">
        <h1 style="text-align: center;">Aktivitas Saya</h1>

        <p style="text-align: center;">
            Beberapa aktivitas yang saya lakukan selama menjadi mahasiswa
            Teknik Informatika.
        </p>

        <div style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 30px;
        ">

            <div style="
                padding: 25px;
                background: #f5f3ff;
                border-radius: 15px;
                text-align: center;
            ">
                <h2>📚 Perkuliahan</h2>

                <p>
                    Mengikuti kegiatan perkuliahan dan mengerjakan
                    berbagai tugas serta proyek akademik.
                </p>
            </div>


            <div style="
                padding: 25px;
                background: #f5f3ff;
                border-radius: 15px;
                text-align: center;
            ">
                <h2>💻 Teknologi</h2>

                <p>
                    Mempelajari Artificial Intelligence, Machine Learning,
                    Web Development, dan teknologi lainnya.
                </p>
            </div>


            <div style="
                padding: 25px;
                background: #f5f3ff;
                border-radius: 15px;
                text-align: center;
            ">
                <h2>🤝 Organisasi</h2>

                <p>
                    Mengikuti kegiatan organisasi mahasiswa serta
                    berkontribusi dalam berbagai kegiatan kampus.
                </p>
            </div>

        </div>
    </div>

</div>

@endsection
