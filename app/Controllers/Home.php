<?php

namespace App\Controllers;
use App\Models\Aktivitas;
use App\Models\Produk;
use App\Models\Artikel;
use App\Models\Profil;
use App\Models\Slider;

class Home extends BaseController
{
    public function beranda()
    {
        $slider = new Slider();
        $profil = new Profil();
        $produk = new Produk();
        $aktivitas = new Aktivitas();

        $data['sliders'] = $slider->findAll();
        $data['profils'] = $profil->findAll();
        $data['produks'] = $produk->findAll(4);
        $data['aktivitass'] = $aktivitas->findAll(3);
        return view('beranda', $data);
    }

    public function home()
    {
        $slider = new Slider();
        $profil = new Profil();
        $produk = new Produk();
        $aktivitas = new Aktivitas();

        $data['sliders'] = $slider->findAll();
        $data['profils'] = $profil->findAll();
        $data['produks'] = $produk->findAll(4);
        $data['aktivitass'] = $aktivitas->findAll(3);
        return view('beranda-en', $data);
    }

    public function tentang()
    {
        $profil = new Profil();

        $data['profils'] = $profil->findAll();
        return view('tentang', $data);
    }

    public function about()
    {
        $profil = new Profil();

        $data['profils'] = $profil->findAll();
        return view('tentang-en', $data);
    }

    public function artikel()
    {
        $artikel = new Artikel();
        $profil = new Profil();

        // Ambil semua produk dari database
        $items = $artikel->findAll();

        // Loop melalui data produk yang diambil
        foreach ($items as &$item) {
            $item['slug'] = url_title($item['judul_artikel'], '-', true);
        }

        // Simpan data yang sudah dimodifikasi kembali ke variabel $data
        $data['artikels'] = $items;
        $data['profils'] = $profil->findAll();

        return view('artikel', $data);
    }

    public function article()
    {
        $artikel = new Artikel();
        $profil = new Profil();

        // Ambil semua produk dari database
        $items = $artikel->findAll();

        // Loop melalui data produk yang diambil
        foreach ($items as &$item) {
            $item['slug'] = url_title($item['judul_artikel'], '-', true);
        }

        // Simpan data yang sudah dimodifikasi kembali ke variabel $data
        $data['artikels'] = $items;
        $data['profils'] = $profil->findAll();

        return view('artikel-en', $data);
    }

    public function detail_artikel($slug)
    {
        $artikel = new Artikel();
        $profil = new Profil();

        // Ambil semua profil untuk ditampilkan
        $data['profils'] = $profil->findAll();
        $items = $artikel->findAll();

        // Cari produk berdasarkan slug
        $data['artikel'] = null;
        foreach ($items as $item) {
            if (url_title($item['judul_artikel'], '-', true) === $slug) {
                $data['artikel'] = $item;
                break;
            }
        }

        // Jika produk tidak ditemukan, redirect ke halaman produk
        if (!$data['artikel']) {
            return redirect()->to('/id/artikel');
        }

        // Ambil ID artikel yang sedang dibuka
        $id_artikel = $data['artikel']['id_artikel'];

        // Ambil 3 artikel lain yang tidak memiliki ID yang sama (artikel terkait)
        $data['artikelTerkait'] = $artikel->where('id_artikel !=', $id_artikel)
            ->limit(5)
            ->find();

        return view('detail-artikel', $data);
    }

    public function detail_article($slug)
    {
        $artikel = new Artikel();
        $profil = new Profil();

        // Ambil semua profil untuk ditampilkan
        $data['profils'] = $profil->findAll();
        $items = $artikel->findAll();

        // Cari produk berdasarkan slug
        $data['artikel'] = null;
        foreach ($items as $item) {
            if (url_title($item['judul_artikel'], '-', true) === $slug) {
                $data['artikel'] = $item;
                break;
            }
        }

        // Jika produk tidak ditemukan, redirect ke halaman produk
        if (!$data['artikel']) {
            return redirect()->to('/id/artikel');
        }

        // Ambil ID artikel yang sedang dibuka
        $id_artikel = $data['artikel']['id_artikel'];

        // Ambil 3 artikel lain yang tidak memiliki ID yang sama (artikel terkait)
        $data['artikelTerkait'] = $artikel->where('id_artikel !=', $id_artikel)
            ->limit(5)
            ->find();

        return view('detail-artikel-en', $data);
    }

    public function produk()
    {
        $produk = new Produk();
        $profil = new Profil();

        // Ambil semua produk dari database
        $items = $produk->findAll();

        // Loop melalui data produk yang diambil
        foreach ($items as &$item) {
            $item['slug'] = url_title($item['nama_produk_in'], '-', true);
        }

        // Simpan data yang sudah dimodifikasi kembali ke variabel $data
        $data['produks'] = $items;
        $data['profils'] = $profil->findAll();

        return view('produk', $data);
    }

    public function product()
    {
        $produk = new Produk();
        $profil = new Profil();

        // Ambil semua produk dari database
        $items = $produk->findAll();

        // Loop melalui data produk yang diambil
        foreach ($items as &$item) {
            $item['slug'] = url_title($item['nama_produk_en'], '-', true);
        }

        // Simpan data yang sudah dimodifikasi kembali ke variabel $data
        $data['produks'] = $items;
        $data['profils'] = $profil->findAll();

        return view('produk-en', $data);
    }

