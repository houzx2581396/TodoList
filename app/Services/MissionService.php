<?php


namespace App\Services;


use App\Repositories\MissionRepository;

class MissionService
{
    protected $missionRepository;

    public function __construct(MissionRepository $missionRepository)
    {
        $this->missionRepository = $missionRepository;
    }

    /**
     * 新增待辦事項
     *
     * @param string $mission
     */
    public function createMission(string $mission)
    {
        if ($this->missionRepository->isMissionExist($mission) !== true) {
            $this->missionRepository->createMission($mission);
        }
    }
}