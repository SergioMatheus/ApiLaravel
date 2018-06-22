<?php
/**
 * Created by PhpStorm.
 * User: analise
 * Date: 20/06/2018
 * Time: 14:34
 */

namespace App\RepositoryJob;


interface JobInterface
{

    function getJobs();

    function getJobById($id);

    function getJobByLocal($local);

    function getJobByCompanyId($company_id);

}