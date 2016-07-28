<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRequisicaoItemCentro
 *
 * @ORM\Table(name="amp_requisicao_item_centro", indexes={@ORM\Index(name="fk_amp_requisicao_item_centro_1_idx", columns={"id_requisicao_compra_item"}), @ORM\Index(name="fk_amp_requisicao_item_centro_2_idx", columns={"id_centro_custo"})})
 * @ORM\Entity
 */
class AmpRequisicaoItemCentro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_requisicao_item_centro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequisicaoItemCentro;

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_custo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentualCusto;

    /**
     * @var \AmpRequisicaoCompraItem
     *
     * @ORM\ManyToOne(targetEntity="AmpRequisicaoCompraItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_requisicao_compra_item", referencedColumnName="id_requisicao_compra_item")
     * })
     */
    private $idRequisicaoCompraItem;

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
     * Get idRequisicaoItemCentro
     *
     * @return int
     */
    public function getIdRequisicaoItemCentro()
    {
        return $this->idRequisicaoItemCentro;
    }

    /**
     * Set percentualCusto
     *
     * @param string $percentualCusto
     *
     * @return AmpRequisicaoItemCentro
     */
    public function setPercentualCusto($percentualCusto)
    {
        $this->percentualCusto = $percentualCusto;

        return $this;
    }

    /**
     * Get percentualCusto
     *
     * @return string
     */
    public function getPercentualCusto()
    {
        return $this->percentualCusto;
    }

    /**
     * Set idRequisicaoCompraItem
     *
     * @param \AmpRequisicaoCompraItem $idRequisicaoCompraItem
     *
     * @return AmpRequisicaoItemCentro
     */
    public function setIdRequisicaoCompraItem(\AmpRequisicaoCompraItem $idRequisicaoCompraItem = null)
    {
        $this->idRequisicaoCompraItem = $idRequisicaoCompraItem;

        return $this;
    }

    /**
     * Get idRequisicaoCompraItem
     *
     * @return \AmpRequisicaoCompraItem
     */
    public function getIdRequisicaoCompraItem()
    {
        return $this->idRequisicaoCompraItem;
    }

    /**
     * Set idCentroCusto
     *
     * @param \AmpCentroCusto $idCentroCusto
     *
     * @return AmpRequisicaoItemCentro
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

