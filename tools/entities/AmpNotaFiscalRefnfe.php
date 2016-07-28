<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaFiscalRefnfe
 *
 * @ORM\Table(name="amp_nota_fiscal_refnfe", indexes={@ORM\Index(name="fk_nota_fiscal_idx", columns={"id_nota_fiscal"})})
 * @ORM\Entity
 */
class AmpNotaFiscalRefnfe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_fiscal_refnfe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaFiscalRefnfe;

    /**
     * @var string
     *
     * @ORM\Column(name="chave", type="string", length=44, nullable=false)
     */
    private $chave;

    /**
     * @var \AmpNotaFiscal
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaFiscal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_fiscal", referencedColumnName="id_nota_fiscal")
     * })
     */
    private $idNotaFiscal;


    /**
     * Get idNotaFiscalRefnfe
     *
     * @return int
     */
    public function getIdNotaFiscalRefnfe()
    {
        return $this->idNotaFiscalRefnfe;
    }

    /**
     * Set chave
     *
     * @param string $chave
     *
     * @return AmpNotaFiscalRefnfe
     */
    public function setChave($chave)
    {
        $this->chave = $chave;

        return $this;
    }

    /**
     * Get chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->chave;
    }

    /**
     * Set idNotaFiscal
     *
     * @param \AmpNotaFiscal $idNotaFiscal
     *
     * @return AmpNotaFiscalRefnfe
     */
    public function setIdNotaFiscal(\AmpNotaFiscal $idNotaFiscal = null)
    {
        $this->idNotaFiscal = $idNotaFiscal;

        return $this;
    }

    /**
     * Get idNotaFiscal
     *
     * @return \AmpNotaFiscal
     */
    public function getIdNotaFiscal()
    {
        return $this->idNotaFiscal;
    }
}

