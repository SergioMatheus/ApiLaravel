<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $Jobs = Job::with('company')->get();
        if (!$Jobs) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }
        return response()->json($Jobs);
    }

    public function store(Request $request)
    {
        $Jobs = new Job();
        $Jobs->fill($request->all());
        $Jobs->save();

        return response()->json($Jobs, 201);
    }

    public function update(Request $request, $id)
    {
        $Job = Job::find($id);
        if (!$Job) {
            return response()->json([
                'message' => 'Vaga nao Encontrada'
            ], 404);
        }
        $Job->fill($request->all());
        $Job->save();

        return response()->json($Job);
    }

    public function destroy($id)
    {
        $Job = Job::find($id);
        if (!$Job) {
            return response()->json([
                'message' => 'Empresa nao encontrada'
            ], 404);
        }
        $Job->delete();
    }
}
