<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Repositories\CompanyRepository;

class CompanyController extends Controller
{
    protected $companyRepository;

    public function __construct(CompanyRepository $companyRepository) {
        $this->companyRepository = $companyRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->companyRepository->get();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
            'name' => ['required', 'string', 'max:255', 'unique:companies'],
            'email' => ['required', 'email', 'max:255', 'unique:companies'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        $slug = $this->generateSlug($request->name);

        $request->merge([
            'slug' => $slug,
            'user_id' => Auth::user()->id
        ]);
        
        $company = $this->companyRepository->store($request->all());
        return redirect('/company')->withStatus("Entreprise enregistrer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $company = $this->companyRepository->getBySlug($slug);
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $company = $this->companyRepository->getBySlug($slug);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        
        $company = $this->companyRepository->getBySlug($slug);

        if ($company->slug != Str::slug($request->name)) {
            $request->merge([
                'slug' => $this->generateSlug($request->name)
            ]);
        }

        $this->companyRepository->update($company->id, $request->all());

        return redirect('/company')->withStatus('Mise à jour effectuée');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $company = $this->companyRepository->getBySlug($slug);
		
        $this->companyRepository->destroy($company->id);
        
        return redirect('/company')->withStatus('Entreprise supprimer');
    }

    public function generateSlug($name) {

        $nameCount = Company::where('name', $name)->count();
        
        if ($nameCount > 0) {
            $slug = Str::slug($name)."-".$nameCount;
        }
        else {
            $slug = Str::slug($name);
        }

        return $slug;

    }
}
