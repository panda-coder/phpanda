<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProcessoImportacaoProduto
 *
 * @ORM\Table(name="amp_processo_importacao_produto", indexes={@ORM\Index(name="fk_amp_processo_importacao_produto_1_idx", columns={"id_processo_importacao"}), @ORM\Index(name="fk_amp_processo_importacao_produto_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_processo_importacao_produto_3_idx", columns={"id_unidade_produto"}), @ORM\Index(name="fk_amp_processo_importacao_produto_4_idx", columns={"id_pedido_compra_produto"})})
 * @ORM\Entity
 */
class AmpProcessoImportacaoProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_processo_importacao_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProcessoImportacaoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ii", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_ii", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseIi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorUnitario = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_desc_negociacao", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percDescNegociacao = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_desc_total", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percDescTotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="pedido_cliente", type="string", length=10, nullable=true)
     */
    private $pedidoCliente = '0';

    /**
     * @var \AmpProcessoImportacao
     *
     * @ORM\ManyToOne(targetEntity="AmpProcessoImportacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_processo_importacao", referencedColumnName="id_processo_importacao")
     * })
     */
    private $idProcessoImportacao;

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
     * @var \AmpUnidadeProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpUnidadeProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidade_produto", referencedColumnName="id_unidade_produto")
     * })
     */
    private $idUnidadeProduto;

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
     * Get idProcessoImportacaoProduto
     *
     * @return int
     */
    public function getIdProcessoImportacaoProduto()
    {
        return $this->idProcessoImportacaoProduto;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpProcessoImportacaoProduto
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
     * Set percIi
     *
     * @param string $percIi
     *
     * @return AmpProcessoImportacaoProduto
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
     * Set baseIi
     *
     * @param string $baseIi
     *
     * @return AmpProcessoImportacaoProduto
     */
    public function setBaseIi($baseIi)
    {
        $this->baseIi = $baseIi;

        return $this;
    }

    /**
     * Get baseIi
     *
     * @return string
     */
    public function getBaseIi()
    {
        return $this->baseIi;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpProcessoImportacaoProduto
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
     * Set percDescNegociacao
     *
     * @param string $percDescNegociacao
     *
     * @return AmpProcessoImportacaoProduto
     */
    public function setPercDescNegociacao($percDescNegociacao)
    {
        $this->percDescNegociacao = $percDescNegociacao;

        return $this;
    }

    /**
     * Get percDescNegociacao
     *
     * @return string
     */
    public function getPercDescNegociacao()
    {
        return $this->percDescNegociacao;
    }

    /**
     * Set percDescTotal
     *
     * @param string $percDescTotal
     *
     * @return AmpProcessoImportacaoProduto
     */
    public function setPercDescTotal($percDescTotal)
    {
        $this->percDescTotal = $percDescTotal;

        return $this;
    }

    /**
     * Get percDescTotal
     *
     * @return string
     */
    public function getPercDescTotal()
    {
        return $this->percDescTotal;
    }

    /**
     * Set pedidoCliente
     *
     * @param string $pedidoCliente
     *
     * @return AmpProcessoImportacaoProduto
     */
    public function setPedidoCliente($pedidoCliente)
    {
        $this->pedidoCliente = $pedidoCliente;

        return $this;
    }

    /**
     * Get pedidoCliente
     *
     * @return string
     */
    public function getPedidoCliente()
    {
        return $this->pedidoCliente;
    }

    /**
     * Set idProcessoImportacao
     *
     * @param \AmpProcessoImportacao $idProcessoImportacao
     *
     * @return AmpProcessoImportacaoProduto
     */
    public function setIdProcessoImportacao(\AmpProcessoImportacao $idProcessoImportacao = null)
    {
        $this->idProcessoImportacao = $idProcessoImportacao;

        return $this;
    }

    /**
     * Get idProcessoImportacao
     *
     * @return \AmpProcessoImportacao
     */
    public function getIdProcessoImportacao()
    {
        return $this->idProcessoImportacao;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpProcessoImportacaoProduto
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
     * Set idUnidadeProduto
     *
     * @param \AmpUnidadeProduto $idUnidadeProduto
     *
     * @return AmpProcessoImportacaoProduto
     */
    public function setIdUnidadeProduto(\AmpUnidadeProduto $idUnidadeProduto = null)
    {
        $this->idUnidadeProduto = $idUnidadeProduto;

        return $this;
    }

    /**
     * Get idUnidadeProduto
     *
     * @return \AmpUnidadeProduto
     */
    public function getIdUnidadeProduto()
    {
        return $this->idUnidadeProduto;
    }

    /**
     * Set idPedidoCompraProduto
     *
     * @param \AmpPedidoCompraProduto $idPedidoCompraProduto
     *
     * @return AmpProcessoImportacaoProduto
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

