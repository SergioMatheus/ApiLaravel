<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        if (!$companies) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }
        return response()->json($companies);

    }

    public function store(Request $request)
    {
        $Company = new Company();
        $Company->fill($request->all());
        $Company->save();

        return response()->json($Company, 201);
    }

    public function update(Request $request, $id)
    {
        $Company = Company::find($id);
        if (!$Company) {
            return response()->json([
                'message' => 'Vaga nao Encontrada'
            ], 404);
        }
        $Company->fill($request->all());
        $Company->save();

        return response()->json($Company);
    }

    public function destroy($id)
    {
        $Company = Company::find($id);
        if (!$Company) {
            return response()->json([
                'message' => 'Empresa nao encontrada'
            ], 404);
        }
        $Company->delete();
    }
}
