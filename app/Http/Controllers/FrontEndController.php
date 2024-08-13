<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Galleries;
use App\Models\Event;
use App\Models\Prestasi;
use App\Models\Psb;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\Preset;

class FrontEndController extends Controller
{
    public function index()
    {
        $lattest_news = News::all();

        return view('pages.frontend.index', compact('lattest_news'));
    }

    public function indexPsb ()
    {
        $psb = Psb::all();

        return view('pages.frontend.pages.psb-page', compact('psb'));
    }

    public function about()
    {
        return view('pages.frontend.pages.about-us');
    }

    public function visiMisi()
    {
        return view('pages.frontend.pages.visi-misi');
    }

    public function indexNews()
    {
        $title              = "Baitulquran Aljahra";
        $news               = News::latest()->get();
        $galleries          = Galleries::all();
        $event              = Event::all();
        $lattest_news       = News::latest()->limit(1)->get();

        return view('pages.frontend.pages.news-page', compact(
            'title',
            'news',
            'galleries',
            'event',
            'lattest_news'
        ));
    }

    public function detailNews($slug)
    {
        $news         = News::where('slug', $slug)->first();
        $text         = News::findOrFail($news->id)->slug;
        $title        = "Berita - $text" ;

        return view('pages.frontend.pages.detail-news', compact(
            'news', 'text', 'title'
        ));
    }

    public function indexPrestasi()
    {
        $title              = "Baitulquran Aljahra";
        $prestasi             = Prestasi::latest()->get();
        $event              = Event::all();
        $lattest_prestasi       = Prestasi::latest()->limit(1)->get();

        return view('pages.frontend.pages.prestasi-page', compact(
            'title',
            'prestasi',
            'event',
            'lattest_prestasi'
        ));
    }

    public function detailPrestasi($slug)
    {
        $prestasi         = Prestasi::where('slug', $slug)->first();
        $text         = Prestasi::findOrFail($prestasi->id)->slug;
        $title        = "Berita - $text" ;

        return view('pages.frontend.pages.detail-prestasi', compact(
            'prestasi', 'text', 'title'
        ));
    }

    public function prestasi()
    {
        $prestasi    = Prestasi::all();

        return view('pages.frontend.pages.prestasi-page', compact(
            'prestasi'
        ));
    }

    public function event(Request $request)
    {
        $event    = Event::all();
        // $query = Event::query();
        // $date  = $request->year_filter;

        // switch ($date) {
        //     case '2024':
        //         $query->whereYear('created_at', Carbon::now()->year);
        //         break;
        //     case '2023':
        //         $query->whereYear('created_at', Carbon::now()->subYear()->year);
        //         break;
        //     }

        // $events = $query->get();

        return view('pages.frontend.pages.event', compact(
            'event'
        ));
    }

    public function detailEvent($slug)
    {
        $event         = Event::where('slug', $slug)->first();
        $text         = Event::findOrFail($event->id)->slug;

        return view('pages.frontend.pages.detail-event', compact(
            'event', 'text'
        ));
    }

}
