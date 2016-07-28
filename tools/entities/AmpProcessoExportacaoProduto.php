<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProcessoExportacaoProduto
 *
 * @ORM\Table(name="amp_processo_exportacao_produto", indexes={@ORM\Index(name="fk_amp_processo_exportacao_produto_1_idx", columns={"id_processo_exportacao"}), @ORM\Index(name="fk_amp_processo_exportacao_produto_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_processo_exportacao_produto_3_idx", columns={"id_unidade_produto"}), @ORM\Index(name="fk_amp_processo_exportacao_produto_4_idx", columns={"id_pedido_venda_produto"})})
 * @ORM\Entity
 */
class AmpProcessoExportacaoProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_processo_exportacao_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProcessoExportacaoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="preco_tabela", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $precoTabela = '0.0000';

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
     * @var \AmpProcessoExportacao
     *
     * @ORM\ManyToOne(targetEntity="AmpProcessoExportacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_processo_exportacao", referencedColumnName="id_processo_exportacao")
     * })
     */
    private $idProcessoExportacao;

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
     * @var \AmpPedidoVendaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoVendaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_venda_produto", referencedColumnName="id_pedido_venda_produto")
     * })
     */
    private $idPedidoVendaProduto;


    /**
     * Get idProcessoExportacaoProduto
     *
     * @return int
     */
    public function getIdProcessoExportacaoProduto()
    {
        return $this->idProcessoExportacaoProduto;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpProcessoExportacaoProduto
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
     * Set precoTabela
     *
     * @param string $precoTabela
     *
     * @return AmpProcessoExportacaoProduto
     */
    public function setPrecoTabela($precoTabela)
    {
        $this->precoTabela = $precoTabela;

        return $this;
    }

    /**
     * Get precoTabela
     *
     * @return string
     */
    public function getPrecoTabela()
    {
        return $this->precoTabela;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpProcessoExportacaoProduto
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
     * @return AmpProcessoExportacaoProduto
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
     * @return AmpProcessoExportacaoProduto
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
     * @return AmpProcessoExportacaoProduto
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
     * Set idProcessoExportacao
     *
     * @param \AmpProcessoExportacao $idProcessoExportacao
     *
     * @return AmpProcessoExportacaoProduto
     */
    public function setIdProcessoExportacao(\AmpProcessoExportacao $idProcessoExportacao = null)
    {
        $this->idProcessoExportacao = $idProcessoExportacao;

        return $this;
    }

    /**
     * Get idProcessoExportacao
     *
     * @return \AmpProcessoExportacao
     */
    public function getIdProcessoExportacao()
    {
        return $this->idProcessoExportacao;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpProcessoExportacaoProduto
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
     * @return AmpProcessoExportacaoProduto
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
     * Set idPedidoVendaProduto
     *
     * @param \AmpPedidoVendaProduto $idPedidoVendaProduto
     *
     * @return AmpProcessoExportacaoProduto
     */
    public function setIdPedidoVendaProduto(\AmpPedidoVendaProduto $idPedidoVendaProduto = null)
    {
        $this->idPedidoVendaProduto = $idPedidoVendaProduto;

        return $this;
    }

    /**
     * Get idPedidoVendaProduto
     *
     * @return \AmpPedidoVendaProduto
     */
    public function getIdPedidoVendaProduto()
    {
        return $this->idPedidoVendaProduto;
    }
}

