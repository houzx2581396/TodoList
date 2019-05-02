<?php

namespace App\Http\Controllers;

use App\Services\MissionService;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    protected $missionService;

    public function __construct(MissionService $missionService)
    {
        $this->missionService = $missionService;
    }

    /**
     * 待辦事項首頁
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('mission');
    }

    /**
     * 新增待辦事項
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createMission(Request $request)
    {
        $this->missionService->createMission($request->mission);

        return redirect('mission');
    }
}
