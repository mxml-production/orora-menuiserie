<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Banner;
use App\Models\Catalogue;
use App\Models\Information;
use App\Models\Realisation;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $realisations = Realisation::orderBy('created_at', 'desc')->limit(10)->get();
        $informationmail = Information::where('slug', 'mail')->get();
        $informationphone = Information::where('slug', 'phone')->get();
        $informationgps = Information::where('slug', 'gps')->get();
        $informationweek = Information::where('slug', 'horaire-semaine')->get();
        $informationweekend = Information::where('slug', 'horaire-weekend')->get();
        $banner = Banner::first();

        return view('client.index', [
            'realisations' => $realisations,
            'informationmail' => $informationmail,
            'informationphone' => $informationphone,
            'informationgps' => $informationgps,
            'informationweek' => $informationweek,
            'informationweekend' => $informationweekend,
            'banner' => $banner
        ]);
    }

    public function about() {
        return view('client.about');
    }

    public function realisation() {
        $avis = Avis::all();
        $realisations = Realisation::orderBy('created_at', 'desc')->get();
        return view('client.realisation',[
            "avis" => $avis,
            "realisations" => $realisations
        ]);
    }
    
    public function catalogue() {

        $catalogue_integral = Catalogue::where('slug', 'integral')->get();
        $catalogue_porte = Catalogue::where('slug', 'porte')->get();
        $catalogue_fenetre = Catalogue::where('slug', 'fenetre')->get();
        $catalogue_volet = Catalogue::where('slug', 'volet')->get();
        $catalogue_baie = Catalogue::where('slug', 'baie')->get();
        $catalogue_store = Catalogue::where('slug', 'store')->get();
        $catalogue_portail = Catalogue::where('slug', 'portail')->get();

        return view('client.catalogue', [
            'catalogue_integral' => $catalogue_integral,
            'catalogue_porte' => $catalogue_porte,
            'catalogue_fenetre' => $catalogue_fenetre,
            'catalogue_volet' => $catalogue_volet,
            'catalogue_baie' => $catalogue_baie,
            'catalogue_store' => $catalogue_store,
            'catalogue_portail' => $catalogue_portail
        ]);
    }

    public function mentionsLegales() {
        return view('client.mentions_legales');
    }
}
