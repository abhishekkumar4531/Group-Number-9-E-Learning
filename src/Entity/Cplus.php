<?php

namespace App\Entity;

use App\Repository\CplusRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CplusRepository::class)]
class Cplus
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1000)]
    private ?string $contentDesc = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $contentFile = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $contentLink = null;

    #[ORM\Column(length: 255)]
    private ?string $authorName = null;

    #[ORM\Column(length: 255)]
    private ?string $fileType = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContentDesc(): ?string
    {
        return $this->contentDesc;
    }

    public function setContentDesc(string $contentDesc): self
    {
        $this->contentDesc = $contentDesc;

        return $this;
    }

    public function getContentFile(): ?string
    {
        return $this->contentFile;
    }

    public function setContentFile(?string $contentFile): self
    {
        $this->contentFile = $contentFile;

        return $this;
    }

    public function getContentLink(): ?string
    {
        return $this->contentLink;
    }

    public function setContentLink(?string $contentLink): self
    {
        $this->contentLink = $contentLink;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getFileType(): ?string
    {
        return $this->fileType;
    }

    public function setFileType(string $fileType): self
    {
        $this->fileType = $fileType;

        return $this;
    }
}
