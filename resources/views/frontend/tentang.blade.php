@php
$clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
$clinicDesc = $pengaturan?->deskripsi_singkat ?? 'Layanan kesehatan keluarga yang nyaman, terjangkau, dan ditangani oleh tenaga medis profesional.';
@endphp

<x-layouts.frontend :title="'Tentang Kami - ' . $clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main class="py-16 bg-slate-50">
        <x-frontend.container>
            <!-- Header Section -->
            <x-frontend.section-heading eyebrow="Tentang Kami" title="Mengenal Lebih Dekat {{ $clinicName }}" description="{{ $clinicDesc }}" />

            <!-- Visi & Misi Section -->
            <div class="mt-16 grid gap-12 lg:grid-cols-2">
                <!-- Visi -->
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:shadow-md hover:border-blue-300 lg:p-10">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-700">
                        <!-- Icon Vision -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold tracking-tight text-slate-950">Visi Kami</h3>
                    <p class="mt-4 text-lg leading-8 text-slate-600">
                        "Menjadi klinik kesehatan keluarga pilihan utama yang memberikan layanan medis profesional, berkualitas tinggi, aman, dan berorientasi pada kepuasan serta kesejahteraan pasien secara holistik."
                    </p>
                </div>

                <!-- Misi -->
                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition-all duration-300 hover:shadow-md hover:border-blue-300 lg:p-10">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-700">
                        <!-- Icon Mission -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold tracking-tight text-slate-950">Misi Kami</h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex items-start gap-4">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-blue-700">1</span>
                            <p class="text-base text-slate-600">Menyediakan pelayanan kesehatan dasar yang bermutu tinggi, aman, dan ramah yang dapat dijangkau oleh semua lapisan masyarakat.</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-blue-700">2</span>
                            <p class="text-base text-slate-600">Menyelenggarakan pelayanan medis yang ditangani secara profesional oleh tenaga medis yang bersertifikat dan berdedikasi tinggi.</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-blue-700">3</span>
                            <p class="text-base text-slate-600">Mengutamakan komunikasi empati dan pendekatan kekeluargaan dalam mendampingi pemulihan kesehatan pasien.</p>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-blue-700">4</span>
                            <p class="text-base text-slate-600">Terus mengedukasi masyarakat luas mengenai pentingnya pencegahan penyakit sejak dini dan pola hidup bersih & sehat.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Nilai-Nilai Utama Section -->
            <div class="mt-20">
                <div class="text-center">
                    <h3 class="text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">Nilai-Nilai Utama Kami</h3>
                    <p class="mx-auto mt-4 max-w-2xl text-base text-slate-600">
                        Kami menjunjung tinggi prinsip-prinsip ini dalam setiap pelayanan yang kami berikan kepada Anda dan keluarga.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Nilai 1: Professionalism -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:border-blue-300">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.57 50.57 0 0 0-2.658-.813A5.905 5.905 0 0 1 8 3.443m4 2.689a5.905 5.905 0 0 0-4-2.689m4 2.689a5.905 5.905 0 0 1 4-2.689M12 6.132V3.443M21.14 9.334a50.57 50.57 0 0 1-2.658.813M21.14 9.334a5.905 5.905 0 0 0-5.14-5.891" />
                            </svg>
                        </div>
                        <h4 class="mt-4 text-lg font-bold text-slate-950">Profesional</h4>
                        <p class="mt-2 text-sm text-slate-600">Melayani dengan standar medis terbaik dan keahlian tinggi dari tim dokter bersertifikat.</p>
                    </div>

                    <!-- Nilai 2: Care -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:border-blue-300">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </div>
                        <h4 class="mt-4 text-lg font-bold text-slate-950">Peduli & Empati</h4>
                        <p class="mt-2 text-sm text-slate-600">Mendengar dengan tulus dan memberikan sentuhan kekeluargaan dalam setiap pengobatan.</p>
                    </div>

                    <!-- Nilai 3: Integrity -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:border-blue-300">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-50 text-amber-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </div>
                        <h4 class="mt-4 text-lg font-bold text-slate-950">Integritas</h4>
                        <p class="mt-2 text-sm text-slate-600">Mengedepankan keterbukaan, kejujuran, dan standar etika medis yang tinggi tanpa kompromi.</p>
                    </div>

                    <!-- Nilai 4: Cleanliness / Hygiene -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:border-blue-300">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-teal-50 text-teal-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25 1.5 1.5.75-.75V8.758l2.25 2.25m-9 0 1.5 1.5.75-.75V8.758l2.25 2.25M3 12h18M3 15h18M3 18h18" />
                            </svg>
                        </div>
                        <h4 class="mt-4 text-lg font-bold text-slate-950">Higienis & Nyaman</h4>
                        <p class="mt-2 text-sm text-slate-600">Menjamin kebersihan dan kesterilan fasilitas medis demi kesehatan dan keselamatan pasien.</p>
                    </div>
                </div>
            </div>
        </x-frontend.container>
    </main>

    <footer class="border-t border-slate-200 bg-slate-950 py-10 text-white">
        <x-frontend.container>
            <p class="text-center text-sm text-slate-400">
                &copy; {{ date('Y') }} {{ $clinicName }}. Seluruh hak cipta dilindungi.
            </p>
        </x-frontend.container>
    </footer>
</x-layouts.frontend>
