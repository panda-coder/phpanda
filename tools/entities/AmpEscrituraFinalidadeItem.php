<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEscrituraFinalidadeItem
 *
 * @ORM\Table(name="amp_escritura_finalidade_item", uniqueConstraints={@ORM\UniqueConstraint(name="uq_cfop", columns={"id_cfop_nota", "id_cfop_escritura"})}, indexes={@ORM\Index(name="fk_id_cfop_entrada_idx", columns={"id_cfop_nota"}), @ORM\Index(name="fk_id_cfop_escritura_idx", columns={"id_cfop_escritura"}), @ORM\Index(name="fk_id_escritura_finalidade_idx", columns={"id_escritura_finalidade"})})
 * @ORM\Entity
 */
class AmpEscrituraFinalidadeItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_escritura_finalidade_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEscrituraFinalidadeItem;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_icms_nota", type="string", length=3, nullable=true)
     */
    private $cstIcmsNota;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_ipi_nota", type="string", length=3, nullable=true)
     */
    private $cstIpiNota;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_pis_cofins_nota", type="string", length=3, nullable=true)
     */
    private $cstPisCofinsNota;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_icms_escritura", type="string", length=3, nullable=true)
     */
    private $cstIcmsEscritura;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_ipi_escritura", type="string", length=3, nullable=true)
     */
    private $cstIpiEscritura;

    /**
     * @var string
     *
     * @ORM\Column(name="cst_pis_cofins_escritura", type="string", length=3, nullable=true)
     */
    private $cstPisCofinsEscritura;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ipi", type="string", length=1, nullable=false)
     */
    private $percIpi = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms", type="string", length=1, nullable=false)
     */
    private $percIcms = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_iva", type="string", length=1, nullable=false)
     */
    private $percIva = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms_st", type="string", length=1, nullable=false)
     */
    private $percIcmsSt = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_ii", type="string", length=1, nullable=false)
     */
    private $percIi = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_pis", type="string", length=1, nullable=false)
     */
    private $percPis = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="perc_cofins", type="string", length=1, nullable=false)
     */
    private $percCofins = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_icms", type="string", length=1, nullable=true)
     */
    private $baseCalculoIcms = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_ipi", type="string", length=1, nullable=true)
     */
    private $baseCalculoIpi = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_pis", type="string", length=1, nullable=true)
     */
    private $baseCalculoPis = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_icms_st", type="string", length=1, nullable=true)
     */
    private $baseCalculoIcmsSt = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_cofins", type="string", length=1, nullable=true)
     */
    private $baseCalculoCofins = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ipi", type="string", length=1, nullable=true)
     */
    private $valorIpi = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_icms", type="string", length=1, nullable=true)
     */
    private $valorIcms = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ii", type="string", length=1, nullable=true)
     */
    private $valorIi = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pis", type="string", length=1, nullable=true)
     */
    private $valorPis = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_cofins", type="string", length=1, nullable=true)
     */
    private $valorCofins = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_iss", type="string", length=1, nullable=true)
     */
    private $valorIss = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="string", length=1, nullable=false)
     */
    private $valorUnitario = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="string", length=1, nullable=true)
     */
    private $valorTotal = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_st", type="string", length=1, nullable=true)
     */
    private $valorSt = 'N';

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
     * @var \AmpCfop
     *
     * @ORM\ManyToOne(targetEntity="AmpCfop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cfop_nota", referencedColumnName="id_cfop")
     * })
     */
    private $idCfopNota;

    /**
     * @var \AmpCfop
     *
     * @ORM\ManyToOne(targetEntity="AmpCfop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cfop_escritura", referencedColumnName="id_cfop")
     * })
     */
    private $idCfopEscritura;

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
     * Get idEscrituraFinalidadeItem
     *
     * @return int
     */
    public function getIdEscrituraFinalidadeItem()
    {
        return $this->idEscrituraFinalidadeItem;
    }

    /**
     * Set cstIcmsNota
     *
     * @param string $cstIcmsNota
     *
     * @return AmpEscrituraFinalidadeItem
     */
    public function setCstIcmsNota($cstIcmsNota)
    {
        $this->cstIcmsNota = $cstIcmsNota;

        return $this;
    }

    /**
     * Get cstIcmsNota
     *
     * @return string
     */
    public function getCstIcmsNota()
    {
        return $this->cstIcmsNota;
    }

    /**
     * Set cstIpiNota
     *
     * @param string $cstIpiNota
     *
     * @return AmpEscrituraFinalidadeItem
     */
    public function setCstIpiNota($cstIpiNota)
    {
        $this->cstIpiNota = $cstIpiNota;

        return $this;
    }

    /**
     * Get cstIpiNota
     *
     * @return string
     */
    public function getCstIpiNota()
    {
        return $this->cstIpiNota;
    }

    /**
     * Set cstPisCofinsNota
     *
     * @param string $cstPisCofinsNota
     *
     * @return AmpEscrituraFinalidadeItem
     */
    public function setCstPisCofinsNota($cstPisCofinsNota)
    {
        $this->cstPisCofinsNota = $cstPisCofinsNota;

        return $this;
    }

    /**
     * Get cstPisCofinsNota
     *
     * @return string
     */
    public function getCstPisCofinsNota()
    {
        return $this->cstPisCofinsNota;
    }

    /**
     * Set cstIcmsEscritura
     *
     * @param string $cstIcmsEscritura
     *
     * @return AmpEscrituraFinalidadeItem
     */
    public function setCstIcmsEscritura($cstIcmsEscritura)
    {
        $this->cstIcmsEscritura = $cstIcmsEscritura;

        return $this;
    }

    /**
     * Get cstIcmsEscritura
     *
     * @return string
     */
    public function getCstIcmsEscritura()
    {
        return $this->cstIcmsEscritura;
    }

    /**
     * Set cstIpiEscritura
     *
     * @param string $cstIpiEscritura
     *
     * @return AmpEscrituraFinalidadeItem
     */
    public function setCstIpiEscritura($cstIpiEscritura)
    {
        $this->cstIpiEscritura = $cstIpiEscritura;

        return $this;
    }

    /**
     * Get cstIpiEscritura
     *
     * @return string
     */
    public function getCstIpiEscritura()
    {
        return $this->cstIpiEscritura;
    }

    /**
     * Set cstPisCofinsEscritura
     *
     * @param string $cstPisCofinsEscritura
     *
     * @return AmpEscrituraFinalidadeItem
     */
    public function setCstPisCofinsEscritura($cstPisCofinsEscritura)
    {
        $this->cstPisCofinsEscritura = $cstPisCofinsEscritura;

        return $this;
    }

    /**
     * Get cstPisCofinsEscritura
     *
     * @return string
     */
    public function getCstPisCofinsEscritura()
    {
        return $this->cstPisCofinsEscritura;
    }

    /**
     * Set percIpi
     *
     * @param string $percIpi
     *
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * Set baseCalculoIcms
     *
     * @param string $baseCalculoIcms
     *
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * @return AmpEscrituraFinalidadeItem
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
     * Set idCfopNota
     *
     * @param \AmpCfop $idCfopNota
     *
     * @return AmpEscrituraFinalidadeItem
     */
    public function setIdCfopNota(\AmpCfop $idCfopNota = null)
    {
        $this->idCfopNota = $idCfopNota;

        return $this;
    }

    /**
     * Get idCfopNota
     *
     * @return \AmpCfop
     */
    public function getIdCfopNota()
    {
        return $this->idCfopNota;
    }

    /**
     * Set idCfopEscritura
     *
     * @param \AmpCfop $idCfopEscritura
     *
     * @return AmpEscrituraFinalidadeItem
     */
    public function setIdCfopEscritura(\AmpCfop $idCfopEscritura = null)
    {
        $this->idCfopEscritura = $idCfopEscritura;

        return $this;
    }

    /**
     * Get idCfopEscritura
     *
     * @return \AmpCfop
     */
    public function getIdCfopEscritura()
    {
        return $this->idCfopEscritura;
    }

    /**
     * Set idEscrituraFinalidade
     *
     * @param \AmpEscrituraFinalidade $idEscrituraFinalidade
     *
     * @return AmpEscrituraFinalidadeItem
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

