<?php

namespace Sergey\PhoheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Phone
 *
 * @ORM\Table(name="phone")
 * @ORM\Entity(repositoryClass="Sergey\PhoheBundle\Repository\PhoneRepository")
 */
class Phone
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
     * @ORM\Column(name="name", type="string", length=255)
     *
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="syrname", type="string", length=255)
     */
    private $syrname;

    /**
     * @var string
     *
     * @ORM\Column(name="fathername", type="string", length=255)
     */
    private $fathername;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer")
     */
    private $phone;

    /**
     * @var int
     *
     * @ORM\Column(name="phone1", type="integer", nullable=true)
     */
    private $phone1;

    /**
     * @var int
     *
     * @ORM\Column(name="phone2", type="integer", nullable=true)
     */
    private $phone2;

    /**
     * @var int
     *
     * @ORM\Column(name="phone3", type="integer", nullable=true)
     */
    private $phone3;

    /**
     * @var int
     *
     * @ORM\Column(name="phone4", type="integer", nullable=true)
     */
    private $phone4;

    /**
     * @var int
     *
     * @ORM\Column(name="phone5", type="integer", nullable=true)
     */
    private $phone5;

    /**
     * @var int
     *
     * @ORM\Column(name="phone6", type="integer", nullable=true)
     */
    private $phone6;

    /**
     * @var int
     *
     * @ORM\Column(name="phone7", type="integer", nullable=true)
     */
    private $phone7;

    /**
     * @var int
     *
     * @ORM\Column(name="phone8", type="integer", nullable=true)
     */
    private $phone8;

    /**
     * @var int
     *
     * @ORM\Column(name="phone9", type="integer", nullable=true)
     */
    private $phone9;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Phone
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set syrname
     *
     * @param string $syrname
     *
     * @return Phone
     */
    public function setSyrname($syrname)
    {
        $this->syrname = $syrname;

        return $this;
    }

    /**
     * Get syrname
     *
     * @return string
     */
    public function getSyrname()
    {
        return $this->syrname;
    }

    /**
     * Set fathername
     *
     * @param string $fathername
     *
     * @return Phone
     */
    public function setFathername($fathername)
    {
        $this->fathername = $fathername;

        return $this;
    }

    /**
     * Get fathername
     *
     * @return string
     */
    public function getFathername()
    {
        return $this->fathername;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone1
     *
     * @param integer $phone1
     *
     * @return Phone
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return int
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param integer $phone2
     *
     * @return Phone
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return int
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set phone3
     *
     * @param integer $phone3
     *
     * @return Phone
     */
    public function setPhone3($phone3)
    {
        $this->phone3 = $phone3;

        return $this;
    }

    /**
     * Get phone3
     *
     * @return int
     */
    public function getPhone3()
    {
        return $this->phone3;
    }

    /**
     * Set phone4
     *
     * @param integer $phone4
     *
     * @return Phone
     */
    public function setPhone4($phone4)
    {
        $this->phone4 = $phone4;

        return $this;
    }

    /**
     * Get phone4
     *
     * @return int
     */
    public function getPhone4()
    {
        return $this->phone4;
    }

    /**
     * Set phone5
     *
     * @param integer $phone5
     *
     * @return Phone
     */
    public function setPhone5($phone5)
    {
        $this->phone5 = $phone5;

        return $this;
    }

    /**
     * Get phone5
     *
     * @return int
     */
    public function getPhone5()
    {
        return $this->phone5;
    }

    /**
     * Set phone6
     *
     * @param integer $phone6
     *
     * @return Phone
     */
    public function setPhone6($phone6)
    {
        $this->phone6 = $phone6;

        return $this;
    }

    /**
     * Get phone6
     *
     * @return int
     */
    public function getPhone6()
    {
        return $this->phone6;
    }

    /**
     * Set phone7
     *
     * @param integer $phone7
     *
     * @return Phone
     */
    public function setPhone7($phone7)
    {
        $this->phone7 = $phone7;

        return $this;
    }

    /**
     * Get phone7
     *
     * @return int
     */
    public function getPhone7()
    {
        return $this->phone7;
    }

    /**
     * Set phone8
     *
     * @param integer $phone8
     *
     * @return Phone
     */
    public function setPhone8($phone8)
    {
        $this->phone8 = $phone8;

        return $this;
    }

    /**
     * Get phone8
     *
     * @return int
     */
    public function getPhone8()
    {
        return $this->phone8;
    }

    /**
     * Set phone9
     *
     * @param integer $phone9
     *
     * @return Phone
     */
    public function setPhone9($phone9)
    {
        $this->phone9 = $phone9;

        return $this;
    }

    /**
     * Get phone9
     *
     * @return int
     */
    public function getPhone9()
    {
        return $this->phone9;
    }
}

