<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPedidoVendaProduto
 *
 * @ORM\Table(name="amp_pedido_venda_produto", indexes={@ORM\Index(name="fk_amp_pedido_venda_itens_1_idx", columns={"id_pedido_venda"}), @ORM\Index(name="fk_amp_pedido_venda_itens_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_pedido_venda_itens_3_idx", columns={"id_unidade_produto"})})
 * @ORM\Entity
 */
class AmpPedidoVendaProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_venda_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedidoVendaProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_faturada", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidadeFaturada = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_cancelada", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeCancelada = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="preco_tabela", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $precoTabela = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitario = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario_sem_imposto", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitarioSemImposto = '0.0000';

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
     * @ORM\Column(name="perc_ipi", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIpi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIcms = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_iva", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIva = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms_st", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIcmsSt = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total_ipi", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorTotalIpi;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total_st", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorTotalSt;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ii", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_pis", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_cofins", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="pedido_cliente", type="string", length=30, nullable=true)
     */
    private $pedidoCliente = '0';

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
     * @var \AmpPedidoVenda
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoVenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_venda", referencedColumnName="id_pedido_venda")
     * })
     */
    private $idPedidoVenda;


    /**
     * Get idPedidoVendaProduto
     *
     * @return int
     */
    public function getIdPedidoVendaProduto()
    {
        return $this->idPedidoVendaProduto;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpPedidoVendaProduto
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
     * Set quantidadeFaturada
     *
     * @param string $quantidadeFaturada
     *
     * @return AmpPedidoVendaProduto
     */
    public function setQuantidadeFaturada($quantidadeFaturada)
    {
        $this->quantidadeFaturada = $quantidadeFaturada;

        return $this;
    }

    /**
     * Get quantidadeFaturada
     *
     * @return string
     */
    public function getQuantidadeFaturada()
    {
        return $this->quantidadeFaturada;
    }

    /**
     * Set quantidadeCancelada
     *
     * @param string $quantidadeCancelada
     *
     * @return AmpPedidoVendaProduto
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
     * Set precoTabela
     *
     * @param string $precoTabela
     *
     * @return AmpPedidoVendaProduto
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
     * @return AmpPedidoVendaProduto
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
     * Set valorUnitarioSemImposto
     *
     * @param string $valorUnitarioSemImposto
     *
     * @return AmpPedidoVendaProduto
     */
    public function setValorUnitarioSemImposto($valorUnitarioSemImposto)
    {
        $this->valorUnitarioSemImposto = $valorUnitarioSemImposto;

        return $this;
    }

    /**
     * Get valorUnitarioSemImposto
     *
     * @return string
     */
    public function getValorUnitarioSemImposto()
    {
        return $this->valorUnitarioSemImposto;
    }

    /**
     * Set percDescNegociacao
     *
     * @param string $percDescNegociacao
     *
     * @return AmpPedidoVendaProduto
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
     * @return AmpPedidoVendaProduto
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
     * Set percIpi
     *
     * @param string $percIpi
     *
     * @return AmpPedidoVendaProduto
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
     * Set percIcms
     *
     * @param string $percIcms
     *
     * @return AmpPedidoVendaProduto
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
     * Set percIva
     *
     * @param string $percIva
     *
     * @return AmpPedidoVendaProduto
     */
    public function setPercIva($percIva)
    {
        $this->percIva = $percIva;

        return $this;
    }

    /**
     * Get percIva
     *
     * @return string
     */
    public function getPercIva()
    {
        return $this->percIva;
    }

    /**
     * Set percIcmsSt
     *
     * @param string $percIcmsSt
     *
     * @return AmpPedidoVendaProduto
     */
    public function setPercIcmsSt($percIcmsSt)
    {
        $this->percIcmsSt = $percIcmsSt;

        return $this;
    }

    /**
     * Get percIcmsSt
     *
     * @return string
     */
    public function getPercIcmsSt()
    {
        return $this->percIcmsSt;
    }

    /**
     * Set valorTotalIpi
     *
     * @param string $valorTotalIpi
     *
     * @return AmpPedidoVendaProduto
     */
    public function setValorTotalIpi($valorTotalIpi)
    {
        $this->valorTotalIpi = $valorTotalIpi;

        return $this;
    }

    /**
     * Get valorTotalIpi
     *
     * @return string
     */
    public function getValorTotalIpi()
    {
        return $this->valorTotalIpi;
    }

    /**
     * Set valorTotalSt
     *
     * @param string $valorTotalSt
     *
     * @return AmpPedidoVendaProduto
     */
    public function setValorTotalSt($valorTotalSt)
    {
        $this->valorTotalSt = $valorTotalSt;

        return $this;
    }

    /**
     * Get valorTotalSt
     *
     * @return string
     */
    public function getValorTotalSt()
    {
        return $this->valorTotalSt;
    }

    /**
     * Set percIi
     *
     * @param string $percIi
     *
     * @return AmpPedidoVendaProduto
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
     * Set percPis
     *
     * @param string $percPis
     *
     * @return AmpPedidoVendaProduto
     */
    public function setPercPis($percPis)
    {
        $this->percPis = $percPis;

        return $this;
    }

    /**
     * Get percPis
     *
     * @return string
     */
    public function getPercPis()
    {
        return $this->percPis;
    }

    /**
     * Set percCofins
     *
     * @param string $percCofins
     *
     * @return AmpPedidoVendaProduto
     */
    public function setPercCofins($percCofins)
    {
        $this->percCofins = $percCofins;

        return $this;
    }

    /**
     * Get percCofins
     *
     * @return string
     */
    public function getPercCofins()
    {
        return $this->percCofins;
    }

    /**
     * Set pedidoCliente
     *
     * @param string $pedidoCliente
     *
     * @return AmpPedidoVendaProduto
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPedidoVendaProduto
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
     * @return AmpPedidoVendaProduto
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
     * @return AmpPedidoVendaProduto
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
     * @return AmpPedidoVendaProduto
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
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpPedidoVendaProduto
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
     * @return AmpPedidoVendaProduto
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
     * Set idPedidoVenda
     *
     * @param \AmpPedidoVenda $idPedidoVenda
     *
     * @return AmpPedidoVendaProduto
     */
    public function setIdPedidoVenda(\AmpPedidoVenda $idPedidoVenda = null)
    {
        $this->idPedidoVenda = $idPedidoVenda;

        return $this;
    }

    /**
     * Get idPedidoVenda
     *
     * @return \AmpPedidoVenda
     */
    public function getIdPedidoVenda()
    {
        return $this->idPedidoVenda;
    }
}

