<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPerfilImposto
 *
 * @ORM\Table(name="amp_perfil_imposto", indexes={@ORM\Index(name="fk_amp_perfil_imposto_1_idx", columns={"id_classificacao_fiscal"}), @ORM\Index(name="fk_amp_perfil_imposto_4_idx", columns={"id_cst_pis_cofins"}), @ORM\Index(name="fk_amp_perfil_imposto_3_idx", columns={"id_cst_ipi"}), @ORM\Index(name="fk_amp_perfil_imposto_2_idx", columns={"id_cst_icms"}), @ORM\Index(name="fk_amp_perfil_imposto_5_idx", columns={"id_macro_operacao"}), @ORM\Index(name="fk_amp_perfil_imposto_6_idx", columns={"id_cfop"}), @ORM\Index(name="fk_amp_perfil_imposto_7_idx", columns={"id_regime_tributario"}), @ORM\Index(name="fk_amp_perfil_imposto_8_idx", columns={"id_cenq"}), @ORM\Index(name="fk_amp_perfil_imposto_9_idx", columns={"id_cenq"})})
 * @ORM\Entity
 */
class AmpPerfilImposto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_perfil_imposto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerfilImposto;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_estados", type="string", length=500, nullable=true)
     */
    private $descricaoEstados;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_red_base", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentRedBase;

    /**
     * @var string
     *
     * @ORM\Column(name="base_st_pauta", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $baseStPauta;

    /**
     * @var string
     *
     * @ORM\Column(name="soma_ipi_base_st", type="string", length=1, nullable=false)
     */
    private $somaIpiBaseSt;

    /**
     * @var string
     *
     * @ORM\Column(name="subtrai_icms_st", type="string", length=1, nullable=false)
     */
    private $subtraiIcmsSt;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_pis", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentPis;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_cofins", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_iva", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentIva;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ipi_pauta", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorIpiPauta;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ipi_peso", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorIpiPeso;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_ipi", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentIpi;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_icms_interest", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentIcmsInterest;

    /**
     * @var int
     *
     * @ORM\Column(name="motivo_desoneracao", type="integer", nullable=true)
     */
    private $motivoDesoneracao;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_ii", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentIi;

    /**
     * @var string
     *
     * @ORM\Column(name="percent_iss", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentIss;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpClassificacaoFiscal
     *
     * @ORM\ManyToOne(targetEntity="AmpClassificacaoFiscal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_classificacao_fiscal", referencedColumnName="id_classificacao_fiscal")
     * })
     */
    private $idClassificacaoFiscal;

    /**
     * @var \AmpCstIcms
     *
     * @ORM\ManyToOne(targetEntity="AmpCstIcms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cst_icms", referencedColumnName="id_cst_icms")
     * })
     */
    private $idCstIcms;

    /**
     * @var \AmpCstIpi
     *
     * @ORM\ManyToOne(targetEntity="AmpCstIpi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cst_ipi", referencedColumnName="id_cst_ipi")
     * })
     */
    private $idCstIpi;

    /**
     * @var \AmpCstPisCofins
     *
     * @ORM\ManyToOne(targetEntity="AmpCstPisCofins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cst_pis_cofins", referencedColumnName="id_cst_pis_cofins")
     * })
     */
    private $idCstPisCofins;

    /**
     * @var \AmpMacroOperacao
     *
     * @ORM\ManyToOne(targetEntity="AmpMacroOperacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_macro_operacao", referencedColumnName="id_macro_operacao")
     * })
     */
    private $idMacroOperacao;

    /**
     * @var \AmpCfop
     *
     * @ORM\ManyToOne(targetEntity="AmpCfop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cfop", referencedColumnName="id_cfop")
     * })
     */
    private $idCfop;

    /**
     * @var \AmpRegimeTributario
     *
     * @ORM\ManyToOne(targetEntity="AmpRegimeTributario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_regime_tributario", referencedColumnName="id_regime_tributario")
     * })
     */
    private $idRegimeTributario;

    /**
     * @var \AmpCenq
     *
     * @ORM\ManyToOne(targetEntity="AmpCenq")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cenq", referencedColumnName="id_cenq")
     * })
     */
    private $idCenq;


    /**
     * Get idPerfilImposto
     *
     * @return int
     */
    public function getIdPerfilImposto()
    {
        return $this->idPerfilImposto;
    }

    /**
     * Set descricaoEstados
     *
     * @param string $descricaoEstados
     *
     * @return AmpPerfilImposto
     */
    public function setDescricaoEstados($descricaoEstados)
    {
        $this->descricaoEstados = $descricaoEstados;

        return $this;
    }

    /**
     * Get descricaoEstados
     *
     * @return string
     */
    public function getDescricaoEstados()
    {
        return $this->descricaoEstados;
    }

    /**
     * Set percentIcms
     *
     * @param string $percentIcms
     *
     * @return AmpPerfilImposto
     */
    public function setPercentIcms($percentIcms)
    {
        $this->percentIcms = $percentIcms;

        return $this;
    }

    /**
     * Get percentIcms
     *
     * @return string
     */
    public function getPercentIcms()
    {
        return $this->percentIcms;
    }

    /**
     * Set percentRedBase
     *
     * @param string $percentRedBase
     *
     * @return AmpPerfilImposto
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
     * Set baseStPauta
     *
     * @param string $baseStPauta
     *
     * @return AmpPerfilImposto
     */
    public function setBaseStPauta($baseStPauta)
    {
        $this->baseStPauta = $baseStPauta;

        return $this;
    }

    /**
     * Get baseStPauta
     *
     * @return string
     */
    public function getBaseStPauta()
    {
        return $this->baseStPauta;
    }

    /**
     * Set somaIpiBaseSt
     *
     * @param string $somaIpiBaseSt
     *
     * @return AmpPerfilImposto
     */
    public function setSomaIpiBaseSt($somaIpiBaseSt)
    {
        $this->somaIpiBaseSt = $somaIpiBaseSt;

        return $this;
    }

    /**
     * Get somaIpiBaseSt
     *
     * @return string
     */
    public function getSomaIpiBaseSt()
    {
        return $this->somaIpiBaseSt;
    }

    /**
     * Set subtraiIcmsSt
     *
     * @param string $subtraiIcmsSt
     *
     * @return AmpPerfilImposto
     */
    public function setSubtraiIcmsSt($subtraiIcmsSt)
    {
        $this->subtraiIcmsSt = $subtraiIcmsSt;

        return $this;
    }

    /**
     * Get subtraiIcmsSt
     *
     * @return string
     */
    public function getSubtraiIcmsSt()
    {
        return $this->subtraiIcmsSt;
    }

    /**
     * Set percentPis
     *
     * @param string $percentPis
     *
     * @return AmpPerfilImposto
     */
    public function setPercentPis($percentPis)
    {
        $this->percentPis = $percentPis;

        return $this;
    }

    /**
     * Get percentPis
     *
     * @return string
     */
    public function getPercentPis()
    {
        return $this->percentPis;
    }

    /**
     * Set percentCofins
     *
     * @param string $percentCofins
     *
     * @return AmpPerfilImposto
     */
    public function setPercentCofins($percentCofins)
    {
        $this->percentCofins = $percentCofins;

        return $this;
    }

    /**
     * Get percentCofins
     *
     * @return string
     */
    public function getPercentCofins()
    {
        return $this->percentCofins;
    }

    /**
     * Set percentIva
     *
     * @param string $percentIva
     *
     * @return AmpPerfilImposto
     */
    public function setPercentIva($percentIva)
    {
        $this->percentIva = $percentIva;

        return $this;
    }

    /**
     * Get percentIva
     *
     * @return string
     */
    public function getPercentIva()
    {
        return $this->percentIva;
    }

    /**
     * Set valorIpiPauta
     *
     * @param string $valorIpiPauta
     *
     * @return AmpPerfilImposto
     */
    public function setValorIpiPauta($valorIpiPauta)
    {
        $this->valorIpiPauta = $valorIpiPauta;

        return $this;
    }

    /**
     * Get valorIpiPauta
     *
     * @return string
     */
    public function getValorIpiPauta()
    {
        return $this->valorIpiPauta;
    }

    /**
     * Set valorIpiPeso
     *
     * @param string $valorIpiPeso
     *
     * @return AmpPerfilImposto
     */
    public function setValorIpiPeso($valorIpiPeso)
    {
        $this->valorIpiPeso = $valorIpiPeso;

        return $this;
    }

    /**
     * Get valorIpiPeso
     *
     * @return string
     */
    public function getValorIpiPeso()
    {
        return $this->valorIpiPeso;
    }

    /**
     * Set percentIpi
     *
     * @param string $percentIpi
     *
     * @return AmpPerfilImposto
     */
    public function setPercentIpi($percentIpi)
    {
        $this->percentIpi = $percentIpi;

        return $this;
    }

    /**
     * Get percentIpi
     *
     * @return string
     */
    public function getPercentIpi()
    {
        return $this->percentIpi;
    }

    /**
     * Set percentIcmsInterest
     *
     * @param string $percentIcmsInterest
     *
     * @return AmpPerfilImposto
     */
    public function setPercentIcmsInterest($percentIcmsInterest)
    {
        $this->percentIcmsInterest = $percentIcmsInterest;

        return $this;
    }

    /**
     * Get percentIcmsInterest
     *
     * @return string
     */
    public function getPercentIcmsInterest()
    {
        return $this->percentIcmsInterest;
    }

    /**
     * Set motivoDesoneracao
     *
     * @param int $motivoDesoneracao
     *
     * @return AmpPerfilImposto
     */
    public function setMotivoDesoneracao($motivoDesoneracao)
    {
        $this->motivoDesoneracao = $motivoDesoneracao;

        return $this;
    }

    /**
     * Get motivoDesoneracao
     *
     * @return int
     */
    public function getMotivoDesoneracao()
    {
        return $this->motivoDesoneracao;
    }

    /**
     * Set percentIi
     *
     * @param string $percentIi
     *
     * @return AmpPerfilImposto
     */
    public function setPercentIi($percentIi)
    {
        $this->percentIi = $percentIi;

        return $this;
    }

    /**
     * Get percentIi
     *
     * @return string
     */
    public function getPercentIi()
    {
        return $this->percentIi;
    }

    /**
     * Set percentIss
     *
     * @param string $percentIss
     *
     * @return AmpPerfilImposto
     */
    public function setPercentIss($percentIss)
    {
        $this->percentIss = $percentIss;

        return $this;
    }

    /**
     * Get percentIss
     *
     * @return string
     */
    public function getPercentIss()
    {
        return $this->percentIss;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPerfilImposto
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
     * @return AmpPerfilImposto
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
     * @return AmpPerfilImposto
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
     * @return AmpPerfilImposto
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
     * Set idClassificacaoFiscal
     *
     * @param \AmpClassificacaoFiscal $idClassificacaoFiscal
     *
     * @return AmpPerfilImposto
     */
    public function setIdClassificacaoFiscal(\AmpClassificacaoFiscal $idClassificacaoFiscal = null)
    {
        $this->idClassificacaoFiscal = $idClassificacaoFiscal;

        return $this;
    }

    /**
     * Get idClassificacaoFiscal
     *
     * @return \AmpClassificacaoFiscal
     */
    public function getIdClassificacaoFiscal()
    {
        return $this->idClassificacaoFiscal;
    }

    /**
     * Set idCstIcms
     *
     * @param \AmpCstIcms $idCstIcms
     *
     * @return AmpPerfilImposto
     */
    public function setIdCstIcms(\AmpCstIcms $idCstIcms = null)
    {
        $this->idCstIcms = $idCstIcms;

        return $this;
    }

    /**
     * Get idCstIcms
     *
     * @return \AmpCstIcms
     */
    public function getIdCstIcms()
    {
        return $this->idCstIcms;
    }

    /**
     * Set idCstIpi
     *
     * @param \AmpCstIpi $idCstIpi
     *
     * @return AmpPerfilImposto
     */
    public function setIdCstIpi(\AmpCstIpi $idCstIpi = null)
    {
        $this->idCstIpi = $idCstIpi;

        return $this;
    }

    /**
     * Get idCstIpi
     *
     * @return \AmpCstIpi
     */
    public function getIdCstIpi()
    {
        return $this->idCstIpi;
    }

    /**
     * Set idCstPisCofins
     *
     * @param \AmpCstPisCofins $idCstPisCofins
     *
     * @return AmpPerfilImposto
     */
    public function setIdCstPisCofins(\AmpCstPisCofins $idCstPisCofins = null)
    {
        $this->idCstPisCofins = $idCstPisCofins;

        return $this;
    }

    /**
     * Get idCstPisCofins
     *
     * @return \AmpCstPisCofins
     */
    public function getIdCstPisCofins()
    {
        return $this->idCstPisCofins;
    }

    /**
     * Set idMacroOperacao
     *
     * @param \AmpMacroOperacao $idMacroOperacao
     *
     * @return AmpPerfilImposto
     */
    public function setIdMacroOperacao(\AmpMacroOperacao $idMacroOperacao = null)
    {
        $this->idMacroOperacao = $idMacroOperacao;

        return $this;
    }

    /**
     * Get idMacroOperacao
     *
     * @return \AmpMacroOperacao
     */
    public function getIdMacroOperacao()
    {
        return $this->idMacroOperacao;
    }

    /**
     * Set idCfop
     *
     * @param \AmpCfop $idCfop
     *
     * @return AmpPerfilImposto
     */
    public function setIdCfop(\AmpCfop $idCfop = null)
    {
        $this->idCfop = $idCfop;

        return $this;
    }

    /**
     * Get idCfop
     *
     * @return \AmpCfop
     */
    public function getIdCfop()
    {
        return $this->idCfop;
    }

    /**
     * Set idRegimeTributario
     *
     * @param \AmpRegimeTributario $idRegimeTributario
     *
     * @return AmpPerfilImposto
     */
    public function setIdRegimeTributario(\AmpRegimeTributario $idRegimeTributario = null)
    {
        $this->idRegimeTributario = $idRegimeTributario;

        return $this;
    }

    /**
     * Get idRegimeTributario
     *
     * @return \AmpRegimeTributario
     */
    public function getIdRegimeTributario()
    {
        return $this->idRegimeTributario;
    }

    /**
     * Set idCenq
     *
     * @param \AmpCenq $idCenq
     *
     * @return AmpPerfilImposto
     */
    public function setIdCenq(\AmpCenq $idCenq = null)
    {
        $this->idCenq = $idCenq;

        return $this;
    }

    /**
     * Get idCenq
     *
     * @return \AmpCenq
     */
    public function getIdCenq()
    {
        return $this->idCenq;
    }
}