    public function detail_produk($slug)
    {
        $produk = new Produk();
        $profil = new Profil();

        // Ambil semua profil untuk ditampilkan
        $data['profils'] = $profil->findAll();
        $items = $produk->findAll();

        // Cari produk berdasarkan slug
        $data['produk'] = null;
        foreach ($items as $item) {
            if (url_title($item['nama_produk_in'], '-', true) === $slug) {
                $data['produk'] = $item;
                break;
            }
        }

        // Jika produk tidak ditemukan, redirect ke halaman produk
        if (!$data['produk']) {
            return redirect()->to('/id/produk');
        }

        // Ambil 3 produk lain yang tidak memiliki ID yang sama (produk terkait)
        $data['produkTerkait'] = $produk->where('id_produk !=', $data['produk']['id_produk'])
            ->limit(3)
            ->find();

        return view('detail-produk', $data);
    }


    public function detail_product($slug)
    {
        $produk = new Produk();
        $profil = new Profil();

        // Ambil semua profil untuk ditampilkan
        $data['profils'] = $profil->findAll();
        $items = $produk->findAll();

        // Cari produk berdasarkan slug
        $data['produk'] = null;
        foreach ($items as $item) {
            // Cek slug untuk nama produk dalam bahasa Inggris
            if (url_title($item['nama_produk_en'], '-', true) === $slug) {
                $data['produk'] = $item;
                break;
            }
        }

        // Jika produk tidak ditemukan, redirect ke halaman produk
        if (!$data['produk']) {
            return redirect()->to('/en/product');
        }

        // Ambil 3 produk lain yang tidak memiliki ID yang sama (produk terkait)
        $data['produkTerkait'] = $produk->where('id_produk !=', $data['produk']['id_produk'])
            ->limit(3)
            ->find();

        return view('detail-produk-en', $data);
    }

    public function aktivitas()
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        // Ambil semua produk dari database
        $items = $aktivitas->findAll();

        // Loop melalui data produk yang diambil
        foreach ($items as &$item) {
            $item['slug'] = url_title($item['nama_aktivitas_in'], '-', true);
        }

        // Simpan data yang sudah dimodifikasi kembali ke variabel $data
        $data['aktivitass'] = $items;
        $data['profils'] = $profil->findAll();

        return view('aktivitas', $data);
    }

    public function activity()
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        // Ambil semua produk dari database
        $items = $aktivitas->findAll();

        // Loop melalui data produk yang diambil
        foreach ($items as &$item) {
            $item['slug'] = url_title($item['nama_aktivitas_en'], '-', true);
        }

        // Simpan data yang sudah dimodifikasi kembali ke variabel $data
        $data['aktivitass'] = $items;
        $data['profils'] = $profil->findAll();

        return view('aktivitas-en', $data);
    }

    public function detail_aktivitas($slug)
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        // Ambil semua profil untuk ditampilkan
        $data['profils'] = $profil->findAll();
        $items = $aktivitas->findAll();

        // Cari produk berdasarkan slug
        $data['aktivitas'] = null;
        foreach ($items as $item) {
            // Cek slug untuk nama produk dalam bahasa Inggris
            if (url_title($item['nama_aktivitas_in'], '-', true) === $slug) {
                $data['aktivitas'] = $item;
                break;
            }
        }

        // Jika produk tidak ditemukan, redirect ke halaman produk
        if (!$data['aktivitas']) {
            return redirect()->to('/id/aktivitas');
        }

        // Ambil ID aktivitas yang sedang ditampilkan
        $id_aktivitas = $data['aktivitas']['id_aktivitas'];

        // Ambil 3 aktivitas lain yang tidak memiliki ID yang sama (aktivitas terkait)
        $data['aktivitasTerkait'] = $aktivitas->where('id_aktivitas !=', $id_aktivitas)
            ->limit(3)
            ->find();

        return view('detail-aktivitas', $data);
    }

    public function detail_activity($slug)
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        // Ambil semua profil untuk ditampilkan
        $data['profils'] = $profil->findAll();
        $items = $aktivitas->findAll();

        // Cari produk berdasarkan slug
        $data['aktivitas'] = null;
        foreach ($items as $item) {
            // Cek slug untuk nama produk dalam bahasa Inggris
            if (url_title($item['nama_aktivitas_en'], '-', true) === $slug) {
                $data['aktivitas'] = $item;
                break;
            }
        }

        // Jika produk tidak ditemukan, redirect ke halaman produk
        if (!$data['aktivitas']) {
            return redirect()->to('/en/aktivitas');
        }

        // Ambil ID aktivitas yang sedang ditampilkan
        $id_aktivitas = $data['aktivitas']['id_aktivitas'];

        // Ambil 3 aktivitas lain yang tidak memiliki ID yang sama (aktivitas terkait)
        $data['aktivitasTerkait'] = $aktivitas->where('id_aktivitas !=', $id_aktivitas)
            ->limit(3)
            ->find();

        return view('detail-aktivitas-en', $data);
    }

    public function kontak()
    {
        $profil = new Profil();
        $data['profils'] = $profil->findAll(3);
        return view('kontak', $data);
    }

    public function contact()
    {
        $profil = new Profil();
        $data['profils'] = $profil->findAll(3);
        return view('kontak-en', $data);
    }

}
