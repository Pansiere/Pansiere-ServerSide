<?php

namespace Pansiere\ServerSide\Models;

class Project
{
    private array $images;

    public function __construct(
        private string $name,
        private string $description,
        private ?array $projectImages = []
    ) {
        $this->images = $projectImages;
    }

    public function addImage(string $image): void
    {
        $this->images[] = $image;
    }

    public function getImages(): array
    {
        return $this->images;
    }
}
