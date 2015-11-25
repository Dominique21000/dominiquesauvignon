<?php

namespace DS\InternauteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Visite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DS\InternauteBundle\Entity\VisiteRepository")
 */
class Visite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vis_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vis_date", type="datetime")
     * @Assert\Type(type="\DateTime", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
     */
    private $visDate;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_ip", type="string", length=255)
     */
    private $visIp;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_page", type="string", length=255)
     */
    private $visPage;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_langue", type="string", length=3)
     */
    private $visLangue;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set visDate
     *
     * @param \DateTime $visDate
     *
     * @return visite
     */
    public function setVisDate($visDate)
    {
        $this->visDate = $visDate;

        return $this;
    }

    /**
     * Get visDate
     *
     * @return \DateTime
     */
    public function getVisDate()
    {
        $myDate = strtotime($this->vis_date);
        switch ($lg) {
            case "FR":
                $maDate = date("d-m-Y - H:i",$myDate);
                //return $maDate;
                break;

            case "DE" :
                $maDate = date("d-m-Y - H:i",$myDate);
                //return $maDate;
                break;

            case "EN" :
                $maDate = date("Y-m-d - H:i",$myDate);
                //return $maDate;
                break;

            default:
                $maDate = date("d/m/Y - H:i",$myDate);
                //return $maDate;
                break;
        }
        return $maDate;
    }

    /**
     * Set visIp
     *
     * @param string $visIp
     *
     * @return visite
     */
    public function setVisIp($visIp)
    {
        $this->visIp = $visIp;

        return $this;
    }

    /**
     * Get visIp
     *
     * @return string
     */
    public function getVisIp()
    {
        return $this->visIp;
    }

    /**
     * Set visPage
     *
     * @param string $visPage
     *
     * @return visite
     */
    public function setVisPage($visPage)
    {
        $this->visPage = $visPage;

        return $this;
    }

    /**
     * Get visPage
     *
     * @return string
     */
    public function getVisPage()
    {
        return $this->visPage;
    }

    /**
     * Set visLangue
     *
     * @param string $visLangue
     *
     * @return visite
     */
    public function setVisLangue($visLangue)
    {
        $this->visLangue = $visLangue;

        return $this;
    }

    /**
     * Get visLangue
     *
     * @return string
     */
    public function getVisLangue()
    {
        return $this->visLangue;
    }
}