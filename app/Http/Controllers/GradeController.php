<?php

namespace App\Http\Controllers;

use App\Services\Grade\GradeService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GradeController extends Controller
{
    protected GradeService $gradeService;

    public function __construct(GradeService $gradeService)
    {
        $this->$gradeService = $gradeService;
    }
    
    public function index()
    {
        return Inertia::render('master-data/grade');
    }

    public function datatable()
    {
        $getData = $this->gradeService->getAll();
        return response()->json($getData);
    }
}
