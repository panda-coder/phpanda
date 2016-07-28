<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCriticidade
 *
 * @ORM\Table(name="amp_criticidade")
 * @ORM\Entity
 */
class AmpCriticidade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_criticidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCriticidade;

    /**
     * @var string
     *
     * @ORM\Column(name="criticidade", type="string", length=100, nullable=false)
     */
    private $criticidade;


    /**
     * Get idCriticidade
     *
     * @return int
     */
    public function getIdCriticidade()
    {
        return $this->idCriticidade;
    }

    /**
     * Set criticidade
     *
     * @param string $criticidade
     *
     * @return AmpCriticidade
     */
    public function setCriticidade($criticidade)
    {
        $this->criticidade = $criticidade;

        return $this;
    }

    /**
     * Get criticidade
     *
     * @return string
     */
    public function getCriticidade()
    {
        return $this->criticidade;
    }
}

