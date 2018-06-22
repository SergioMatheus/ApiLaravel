<?php

namespace App\RepositoryCompany;

use App\Company;

class CompanyRep implements CompanyInterface {

    private $Company;

    function __contruct(Company $Company){
        $this->Company = $Company;
    }

    public function getAll()
    {
        return $this->Company ->all();
    }

    public function getCompanyById($id)
    {
        return  $this->Company->find($id);
    }


}