<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;
use App\Repositories\OfferRepository;
use App\Repositories\CompanyRepository;

class OfferController extends Controller
{
    protected $offerRepository;
    protected $companyRepository;

    public function __construct(OfferRepository $offerRepository, CompanyRepository $companyRepository) {
        $this->offerRepository = $offerRepository;
        $this->companyRepository = $companyRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = $this->offerRepository->get();
        return view('offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = $this->companyRepository->get();
        return view('offers.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        $slug = $this->generateSlug($request->title);
        
        $request->merge([
            'slug' => $slug,
            'user_id' => Auth::user()->id
        ]);
        
        $offer = $this->offerRepository->store($request->all());

        return redirect('/offer')->withStatus("Entreprise enregistrer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $offer = $this->offerRepository->getBySlug($slug);
        return view('offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $companies = $this->companyRepository->get();
        $offer = $this->offerRepository->getBySlug($slug);
        return view('offers.edit', compact('offer', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        
        $offer = $this->offerRepository->getBySlug($slug);

        if ($offer->slug != Str::slug($request->title)) {
            $request->merge([
                'slug' => $this->generateSlug($request->title)
            ]);
        }

        $this->offerRepository->update($offer->id, $request->all());

        return redirect('/offer')->withStatus('Mise à jour effectuée');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $offer = $this->offerRepository->getBySlug($slug);
		
        $this->offerRepository->destroy($offer->id);
        
        return redirect('/offer')->withStatus('Entreprise supprimer');
    }

    public function generateSlug($title) {

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
