<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\Layanan;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('frontend.index', [
            'pengaturan' => Schema::hasTable('tb_pengaturan') ? Pengaturan::query()->first() : null,
            'layanans' => Schema::hasTable('tb_layanan') ? Layanan::active()->limit(6)->get() : collect(),
            'dokters' => Schema::hasTable('tb_dokter')
                ? Dokter::query()
                    ->where('is_active', true)
                    ->latest()
                    ->limit(4)
                    ->get()
                : collect(),
            'artikels' => Schema::hasTable('tb_artikel')
                ? Artikel::published()
                    ->latest('tanggal_publish')
                    ->limit(3)
                    ->get()
                : collect(),
        ]);
    }

    public function showArtikel($slug): View
    {
        $artikel = Artikel::published()->where('slug', $slug)->firstOrFail();
        $pengaturan = Pengaturan::query()->first();
        
        return view('frontend.artikel-detail', compact('artikel', 'pengaturan'));
    }

    public function allArtikel(): View
    {
        $artikels = Artikel::published()->latest('tanggal_publish')->paginate(6);
        $pengaturan = Pengaturan::query()->first();
        
        return view('frontend.artikel-index', compact('artikels', 'pengaturan'));
    }

    public function showLayanan($id): View
    {
        $layanan = Layanan::findOrFail($id);
        $pengaturan = Pengaturan::query()->first();
        
        return view('frontend.layanan-detail', compact('layanan', 'pengaturan'));
    }

    public function allLayanan(): View
    {
        $layanans = Layanan::active()->paginate(6);
        $pengaturan = Pengaturan::query()->first();
        
        return view('frontend.layanan-index', compact('layanans', 'pengaturan'));
    }

    public function showDokter($id): View
    {
        $dokter = Dokter::where('is_active', true)->findOrFail($id);
        $pengaturan = Pengaturan::query()->first();
        
        return view('frontend.dokter-detail', compact('dokter', 'pengaturan'));
    }

    public function allDokter(): View
    {
        $dokters = Dokter::where('is_active', true)->latest()->paginate(6);
        $pengaturan = Pengaturan::query()->first();
        
        return view('frontend.dokter-index', compact('dokters', 'pengaturan'));
    }

    public function kontak(): View
    {
        $pengaturan = Pengaturan::query()->first();
        return view('frontend.kontak', compact('pengaturan'));
    }
}
