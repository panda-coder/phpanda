<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpSenfProduto
 *
 * @ORM\Table(name="amp_senf_produto", indexes={@ORM\Index(name="fk_amp_senf_produto_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_senf_produto_3_idx", columns={"id_unidade_produto"}), @ORM\Index(name="fk_amp_senf_idx", columns={"id_senf"}), @ORM\Index(name="fk_amp_senf_produto_4_idx", columns={"id_lote"}), @ORM\Index(name="fk_amp_senf_produto_5_idx", columns={"id_endereco_estoque"}), @ORM\Index(name="fk_amp_senf_produto_6_idx", columns={"id_pedido_compra_devolucao_produto"})})
 * @ORM\Entity
 */
class AmpSenfProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_senf_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSenfProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="pedido_cliente", type="string", length=10, nullable=true)
     */
    private $pedidoCliente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="peso_liquido_total", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoLiquidoTotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="peso_bruto_total", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoBrutoTotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIcms = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ipi", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIpi = '0.0000';

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
     * @ORM\Column(name="perc_ii", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms_st", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIcmsSt = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_iva", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percIva = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_icms", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseCalculoIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_ipi", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseCalculoIpi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_pis", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseCalculoPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_icms_st", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseCalculoIcmsSt = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_cofins", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseCalculoCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ipi", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorIpi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_icms", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorIcms = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ii", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorIi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pis", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_cofins", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_iss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorIss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitario = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorTotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_st", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorSt = '0.0000';

    /**
     * @var \AmpSenf
     *
     * @ORM\ManyToOne(targetEntity="AmpSenf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_senf", referencedColumnName="id_senf")
     * })
     */
    private $idSenf;

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
     * @var \AmpLote
     *
     * @ORM\ManyToOne(targetEntity="AmpLote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lote", referencedColumnName="id_lote")
     * })
     */
    private $idLote;

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
     * @var \AmpPedidoCompraDevolucaoProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoCompraDevolucaoProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra_devolucao_produto", referencedColumnName="id_pedido_compra_devolucao_produto")
     * })
     */
    private $idPedidoCompraDevolucaoProduto;


    /**
     * Get idSenfProduto
     *
     * @return int
     */
    public function getIdSenfProduto()
    {
        return $this->idSenfProduto;
    }

    /**
     * Set pedidoCliente
     *
     * @param string $pedidoCliente
     *
     * @return AmpSenfProduto
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
     * @return AmpSenfProduto
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
     * Set pesoLiquidoTotal
     *
     * @param string $pesoLiquidoTotal
     *
     * @return AmpSenfProduto
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
     * @return AmpSenfProduto
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
     * Set percIcms
     *
     * @param string $percIcms
     *
     * @return AmpSenfProduto
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
     * @return AmpSenfProduto
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
     * Set percPis
     *
     * @param string $percPis
     *
     * @return AmpSenfProduto
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
     * @return AmpSenfProduto
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
     * Set percIi
     *
     * @param string $percIi
     *
     * @return AmpSenfProduto
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
     * Set percIcmsSt
     *
     * @param string $percIcmsSt
     *
     * @return AmpSenfProduto
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
     * Set percIva
     *
     * @param string $percIva
     *
     * @return AmpSenfProduto
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
     * Set baseCalculoIcms
     *
     * @param string $baseCalculoIcms
     *
     * @return AmpSenfProduto
     */
    public function setBaseCalculoIcms($baseCalculoIcms)
    {
        $this->baseCalculoIcms = $baseCalculoIcms;

        return $this;
    }

    /**
     * Get baseCalculoIcms
     *
     * @return string
     */
    public function getBaseCalculoIcms()
    {
        return $this->baseCalculoIcms;
    }

    /**
     * Set baseCalculoIpi
     *
     * @param string $baseCalculoIpi
     *
     * @return AmpSenfProduto
     */
    public function setBaseCalculoIpi($baseCalculoIpi)
    {
        $this->baseCalculoIpi = $baseCalculoIpi;

        return $this;
    }

    /**
     * Get baseCalculoIpi
     *
     * @return string
     */
    public function getBaseCalculoIpi()
    {
        return $this->baseCalculoIpi;
    }

    /**
     * Set baseCalculoPis
     *
     * @param string $baseCalculoPis
     *
     * @return AmpSenfProduto
     */
    public function setBaseCalculoPis($baseCalculoPis)
    {
        $this->baseCalculoPis = $baseCalculoPis;

        return $this;
    }

    /**
     * Get baseCalculoPis
     *
     * @return string
     */
    public function getBaseCalculoPis()
    {
        return $this->baseCalculoPis;
    }

    /**
     * Set baseCalculoIcmsSt
     *
     * @param string $baseCalculoIcmsSt
     *
     * @return AmpSenfProduto
     */
    public function setBaseCalculoIcmsSt($baseCalculoIcmsSt)
    {
        $this->baseCalculoIcmsSt = $baseCalculoIcmsSt;

        return $this;
    }

    /**
     * Get baseCalculoIcmsSt
     *
     * @return string
     */
    public function getBaseCalculoIcmsSt()
    {
        return $this->baseCalculoIcmsSt;
    }

    /**
     * Set baseCalculoCofins
     *
     * @param string $baseCalculoCofins
     *
     * @return AmpSenfProduto
     */
    public function setBaseCalculoCofins($baseCalculoCofins)
    {
        $this->baseCalculoCofins = $baseCalculoCofins;

        return $this;
    }

    /**
     * Get baseCalculoCofins
     *
     * @return string
     */
    public function getBaseCalculoCofins()
    {
        return $this->baseCalculoCofins;
    }

    /**
     * Set valorIpi
     *
     * @param string $valorIpi
     *
     * @return AmpSenfProduto
     */
    public function setValorIpi($valorIpi)
    {
        $this->valorIpi = $valorIpi;

        return $this;
    }

    /**
     * Get valorIpi
     *
     * @return string
     */
    public function getValorIpi()
    {
        return $this->valorIpi;
    }

    /**
     * Set valorIcms
     *
     * @param string $valorIcms
     *
     * @return AmpSenfProduto
     */
    public function setValorIcms($valorIcms)
    {
        $this->valorIcms = $valorIcms;

        return $this;
    }

    /**
     * Get valorIcms
     *
     * @return string
     */
    public function getValorIcms()
    {
        return $this->valorIcms;
    }

    /**
     * Set valorIi
     *
     * @param string $valorIi
     *
     * @return AmpSenfProduto
     */
    public function setValorIi($valorIi)
    {
        $this->valorIi = $valorIi;

        return $this;
    }

    /**
     * Get valorIi
     *
     * @return string
     */
    public function getValorIi()
    {
        return $this->valorIi;
    }

    /**
     * Set valorPis
     *
     * @param string $valorPis
     *
     * @return AmpSenfProduto
     */
    public function setValorPis($valorPis)
    {
        $this->valorPis = $valorPis;

        return $this;
    }

    /**
     * Get valorPis
     *
     * @return string
     */
    public function getValorPis()
    {
        return $this->valorPis;
    }

    /**
     * Set valorCofins
     *
     * @param string $valorCofins
     *
     * @return AmpSenfProduto
     */
    public function setValorCofins($valorCofins)
    {
        $this->valorCofins = $valorCofins;

        return $this;
    }

    /**
     * Get valorCofins
     *
     * @return string
     */
    public function getValorCofins()
    {
        return $this->valorCofins;
    }

    /**
     * Set valorIss
     *
     * @param string $valorIss
     *
     * @return AmpSenfProduto
     */
    public function setValorIss($valorIss)
    {
        $this->valorIss = $valorIss;

        return $this;
    }

    /**
     * Get valorIss
     *
     * @return string
     */
    public function getValorIss()
    {
        return $this->valorIss;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpSenfProduto
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
     * Set valorTotal
     *
     * @param string $valorTotal
     *
     * @return AmpSenfProduto
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get valorTotal
     *
     * @return string
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set valorSt
     *
     * @param string $valorSt
     *
     * @return AmpSenfProduto
     */
    public function setValorSt($valorSt)
    {
        $this->valorSt = $valorSt;

        return $this;
    }

    /**
     * Get valorSt
     *
     * @return string
     */
    public function getValorSt()
    {
        return $this->valorSt;
    }

    /**
     * Set idSenf
     *
     * @param \AmpSenf $idSenf
     *
     * @return AmpSenfProduto
     */
    public function setIdSenf(\AmpSenf $idSenf = null)
    {
        $this->idSenf = $idSenf;

        return $this;
    }

    /**
     * Get idSenf
     *
     * @return \AmpSenf
     */
    public function getIdSenf()
    {
        return $this->idSenf;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpSenfProduto
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
     * @return AmpSenfProduto
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
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpSenfProduto
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
     * Set idEnderecoEstoque
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoque
     *
     * @return AmpSenfProduto
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
     * Set idPedidoCompraDevolucaoProduto
     *
     * @param \AmpPedidoCompraDevolucaoProduto $idPedidoCompraDevolucaoProduto
     *
     * @return AmpSenfProduto
     */
    public function setIdPedidoCompraDevolucaoProduto(\AmpPedidoCompraDevolucaoProduto $idPedidoCompraDevolucaoProduto = null)
    {
        $this->idPedidoCompraDevolucaoProduto = $idPedidoCompraDevolucaoProduto;

        return $this;
    }

    /**
     * Get idPedidoCompraDevolucaoProduto
     *
     * @return \AmpPedidoCompraDevolucaoProduto
     */
    public function getIdPedidoCompraDevolucaoProduto()
    {
        return $this->idPedidoCompraDevolucaoProduto;
    }
}

