<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polije Autohub - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<nav class="navbar navbar-expand-lg border-bottom px-4">
    <div class="container-fluid">
        <span class="navbar-brand fw-bold fs-6">POLIJE AUTOHUB</span>
        <div class="d-flex align-items-center">
            <div class="user-profile d-flex align-items-center me-3">
                <div class="avatar-circle me-2">
                    <i class="bi bi-person text-secondary"></i>
                </div>
                <div class="text-start">
                    <p class="mb-0 small text-muted lh-1">Admin</p>
                    <p class="mb-0 fw-semibold small">Admin Bengkel</p>
                </div>
            </div>
            <i class="bi bi-box-arrow-right fs-5 text-secondary cursor-pointer"></i>
        </div>
    </div>
</nav>

<main class="container-fluid py-4 px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Admin Dashboard</h4>
        <button class="btn btn-dark px-4 py-2 fw-semibold btn-sm shadow-sm">
            <i class="bi bi-plus-lg me-1"></i> Buat Booking
        </button>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="stat-card border card p-3 shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted small mb-1">Menunggu Konfirmasi</p>
                        <h2 class="fw-bold mb-1">0</h2>
                        <p class="text-muted extra-small mb-0">Perlu dikonfirmasi</p>
                    </div>
                    <i class="bi bi-clock-fill text-warning fs-3"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card border card p-3 shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted small mb-1">Dikonfirmasi</p>
                        <h2 class="fw-bold mb-1">0</h2>
                        <p class="text-muted extra-small mb-0">Sudah Dikonfirmasi</p>
                    </div>
                    <i class="bi bi-calendar-check-fill text-primary fs-3"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card border card p-3 shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted small mb-1">Sedang Dikerjakan</p>
                        <h2 class="fw-bold mb-1">0</h2>
                        <p class="text-muted extra-small mb-0">Dalam proses pengerjaan</p>
                    </div>
                    <i class="bi bi-wrench-adjustable text-info fs-3"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card border card p-3 shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted small mb-1">Selesai</p>
                        <h2 class="fw-bold mb-1">0</h2>
                        <p class="text-muted extra-small mb-0">Kendaraan selesai dikerjakan</p>
                    </div>
                    <i class="bi bi-check-circle-fill text-success fs-3"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card border shadow-sm p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold mb-0">Daftar Antrean</h5>
            <select class="form-select form-select-sm w-auto">
                <option selected>Semua Status</option>
            </select>
        </div>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="text-muted">
                    <tr>
                        <th class="fw-normal small">No. Antrean</th>
                        <th class="fw-normal small">Nama</th>
                        <th class="fw-normal small">No. Telepon</th>
                        <th class="fw-normal small">Kendaraan</th>
                        <th class="fw-normal small">Plat Nomor</th>
                        <th class="fw-normal small">Keluhan</th>
                        <th class="fw-normal small">Tanggal</th>
                        <th class="fw-normal small">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="small">
                    <tr>
                        <td>A-007</td>
                        <td>Budi Santoso</td>
                        <td><i class="bi bi-telephone-fill me-1"></i> 081234567890</td>
                        <td><div class="fw-bold">Motor</div><div class="text-muted small">Honda Beat</div></td>
                        <td>B 1234 ABC</td>
                        <td>Oli mesin perlu diganti, rem</td>
                        <td>02 Mar</td>
                        <td>
                            <div class="status-badge status-progress">
                                <i class="bi bi-dash-circle me-1"></i> Diproses <i class="bi bi-chevron-down ms-2"></i>
                            </div>
                        </td>
                        <td><i class="bi bi-three-dots-vertical cursor-pointer"></i></td>
                    </tr>
                    <tr>
                        <td>A-006</td>
                        <td>Budi Santoso</td>
                        <td><i class="bi bi-telephone-fill me-1"></i> 081234567890</td>
                        <td><div class="fw-bold">Motor</div><div class="text-muted small">Yamaha Nmax</div></td>
                        <td>B 5678 XYZ</td>
                        <td>Service berkala 5000 km</td>
                        <td>28 Feb</td>
                        <td>
                            <div class="status-badge status-success">
                                <i class="bi bi-check2-circle me-1"></i> Selesai <i class="bi bi-chevron-down ms-2"></i>
                            </div>
                        </td>
                        <td><i class="bi bi-three-dots-vertical cursor-pointer"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>