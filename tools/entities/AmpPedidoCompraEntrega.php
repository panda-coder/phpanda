<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPedidoCompraEntrega
 *
 * @ORM\Table(name="amp_pedido_compra_entrega", indexes={@ORM\Index(name="fk_amp_pedido_compra_entrega_1_idx", columns={"id_pedido_compra_produto"})})
 * @ORM\Entity
 */
class AmpPedidoCompraEntrega
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_compra_entrega", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedidoCompraEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrega", type="datetime", nullable=false)
     */
    private $dataEntrega;

    /**
     * @var \AmpPedidoCompraProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoCompraProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra_produto", referencedColumnName="id_pedido_compra_produto")
     * })
     */
    private $idPedidoCompraProduto;


    /**
     * Get idPedidoCompraEntrega
     *
     * @return int
     */
    public function getIdPedidoCompraEntrega()
    {
        return $this->idPedidoCompraEntrega;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpPedidoCompraEntrega
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return string
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set dataEntrega
     *
     * @param \DateTime $dataEntrega
     *
     * @return AmpPedidoCompraEntrega
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
     * Set idPedidoCompraProduto
     *
     * @param \AmpPedidoCompraProduto $idPedidoCompraProduto
     *
     * @return AmpPedidoCompraEntrega
     */
    public function setIdPedidoCompraProduto(\AmpPedidoCompraProduto $idPedidoCompraProduto = null)
    {
        $this->idPedidoCompraProduto = $idPedidoCompraProduto;

        return $this;
    }

    /**
     * Get idPedidoCompraProduto
     *
     * @return \AmpPedidoCompraProduto
     */
    public function getIdPedidoCompraProduto()
    {
        return $this->idPedidoCompraProduto;
    }
}

