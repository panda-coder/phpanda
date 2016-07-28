<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOrdemSeparacaoProduto
 *
 * @ORM\Table(name="amp_ordem_separacao_produto", indexes={@ORM\Index(name="fk_amp_item_ordem_separacao_1_idx", columns={"id_ordem_separacao"}), @ORM\Index(name="fk_amp_item_ordem_separacao_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_item_ordem_separacao_3_idx", columns={"id_pedido_venda_produto"}), @ORM\Index(name="fk_amp_ordem_separacao_produto_1_idx", columns={"id_endereco_estoque"}), @ORM\Index(name="fk_amp_ordem_separacao_produto_2_idx", columns={"id_lote"}), @ORM\Index(name="fk_amp_ordem_separacao_produto_3_idx", columns={"id_reserva_lote_endereco"})})
 * @ORM\Entity
 */
class AmpOrdemSeparacaoProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_separacao_produto_antiga", type="integer", nullable=true)
     */
    private $idOrdemSeparacaoProdutoAntiga;

    /**
     * @var string
     *
     * @ORM\Column(name="pedido_cliente", type="string", length=45, nullable=false)
     */
    private $pedidoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_rateio", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeRateio;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_separacao", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidadeSeparacao = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="status_conferencia", type="integer", nullable=false)
     */
    private $statusConferencia = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="peso_liquido_total", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoLiquidoTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_bruto_total", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoBrutoTotal;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=false)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpOrdemSeparacao
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemSeparacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_separacao", referencedColumnName="id_ordem_separacao")
     * })
     */
    private $idOrdemSeparacao;

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
     * @var \AmpPedidoVendaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoVendaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_venda_produto", referencedColumnName="id_pedido_venda_produto")
     * })
     */
    private $idPedidoVendaProduto;

    /**
     * @var \AmpEnderecoEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpEnderecoEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_endereco_estoque", referencedColumnName="id_endereco_estoque")
     * })
     */
    private $idEnderecoEstoque;

    /**
     * @var \AmpLote
     *
     * @ORM\ManyToOne(targetEntity="AmpLote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lote", referencedColumnName="id_lote")
     * })
     */
    private $idLote;

    /**
     * @var \AmpReservaLoteEndereco
     *
     * @ORM\ManyToOne(targetEntity="AmpReservaLoteEndereco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reserva_lote_endereco", referencedColumnName="id_reserva_lote_endereco")
     * })
     */
    private $idReservaLoteEndereco;

    /**
     * @var \AmpOrdemSeparacaoProduto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpOrdemSeparacaoProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_separacao_produto", referencedColumnName="id_ordem_separacao")
     * })
     */
    private $idOrdemSeparacaoProduto;


    /**
     * Set idOrdemSeparacaoProdutoAntiga
     *
     * @param int $idOrdemSeparacaoProdutoAntiga
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setIdOrdemSeparacaoProdutoAntiga($idOrdemSeparacaoProdutoAntiga)
    {
        $this->idOrdemSeparacaoProdutoAntiga = $idOrdemSeparacaoProdutoAntiga;

        return $this;
    }

    /**
     * Get idOrdemSeparacaoProdutoAntiga
     *
     * @return int
     */
    public function getIdOrdemSeparacaoProdutoAntiga()
    {
        return $this->idOrdemSeparacaoProdutoAntiga;
    }

    /**
     * Set pedidoCliente
     *
     * @param string $pedidoCliente
     *
     * @return AmpOrdemSeparacaoProduto
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
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpOrdemSeparacaoProduto
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
     * Set quantidadeRateio
     *
     * @param string $quantidadeRateio
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setQuantidadeRateio($quantidadeRateio)
    {
        $this->quantidadeRateio = $quantidadeRateio;

        return $this;
    }

    /**
     * Get quantidadeRateio
     *
     * @return string
     */
    public function getQuantidadeRateio()
    {
        return $this->quantidadeRateio;
    }

    /**
     * Set quantidadeSeparacao
     *
     * @param string $quantidadeSeparacao
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setQuantidadeSeparacao($quantidadeSeparacao)
    {
        $this->quantidadeSeparacao = $quantidadeSeparacao;

        return $this;
    }

    /**
     * Get quantidadeSeparacao
     *
     * @return string
     */
    public function getQuantidadeSeparacao()
    {
        return $this->quantidadeSeparacao;
    }

    /**
     * Set statusConferencia
     *
     * @param int $statusConferencia
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setStatusConferencia($statusConferencia)
    {
        $this->statusConferencia = $statusConferencia;

        return $this;
    }

    /**
     * Get statusConferencia
     *
     * @return int
     */
    public function getStatusConferencia()
    {
        return $this->statusConferencia;
    }

    /**
     * Set pesoLiquidoTotal
     *
     * @param string $pesoLiquidoTotal
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setPesoLiquidoTotal($pesoLiquidoTotal)
    {
        $this->pesoLiquidoTotal = $pesoLiquidoTotal;

        return $this;
    }

    /**
     * Get pesoLiquidoTotal
     *
     * @return string
     */
    public function getPesoLiquidoTotal()
    {
        return $this->pesoLiquidoTotal;
    }

    /**
     * Set pesoBrutoTotal
     *
     * @param string $pesoBrutoTotal
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setPesoBrutoTotal($pesoBrutoTotal)
    {
        $this->pesoBrutoTotal = $pesoBrutoTotal;

        return $this;
    }

    /**
     * Get pesoBrutoTotal
     *
     * @return string
     */
    public function getPesoBrutoTotal()
    {
        return $this->pesoBrutoTotal;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setIdUsuarioCriacao($idUsuarioCriacao)
    {
        $this->idUsuarioCriacao = $idUsuarioCriacao;

        return $this;
    }

    /**
     * Get idUsuarioCriacao
     *
     * @return int
     */
    public function getIdUsuarioCriacao()
    {
        return $this->idUsuarioCriacao;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setIdUsuarioAlteracao($idUsuarioAlteracao)
    {
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;

        return $this;
    }

    /**
     * Get idUsuarioAlteracao
     *
     * @return int
     */
    public function getIdUsuarioAlteracao()
    {
        return $this->idUsuarioAlteracao;
    }

    /**
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setDataUltimaAlteracao($dataUltimaAlteracao)
    {
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;

        return $this;
    }

    /**
     * Get dataUltimaAlteracao
     *
     * @return \DateTime
     */
    public function getDataUltimaAlteracao()
    {
        return $this->dataUltimaAlteracao;
    }

    /**
     * Set idOrdemSeparacao
     *
     * @param \AmpOrdemSeparacao $idOrdemSeparacao
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setIdOrdemSeparacao(\AmpOrdemSeparacao $idOrdemSeparacao = null)
    {
        $this->idOrdemSeparacao = $idOrdemSeparacao;

        return $this;
    }

    /**
     * Get idOrdemSeparacao
     *
     * @return \AmpOrdemSeparacao
     */
    public function getIdOrdemSeparacao()
    {
        return $this->idOrdemSeparacao;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpOrdemSeparacaoProduto
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
     * Set idPedidoVendaProduto
     *
     * @param \AmpPedidoVendaProduto $idPedidoVendaProduto
     *
     * @return AmpOrdemSeparacaoProduto
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

    /**
     * Set idEnderecoEstoque
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoque
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setIdEnderecoEstoque(\AmpEnderecoEstoque $idEnderecoEstoque = null)
    {
        $this->idEnderecoEstoque = $idEnderecoEstoque;

        return $this;
    }

    /**
     * Get idEnderecoEstoque
     *
     * @return \AmpEnderecoEstoque
     */
    public function getIdEnderecoEstoque()
    {
        return $this->idEnderecoEstoque;
    }

    /**
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setIdLote(\AmpLote $idLote = null)
    {
        $this->idLote = $idLote;

        return $this;
    }

    /**
     * Get idLote
     *
     * @return \AmpLote
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set idReservaLoteEndereco
     *
     * @param \AmpReservaLoteEndereco $idReservaLoteEndereco
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setIdReservaLoteEndereco(\AmpReservaLoteEndereco $idReservaLoteEndereco = null)
    {
        $this->idReservaLoteEndereco = $idReservaLoteEndereco;

        return $this;
    }

    /**
     * Get idReservaLoteEndereco
     *
     * @return \AmpReservaLoteEndereco
     */
    public function getIdReservaLoteEndereco()
    {
        return $this->idReservaLoteEndereco;
    }

    /**
     * Set idOrdemSeparacaoProduto
     *
     * @param \AmpOrdemSeparacaoProduto $idOrdemSeparacaoProduto
     *
     * @return AmpOrdemSeparacaoProduto
     */
    public function setIdOrdemSeparacaoProduto(\AmpOrdemSeparacaoProduto $idOrdemSeparacaoProduto)
    {
        $this->idOrdemSeparacaoProduto = $idOrdemSeparacaoProduto;

        return $this;
    }

    /**
     * Get idOrdemSeparacaoProduto
     *
     * @return \AmpOrdemSeparacaoProduto
     */
    public function getIdOrdemSeparacaoProduto()
    {
        return $this->idOrdemSeparacaoProduto;
    }
}

