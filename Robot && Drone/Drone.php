<?php

class Drone
{
    public $cameraResolution;
    private $maxFlyingSpeed=0;
    private $maxFlyingTime;
    public function __construct($maxSpeed,$maxFlyingTime,$cameraResolution)
    {
        $this->maxFlyingSpeed=$maxSpeed;
        $this->maxFlyingTime=$maxFlyingTime;
        $this->cameraResolution=$cameraResolution;
    }

    /**
     * @return mixed
     */
    public function getCameraResolution()
    {
        return $this->cameraResolution;
    }

    /**
     * @param mixed $cameraResolution
     */
    public function setCameraResolution($cameraResolution): void
    {
        $this->cameraResolution = $cameraResolution;
    }

    /**
     * @return int
     */
    public function getMaxFlyingSpeed(): int
    {
        return $this->maxFlyingSpeed;
    }

    /**
     * @param int $maxFlyingSpeed
     */
    public function setMaxFlyingSpeed(int $maxFlyingSpeed): void
    {
        $this->maxFlyingSpeed = $maxFlyingSpeed;
    }

    /**
     * @return mixed
     */
    public function getMaxFlyingTime()
    {
        return $this->maxFlyingTime;
    }

    /**
     * @param mixed $maxFlyingTime
     */
    public function setMaxFlyingTime($maxFlyingTime): void
    {
        $this->maxFlyingTime = $maxFlyingTime;
    }

}