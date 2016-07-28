<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaEntradaEscrituraProduto
 *
 * @ORM\Table(name="amp_nota_entrada_escritura_produto", indexes={@ORM\Index(name="fk_id_nota_entrada_escritura_idx", columns={"id_nota_entrada_escritura"}), @ORM\Index(name="fk_id_nota_entrada_produto_idx", columns={"id_nota_entrada_produto"})})
 * @ORM\Entity
 */
class AmpNotaEntradaEscrituraProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_entrada_escritura_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaEntradaEscrituraProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="cfop", type="string", length=4, nullable=false)
     */
    private $cfop;

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
     * @var \AmpNotaEntradaEscritura
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaEntradaEscritura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_entrada_escritura", referencedColumnName="id_nota_entrada_escritura")
     * })
     */
    private $idNotaEntradaEscritura;

    /**
     * @var \AmpNotaEntradaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaEntradaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_entrada_produto", referencedColumnName="id_nota_entrada_produto")
     * })
     */
    private $idNotaEntradaProduto;


    /**
     * Get idNotaEntradaEscrituraProduto
     *
     * @return int
     */
    public function getIdNotaEntradaEscrituraProduto()
    {
        return $this->idNotaEntradaEscrituraProduto;
    }

    /**
     * Set cfop
     *
     * @param string $cfop
     *
     * @return AmpNotaEntradaEscrituraProduto
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
     * Set cstIcms
     *
     * @param string $cstIcms
     *
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * Set baseCalculoIcms
     *
     * @param string $baseCalculoIcms
     *
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * Set valorIcms
     *
     * @param string $valorIcms
     *
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * Set percIpi
     *
     * @param string $percIpi
     *
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * @return AmpNotaEntradaEscrituraProduto
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
     * Set idNotaEntradaEscritura
     *
     * @param \AmpNotaEntradaEscritura $idNotaEntradaEscritura
     *
     * @return AmpNotaEntradaEscrituraProduto
     */
    public function setIdNotaEntradaEscritura(\AmpNotaEntradaEscritura $idNotaEntradaEscritura = null)
    {
        $this->idNotaEntradaEscritura = $idNotaEntradaEscritura;

        return $this;
    }

    /**
     * Get idNotaEntradaEscritura
     *
     * @return \AmpNotaEntradaEscritura
     */
    public function getIdNotaEntradaEscritura()
    {
        return $this->idNotaEntradaEscritura;
    }

    /**
     * Set idNotaEntradaProduto
     *
     * @param \AmpNotaEntradaProduto $idNotaEntradaProduto
     *
     * @return AmpNotaEntradaEscrituraProduto
     */
    public function setIdNotaEntradaProduto(\AmpNotaEntradaProduto $idNotaEntradaProduto = null)
    {
        $this->idNotaEntradaProduto = $idNotaEntradaProduto;

        return $this;
    }

    /**
     * Get idNotaEntradaProduto
     *
     * @return \AmpNotaEntradaProduto
     */
    public function getIdNotaEntradaProduto()
    {
        return $this->idNotaEntradaProduto;
    }
}

