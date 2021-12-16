<?php

    namespace App\Repositories;

    use App\Models\Company;

    class CompanyRepository extends ResourceRepository {
        
        public function __construct(Company $company) {
            $this->model = $company;
        }
        
    }