<?php


namespace App\Repositories;


use App\Mission;

class MissionRepository
{
    protected $mission;

    public function __construct(Mission $mission)
    {
        $this->mission = $mission;
    }

    /**
     * 待辦事項是否存在
     *
     * @param string $missionText
     *
     * @return bool
     */
    public function isMissionExist(string $missionText)
    {
        return $this->mission->where('mission', $missionText)->exists();
    }

    /**
     * 建立待辦事項
     *
     * @param string $missionText 待辦事項文字
     */
    public function createMission(string $missionText)
    {
        $this->mission->create([
            'mission' => $missionText
        ]);
    }
}