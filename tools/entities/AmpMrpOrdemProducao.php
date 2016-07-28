<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpMrpOrdemProducao
 *
 * @ORM\Table(name="amp_mrp_ordem_producao", indexes={@ORM\Index(name="fk_amp_mrp_ordem_producao_2_idx", columns={"id_ordem_producao"}), @ORM\Index(name="fk_amp_mrp_ordem_producao_3_idx", columns={"id_produto"}), @ORM\Index(name="IDX_3348F4216CE60373", columns={"id_mrp"})})
 * @ORM\Entity
 */
class AmpMrpOrdemProducao
{
    /**
     * @var \AmpMrp
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpMrp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mrp", referencedColumnName="id_mrp")
     * })
     */
    private $idMrp;

    /**
     * @var \AmpOrdemProducao
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpOrdemProducao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_producao", referencedColumnName="id_ordem_producao")
     * })
     */
    private $idOrdemProducao;

    /**
     * @var \AmpProduto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;


    /**
     * Set idMrp
     *
     * @param \AmpMrp $idMrp
     *
     * @return AmpMrpOrdemProducao
     */
    public function setIdMrp(\AmpMrp $idMrp)
    {
        $this->idMrp = $idMrp;

        return $this;
    }

    /**
     * Get idMrp
     *
     * @return \AmpMrp
     */
    public function getIdMrp()
    {
        return $this->idMrp;
    }

    /**
     * Set idOrdemProducao
     *
     * @param \AmpOrdemProducao $idOrdemProducao
     *
     * @return AmpMrpOrdemProducao
     */
    public function setIdOrdemProducao(\AmpOrdemProducao $idOrdemProducao)
    {
        $this->idOrdemProducao = $idOrdemProducao;

        return $this;
    }

    /**
     * Get idOrdemProducao
     *
     * @return \AmpOrdemProducao
     */
    public function getIdOrdemProducao()
    {
        return $this->idOrdemProducao;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpMrpOrdemProducao
     */
    public function setIdProduto(\AmpProduto $idProduto)
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

