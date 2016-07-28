<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPedidoCompraCentro
 *
 * @ORM\Table(name="amp_pedido_compra_centro", indexes={@ORM\Index(name="fk_amp_pedido_compra_centro_1_idx", columns={"id_pedido_compra_produto"}), @ORM\Index(name="fk_amp_pedido_compra_centro_2_idx", columns={"id_centro_custo"})})
 * @ORM\Entity
 */
class AmpPedidoCompraCentro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_compra_centro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedidoCompraCentro;

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_custo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentualCusto;

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
     * @var \AmpCentroCusto
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroCusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_custo", referencedColumnName="id_centro_custo")
     * })
     */
    private $idCentroCusto;


    /**
     * Get idPedidoCompraCentro
     *
     * @return int
     */
    public function getIdPedidoCompraCentro()
    {
        return $this->idPedidoCompraCentro;
    }

    /**
     * Set percentualCusto
     *
     * @param string $percentualCusto
     *
     * @return AmpPedidoCompraCentro
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
     * Set idPedidoCompraProduto
     *
     * @param \AmpPedidoCompraProduto $idPedidoCompraProduto
     *
     * @return AmpPedidoCompraCentro
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

    /**
     * Set idCentroCusto
     *
     * @param \AmpCentroCusto $idCentroCusto
     *
     * @return AmpPedidoCompraCentro
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

