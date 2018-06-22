<?php

namespace App\RepositoryJob;

use App\Job;

class JobRep implements JobInterface {

    private $Job;
    function __contruct(Job $Job){
        $this->Job = $Job;
    }
    public function getJobs()
    {
        return $this->Job->all();
    }
    public function getJobById($id)
    {
        return $this->Job->find($id);
    }
    public function getJobByLocal($local)
    {
        return $this->Job->find($local);
    }
    public function getJobByCompanyId($company_id)
    {
        return $this->Job->find($company_id);
    }
}