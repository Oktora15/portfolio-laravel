@extends('layouts.app')

@section('content')
<div class="projects-container">
    <div class="projects-heading">
        <p class="projects-label">MY PORTFOLIO</p>
        <h1>Proyek Saya</h1>
        <p>Beberapa proyek yang saya kembangkan
           dalam perjalanan belajar teknologi.</p>
    </div>

    <div class="project-filters">
        <button class="filter-btn active" data-filter="all">
            Semua
        </button>
        <button class="filter-btn" data-filter="web">
            Web Development
        </button>
        <button class="filter-btn" data-filter="ai">
            AI & Machine Learning
        </button>
    </div>

    <div class="project-grid">

    <!-- PROYEK 1: PORTOFOLIO -->
    <article class="project-card" data-category="web">
        <div class="project-icon">🌐</div>
        <span class="project-category">Web Development</span>
        <h2>Website Portofolio Pribadi</h2>
        <p>
            Website portofolio untuk menampilkan biodata,
            aktivitas, informasi kontak, dan proyek teknologi.
        </p>
        <div class="project-tech">
            <span>Laravel</span>
            <span>PHP</span>
            <span>Blade</span>
        </div>
        <a href="https://github.com/Oktora15/portfolio-laravel"
           target="_blank" rel="noopener noreferrer">
            Lihat GitHub ↗
        </a>
    </article>

    <!-- PROYEK 2: HEART DISEASE MLOPS -->
    <article class="project-card" data-category="ai">
        <div class="project-icon">❤️</div>
        <span class="project-category">Machine Learning & MLOps</span>
        <h2>Heart Disease Prediction</h2>
        <p>
            Proyek prediksi penyakit jantung menggunakan
            machine learning yang dikembangkan dengan API,
            pelacakan eksperimen, dan monitoring model.
        </p>
        <div class="project-tech">
            <span>Python</span>
            <span>FastAPI</span>
            <span>MLflow</span>
            <span>Docker</span>
            <span>Prometheus</span>
        </div>
        <a href="https://github.com/Oktora15/Eksperimen_SML_AnnisaOktoraNurusyifa"
           target="_blank" rel="noopener noreferrer">
            Eksperimen ML ↗
        </a>
        <p>
            <a href="https://github.com/Oktora15/Workflow-CI"
               target="_blank" rel="noopener noreferrer">
                Workflow CI ↗
            </a>
        </p>
    </article>

    <!-- PROYEK 3: ANALISIS SENTIMEN SHOPEE -->
    <article class="project-card" data-category="ai">
        <div class="project-icon">📊</div>
        <span class="project-category">Data Science & NLP</span>
        <h2>Analisis Sentimen Ulasan Shopee</h2>
        <p>
            Klasifikasi ulasan pengguna menjadi sentimen
            positif, netral, dan negatif menggunakan
            pendekatan Naive Bayes.
        </p>
        <div class="project-tech">
            <span>Python</span>
            <span>NLP</span>
            <span>Naive Bayes</span>
            <span>Text Classification</span>
        </div>
        <a href="https://github.com/Oktora15/sentimen-analysis-shopee"
           target="_blank" rel="noopener noreferrer">
            Lihat profil GitHub ↗
        </a>
    </article>

    <!-- PROYEK 4: WORKFLOW CI -->
    <article class="project-card" data-category="ai">
        <div class="project-icon">⚙️</div>
        <span class="project-category">MLOps & Automation</span>
        <h2>Machine Learning CI Workflow</h2>
        <p>
            Implementasi workflow integrasi berkelanjutan
            untuk mendukung proses pengembangan dan
            pengujian proyek machine learning.
        </p>
        <div class="project-tech">
            <span>Git</span>
            <span>GitHub</span>
            <span>CI/CD</span>
            <span>Machine Learning</span>
        </div>
        <a href="https://github.com/Oktora15/Workflow-CI"
           target="_blank" rel="noopener noreferrer">
            Lihat Repository ↗
        </a>

    </article>
    
    <!-- PROYEK 5: Intel Image Classification -->
    <article class="project-card" data-category="ai">
        <div class="project-icon">⚙️</div>
        <span class="project-category">MLOps & Automation</span>
        <h2>Intel Image Classification</h2>
        <p>
            Implementasi workflow integrasi berkelanjutan
            untuk mendukung proses pengembangan dan
            pengujian proyek machine learning.
        </p>
        <div class="project-tech">
            <span>Python</span>
            <span>TensorFlow/Keras</span>
            <span>Deep Learning</span>
            <span>Computer Vision</span>
        </div>
        <a href="https://github.com/Oktora15/intel-image-classification"
           target="_blank" rel="noopener noreferrer">
            Lihat Repository ↗
        </a>
    </article>
</div>

<style>
.projects-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 48px 20px;
}

.projects-heading {
    text-align: center;
    margin-bottom: 32px;
}

.projects-label {
    color: #8b5cf6;
    font-weight: bold;
    letter-spacing: 3px;
    font-size: 12px;
}

.projects-heading h1 {
    font-size: 36px;
    margin: 10px 0;
}

.projects-heading p {
    line-height: 1.7;
}

.project-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 32px;
}

.filter-btn {
    padding: 10px 16px;
    border: 1px solid #ddd;
    border-radius: 24px;
    background: transparent;
    cursor: pointer;
}

.filter-btn.active {
    background: #7c3aed;
    color: white;
    border-color: #7c3aed;
}

.project-grid {
    display: grid;
    grid-template-columns:
        repeat(auto-fit, minmax(260px, 1fr));
    gap: 22px;
}

.project-card {
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    padding: 24px;
    transition: transform 0.2s, box-shadow 0.2s;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 28px rgba(0, 0, 0, 0.08);
}

.project-icon {
    font-size: 32px;
    margin-bottom: 16px;
}

.project-category {
    font-size: 12px;
    color: #7c3aed;
    font-weight: bold;
}

.project-card h2 {
    font-size: 21px;
    margin: 12px 0;
}

.project-card p {
    line-height: 1.7;
    color: #666;
}

.project-tech {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 18px 0;
}

.project-tech span {
    font-size: 12px;
    background: #f3f0ff;
    color: #6d28d9;
    padding: 6px 10px;
    border-radius: 8px;
}

.project-card a {
    color: #7c3aed;
    font-weight: bold;
    text-decoration: none;
}

.project-card a:hover {
    text-decoration: underline;
}

@media (max-width: 600px) {
    .projects-heading h1 {
        font-size: 29px;
    }
}
</style>

<script>
document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', function () {
        const filter = this.dataset.filter;

        document.querySelectorAll('.filter-btn')
            .forEach(btn => btn.classList.remove('active'));

        this.classList.add('active');

        document.querySelectorAll('.project-card')
            .forEach(card => {
                card.style.display =
                    filter === 'all' ||
                    card.dataset.category === filter
                        ? ''
                        : 'none';
            });
    });
});
</script>
@endsection
