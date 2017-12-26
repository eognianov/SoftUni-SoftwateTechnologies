<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;


/**
 * Report
 *
 * @ORM\Table(name="reports")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReportRepository")
 */
class Report
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     * @NotBlank
     */

    private $status;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     * @NotBlank
     */

    private $message;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     * @NotBlank
     */

    private $origin;
	
	 /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

	/**
     * @return string
     */
	public function getStatus()
    {
        return $this->status;
    }
    /**
     * @param string $status
     * @return Report
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
	/**
     * @return string
     */
	public function getMessage()
    {
        return $this->message;
    }
    /**
     * @param string $message
     * @return Report
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
	
	/**
     * @return string
     */
	public function getOrigin()
    {
        return $this->origin;
    }
    /**
     * @param string $origin
     * @return Report
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }
}

