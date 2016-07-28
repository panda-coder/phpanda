<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaFiscalProduto
 *
 * @ORM\Table(name="amp_nota_fiscal_produto", indexes={@ORM\Index(name="fk_amp_pedido_venda_itens_1_idx", columns={"id_pedido_venda"}), @ORM\Index(name="fk_amp_pedido_venda_itens_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_pedido_venda_itens_3_idx", columns={"id_unidade_produto"}), @ORM\Index(name="fk_amp_nota_fiscal_produto_4_idx", columns={"id_pedido_venda_produto"}), @ORM\Index(name="fk_amp_nota_fiscal_produto_5_idx", columns={"id_nota_fiscal"}), @ORM\Index(name="fk_amp_nota_fiscal_produto_6_idx", columns={"id_senf_produto"}), @ORM\Index(name="fk_amp_nota_fiscal_produto_7_idx", columns={"id_senf"}), @ORM\Index(name="fk_amp_nota_fiscal_produto_8_idx", columns={"id_lote"}), @ORM\Index(name="fk_amp_nota_fiscal_produto_10_idx", columns={"id_lote"})})
 * @ORM\Entity
 */
class AmpNotaFiscalProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_fiscal_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaFiscalProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=20, nullable=false)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm", type="string", length=8, nullable=false)
     */
    private $ncm;

    /**
     * @var string
     *
     * @ORM\Column(name="cest", type="string", length=20, nullable=true)
     */
    private $cest;

    /**
     * @var string
     *
     * @ORM\Column(name="cenq", type="string", length=20, nullable=false)
     */
    private $cenq;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_fci", type="string", length=45, nullable=true)
     */
    private $numeroFci;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop", type="string", length=4, nullable=false)
     */
    private $cfop;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_produto", type="string", length=45, nullable=false)
     */
    private $descricaoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_produto", type="string", length=45, nullable=false)
     */
    private $codigoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="unidade", type="string", length=2, nullable=false)
     */
    private $unidade;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_icms", type="string", length=2, nullable=false)
     */
    private $cstIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_pis_cofins", type="string", length=2, nullable=false)
     */
    private $cstPisCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_ipi", type="string", length=2, nullable=false)
     */
    private $cstIpi;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $baseCalculoIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $baseCalculoSt;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_red_base", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentRedBase;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitario;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pis", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorPis;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_cofins", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ii", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorIi;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_iss", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorIss;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_produto", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_desc_negociacao", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percDescNegociacao;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_desc_total", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percDescTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ipi", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIpi;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_iva", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIva;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIcmsSt;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total_ipi", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTotalIpi;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTotalSt;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ii", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIi;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_pis", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percPis;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_cofins", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="pedido_cliente", type="string", length=10, nullable=false)
     */
    private $pedidoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_liquido_total", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $pesoLiquidoTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_bruto_total", type="decimal", precision=13, scale=4, nullable=false)
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
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;

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
     * @var \AmpPedidoVendaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoVendaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_venda_produto", referencedColumnName="id_pedido_venda_produto")
     * })
     */
    private $idPedidoVendaProduto;

    /**
     * @var \AmpNotaFiscal
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaFiscal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_fiscal", referencedColumnName="id_nota_fiscal")
     * })
     */
    private $idNotaFiscal;

    /**
     * @var \AmpSenfProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpSenfProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_senf_produto", referencedColumnName="id_senf_produto")
     * })
     */
    private $idSenfProduto;

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
     * Get idNotaFiscalProduto
     *
     * @return int
     */
    public function getIdNotaFiscalProduto()
    {
        return $this->idNotaFiscalProduto;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return AmpNotaFiscalProduto
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set ncm
     *
     * @param string $ncm
     *
     * @return AmpNotaFiscalProduto
     */
    public function setNcm($ncm)
    {
        $this->ncm = $ncm;

        return $this;
    }

    /**
     * Get ncm
     *
     * @return string
     */
    public function getNcm()
    {
        return $this->ncm;
    }

    /**
     * Set cest
     *
     * @param string $cest
     *
     * @return AmpNotaFiscalProduto
     */
    public function setCest($cest)
    {
        $this->cest = $cest;

        return $this;
    }

    /**
     * Get cest
     *
     * @return string
     */
    public function getCest()
    {
        return $this->cest;
    }

    /**
     * Set cenq
     *
     * @param string $cenq
     *
     * @return AmpNotaFiscalProduto
     */
    public function setCenq($cenq)
    {
        $this->cenq = $cenq;

        return $this;
    }

    /**
     * Get cenq
     *
     * @return string
     */
    public function getCenq()
    {
        return $this->cenq;
    }

    /**
     * Set numeroFci
     *
     * @param string $numeroFci
     *
     * @return AmpNotaFiscalProduto
     */
    public function setNumeroFci($numeroFci)
    {
        $this->numeroFci = $numeroFci;

        return $this;
    }

    /**
     * Get numeroFci
     *
     * @return string
     */
    public function getNumeroFci()
    {
        return $this->numeroFci;
    }

    /**
     * Set cfop
     *
     * @param string $cfop
     *
     * @return AmpNotaFiscalProduto
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Get cfop
     *
     * @return string
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Set descricaoProduto
     *
     * @param string $descricaoProduto
     *
     * @return AmpNotaFiscalProduto
     */
    public function setDescricaoProduto($descricaoProduto)
    {
        $this->descricaoProduto = $descricaoProduto;

        return $this;
    }

    /**
     * Get descricaoProduto
     *
     * @return string
     */
    public function getDescricaoProduto()
    {
        return $this->descricaoProduto;
    }

    /**
     * Set codigoProduto
     *
     * @param string $codigoProduto
     *
     * @return AmpNotaFiscalProduto
     */
    public function setCodigoProduto($codigoProduto)
    {
        $this->codigoProduto = $codigoProduto;

        return $this;
    }

    /**
     * Get codigoProduto
     *
     * @return string
     */
    public function getCodigoProduto()
    {
        return $this->codigoProduto;
    }

    /**
     * Set unidade
     *
     * @param string $unidade
     *
     * @return AmpNotaFiscalProduto
     */
    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;

        return $this;
    }

    /**
     * Get unidade
     *
     * @return string
     */
    public function getUnidade()
    {
        return $this->unidade;
    }

    /**
     * Set cstIcms
     *
     * @param string $cstIcms
     *
     * @return AmpNotaFiscalProduto
     */
    public function setCstIcms($cstIcms)
    {
        $this->cstIcms = $cstIcms;

        return $this;
    }

    /**
     * Get cstIcms
     *
     * @return string
     */
    public function getCstIcms()
    {
        return $this->cstIcms;
    }

    /**
     * Set cstPisCofins
     *
     * @param string $cstPisCofins
     *
     * @return AmpNotaFiscalProduto
     */
    public function setCstPisCofins($cstPisCofins)
    {
        $this->cstPisCofins = $cstPisCofins;

        return $this;
    }

    /**
     * Get cstPisCofins
     *
     * @return string
     */
    public function getCstPisCofins()
    {
        return $this->cstPisCofins;
    }

    /**
     * Set cstIpi
     *
     * @param string $cstIpi
     *
     * @return AmpNotaFiscalProduto
     */
    public function setCstIpi($cstIpi)
    {
        $this->cstIpi = $cstIpi;

        return $this;
    }

    /**
     * Get cstIpi
     *
     * @return string
     */
    public function getCstIpi()
    {
        return $this->cstIpi;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpNotaFiscalProduto
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
     * Set baseCalculoIcms
     *
     * @param string $baseCalculoIcms
     *
     * @return AmpNotaFiscalProduto
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
     * Set baseCalculoSt
     *
     * @param string $baseCalculoSt
     *
     * @return AmpNotaFiscalProduto
     */
    public function setBaseCalculoSt($baseCalculoSt)
    {
        $this->baseCalculoSt = $baseCalculoSt;

        return $this;
    }

    /**
     * Get baseCalculoSt
     *
     * @return string
     */
    public function getBaseCalculoSt()
    {
        return $this->baseCalculoSt;
    }

    /**
     * Set percentRedBase
     *
     * @param string $percentRedBase
     *
     * @return AmpNotaFiscalProduto
     */
    public function setPercentRedBase($percentRedBase)
    {
        $this->percentRedBase = $percentRedBase;

        return $this;
    }

    /**
     * Get percentRedBase
     *
     * @return string
     */
    public function getPercentRedBase()
    {
        return $this->percentRedBase;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpNotaFiscalProduto
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
     * Set valorIcms
     *
     * @param string $valorIcms
     *
     * @return AmpNotaFiscalProduto
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
     * Set valorPis
     *
     * @param string $valorPis
     *
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * Set valorIi
     *
     * @param string $valorIi
     *
     * @return AmpNotaFiscalProduto
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
     * Set valorIss
     *
     * @param string $valorIss
     *
     * @return AmpNotaFiscalProduto
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
     * Set valorProduto
     *
     * @param string $valorProduto
     *
     * @return AmpNotaFiscalProduto
     */
    public function setValorProduto($valorProduto)
    {
        $this->valorProduto = $valorProduto;

        return $this;
    }

    /**
     * Get valorProduto
     *
     * @return string
     */
    public function getValorProduto()
    {
        return $this->valorProduto;
    }

    /**
     * Set valorTotal
     *
     * @param string $valorTotal
     *
     * @return AmpNotaFiscalProduto
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
     * Set percDescNegociacao
     *
     * @param string $percDescNegociacao
     *
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * Set pesoLiquidoTotal
     *
     * @param string $pesoLiquidoTotal
     *
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpNotaFiscalProduto
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
     * Set idUnidadeProduto
     *
     * @param \AmpUnidadeProduto $idUnidadeProduto
     *
     * @return AmpNotaFiscalProduto
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
     * @return AmpNotaFiscalProduto
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

    /**
     * Set idPedidoVendaProduto
     *
     * @param \AmpPedidoVendaProduto $idPedidoVendaProduto
     *
     * @return AmpNotaFiscalProduto
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
     * Set idNotaFiscal
     *
     * @param \AmpNotaFiscal $idNotaFiscal
     *
     * @return AmpNotaFiscalProduto
     */
    public function setIdNotaFiscal(\AmpNotaFiscal $idNotaFiscal = null)
    {
        $this->idNotaFiscal = $idNotaFiscal;

        return $this;
    }

    /**
     * Get idNotaFiscal
     *
     * @return \AmpNotaFiscal
     */
    public function getIdNotaFiscal()
    {
        return $this->idNotaFiscal;
    }

    /**
     * Set idSenfProduto
     *
     * @param \AmpSenfProduto $idSenfProduto
     *
     * @return AmpNotaFiscalProduto
     */
    public function setIdSenfProduto(\AmpSenfProduto $idSenfProduto = null)
    {
        $this->idSenfProduto = $idSenfProduto;

        return $this;
    }

    /**
     * Get idSenfProduto
     *
     * @return \AmpSenfProduto
     */
    public function getIdSenfProduto()
    {
        return $this->idSenfProduto;
    }

    /**
     * Set idSenf
     *
     * @param \AmpSenf $idSenf
     *
     * @return AmpNotaFiscalProduto
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
}

