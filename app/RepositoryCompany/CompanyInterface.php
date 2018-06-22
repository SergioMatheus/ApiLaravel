<?php
/**
 * Created by PhpStorm.
 * User: analise
 * Date: 20/06/2018
 * Time: 14:18
 */

namespace App\RepositoryCompany;


interface CompanyInterface
{

    function getAll();

    function getCompanyById($id);

}