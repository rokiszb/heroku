<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;
use Symfony\Component\Validator\Constraints\GreaterThan;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemRepository")
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="items")
     * @ORM\JoinColumn(nullable=true)
     */
    public $user;

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="items")
     * @ORM\JoinColumn(nullable=true)
     */
    private $category;

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @Assert\GreaterThan(
     *     value = 0
     * )
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $price;

    /**
     * @var DateTime $created
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    protected $createdAt;

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function createdAt()
    {
        return $this->createdAt;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
