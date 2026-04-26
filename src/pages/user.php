<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
  <link rel="stylesheet" href="../css/output.css">
  <title>Polije Autohub</title>

</head>

<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Navbar -->
  <div class="flex items-center justify-between px-6 py-4 bg-white shadow-xs">
    <h1 class="text-lg font-semibold">Polije Autohub</h1>

    <div class="flex items-center gap-4">
      <span class="text-md">Name</span>
    </div>
  </div>

  <!-- Content -->
  <div class="py-6 px-10 space-y-6">

    <!-- Header -->
    <div class="flex justify-between gap-4">
      <div>
        <h2 class="text-2xl font-bold">Dashboard</h2>
        <p class="text-gray-500 text-sm">Selamat datang, Rizki</p>
      </div>
      <div>
        <a href="./form.php">
          <button class="flex justify-between items-center gap-2 bg-blue-500 rounded-lg px-4 py-2 text-white hover:bg-blue-600 transition text-sm">
            <img src="../assets/plus.svg" alt="" width=20>
            Booking
          </button>
        </a>
      </div>
    </div>

    <!-- Booking Aktif -->
    <div class="bg-white rounded-xl py-6 px-20 shadow-sm">
      <h3 class="text-lg font-semibold mb-4">Booking Aktif</h3>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Kiri -->
        <div>
          <p class="text-gray-500 text-sm">Nomor Antrean</p>
          <h1 class="text-4xl font-bold text-blue-600">A-007</h1>

          <div class="mt-4">
            <p class="text-gray-500 text-sm">Status Pengerjaan</p>
            <div class="mt-2">
              <span class="py-1 px-2 text-sm bg-blue-500 text-white rounded-full">Diproses</span>
            </div>
          </div>
        </div>

        <!-- Kanan -->
        <div class="space-y-3">
          <div>
            <p class="text-gray-500 text-sm">Kendaraan</p>
            <p class="font-medium">Motor - Honda Beat</p>
            <p class="text-gray-500 text-sm">B 1234 ABC</p>
          </div>

          <div>
            <p class="text-gray-500 text-sm">Keluhan</p>
            <p>Oli mesin perlu diganti, rem depan bunyi</p>
          </div>

          <div>
            <p class="text-gray-500 text-sm">Tanggal Booking</p>
            <p>2/3/2026</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Riwayat Booking -->
    <div class="bg-white rounded-xl p-6 h-48 flex items-center justify-center shadow-sm">
      <div class="text-center text-gray-400">
        <h3 class="text-lg font-semibold mb-2 text-gray-800">Riwayat Booking</h3>
        <p>Belum ada booking aktif</p>
      </div>
    </div>

  </div>

</body>

</html>