<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRomaneioNotaFiscal
 *
 * @ORM\Table(name="amp_romaneio_nota_fiscal", indexes={@ORM\Index(name="fk_amp_romaneio_nota_fiscal_1_idx", columns={"id_romaneio_despacho"}), @ORM\Index(name="fk_amp_romaneio_nota_fiscal_2_idx", columns={"id_nota_fiscal"}), @ORM\Index(name="uq_nota_fiscal", columns={"id_nota_fiscal"})})
 * @ORM\Entity
 */
class AmpRomaneioNotaFiscal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_romaneio_nota_fiscal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRomaneioNotaFiscal;

    /**
     * @var \AmpRomaneioDespacho
     *
     * @ORM\ManyToOne(targetEntity="AmpRomaneioDespacho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_romaneio_despacho", referencedColumnName="id_romaneio_despacho")
     * })
     */
    private $idRomaneioDespacho;

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
     * Get idRomaneioNotaFiscal
     *
     * @return int
     */
    public function getIdRomaneioNotaFiscal()
    {
        return $this->idRomaneioNotaFiscal;
    }

    /**
     * Set idRomaneioDespacho
     *
     * @param \AmpRomaneioDespacho $idRomaneioDespacho
     *
     * @return AmpRomaneioNotaFiscal
     */
    public function setIdRomaneioDespacho(\AmpRomaneioDespacho $idRomaneioDespacho = null)
    {
        $this->idRomaneioDespacho = $idRomaneioDespacho;

        return $this;
    }

    /**
     * Get idRomaneioDespacho
     *
     * @return \AmpRomaneioDespacho
     */
    public function getIdRomaneioDespacho()
    {
        return $this->idRomaneioDespacho;
    }

    /**
     * Set idNotaFiscal
     *
     * @param \AmpNotaFiscal $idNotaFiscal
     *
     * @return AmpRomaneioNotaFiscal
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

