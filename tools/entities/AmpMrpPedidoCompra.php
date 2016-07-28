<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpMrpPedidoCompra
 *
 * @ORM\Table(name="amp_mrp_pedido_compra", indexes={@ORM\Index(name="fk_amp_mrp_pedido_compra_2_idx", columns={"id_pedido_compra"}), @ORM\Index(name="fk_amp_mrp_pedido_compra_3_idx", columns={"id_entidade"}), @ORM\Index(name="fk_amp_mrp_pedido_compra_4_idx", columns={"id_produto"}), @ORM\Index(name="IDX_4543F02A6CE60373", columns={"id_mrp"})})
 * @ORM\Entity
 */
class AmpMrpPedidoCompra
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
     * @var \AmpPedidoCompra
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpPedidoCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra", referencedColumnName="id_pedido_compra")
     * })
     */
    private $idPedidoCompra;

    /**
     * @var \AmpEntidade
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidade;

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
     * @return AmpMrpPedidoCompra
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
     * Set idPedidoCompra
     *
     * @param \AmpPedidoCompra $idPedidoCompra
     *
     * @return AmpMrpPedidoCompra
     */
    public function setIdPedidoCompra(\AmpPedidoCompra $idPedidoCompra)
    {
        $this->idPedidoCompra = $idPedidoCompra;

        return $this;
    }

    /**
     * Get idPedidoCompra
     *
     * @return \AmpPedidoCompra
     */
    public function getIdPedidoCompra()
    {
        return $this->idPedidoCompra;
    }

    /**
     * Set idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpMrpPedidoCompra
     */
    public function setIdEntidade(\AmpEntidade $idEntidade)
    {
        $this->idEntidade = $idEntidade;

        return $this;
    }

    /**
     * Get idEntidade
     *
     * @return \AmpEntidade
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpMrpPedidoCompra
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

