<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPedidoCompraProduto
 *
 * @ORM\Table(name="amp_pedido_compra_produto", indexes={@ORM\Index(name="fk_amp_pedido_compra_produto_2_idx", columns={"id_pedido_compra"}), @ORM\Index(name="fk_amp_pedido_compra_produto_1_idx", columns={"id_produto"}), @ORM\Index(name="fk_id_escritura_finalidade_idx2", columns={"id_escritura_finalidade"})})
 * @ORM\Entity
 */
class AmpPedidoCompraProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_compra_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedidoCompraProduto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_unidade_produto", type="integer", nullable=false)
     */
    private $idUnidadeProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_requisicao_compra", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeRequisicaoCompra = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitario;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_entregue", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeEntregue = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_cancelada", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeCancelada = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_item", type="integer", nullable=true)
     */
    private $tipoItem;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIcms = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ipi", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIpi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ii", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIi = '0.0000';

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
     * @var \AmpPedidoCompra
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra", referencedColumnName="id_pedido_compra")
     * })
     */
    private $idPedidoCompra;

    /**
     * @var \AmpEscrituraFinalidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEscrituraFinalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_escritura_finalidade", referencedColumnName="id_escritura_finalidade")
     * })
     */
    private $idEscrituraFinalidade;


    /**
     * Get idPedidoCompraProduto
     *
     * @return int
     */
    public function getIdPedidoCompraProduto()
    {
        return $this->idPedidoCompraProduto;
    }

    /**
     * Set idUnidadeProduto
     *
     * @param int $idUnidadeProduto
     *
     * @return AmpPedidoCompraProduto
     */
    public function setIdUnidadeProduto($idUnidadeProduto)
    {
        $this->idUnidadeProduto = $idUnidadeProduto;

        return $this;
    }

    /**
     * Get idUnidadeProduto
     *
     * @return int
     */
    public function getIdUnidadeProduto()
    {
        return $this->idUnidadeProduto;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpPedidoCompraProduto
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
     * Set quantidadeRequisicaoCompra
     *
     * @param string $quantidadeRequisicaoCompra
     *
     * @return AmpPedidoCompraProduto
     */
    public function setQuantidadeRequisicaoCompra($quantidadeRequisicaoCompra)
    {
        $this->quantidadeRequisicaoCompra = $quantidadeRequisicaoCompra;

        return $this;
    }

    /**
     * Get quantidadeRequisicaoCompra
     *
     * @return string
     */
    public function getQuantidadeRequisicaoCompra()
    {
        return $this->quantidadeRequisicaoCompra;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpPedidoCompraProduto
     */
    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * Get valorUnitario
     *
     * @return string
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set quantidadeEntregue
     *
     * @param string $quantidadeEntregue
     *
     * @return AmpPedidoCompraProduto
     */
    public function setQuantidadeEntregue($quantidadeEntregue)
    {
        $this->quantidadeEntregue = $quantidadeEntregue;

        return $this;
    }

    /**
     * Get quantidadeEntregue
     *
     * @return string
     */
    public function getQuantidadeEntregue()
    {
        return $this->quantidadeEntregue;
    }

    /**
     * Set quantidadeCancelada
     *
     * @param string $quantidadeCancelada
     *
     * @return AmpPedidoCompraProduto
     */
    public function setQuantidadeCancelada($quantidadeCancelada)
    {
        $this->quantidadeCancelada = $quantidadeCancelada;

        return $this;
    }

    /**
     * Get quantidadeCancelada
     *
     * @return string
     */
    public function getQuantidadeCancelada()
    {
        return $this->quantidadeCancelada;
    }

    /**
     * Set tipoItem
     *
     * @param int $tipoItem
     *
     * @return AmpPedidoCompraProduto
     */
    public function setTipoItem($tipoItem)
    {
        $this->tipoItem = $tipoItem;

        return $this;
    }

    /**
     * Get tipoItem
     *
     * @return int
     */
    public function getTipoItem()
    {
        return $this->tipoItem;
    }

    /**
     * Set percIcms
     *
     * @param string $percIcms
     *
     * @return AmpPedidoCompraProduto
     */
    public function setPercIcms($percIcms)
    {
        $this->percIcms = $percIcms;

        return $this;
    }

    /**
     * Get percIcms
     *
     * @return string
     */
    public function getPercIcms()
    {
        return $this->percIcms;
    }

    /**
     * Set percIpi
     *
     * @param string $percIpi
     *
     * @return AmpPedidoCompraProduto
     */
    public function setPercIpi($percIpi)
    {
        $this->percIpi = $percIpi;

        return $this;
    }

    /**
     * Get percIpi
     *
     * @return string
     */
    public function getPercIpi()
    {
        return $this->percIpi;
    }

    /**
     * Set percIi
     *
     * @param string $percIi
     *
     * @return AmpPedidoCompraProduto
     */
    public function setPercIi($percIi)
    {
        $this->percIi = $percIi;

        return $this;
    }

    /**
     * Get percIi
     *
     * @return string
     */
    public function getPercIi()
    {
        return $this->percIi;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpPedidoCompraProduto
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

    /**
     * Set idPedidoCompra
     *
     * @param \AmpPedidoCompra $idPedidoCompra
     *
     * @return AmpPedidoCompraProduto
     */
    public function setIdPedidoCompra(\AmpPedidoCompra $idPedidoCompra = null)
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
     * Set idEscrituraFinalidade
     *
     * @param \AmpEscrituraFinalidade $idEscrituraFinalidade
     *
     * @return AmpPedidoCompraProduto
     */
    public function setIdEscrituraFinalidade(\AmpEscrituraFinalidade $idEscrituraFinalidade = null)
    {
        $this->idEscrituraFinalidade = $idEscrituraFinalidade;

        return $this;
    }

    /**
     * Get idEscrituraFinalidade
     *
     * @return \AmpEscrituraFinalidade
     */
    public function getIdEscrituraFinalidade()
    {
        return $this->idEscrituraFinalidade;
    }
}

