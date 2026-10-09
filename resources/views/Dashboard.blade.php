@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="dashboard-header">
        <p class="eyebrow">PERSONAL PORTFOLIO</p>
        <h1>Dashboard Statistik 📊</h1>
        <p>
            Ringkasan perjalanan dan proyek teknologi
            yang sedang saya kembangkan.
        </p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">💻</div>
            <p>Total Proyek</p>
            <h2>4+</h2>
            <span>Proyek teknologi</span>
        </div>

        <div class="stat-card">
            <div class="stat-icon">🤖</div>
            <p>Bidang AI</p>
            <h2>3</h2>
            <span>Machine learning & NLP</span>
        </div>

        <div class="stat-card">
            <div class="stat-icon">🌐</div>
            <p>Web Development</p>
            <h2>1</h2>
            <span>Pengembangan web</span>
        </div>

        <div class="stat-card">
            <div class="stat-icon">🚀</div>
            <p>Status</p>
            <h2>Aktif</h2>
            <span>Terus belajar dan berkembang</span>
        </div>
    </div>

    <section class="dashboard-section">
        <h2>Bidang yang Saya Pelajari</h2>

        <div class="skill-list">
            <div class="skill-item">
                <div class="skill-heading">
                    <span>Machine Learning</span>
                    <span>Fokus pembelajaran</span>
                </div>
                <div class="skill-track">
                    <div class="skill-fill ml"></div>
                </div>
            </div>

            <div class="skill-item">
                <div class="skill-heading">
                    <span>Web Development</span>
                    <span>Pengembangan proyek</span>
                </div>
                <div class="skill-track">
                    <div class="skill-fill web"></div>
                </div>
            </div>

            <div class="skill-item">
                <div class="skill-heading">
                    <span>Data Science</span>
                    <span>Eksplorasi data</span>
                </div>
                <div class="skill-track">
                    <div class="skill-fill data"></div>
                </div>
            </div>
        </div>

        <p class="dashboard-note">
            Bidang di atas merupakan fokus pembelajaran,
            bukan persentase kemampuan yang terukur.
        </p>
    </section>

    <div class="dashboard-footer">
        <span>✨</span>
        <div>
            <h3>Small steps, meaningful impact.</h3>
            <p>
                Membangun solusi teknologi yang bermanfaat
                melalui proses belajar dan eksperimen.
            </p>
        </div>
    </div>
</div>

<style>
.dashboard {
    max-width: 1100px;
    margin: auto;
    padding: 42px 20px;
    color: #29223b;
}

.dashboard-header {
    margin-bottom: 32px;
}

.eyebrow {
    color: #7c3aed;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 3px;
}

.dashboard-header h1 {
    font-size: 34px;
    margin: 10px 0;
}

.dashboard-header p {
    line-height: 1.7;
}

.stats-grid {
    display: grid;
    grid-template-columns:
        repeat(auto-fit, minmax(210px, 1fr));
    gap: 18px;
}

.stat-card {
    padding: 24px;
    border: 1px solid #e9e1f5;
    border-radius: 18px;
    background: linear-gradient(145deg, #ffffff, #f8f4ff);
}

.stat-icon {
    font-size: 28px;
}

.stat-card p {
    color: #71677e;
    margin: 16px 0 8px;
}

.stat-card h2 {
    color: #6d28d9;
    font-size: 30px;
    margin: 0 0 8px;
}

.stat-card span {
    color: #82778f;
    font-size: 13px;
}

.dashboard-section {
    margin-top: 36px;
    padding: 26px;
    border: 1px solid #e9e1f5;
    border-radius: 18px;
}

.dashboard-section h2 {
    margin-top: 0;
    margin-bottom: 26px;
}

.skill-list {
    display: grid;
    gap: 24px;
}

.skill-heading {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 10px;
    font-size: 14px;
}

.skill-heading span:last-child {
    color: #7c3aed;
}

.skill-track {
    height: 10px;
    background: #eee7f8;
    border-radius: 20px;
    overflow: hidden;
}

.skill-fill {
    height: 100%;
    border-radius: 20px;
    background: #8b5cf6;
}

.skill-fill.ml {
    width: 85%;
}

.skill-fill.web {
    width: 65%;
}

.skill-fill.data {
    width: 55%;
}

.dashboard-note {
    margin-top: 20px;
    font-size: 12px;
    color: #71677e;
    line-height: 1.7;
}

.dashboard-footer {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-top: 24px;
    padding: 24px;
    background: #f3edff;
    border-radius: 18px;
}

.dashboard-footer > span {
    font-size: 28px;
}

.dashboard-footer h3 {
    margin: 0 0 8px;
}

.dashboard-footer p {
    margin: 0;
    line-height: 1.7;
    color: #71677e;
}

@media (max-width: 600px) {
    .dashboard-header h1 {
        font-size: 27px;
    }

    .dashboard-section {
        padding: 20px;
    }
}
</style>
@endsection
