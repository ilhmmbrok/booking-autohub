<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - POLIJE AUTOHUB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8f9fa; font-family: 'Inter', sans-serif; }
        .navbar { background-color: #ffffff; border-bottom: 1px solid #dee2e6; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .stat-card { transition: transform 0.2s; }
        .stat-card:hover { transform: translateY(-5px); }
        .table thead th { background-color: #f8f9fa; border-bottom: 2px solid #dee2e6; }
        .status-badge { padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top mb-4">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold text-primary" href="#">POLIJE AUTOHUB</a>
        <div class="d-flex align-items-center">
            <div class="me-3 text-end d-none d-sm-block">
                <small class="text-muted d-block">Admin</small>
                <span class="fw-semibold">Admin Bengkel</span>
            </div>
            <img src="https://ui-avatars.com/api/?name=Admin+Bengkel&background=0D6EFD&color=fff" class="rounded-circle me-3" width="40" alt="profile">
            <a href="#" class="btn btn-outline-danger btn-sm"><i class="bi bi-box-arrow-right"></i></a>
        </div>
    </div>
</nav>

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Admin Dashboard</h2>
        <button class="btn btn-primary shadow-sm"><i class="bi bi-plus-lg me-2"></i>Buat Booking</button>
    </div>

    <div class="row g-3 mb-4">
        <?php
        $stats = [
            ['Menunggu Konfirmasi', '0', 'bi-clock-history', 'text-warning', 'Perlu dikonfirmasi'],
            ['Dikonfirmasi', '0', 'bi-calendar-check', 'text-info', 'Sudah dikonfirmasi'],
            ['Sedang Dikerjakan', '0', 'bi-tools', 'text-primary', 'Dalam proses pengerjaan'],
            ['Selesai', '0', 'bi-check-circle', 'text-success', 'Kendaraan selesai']
        ];
        foreach ($stats as $s): ?>
        <div class="col-md-3">
            <div class="card stat-card p-3">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <small class="text-muted"><?= $s[0] ?></small>
                        <h3 class="fw-bold my-1"><?= $s[1] ?></h3>
                        <small class="text-muted" style="font-size: 0.75rem;"><?= $s[4] ?></small>
                    </div>
                    <i class="bi <?= $s[2] ?> <?= $s[3] ?> fs-3"></i>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="row g-4 mb-4">
    
    <div class="col-lg-8">
        <div class="card p-4 h-100">
            <h5 class="fw-bold mb-4">Grafik Booking Kendaraan</h5>
            <div style="position: relative; height: 300px; width: 100%;">
                <canvas id="bookingChart"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card p-4 h-100 text-center d-flex flex-column justify-content-center shadow-sm">
            <div class="mb-3">
                <i class="bi bi-graph-up-arrow text-primary" style="font-size: 3rem;"></i>
            </div>
            <h5 class="fw-bold">Performa Bengkel</h5>
            <p class="text-muted small">Total booking bulan ini meningkat 12% dibanding bulan lalu.</p>
            <hr class="my-3">
            <div class="text-start">
                <small class="text-muted">Paling Banyak Diservis:</small>
                <div class="d-flex justify-content-between align-items-center mt-1">
                    <p class="fw-bold mb-0">Honda Beat</p>
                    <span class="badge bg-primary-subtle text-primary">45%</span>
                </div>
                <div class="progress mt-2" style="height: 6px;">
                    <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

</div>

        <div class="col-12 mb-5">
            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold mb-0">Daftar Antrean</h5>
                    <select class="form-select w-auto">
                        <option>Semua Status</option>
                        <option>Menunggu Konfirmasi</option>
                        <option>Dalam Pengerjaan</option>
                        <option>Selesai</option>
                    </select>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>No. Antrean</th>
                                <th>Nama</th>
                                <th>Kendaraan</th>
                                <th>Plat Nomor</th>
                                <th>Keluhan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fw-bold">A-007</span></td>
                                <td>Budi Santoso<br><small class="text-muted">081234567890</small></td>
                                <td>Motor<br><small class="text-muted">Honda Beat</small></td>
                                <td>B 1234 ABC</td>
                                <td>Oli mesin perlu diganti, rem</td>
                                <td>02 Mar</td>
                                <td><span class="status-badge bg-info-subtle text-info"><i class="bi bi-arrow-repeat me-1"></i> Diproses</span></td>
                                <td><button class="btn btn-light btn-sm"><i class="bi bi-three-dots-vertical"></i></button></td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('bookingChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
            datasets: [{
                label: 'Jumlah Booking',
                data: [5, 8, 12, 7, 15, 20, 10],
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, grid: { display: false } }, x: { grid: { display: false } } }
        }
    });
</script>
</body>
</html>