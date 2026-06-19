<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\Layanan;
use App\Models\Pengaturan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::updateOrCreate([
            'email' => 'test@example.com',
        ], [
            'name' => 'Admin Klinik',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        User::updateOrCreate([
            'email' => 'staff@example.com',
        ], [
            'name' => 'Staff Klinik',
            'role' => 'staff',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        Pengaturan::updateOrCreate([
            'id' => 1,
        ], [
            'nama_klinik' => 'Klinik Medika Keluarga',
            'alamat' => 'Jl. Sehat Bersama No. 12, Jakarta',
            'telepon' => '021-12345678',
            'email' => 'info@klinikmedikakeluarga.test',
            'deskripsi_singkat' => 'Klinik keluarga dengan layanan kesehatan umum, konsultasi dokter, dan perawatan preventif.',
            'jam_operasional' => 'Senin - Sabtu, 08.00 - 20.00',
            'whatsapp' => '6281234567890',
            'facebook' => 'https://facebook.com/klinikmedikakeluarga',
            'instagram' => 'https://instagram.com/klinikmedikakeluarga',
            'maps_embed' => null,
        ]);

        $layanans = [
            [
                'nama_layanan' => 'Konsultasi Dokter Umum',
                'deskripsi' => 'Pemeriksaan kesehatan umum, konsultasi keluhan ringan, dan rekomendasi perawatan lanjutan.',
                'urutan' => 1,
            ],
            [
                'nama_layanan' => 'Pemeriksaan Kesehatan',
                'deskripsi' => 'Pemeriksaan tekanan darah, gula darah, kolesterol, dan kondisi kesehatan dasar.',
                'urutan' => 2,
            ],
            [
                'nama_layanan' => 'Vaksinasi',
                'deskripsi' => 'Layanan vaksinasi anak dan dewasa sesuai rekomendasi tenaga medis.',
                'urutan' => 3,
            ],
            [
                'nama_layanan' => 'Perawatan Luka',
                'deskripsi' => 'Pembersihan luka, penggantian perban, dan pemantauan proses penyembuhan.',
                'urutan' => 4,
            ],
        ];

        foreach ($layanans as $layanan) {
            Layanan::updateOrCreate([
                'nama_layanan' => $layanan['nama_layanan'],
            ], [
                ...$layanan,
                'icon' => null,
                'gambar' => null,
                'is_active' => true,
            ]);
        }

        $dokters = [
            [
                'nama' => 'dr. Andi Pratama',
                'spesialis' => 'Dokter Umum',
                'jadwal' => 'Senin, Rabu, Jumat - 08.00-14.00',
                'no_telp' => '081234567801',
                'email' => 'andi@klinikmedikakeluarga.test',
                'bio' => 'Berpengalaman menangani konsultasi kesehatan keluarga dan pemeriksaan kesehatan umum.',
            ],
            [
                'nama' => 'dr. Siti Rahma',
                'spesialis' => 'Dokter Umum',
                'jadwal' => 'Selasa, Kamis, Sabtu - 10.00-16.00',
                'no_telp' => '081234567802',
                'email' => 'siti@klinikmedikakeluarga.test',
                'bio' => 'Fokus pada edukasi kesehatan preventif, vaksinasi, dan perawatan pasien anak serta dewasa.',
            ],
            [
                'nama' => 'dr. Bima Santoso',
                'spesialis' => 'Dokter Gigi',
                'jadwal' => 'Senin - Jumat - 16.00-20.00',
                'no_telp' => '081234567803',
                'email' => 'bima@klinikmedikakeluarga.test',
                'bio' => 'Menangani pemeriksaan gigi dasar, edukasi kebersihan mulut, dan tindakan perawatan ringan.',
            ],
        ];

        foreach ($dokters as $dokter) {
            Dokter::updateOrCreate([
                'email' => $dokter['email'],
            ], [
                ...$dokter,
                'foto' => null,
                'is_active' => true,
            ]);
        }

        $artikels = [
            [
                'judul' => 'Pentingnya Pemeriksaan Kesehatan Rutin',
                'isi' => '<p>Pemeriksaan kesehatan rutin membantu mendeteksi risiko penyakit lebih awal. Dengan pemantauan berkala, dokter dapat memberi saran perawatan dan perubahan gaya hidup yang lebih tepat.</p>',
                'tanggal_publish' => now()->subDays(7)->toDateString(),
            ],
            [
                'judul' => 'Tips Menjaga Daya Tahan Tubuh',
                'isi' => '<p>Daya tahan tubuh dapat dijaga dengan tidur cukup, makan bergizi, olahraga teratur, minum air yang cukup, dan mengelola stres dengan baik.</p>',
                'tanggal_publish' => now()->subDays(3)->toDateString(),
            ],
            [
                'judul' => 'Kapan Harus Berkonsultasi ke Dokter?',
                'isi' => '<p>Segera berkonsultasi jika keluhan tidak membaik, disertai demam tinggi, nyeri berat, sesak napas, atau gejala yang mengganggu aktivitas harian.</p>',
                'tanggal_publish' => now()->toDateString(),
            ],
        ];

        foreach ($artikels as $artikel) {
            Artikel::updateOrCreate([
                'slug' => str($artikel['judul'])->slug()->toString(),
            ], [
                ...$artikel,
                'user_id' => $admin->id,
                'gambar' => null,
                'is_published' => true,
            ]);
        }
    }
}
