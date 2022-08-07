<?php

namespace App\Entity;

use App\Repository\WeatherForecastRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WeatherForecastRepository::class)
 */
class WeatherForecast
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $temperature;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $cloudy;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $wind;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriprion;

    /**
     * @ORM\Column(type="float")
     */
    private $lat;

    /**
     * @ORM\Column(type="float")
     */
    private $ing;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city_name;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_entered;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $execute_time;

    public function fillEntityByMap(array $entityMap)
    {
        foreach ($entityMap as $field => $value) {
            if (empty($value)) { // miejsce na ewnetualne walidacje wartości
                continue;
            }
            $this->$field = $value;
        }
    }

    // Gettersand Setters //
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTemperature(): ?string
    {
        return $this->temperature;
    }

    public function setTemperature(string $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getCloudy(): ?string
    {
        return $this->cloudy;
    }

    public function setCloudy(string $cloudy): self
    {
        $this->cloudy = $cloudy;

        return $this;
    }

    public function getWind(): ?string
    {
        return $this->wind;
    }

    public function setWind(string $wind): self
    {
        $this->wind = $wind;

        return $this;
    }

    public function getDescriprion(): ?string
    {
        return $this->descriprion;
    }

    public function setDescriprion(string $descriprion): self
    {
        $this->descriprion = $descriprion;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getIng(): ?float
    {
        return $this->ing;
    }

    public function setIng(float $ing): self
    {
        $this->ing = $ing;

        return $this;
    }

    public function getCityName(): ?string
    {
        return $this->city_name;
    }

    public function setCityName(?string $city_name): self
    {
        $this->city_name = $city_name;

        return $this;
    }

    public function getDateEntered(): ?\DateTimeInterface
    {
        return $this->date_entered;
    }

    public function setDateEntered(\DateTimeInterface $date_entered): self
    {
        $this->date_entered = $date_entered;

        return $this;
    }

    public function getExecuteTime(): ?\DateInterval
    {
        return $this->execute_time;
    }

    public function setExecuteTime(\DateInterval $execute_time): self
    {
        $this->execute_time = $execute_time;

        return $this;
    }
}
