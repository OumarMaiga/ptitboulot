<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\Offer;

use App\Repositories\OfferRepository;

class PageController extends Controller
{
    protected $offerRepository;

    public function __construct(OfferRepository $offerRepository) {
        $this->offerRepository = $offerRepository;
    }

    /**
     * Display a listing of the offer.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $offers = $this->offerRepository->get();
        return view('pages.home', compact('offers'));
    }


    /**
     * Apply for an offer.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function apply_page(Request $request)
    {
        return view('pages.apply');
    }

    /**
     * Apply for an offer.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function apply(Request $request)
    {
        
        return redirect('/offer')->withStatus("Entreprise enregistrer");
    }

    public function generateSlug($title) 
    {

        $titleCount = Offer::where('title', $title)->count();
        
        if ($titleCount > 0) {
            $slug = Str::slug($title)."-".$titleCount;
        }
        else {
            $slug = Str::slug($title);
        }

        return $slug;

    }
}
