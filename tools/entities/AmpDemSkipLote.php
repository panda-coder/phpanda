<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpDemSkipLote
 *
 * @ORM\Table(name="amp_dem_skip_lote", indexes={@ORM\Index(name="id_amp_dem_skip_lote_1_idx", columns={"id_produto"})})
 * @ORM\Entity
 */
class AmpDemSkipLote
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_dem_skip_lote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDemSkipLote;

    /**
     * @var int
     *
     * @ORM\Column(name="skip_lote", type="integer", nullable=false)
     */
    private $skipLote;

    /**
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;


    /**
     * Get idDemSkipLote
     *
     * @return int
     */
    public function getIdDemSkipLote()
    {
        return $this->idDemSkipLote;
    }

    /**
     * Set skipLote
     *
     * @param int $skipLote
     *
     * @return AmpDemSkipLote
     */
    public function setSkipLote($skipLote)
    {
        $this->skipLote = $skipLote;

        return $this;
    }

    /**
     * Get skipLote
     *
     * @return int
     */
    public function getSkipLote()
    {
        return $this->skipLote;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpDemSkipLote
     */
    public function setIdProduto(\AmpProduto $idProduto = null)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get idProduto
     *
     * @return \AmpProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }
}

