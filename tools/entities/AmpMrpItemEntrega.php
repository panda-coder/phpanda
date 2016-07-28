<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpMrpItemEntrega
 *
 * @ORM\Table(name="amp_mrp_item_entrega", indexes={@ORM\Index(name="fk_amp_mrp_item_entrega_1_idx", columns={"id_mrp_item"})})
 * @ORM\Entity
 */
class AmpMrpItemEntrega
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mrp_item_entrega", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMrpItemEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrega", type="datetime", nullable=true)
     */
    private $dataEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_entrega", type="decimal", precision=14, scale=5, nullable=true)
     */
    private $quantidadeEntrega;

    /**
     * @var \AmpMrpItem
     *
     * @ORM\ManyToOne(targetEntity="AmpMrpItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mrp_item", referencedColumnName="id_mrp_item")
     * })
     */
    private $idMrpItem;


    /**
     * Get idMrpItemEntrega
     *
     * @return int
     */
    public function getIdMrpItemEntrega()
    {
        return $this->idMrpItemEntrega;
    }

    /**
     * Set dataEntrega
     *
     * @param \DateTime $dataEntrega
     *
     * @return AmpMrpItemEntrega
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;

        return $this;
    }

    /**
     * Get dataEntrega
     *
     * @return \DateTime
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * Set quantidadeEntrega
     *
     * @param string $quantidadeEntrega
     *
     * @return AmpMrpItemEntrega
     */
    public function setQuantidadeEntrega($quantidadeEntrega)
    {
        $this->quantidadeEntrega = $quantidadeEntrega;

        return $this;
    }

    /**
     * Get quantidadeEntrega
     *
     * @return string
     */
    public function getQuantidadeEntrega()
    {
        return $this->quantidadeEntrega;
    }

    /**
     * Set idMrpItem
     *
     * @param \AmpMrpItem $idMrpItem
     *
     * @return AmpMrpItemEntrega
     */
    public function setIdMrpItem(\AmpMrpItem $idMrpItem = null)
    {
        $this->idMrpItem = $idMrpItem;

        return $this;
    }

    /**
     * Get idMrpItem
     *
     * @return \AmpMrpItem
     */
    public function getIdMrpItem()
    {
        return $this->idMrpItem;
    }
}

