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

        $data['artikels'] = $artikel->findAll();
        $data['profils'] = $profil->findAll();
        return view('artikel', $data);
    }

    public function article()
    {
        $artikel = new Artikel();
        $profil = new Profil();

        $data['artikels'] = $artikel->findAll();
        $data['profils'] = $profil->findAll();
        return view('artikel-en', $data);
    }

    public function detail_artikel($id)
    {
        $artikel = new Artikel();
        $profil = new Profil();

        // Ambil data produk berdasarkan ID
        $data['artikel'] = $artikel->find($id);
        $data['profils'] = $profil->findAll();

        // Ambil 3 produk lain yang tidak memiliki ID yang sama (produk terkait)
        $data['artikelTerkait'] = $artikel->where('id_artikel !=', $id)->limit(3)->findAll();

        return view('detail-artikel', $data);
    }

    public function detail_article($id)
    {
        $artikel = new Artikel();
        $profil = new Profil();

        // Ambil data produk berdasarkan ID
        $data['artikel'] = $artikel->find($id);
        $data['profils'] = $profil->findAll();

        // Ambil 3 produk lain yang tidak memiliki ID yang sama (produk terkait)
        $data['artikelTerkait'] = $artikel->where('id_artikel !=', $id)->limit(3)->findAll();

        return view('detail-artikel-en', $data);
    }

    public function produk()
    {
        $produk = new Produk();
        $profil = new Profil();

        $data['produks'] = $produk->findAll();
        $data['profils'] = $profil->findAll();
        return view('produk', $data);
    }

    public function product()
    {
        $produk = new Produk();
        $profil = new Profil();

        $data['produks'] = $produk->findAll();
        $data['profils'] = $profil->findAll();
        return view('produk-en', $data);
    }

    public function detail_produk($id)
    {
        $produk = new Produk();
        $profil = new Profil();

        // Ambil data produk berdasarkan ID
        $data['produk'] = $produk->find($id);
        $data['profils'] = $profil->findAll();

        // Ambil 3 produk lain yang tidak memiliki ID yang sama (produk terkait)
        $data['produkTerkait'] = $produk->where('id_produk !=', $id)->limit(3)->findAll();

        return view('detail-produk', $data);
    }

    public function detail_product($id)
    {
        $produk = new Produk();
        $profil = new Profil();

        // Ambil data produk berdasarkan ID
        $data['produk'] = $produk->find($id);
        $data['profils'] = $profil->findAll();

        // Ambil 3 produk lain yang tidak memiliki ID yang sama (produk terkait)
        $data['produkTerkait'] = $produk->where('id_produk !=', $id)->limit(3)->findAll();

        return view('detail-produk-en', $data);
    }

    public function aktivitas()
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        $data['aktivitass'] = $aktivitas->findAll();
        $data['profils'] = $profil->findAll();
        return view('aktivitas', $data);
    }

    public function activity()
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        $data['aktivitass'] = $aktivitas->findAll();
        $data['profils'] = $profil->findAll();
        return view('aktivitas-en', $data);
    }

    public function detail_aktivitas($id)
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        // Ambil data aktivitas berdasarkan ID
        $data['aktivitas'] = $aktivitas->find($id);
        $data['profils'] = $profil->findAll();

        // Ambil 3 aktivitas lain yang tidak memiliki ID yang sama (aktivitas terkait)
        $data['aktivitasTerkait'] = $aktivitas->where('id_aktivitas !=', $id)->limit(3)->findAll();

        return view('detail-aktivitas', $data);
    }

    public function detail_activity($id)
    {
        $aktivitas = new Aktivitas();
        $profil = new Profil();

        // Ambil data aktivitas berdasarkan ID
        $data['aktivitas'] = $aktivitas->find($id);
        $data['profils'] = $profil->findAll();

        // Ambil 3 aktivitas lain yang tidak memiliki ID yang sama (aktivitas terkait)
        $data['aktivitasTerkait'] = $aktivitas->where('id_aktivitas !=', $id)->limit(3)->findAll();

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
