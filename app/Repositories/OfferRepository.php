<?php

    namespace App\Repositories;

    use App\Models\Offer;

    class OfferRepository extends ResourceRepository {
        
        public function __construct(Offer $offer) {
            $this->model = $offer;
        }
        
    }