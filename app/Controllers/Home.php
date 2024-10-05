<?php

namespace App\Controllers;
use App\Models\Aktivitas;
use App\Models\Produk;
use App\Models\Artikel;
use App\Models\Profil;
use App\Models\Slider;
use Stichoza\GoogleTranslate\GoogleTranslate;

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

        $items = $artikel->findAll();

        foreach ($items as &$item) {
            $item['slug'] = url_title($item['judul_artikel'], '-', true);
        }

        $data['artikels'] = $items;
        $data['profils'] = $profil->findAll();

        return view('artikel', $data);
    }

    public function article()
    {
        $artikel = new Artikel();
        $profil = new Profil();

        $tr = new GoogleTranslate('en');

        $items = $artikel->findAll();

        foreach ($items as &$item) {
            $item['judul_artikel'] = $tr->translate($item['judul_artikel']);
            $item['deskripsi_artikel'] = $tr->translate($item['deskripsi_artikel']);

            $item['slug'] = url_title($item['judul_artikel'], '-', true);
        }

        $data['artikels'] = $items;
        $data['profils'] = $profil->findAll();

        return view('artikel-en', $data);
    }

    public function detail_artikel($slug)
    {
        $artikel = new Artikel();
        $profil = new Profil();

        $data['profils'] = $profil->findAll();
        $items = $artikel->findAll();
        $data['artikel'] = null;

        $tr = new GoogleTranslate('en');

        foreach ($items as $item) {
            $item['slug_id'] = url_title($item['judul_artikel'], '-', true);
            $item['slug_en'] = url_title($tr->translate($item['judul_artikel']), '-', true);
            if ($item['slug_id'] === $slug) {
                $data['artikel'] = $item;

                break;
            }
        }

        if (!$data['artikel']) {
            return redirect()->to('/id/artikel');
        }

        // Artikel Terkait Ambil ID artikel yang sedang dibuka
        $id_artikel = $data['artikel']['id_artikel'];

        $relatedItems = $artikel->where('id_artikel !=', $id_artikel)->findAll();
        $data['artikelTerkait'] = [];

        foreach ($relatedItems as $relatedItem) {
            $relatedSlug = url_title($relatedItem['judul_artikel'], '-', true);
            if ($relatedSlug !== $slug) {
                $data['artikelTerkait'][] = $relatedItem;

                if (count($data['artikelTerkait']) >= 5) {
                    break;
                }
            }
        }

        return view('detail-artikel', $data);
    }

    public function detail_article($slug)
    {
        $artikel = new Artikel();
        $profil = new Profil();

        $data['profils'] = $profil->findAll();
        $items = $artikel->findAll();
        $data['artikel'] = null;

        $tr = new GoogleTranslate('en');

        foreach ($items as $item) {
            $slug_en = url_title($tr->translate($item['judul_artikel']), '-', true);
            $item['slug_id'] = url_title($item['judul_artikel'], '-', true);
            if ($slug_en === $slug) {
                $data['artikel'] = $item;
                break;
            }
        }

        $data['artikel']['judul_artikel'] = $tr->translate($data['artikel']['judul_artikel']);
        $data['artikel']['deskripsi_artikel'] = $tr->translate($data['artikel']['deskripsi_artikel']);

        if (!$data['artikel']) {
            return redirect()->to('/en/article');
        }

        // Artikel Terkait Ambil ID artikel yang sedang dibuka
        $id_artikel = $data['artikel']['id_artikel'];

        $data['artikelTerkait'] = $artikel->where('id_artikel !=', $id_artikel)
            ->limit(5)
            ->find();

        foreach ($data['artikelTerkait'] as &$relatedArtikel) {
            $relatedArtikel['slug_en'] = url_title($tr->translate($relatedArtikel['judul_artikel']), '-', true);
            $relatedArtikel['judul_artikel'] = $tr->translate($relatedArtikel['judul_artikel']);
        }

        return view('detail-artikel-en', $data);
    }

    public function produk()
    {
        $produk = new Produk();
        $profil = new Profil();

        $items = $produk->findAll();

        foreach ($items as &$item) {
            $item['slug'] = url_title($item['nama_produk_in'], '-', true);
        }

        $data['produks'] = $items;
        $data['profils'] = $profil->findAll();

        return view('produk', $data);
    }

    public function product()
    {
        $produk = new Produk();
        $profil = new Profil();

        $items = $produk->findAll();

        foreach ($items as &$item) {
            $item['slug'] = url_title($item['nama_produk_en'], '-', true);
        }

        $data['produks'] = $items;
        $data['profils'] = $profil->findAll();

        return view('produk-en', $data);
    }

    public function detail_produk($slug)
    {
        $produk = new Produk();
        $profil = new Profil();

        $data['profils'] = $profil->findAll();
        $items = $produk->findAll();

        $data['produk'] = null;
        foreach ($items as $item) {
            if (url_title($item['nama_produk_in'], '-', true) === $slug) {
                $data['produk'] = $item;
                break;
            }
        }

        if (!$data['produk']) {
            return redirect()->to('/id/produk');
        }

        $data['produkTerkait'] = $produk->where('id_produk !=', $data['produk']['id_produk'])
            ->limit(3)
            ->find();

        return view('detail-produk', $data);
    }


    public function detail_product($slug)
    {
        $produk = new Produk();
        $profil = new Profil();

        $data['profils'] = $profil->findAll();
        $items = $produk->findAll();

        $data['produk'] = null;
        foreach ($items as $item) {
            if (url_title($item['nama_produk_en'], '-', true) === $slug) {
                $data['produk'] = $item;
                break;
            }
        }

        if (!$data['produk']) {
            return redirect()->to('/en/product');
        }

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

        $items = $aktivitas->findAll();

        foreach ($items as &$item) {
            $item['slug'] = url_title($item['nama_aktivitas_en'], '-', true);
        }

        $data['aktivitass'] = $items;
        $data['profils'] = $profil->findAll();

        return view('aktivitas-en', $data);
    }

    public function detail_aktivitas($slug)
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        $data['profils'] = $profil->findAll();
        $items = $aktivitas->findAll();

        $data['aktivitas'] = null;
        foreach ($items as $item) {
            if (url_title($item['nama_aktivitas_in'], '-', true) === $slug) {
                $data['aktivitas'] = $item;
                break;
            }
        }

        if (!$data['aktivitas']) {
            return redirect()->to('/id/aktivitas');
        }

        $id_aktivitas = $data['aktivitas']['id_aktivitas'];
        $data['aktivitasTerkait'] = $aktivitas->where('id_aktivitas !=', $id_aktivitas)
            ->limit(3)
            ->find();

        return view('detail-aktivitas', $data);
    }

    public function detail_activity($slug)
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        $data['profils'] = $profil->findAll();
        $items = $aktivitas->findAll();

        $data['aktivitas'] = null;
        foreach ($items as $item) {
            if (url_title($item['nama_aktivitas_en'], '-', true) === $slug) {
                $data['aktivitas'] = $item;
                break;
            }
        }

        if (!$data['aktivitas']) {
            return redirect()->to('/en/aktivitas');
        }

        $id_aktivitas = $data['aktivitas']['id_aktivitas'];
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