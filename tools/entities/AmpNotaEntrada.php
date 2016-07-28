<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaEntrada
 *
 * @ORM\Table(name="amp_nota_entrada", uniqueConstraints={@ORM\UniqueConstraint(name="uq_numero_nota_id_entidade", columns={"id_entidade", "numero_nota"}), @ORM\UniqueConstraint(name="uq_chave_nota_entrada", columns={"chave_nfe"})}, indexes={@ORM\Index(name="fk_amp_pedido_venda_1_idx", columns={"id_entidade"})})
 * @ORM\Entity
 */
class AmpNotaEntrada
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_entrada", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaEntrada;

    /**
     * @var int
     *
     * @ORM\Column(name="id_macro_operacao", type="integer", nullable=true)
     */
    private $idMacroOperacao;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_nota", type="integer", nullable=true)
     */
    private $numeroNota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_emissao", type="datetime", nullable=false)
     */
    private $dataEmissao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrada", type="datetime", nullable=true)
     */
    private $dataEntrada;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=150, nullable=false)
     */
    private $razaoSocial;

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
     * @ORM\Column(name="total_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalIcms = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_produtos", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalProdutos = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalSt = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_ii", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalIi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_ipi", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalIpi = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_pis", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_cofins", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_outros", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalOutros = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_iss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalIss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_irrf", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalIrrf = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_csll", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalCsll = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_inss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalInss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total_nota", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTotalNota = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="chave_nfe", type="string", length=45, nullable=true)
     */
    private $chaveNfe;

    /**
     * @var string
     *
     * @ORM\Column(name="nat_operacao", type="string", length=150, nullable=true)
     */
    private $natOperacao;

    /**
     * @var string
     *
     * @ORM\Column(name="protocolo", type="string", length=45, nullable=true)
     */
    private $protocolo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=false)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="frete_valor", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $freteValor;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro_valor", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $seguroValor = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_retencao_iss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseRetencaoIss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_retencao_iss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percRetencaoIss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_retencao_iss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalRetencaoIss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_retencao_irrf", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseRetencaoIrrf = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_retencao_irrf", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percRetencaoIrrf = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_retencao_irrf", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalRetencaoIrrf = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_retencao_inss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseRetencaoInss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_retencao_inss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percRetencaoInss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_retencao_inss", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalRetencaoInss = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_retencao_pis", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseRetencaoPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_retencao_pis", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percRetencaoPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_retencao_pis", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalRetencaoPis = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_retencao_cofins", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseRetencaoCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_retencao_cofins", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percRetencaoCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_retencao_cofins", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalRetencaoCofins = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_retencao_csll", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseRetencaoCsll = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_retencao_csll", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percRetencaoCsll = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_retencao_csll", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $totalRetencaoCsll = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=false)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidade;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpTitulo", mappedBy="idNotaEntrada")
     */
    private $idTitulo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTitulo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idNotaEntrada
     *
     * @return int
     */
    public function getIdNotaEntrada()
    {
        return $this->idNotaEntrada;
    }

    /**
     * Set idMacroOperacao
     *
     * @param int $idMacroOperacao
     *
     * @return AmpNotaEntrada
     */
    public function setIdMacroOperacao($idMacroOperacao)
    {
        $this->idMacroOperacao = $idMacroOperacao;

        return $this;
    }

    /**
     * Get idMacroOperacao
     *
     * @return int
     */
    public function getIdMacroOperacao()
    {
        return $this->idMacroOperacao;
    }

    /**
     * Set numeroNota
     *
     * @param int $numeroNota
     *
     * @return AmpNotaEntrada
     */
    public function setNumeroNota($numeroNota)
    {
        $this->numeroNota = $numeroNota;

        return $this;
    }

    /**
     * Get numeroNota
     *
     * @return int
     */
    public function getNumeroNota()
    {
        return $this->numeroNota;
    }

    /**
     * Set dataEmissao
     *
     * @param \DateTime $dataEmissao
     *
     * @return AmpNotaEntrada
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;

        return $this;
    }

    /**
     * Get dataEmissao
     *
     * @return \DateTime
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * Set dataEntrada
     *
     * @param \DateTime $dataEntrada
     *
     * @return AmpNotaEntrada
     */
    public function setDataEntrada($dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;

        return $this;
    }

    /**
     * Get dataEntrada
     *
     * @return \DateTime
     */
    public function getDataEntrada()
    {
        return $this->dataEntrada;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     *
     * @return AmpNotaEntrada
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set baseCalculoIcms
     *
     * @param string $baseCalculoIcms
     *
     * @return AmpNotaEntrada
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
     * @return AmpNotaEntrada
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
     * Set totalIcms
     *
     * @param string $totalIcms
     *
     * @return AmpNotaEntrada
     */
    public function setTotalIcms($totalIcms)
    {
        $this->totalIcms = $totalIcms;

        return $this;
    }

    /**
     * Get totalIcms
     *
     * @return string
     */
    public function getTotalIcms()
    {
        return $this->totalIcms;
    }

    /**
     * Set totalProdutos
     *
     * @param string $totalProdutos
     *
     * @return AmpNotaEntrada
     */
    public function setTotalProdutos($totalProdutos)
    {
        $this->totalProdutos = $totalProdutos;

        return $this;
    }

    /**
     * Get totalProdutos
     *
     * @return string
     */
    public function getTotalProdutos()
    {
        return $this->totalProdutos;
    }

    /**
     * Set totalSt
     *
     * @param string $totalSt
     *
     * @return AmpNotaEntrada
     */
    public function setTotalSt($totalSt)
    {
        $this->totalSt = $totalSt;

        return $this;
    }

    /**
     * Get totalSt
     *
     * @return string
     */
    public function getTotalSt()
    {
        return $this->totalSt;
    }

    /**
     * Set totalIi
     *
     * @param string $totalIi
     *
     * @return AmpNotaEntrada
     */
    public function setTotalIi($totalIi)
    {
        $this->totalIi = $totalIi;

        return $this;
    }

    /**
     * Get totalIi
     *
     * @return string
     */
    public function getTotalIi()
    {
        return $this->totalIi;
    }

    /**
     * Set totalIpi
     *
     * @param string $totalIpi
     *
     * @return AmpNotaEntrada
     */
    public function setTotalIpi($totalIpi)
    {
        $this->totalIpi = $totalIpi;

        return $this;
    }

    /**
     * Get totalIpi
     *
     * @return string
     */
    public function getTotalIpi()
    {
        return $this->totalIpi;
    }

    /**
     * Set totalPis
     *
     * @param string $totalPis
     *
     * @return AmpNotaEntrada
     */
    public function setTotalPis($totalPis)
    {
        $this->totalPis = $totalPis;

        return $this;
    }

    /**
     * Get totalPis
     *
     * @return string
     */
    public function getTotalPis()
    {
        return $this->totalPis;
    }

    /**
     * Set totalCofins
     *
     * @param string $totalCofins
     *
     * @return AmpNotaEntrada
     */
    public function setTotalCofins($totalCofins)
    {
        $this->totalCofins = $totalCofins;

        return $this;
    }

    /**
     * Get totalCofins
     *
     * @return string
     */
    public function getTotalCofins()
    {
        return $this->totalCofins;
    }

    /**
     * Set totalOutros
     *
     * @param string $totalOutros
     *
     * @return AmpNotaEntrada
     */
    public function setTotalOutros($totalOutros)
    {
        $this->totalOutros = $totalOutros;

        return $this;
    }

    /**
     * Get totalOutros
     *
     * @return string
     */
    public function getTotalOutros()
    {
        return $this->totalOutros;
    }

    /**
     * Set totalIss
     *
     * @param string $totalIss
     *
     * @return AmpNotaEntrada
     */
    public function setTotalIss($totalIss)
    {
        $this->totalIss = $totalIss;

        return $this;
    }

    /**
     * Get totalIss
     *
     * @return string
     */
    public function getTotalIss()
    {
        return $this->totalIss;
    }

    /**
     * Set totalIrrf
     *
     * @param string $totalIrrf
     *
     * @return AmpNotaEntrada
     */
    public function setTotalIrrf($totalIrrf)
    {
        $this->totalIrrf = $totalIrrf;

        return $this;
    }

    /**
     * Get totalIrrf
     *
     * @return string
     */
    public function getTotalIrrf()
    {
        return $this->totalIrrf;
    }

    /**
     * Set totalCsll
     *
     * @param string $totalCsll
     *
     * @return AmpNotaEntrada
     */
    public function setTotalCsll($totalCsll)
    {
        $this->totalCsll = $totalCsll;

        return $this;
    }

    /**
     * Get totalCsll
     *
     * @return string
     */
    public function getTotalCsll()
    {
        return $this->totalCsll;
    }

    /**
     * Set totalInss
     *
     * @param string $totalInss
     *
     * @return AmpNotaEntrada
     */
    public function setTotalInss($totalInss)
    {
        $this->totalInss = $totalInss;

        return $this;
    }

    /**
     * Get totalInss
     *
     * @return string
     */
    public function getTotalInss()
    {
        return $this->totalInss;
    }

    /**
     * Set valorTotalNota
     *
     * @param string $valorTotalNota
     *
     * @return AmpNotaEntrada
     */
    public function setValorTotalNota($valorTotalNota)
    {
        $this->valorTotalNota = $valorTotalNota;

        return $this;
    }

    /**
     * Get valorTotalNota
     *
     * @return string
     */
    public function getValorTotalNota()
    {
        return $this->valorTotalNota;
    }

    /**
     * Set status
     *
     * @param int $status
     *
     * @return AmpNotaEntrada
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set chaveNfe
     *
     * @param string $chaveNfe
     *
     * @return AmpNotaEntrada
     */
    public function setChaveNfe($chaveNfe)
    {
        $this->chaveNfe = $chaveNfe;

        return $this;
    }

    /**
     * Get chaveNfe
     *
     * @return string
     */
    public function getChaveNfe()
    {
        return $this->chaveNfe;
    }

    /**
     * Set natOperacao
     *
     * @param string $natOperacao
     *
     * @return AmpNotaEntrada
     */
    public function setNatOperacao($natOperacao)
    {
        $this->natOperacao = $natOperacao;

        return $this;
    }

    /**
     * Get natOperacao
     *
     * @return string
     */
    public function getNatOperacao()
    {
        return $this->natOperacao;
    }

    /**
     * Set protocolo
     *
     * @param string $protocolo
     *
     * @return AmpNotaEntrada
     */
    public function setProtocolo($protocolo)
    {
        $this->protocolo = $protocolo;

        return $this;
    }

    /**
     * Get protocolo
     *
     * @return string
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpNotaEntrada
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set freteValor
     *
     * @param string $freteValor
     *
     * @return AmpNotaEntrada
     */
    public function setFreteValor($freteValor)
    {
        $this->freteValor = $freteValor;

        return $this;
    }

    /**
     * Get freteValor
     *
     * @return string
     */
    public function getFreteValor()
    {
        return $this->freteValor;
    }

    /**
     * Set seguroValor
     *
     * @param string $seguroValor
     *
     * @return AmpNotaEntrada
     */
    public function setSeguroValor($seguroValor)
    {
        $this->seguroValor = $seguroValor;

        return $this;
    }

    /**
     * Get seguroValor
     *
     * @return string
     */
    public function getSeguroValor()
    {
        return $this->seguroValor;
    }

    /**
     * Set baseRetencaoIss
     *
     * @param string $baseRetencaoIss
     *
     * @return AmpNotaEntrada
     */
    public function setBaseRetencaoIss($baseRetencaoIss)
    {
        $this->baseRetencaoIss = $baseRetencaoIss;

        return $this;
    }

    /**
     * Get baseRetencaoIss
     *
     * @return string
     */
    public function getBaseRetencaoIss()
    {
        return $this->baseRetencaoIss;
    }

    /**
     * Set percRetencaoIss
     *
     * @param string $percRetencaoIss
     *
     * @return AmpNotaEntrada
     */
    public function setPercRetencaoIss($percRetencaoIss)
    {
        $this->percRetencaoIss = $percRetencaoIss;

        return $this;
    }

    /**
     * Get percRetencaoIss
     *
     * @return string
     */
    public function getPercRetencaoIss()
    {
        return $this->percRetencaoIss;
    }

    /**
     * Set totalRetencaoIss
     *
     * @param string $totalRetencaoIss
     *
     * @return AmpNotaEntrada
     */
    public function setTotalRetencaoIss($totalRetencaoIss)
    {
        $this->totalRetencaoIss = $totalRetencaoIss;

        return $this;
    }

    /**
     * Get totalRetencaoIss
     *
     * @return string
     */
    public function getTotalRetencaoIss()
    {
        return $this->totalRetencaoIss;
    }

    /**
     * Set baseRetencaoIrrf
     *
     * @param string $baseRetencaoIrrf
     *
     * @return AmpNotaEntrada
     */
    public function setBaseRetencaoIrrf($baseRetencaoIrrf)
    {
        $this->baseRetencaoIrrf = $baseRetencaoIrrf;

        return $this;
    }

    /**
     * Get baseRetencaoIrrf
     *
     * @return string
     */
    public function getBaseRetencaoIrrf()
    {
        return $this->baseRetencaoIrrf;
    }

    /**
     * Set percRetencaoIrrf
     *
     * @param string $percRetencaoIrrf
     *
     * @return AmpNotaEntrada
     */
    public function setPercRetencaoIrrf($percRetencaoIrrf)
    {
        $this->percRetencaoIrrf = $percRetencaoIrrf;

        return $this;
    }

    /**
     * Get percRetencaoIrrf
     *
     * @return string
     */
    public function getPercRetencaoIrrf()
    {
        return $this->percRetencaoIrrf;
    }

    /**
     * Set totalRetencaoIrrf
     *
     * @param string $totalRetencaoIrrf
     *
     * @return AmpNotaEntrada
     */
    public function setTotalRetencaoIrrf($totalRetencaoIrrf)
    {
        $this->totalRetencaoIrrf = $totalRetencaoIrrf;

        return $this;
    }

    /**
     * Get totalRetencaoIrrf
     *
     * @return string
     */
    public function getTotalRetencaoIrrf()
    {
        return $this->totalRetencaoIrrf;
    }

    /**
     * Set baseRetencaoInss
     *
     * @param string $baseRetencaoInss
     *
     * @return AmpNotaEntrada
     */
    public function setBaseRetencaoInss($baseRetencaoInss)
    {
        $this->baseRetencaoInss = $baseRetencaoInss;

        return $this;
    }

    /**
     * Get baseRetencaoInss
     *
     * @return string
     */
    public function getBaseRetencaoInss()
    {
        return $this->baseRetencaoInss;
    }

    /**
     * Set percRetencaoInss
     *
     * @param string $percRetencaoInss
     *
     * @return AmpNotaEntrada
     */
    public function setPercRetencaoInss($percRetencaoInss)
    {
        $this->percRetencaoInss = $percRetencaoInss;

        return $this;
    }

    /**
     * Get percRetencaoInss
     *
     * @return string
     */
    public function getPercRetencaoInss()
    {
        return $this->percRetencaoInss;
    }

    /**
     * Set totalRetencaoInss
     *
     * @param string $totalRetencaoInss
     *
     * @return AmpNotaEntrada
     */
    public function setTotalRetencaoInss($totalRetencaoInss)
    {
        $this->totalRetencaoInss = $totalRetencaoInss;

        return $this;
    }

    /**
     * Get totalRetencaoInss
     *
     * @return string
     */
    public function getTotalRetencaoInss()
    {
        return $this->totalRetencaoInss;
    }

    /**
     * Set baseRetencaoPis
     *
     * @param string $baseRetencaoPis
     *
     * @return AmpNotaEntrada
     */
    public function setBaseRetencaoPis($baseRetencaoPis)
    {
        $this->baseRetencaoPis = $baseRetencaoPis;

        return $this;
    }

    /**
     * Get baseRetencaoPis
     *
     * @return string
     */
    public function getBaseRetencaoPis()
    {
        return $this->baseRetencaoPis;
    }

    /**
     * Set percRetencaoPis
     *
     * @param string $percRetencaoPis
     *
     * @return AmpNotaEntrada
     */
    public function setPercRetencaoPis($percRetencaoPis)
    {
        $this->percRetencaoPis = $percRetencaoPis;

        return $this;
    }

    /**
     * Get percRetencaoPis
     *
     * @return string
     */
    public function getPercRetencaoPis()
    {
        return $this->percRetencaoPis;
    }

    /**
     * Set totalRetencaoPis
     *
     * @param string $totalRetencaoPis
     *
     * @return AmpNotaEntrada
     */
    public function setTotalRetencaoPis($totalRetencaoPis)
    {
        $this->totalRetencaoPis = $totalRetencaoPis;

        return $this;
    }

    /**
     * Get totalRetencaoPis
     *
     * @return string
     */
    public function getTotalRetencaoPis()
    {
        return $this->totalRetencaoPis;
    }

    /**
     * Set baseRetencaoCofins
     *
     * @param string $baseRetencaoCofins
     *
     * @return AmpNotaEntrada
     */
    public function setBaseRetencaoCofins($baseRetencaoCofins)
    {
        $this->baseRetencaoCofins = $baseRetencaoCofins;

        return $this;
    }

    /**
     * Get baseRetencaoCofins
     *
     * @return string
     */
    public function getBaseRetencaoCofins()
    {
        return $this->baseRetencaoCofins;
    }

    /**
     * Set percRetencaoCofins
     *
     * @param string $percRetencaoCofins
     *
     * @return AmpNotaEntrada
     */
    public function setPercRetencaoCofins($percRetencaoCofins)
    {
        $this->percRetencaoCofins = $percRetencaoCofins;

        return $this;
    }

    /**
     * Get percRetencaoCofins
     *
     * @return string
     */
    public function getPercRetencaoCofins()
    {
        return $this->percRetencaoCofins;
    }

    /**
     * Set totalRetencaoCofins
     *
     * @param string $totalRetencaoCofins
     *
     * @return AmpNotaEntrada
     */
    public function setTotalRetencaoCofins($totalRetencaoCofins)
    {
        $this->totalRetencaoCofins = $totalRetencaoCofins;

        return $this;
    }

    /**
     * Get totalRetencaoCofins
     *
     * @return string
     */
    public function getTotalRetencaoCofins()
    {
        return $this->totalRetencaoCofins;
    }

    /**
     * Set baseRetencaoCsll
     *
     * @param string $baseRetencaoCsll
     *
     * @return AmpNotaEntrada
     */
    public function setBaseRetencaoCsll($baseRetencaoCsll)
    {
        $this->baseRetencaoCsll = $baseRetencaoCsll;

        return $this;
    }

    /**
     * Get baseRetencaoCsll
     *
     * @return string
     */
    public function getBaseRetencaoCsll()
    {
        return $this->baseRetencaoCsll;
    }

    /**
     * Set percRetencaoCsll
     *
     * @param string $percRetencaoCsll
     *
     * @return AmpNotaEntrada
     */
    public function setPercRetencaoCsll($percRetencaoCsll)
    {
        $this->percRetencaoCsll = $percRetencaoCsll;

        return $this;
    }

    /**
     * Get percRetencaoCsll
     *
     * @return string
     */
    public function getPercRetencaoCsll()
    {
        return $this->percRetencaoCsll;
    }

    /**
     * Set totalRetencaoCsll
     *
     * @param string $totalRetencaoCsll
     *
     * @return AmpNotaEntrada
     */
    public function setTotalRetencaoCsll($totalRetencaoCsll)
    {
        $this->totalRetencaoCsll = $totalRetencaoCsll;

        return $this;
    }

    /**
     * Get totalRetencaoCsll
     *
     * @return string
     */
    public function getTotalRetencaoCsll()
    {
        return $this->totalRetencaoCsll;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpNotaEntrada
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpNotaEntrada
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpNotaEntrada
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpNotaEntrada
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
     * Set idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpNotaEntrada
     */
    public function setIdEntidade(\AmpEntidade $idEntidade = null)
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
     * Add idTitulo
     *
     * @param \AmpTitulo $idTitulo
     *
     * @return AmpNotaEntrada
     */
    public function addIdTitulo(\AmpTitulo $idTitulo)
    {
        $this->idTitulo[] = $idTitulo;

        return $this;
    }

    /**
     * Remove idTitulo
     *
     * @param \AmpTitulo $idTitulo
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdTitulo(\AmpTitulo $idTitulo)
    {
        return $this->idTitulo->removeElement($idTitulo);
    }

    /**
     * Get idTitulo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTitulo()
    {
        return $this->idTitulo;
    }
}

