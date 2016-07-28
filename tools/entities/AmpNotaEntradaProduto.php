<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaEntradaProduto
 *
 * @ORM\Table(name="amp_nota_entrada_produto", indexes={@ORM\Index(name="fk_amp_nota_entrada_produto_1_idx", columns={"id_nota_entrada"}), @ORM\Index(name="fk_amp_nota_entrada_produto_2_idx", columns={"id_pedido_compra_produto"}), @ORM\Index(name="fk_amp_nota_entrada_produto_3_idx", columns={"id_pedido_compra"}), @ORM\Index(name="fk_amp_nota_entrada_produto_4_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_nota_entrada_produto_5_idx", columns={"id_unidade_produto"})})
 * @ORM\Entity
 */
class AmpNotaEntradaProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_entrada_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaEntradaProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="xprod", type="string", length=100, nullable=true)
     */
    private $xprod;

    /**
     * @var string
     *
     * @ORM\Column(name="xped", type="string", length=45, nullable=true)
     */
    private $xped;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=45, nullable=false)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm", type="string", length=45, nullable=false)
     */
    private $ncm;

    /**
     * @var string
     *
     * @ORM\Column(name="cest", type="string", length=45, nullable=true)
     */
    private $cest;

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
     * @ORM\Column(name="descricao_produto", type="string", length=150, nullable=false)
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
     * @ORM\Column(name="codigo_produto_cliente", type="string", length=45, nullable=true)
     */
    private $codigoProdutoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="unidade", type="string", length=5, nullable=false)
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
     * @ORM\Column(name="quantidade_recebida", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidadeRecebida = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_devolvida", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidadeDevolvida = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $baseCalculoIcms = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $baseCalculoSt = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_pis", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseCalculoPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_cofins", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseCalculoCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_ipi", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseIpi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="percent_red_base", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentRedBase = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitario = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorIcms = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pis", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_cofins", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ii", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorIi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_iss", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorIss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_produto", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorProduto = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total_ipi", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTotalIpi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTotalSt = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_desc_negociacao", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percDescNegociacao = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_desc_total", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percDescTotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ipi", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIpi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIcms = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_iva", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIva = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIcmsSt = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ii", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percIi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_pis", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_cofins", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percCofins = '0.0000';

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
     * @var \AmpNotaEntrada
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaEntrada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_entrada", referencedColumnName="id_nota_entrada")
     * })
     */
    private $idNotaEntrada;

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
     * @var \AmpPedidoCompra
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra", referencedColumnName="id_pedido_compra")
     * })
     */
    private $idPedidoCompra;

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
     * Get idNotaEntradaProduto
     *
     * @return int
     */
    public function getIdNotaEntradaProduto()
    {
        return $this->idNotaEntradaProduto;
    }

    /**
     * Set xprod
     *
     * @param string $xprod
     *
     * @return AmpNotaEntradaProduto
     */
    public function setXprod($xprod)
    {
        $this->xprod = $xprod;

        return $this;
    }

    /**
     * Get xprod
     *
     * @return string
     */
    public function getXprod()
    {
        return $this->xprod;
    }

    /**
     * Set xped
     *
     * @param string $xped
     *
     * @return AmpNotaEntradaProduto
     */
    public function setXped($xped)
    {
        $this->xped = $xped;

        return $this;
    }

    /**
     * Get xped
     *
     * @return string
     */
    public function getXped()
    {
        return $this->xped;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set numeroFci
     *
     * @param string $numeroFci
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set codigoProdutoCliente
     *
     * @param string $codigoProdutoCliente
     *
     * @return AmpNotaEntradaProduto
     */
    public function setCodigoProdutoCliente($codigoProdutoCliente)
    {
        $this->codigoProdutoCliente = $codigoProdutoCliente;

        return $this;
    }

    /**
     * Get codigoProdutoCliente
     *
     * @return string
     */
    public function getCodigoProdutoCliente()
    {
        return $this->codigoProdutoCliente;
    }

    /**
     * Set unidade
     *
     * @param string $unidade
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set quantidadeRecebida
     *
     * @param string $quantidadeRecebida
     *
     * @return AmpNotaEntradaProduto
     */
    public function setQuantidadeRecebida($quantidadeRecebida)
    {
        $this->quantidadeRecebida = $quantidadeRecebida;

        return $this;
    }

    /**
     * Get quantidadeRecebida
     *
     * @return string
     */
    public function getQuantidadeRecebida()
    {
        return $this->quantidadeRecebida;
    }

    /**
     * Set quantidadeDevolvida
     *
     * @param string $quantidadeDevolvida
     *
     * @return AmpNotaEntradaProduto
     */
    public function setQuantidadeDevolvida($quantidadeDevolvida)
    {
        $this->quantidadeDevolvida = $quantidadeDevolvida;

        return $this;
    }

    /**
     * Get quantidadeDevolvida
     *
     * @return string
     */
    public function getQuantidadeDevolvida()
    {
        return $this->quantidadeDevolvida;
    }

    /**
     * Set baseCalculoIcms
     *
     * @param string $baseCalculoIcms
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set baseCalculoPis
     *
     * @param string $baseCalculoPis
     *
     * @return AmpNotaEntradaProduto
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
     * Set baseCalculoCofins
     *
     * @param string $baseCalculoCofins
     *
     * @return AmpNotaEntradaProduto
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
     * Set baseIpi
     *
     * @param string $baseIpi
     *
     * @return AmpNotaEntradaProduto
     */
    public function setBaseIpi($baseIpi)
    {
        $this->baseIpi = $baseIpi;

        return $this;
    }

    /**
     * Get baseIpi
     *
     * @return string
     */
    public function getBaseIpi()
    {
        return $this->baseIpi;
    }

    /**
     * Set percentRedBase
     *
     * @param string $percentRedBase
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set valorTotalIpi
     *
     * @param string $valorTotalIpi
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set percDescNegociacao
     *
     * @param string $percDescNegociacao
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set percIi
     *
     * @param string $percIi
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
     * Set idNotaEntrada
     *
     * @param \AmpNotaEntrada $idNotaEntrada
     *
     * @return AmpNotaEntradaProduto
     */
    public function setIdNotaEntrada(\AmpNotaEntrada $idNotaEntrada = null)
    {
        $this->idNotaEntrada = $idNotaEntrada;

        return $this;
    }

    /**
     * Get idNotaEntrada
     *
     * @return \AmpNotaEntrada
     */
    public function getIdNotaEntrada()
    {
        return $this->idNotaEntrada;
    }

    /**
     * Set idPedidoCompraProduto
     *
     * @param \AmpPedidoCompraProduto $idPedidoCompraProduto
     *
     * @return AmpNotaEntradaProduto
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
     * Set idPedidoCompra
     *
     * @param \AmpPedidoCompra $idPedidoCompra
     *
     * @return AmpNotaEntradaProduto
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
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpNotaEntradaProduto
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
     * @return AmpNotaEntradaProduto
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
}

