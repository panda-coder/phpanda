<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpVencimentoParcela
 *
 * @ORM\Table(name="amp_vencimento_parcela", indexes={@ORM\Index(name="fk_amp_vencimento_parcela_amp_vencimento1_idx", columns={"id_vencimento"})})
 * @ORM\Entity
 */
class AmpVencimentoParcela
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vencimento_parcela", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVencimentoParcela;

    /**
     * @var int
     *
     * @ORM\Column(name="dias_parcela", type="integer", nullable=false)
     */
    private $diasParcela;

    /**
     * @var \AmpVencimento
     *
     * @ORM\ManyToOne(targetEntity="AmpVencimento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vencimento", referencedColumnName="id_vencimento")
     * })
     */
    private $idVencimento;


    /**
     * Get idVencimentoParcela
     *
     * @return int
     */
    public function getIdVencimentoParcela()
    {
        return $this->idVencimentoParcela;
    }

    /**
     * Set diasParcela
     *
     * @param int $diasParcela
     *
     * @return AmpVencimentoParcela
     */
    public function setDiasParcela($diasParcela)
    {
        $this->diasParcela = $diasParcela;

        return $this;
    }

    /**
     * Get diasParcela
     *
     * @return int
     */
    public function getDiasParcela()
    {
        return $this->diasParcela;
    }

    /**
     * Set idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpVencimentoParcela
     */
    public function setIdVencimento(\AmpVencimento $idVencimento = null)
    {
        $this->idVencimento = $idVencimento;

        return $this;
    }

    /**
     * Get idVencimento
     *
     * @return \AmpVencimento
     */
    public function getIdVencimento()
    {
        return $this->idVencimento;
    }
}

