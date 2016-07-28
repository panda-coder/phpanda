<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpContaContabilCentro
 *
 * @ORM\Table(name="amp_conta_contabil_centro", indexes={@ORM\Index(name="fk_amp_conta_contabil_centro_1_idx", columns={"id_conta_contabil"}), @ORM\Index(name="fk_amp_conta_contabil_centro_2_idx", columns={"id_centro_custo"})})
 * @ORM\Entity
 */
class AmpContaContabilCentro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_contabil_centro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContaContabilCentro;

    /**
     * @var string
     *
     * @ORM\Column(name="percentual", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentual;

    /**
     * @var \AmpContaContabil
     *
     * @ORM\ManyToOne(targetEntity="AmpContaContabil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_contabil", referencedColumnName="id_conta_contabil")
     * })
     */
    private $idContaContabil;

    /**
     * @var \AmpCentroCusto
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroCusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_custo", referencedColumnName="id_centro_custo")
     * })
     */
    private $idCentroCusto;


    /**
     * Get idContaContabilCentro
     *
     * @return int
     */
    public function getIdContaContabilCentro()
    {
        return $this->idContaContabilCentro;
    }

    /**
     * Set percentual
     *
     * @param string $percentual
     *
     * @return AmpContaContabilCentro
     */
    public function setPercentual($percentual)
    {
        $this->percentual = $percentual;

        return $this;
    }

    /**
     * Get percentual
     *
     * @return string
     */
    public function getPercentual()
    {
        return $this->percentual;
    }

    /**
     * Set idContaContabil
     *
     * @param \AmpContaContabil $idContaContabil
     *
     * @return AmpContaContabilCentro
     */
    public function setIdContaContabil(\AmpContaContabil $idContaContabil = null)
    {
        $this->idContaContabil = $idContaContabil;

        return $this;
    }

    /**
     * Get idContaContabil
     *
     * @return \AmpContaContabil
     */
    public function getIdContaContabil()
    {
        return $this->idContaContabil;
    }

    /**
     * Set idCentroCusto
     *
     * @param \AmpCentroCusto $idCentroCusto
     *
     * @return AmpContaContabilCentro
     */
    public function setIdCentroCusto(\AmpCentroCusto $idCentroCusto = null)
    {
        $this->idCentroCusto = $idCentroCusto;

        return $this;
    }

    /**
     * Get idCentroCusto
     *
     * @return \AmpCentroCusto
     */
    public function getIdCentroCusto()
    {
        return $this->idCentroCusto;
    }
}

