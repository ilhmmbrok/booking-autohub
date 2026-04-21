<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard - Bengkel Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="bg-white border-b border-gray-200 px-8 py-4 flex justify-between items-center sticky top-0 z-10">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white">
                <i class="fas fa-tools text-sm"></i>
            </div>
            <span class="font-bold text-xl tracking-tight">Bengkel<span class="text-blue-600">AutoHub</span></span>
        </div>
        <div class="flex items-center gap-4">
            <div class="text-right mr-2">
                <p class="text-sm font-semibold leading-none">Manager Bengkel</p>
                <p class="text-xs text-gray-500">Administrator</p>
            </div>
            <img src="https://ui-avatars.com/api/?name=Manager+Bengkel&background=0D8ABC&color=fff" class="w-10 h-10 rounded-full border border-gray-200" alt="Profile">
            <button class="ml-2 text-gray-400 hover:text-red-500 transition-colors">
                <i class="fas fa-sign-out-alt text-lg"></i>
            </button>
        </div>
    </nav>

    <main class="p-8 max-w-7xl mx-auto">
        <header class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Manager Dashboard</h1>
            <p class="text-gray-500">Selamat datang kembali, pantau performa bengkel Anda hari ini.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-50 text-blue-600 rounded-xl"><i class="fas fa-calendar-check fa-lg"></i></div>
                    <span class="text-xs font-medium text-green-500 bg-green-50 px-2 py-1 rounded-full">+12%</span>
                </div>
                <h3 class="text-gray-500 text-sm font-medium">Total Booking</h3>
                <p class="text-3xl font-bold mt-1" id="total-booking">43</p>
                <p class="text-xs text-gray-400 mt-2 italic">Total semua booking masuk</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-orange-50 text-orange-600 rounded-xl"><i class="fas fa-clock fa-lg"></i></div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium">Booking Hari Ini</h3>
                <p class="text-3xl font-bold mt-1" id="booking-today">7</p>
                <p class="text-xs text-gray-400 mt-2 italic">Data real-time hari ini</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-purple-50 text-purple-600 rounded-xl"><i class="fas fa-motorcycle fa-lg"></i></div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium">Kategori Motor</h3>
                <p class="text-3xl font-bold mt-1" id="total-motor">20</p>
                <p class="text-xs text-gray-400 mt-2 italic">Total unit motor masuk</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-emerald-50 text-emerald-600 rounded-xl"><i class="fas fa-car fa-lg"></i></div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium">Kategori Mobil</h3>
                <p class="text-3xl font-bold mt-1" id="total-mobil">23</p>
                <p class="text-xs text-gray-400 mt-2 italic">Total unit mobil masuk</p>
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-lg font-bold">Riwayat Booking</h2>
                    <p class="text-sm text-gray-500">Tren pendaftaran servis 30 hari terakhir</p>
                </div>
                <select id="filterBulan" class="bg-gray-50 border border-gray-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 outline-none">
                    <option value="30">30 Hari Terakhir</option>
                    <option value="7">7 Hari Terakhir</option>
                </select>
            </div>
            
            <div class="relative h-[350px]">
                <canvas id="bookingChart"></canvas>
            </div>
        </div>
    </main>

    <script>

        const ctx = document.getElementById('bookingChart').getContext('2d');
        
        // Gradien warna untuk grafik agar terlihat mewah
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(59, 130, 246, 0.4)');
        gradient.addColorStop(1, 'rgba(59, 130, 246, 0)');

        let bookingChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['6 Feb', '11 Feb', '16 Feb', '21 Feb', '26 Feb', '2 Mar', '7 Mar'], // Placeholder
                datasets: [{
                    label: 'Jumlah Booking',
                    data: [0, 0, 0, 0, 0.2, 0.1, 1], // Data dummy awal
                    borderColor: '#3b82f6',
                    borderWidth: 3,
                    fill: true,
                    backgroundColor: gradient,
                    tension: 0.4, // Membuat garis melengkung halus
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#3b82f6',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { borderDash: [5, 5], color: '#e5e7eb' },
                        ticks: { stepSize: 0.25 }
                    },
                    x: {
                        grid: { display: false }
                    }
                }
            }
        });

        async function updateDashboardData() {
            try {
                const data = {
                    total: 43,
                    today: 7,
                    motor: 20,
                    mobil: 23,
                    chartLabels: ['1 Apr', '5 Apr', '10 Apr', '15 Apr', '20 Apr'],
                    chartValues: [5, 12, 8, 15, 20]
                };

                // Update Angka
                document.getElementById('total-booking').innerText = data.total;
                document.getElementById('booking-today').innerText = data.today;
                document.getElementById('total-motor').innerText = data.motor;
                document.getElementById('total-mobil').innerText = data.mobil;

                // Update Grafik
                bookingChart.data.labels = data.chartLabels;
                bookingChart.data.datasets[0].data = data.chartValues;
                bookingChart.update();

            } catch (error) {
                console.error("Gagal mengambil data backend:", error);
            }
        }

        // Panggil fungsi saat halaman dimuat
        window.onload = updateDashboardData;
    </script>
</body>
</html>