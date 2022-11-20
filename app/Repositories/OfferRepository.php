<?php

    namespace App\Repositories;

    use Illuminate\Support\Facades\DB;

    use App\Models\Offer;

    class OfferRepository extends ResourceRepository {
        
        public function __construct(Offer $offer) {
            $this->model = $offer;
        }
        
        public function get() {
            $offers = DB::table('offers')
            ->get();

            return $offers;
        }
        
    }