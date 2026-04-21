<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book New Service</title>
    <link rel="stylesheet" href="../css/output.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden border border-gray-100">

        <div class="px-6 py-5 flex justify-between items-start border-b border-gray-50">
            <div>
                <h2 class="text-xl font-bold text-slate-900 tracking-tight">Book New Service</h2>
                <p class="text-sm text-slate-500 mt-1">Enter vehicle details below to schedule a repair.</p>
            </div>
            <button class="text-slate-400 hover:text-slate-600 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <form action="#" method="POST">
            <div class="px-6 py-4 space-y-5">

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="nama" placeholder="e.g. John Doe" required
                        class="w-full px-4 py-2.5 rounded-xl text-sm border border-slate-200 focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all placeholder:text-slate-400">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                        Nomor Telepon / Whatsapp <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="whatsapp" placeholder="e.g. John Doe" required
                        class="w-full px-4 py-2.5 rounded-xl text-sm border border-slate-200 focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all placeholder:text-slate-400">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">Jenis Kendaraan</label>
                        <div class="relative">
                            <select name="jenis_kendaraan"
                                class="w-full appearance-none px-4 py-2.5 rounded-xl text-sm border border-slate-200 bg-white focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all cursor-pointer">
                                <option>Car</option>
                                <option>Motorcycle</option>
                                <option>Truck</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            Plat Nomor <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="plat_nomor" placeholder="ABC - 1234" required
                            class="w-full px-4 py-2.5 rounded-xl text-sm border border-slate-200 focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all placeholder:text-slate-400 uppercase">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Merek dan Tipe Kendaraan <span class="text-red-500">*</span></label>
                    <input type="text" name="merek" placeholder="e.g. Toyota Camry 2022"
                        class="w-full px-4 py-2.5 rounded-xl border text-sm border-slate-200 focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Service Details / Complaints</label>
                    <textarea name="keluhan" rows="3" placeholder="Describe the issue (e.g. strange noise when braking)..."
                        class="w-full px-4 py-2.5 rounded-xl border text-sm border-slate-200 focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all resize-none"></textarea>
                </div>
            </div>

            <div class="px-6 py-5 bg-slate-50/80 flex justify-end gap-3 border-t border-gray-100">
                <button type="button" class="text-sm px-4 py-2 rounded-xl border border-slate-200 bg-white font-semibold text-slate-700 hover:bg-slate-100 transition-all active:scale-95">
                    Cancel
                </button>
                <button type="submit" class=" text-sm px-4 py-2 rounded-xl bg-blue-600 font-semibold text-white hover:bg-blue-700 transition-all shadow-lg shadow-blue-200 flex items-center gap-2 active:scale-95">
                    Submit Booking
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </form>
    </div>

</body>

</html>