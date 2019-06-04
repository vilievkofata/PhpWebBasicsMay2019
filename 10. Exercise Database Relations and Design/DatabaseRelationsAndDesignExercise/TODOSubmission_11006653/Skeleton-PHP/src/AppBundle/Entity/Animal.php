<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="animals")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnimalRepository")
 */
class Animal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="kind", type="text")
     */
    private $kind;

    /**
     * @var int
     *
     * @ORM\Column(name="chipNumber", type="integer")
     */
    private $chipNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="text")
     */
    private $gender;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set kind.
     *
     * @param string $kind
     *
     * @return Animal
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind.
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Set chipNumber.
     *
     * @param int $chipNumber
     *
     * @return Animal
     */
    public function setChipNumber($chipNumber)
    {
        $this->chipNumber = $chipNumber;

        return $this;
    }

    /**
     * Get chipNumber.
     *
     * @return int
     */
    public function getChipNumber()
    {
        return $this->chipNumber;
    }

    /**
     * Set gender.
     *
     * @param string $gender
     *
     * @return Animal
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
}
