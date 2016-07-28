<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpImpostoCliente
 *
 * @ORM\Table(name="amp_imposto_cliente", indexes={@ORM\Index(name="fk_amp_imposto_cliente_1_idx", columns={"id_entidade"})})
 * @ORM\Entity
 */
class AmpImpostoCliente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_imposto_cliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImpostoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=255, nullable=false)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio_ipi", type="string", length=1, nullable=false)
     */
    private $beneficioIpi;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio_icms", type="string", length=1, nullable=false)
     */
    private $beneficioIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio_st", type="string", length=1, nullable=false)
     */
    private $beneficioSt;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio_pis", type="string", length=1, nullable=false)
     */
    private $beneficioPis;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio_cofins", type="string", length=1, nullable=false)
     */
    private $beneficioCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio_ii", type="string", length=1, nullable=false)
     */
    private $beneficioIi;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio_iss", type="string", length=1, nullable=false)
     */
    private $beneficioIss;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=false)
     */
    private $idUsuarioAlteracao;

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
     * Get idImpostoCliente
     *
     * @return int
     */
    public function getIdImpostoCliente()
    {
        return $this->idImpostoCliente;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpImpostoCliente
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
     * Set beneficioIpi
     *
     * @param string $beneficioIpi
     *
     * @return AmpImpostoCliente
     */
    public function setBeneficioIpi($beneficioIpi)
    {
        $this->beneficioIpi = $beneficioIpi;

        return $this;
    }

    /**
     * Get beneficioIpi
     *
     * @return string
     */
    public function getBeneficioIpi()
    {
        return $this->beneficioIpi;
    }

    /**
     * Set beneficioIcms
     *
     * @param string $beneficioIcms
     *
     * @return AmpImpostoCliente
     */
    public function setBeneficioIcms($beneficioIcms)
    {
        $this->beneficioIcms = $beneficioIcms;

        return $this;
    }

    /**
     * Get beneficioIcms
     *
     * @return string
     */
    public function getBeneficioIcms()
    {
        return $this->beneficioIcms;
    }

    /**
     * Set beneficioSt
     *
     * @param string $beneficioSt
     *
     * @return AmpImpostoCliente
     */
    public function setBeneficioSt($beneficioSt)
    {
        $this->beneficioSt = $beneficioSt;

        return $this;
    }

    /**
     * Get beneficioSt
     *
     * @return string
     */
    public function getBeneficioSt()
    {
        return $this->beneficioSt;
    }

    /**
     * Set beneficioPis
     *
     * @param string $beneficioPis
     *
     * @return AmpImpostoCliente
     */
    public function setBeneficioPis($beneficioPis)
    {
        $this->beneficioPis = $beneficioPis;

        return $this;
    }

    /**
     * Get beneficioPis
     *
     * @return string
     */
    public function getBeneficioPis()
    {
        return $this->beneficioPis;
    }

    /**
     * Set beneficioCofins
     *
     * @param string $beneficioCofins
     *
     * @return AmpImpostoCliente
     */
    public function setBeneficioCofins($beneficioCofins)
    {
        $this->beneficioCofins = $beneficioCofins;

        return $this;
    }

    /**
     * Get beneficioCofins
     *
     * @return string
     */
    public function getBeneficioCofins()
    {
        return $this->beneficioCofins;
    }

    /**
     * Set beneficioIi
     *
     * @param string $beneficioIi
     *
     * @return AmpImpostoCliente
     */
    public function setBeneficioIi($beneficioIi)
    {
        $this->beneficioIi = $beneficioIi;

        return $this;
    }

    /**
     * Get beneficioIi
     *
     * @return string
     */
    public function getBeneficioIi()
    {
        return $this->beneficioIi;
    }

    /**
     * Set beneficioIss
     *
     * @param string $beneficioIss
     *
     * @return AmpImpostoCliente
     */
    public function setBeneficioIss($beneficioIss)
    {
        $this->beneficioIss = $beneficioIss;

        return $this;
    }

    /**
     * Get beneficioIss
     *
     * @return string
     */
    public function getBeneficioIss()
    {
        return $this->beneficioIss;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpImpostoCliente
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpImpostoCliente
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpImpostoCliente
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpImpostoCliente
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
     * Set idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpImpostoCliente
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
}

