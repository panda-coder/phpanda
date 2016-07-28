<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpIcmsEstado
 *
 * @ORM\Table(name="amp_icms_estado", uniqueConstraints={@ORM\UniqueConstraint(name="id_estado_UNIQUE", columns={"id_estado"})}, indexes={@ORM\Index(name="fk_amp_icms_substituicao_amp_estado1_idx", columns={"id_estado"})})
 * @ORM\Entity
 */
class AmpIcmsEstado
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_icms_estado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIcmsEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms_interestadual", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $percIcmsInterestadual;

    /**
     * @var string
     *
     * @ORM\Column(name="perc_icms_substituicao", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $percIcmsSubstituicao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=false)
     */
    private $descricao;

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
     * @var \AmpEstado
     *
     * @ORM\ManyToOne(targetEntity="AmpEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id_estado")
     * })
     */
    private $idEstado;


    /**
     * Get idIcmsEstado
     *
     * @return int
     */
    public function getIdIcmsEstado()
    {
        return $this->idIcmsEstado;
    }

    /**
     * Set percIcmsInterestadual
     *
     * @param string $percIcmsInterestadual
     *
     * @return AmpIcmsEstado
     */
    public function setPercIcmsInterestadual($percIcmsInterestadual)
    {
        $this->percIcmsInterestadual = $percIcmsInterestadual;

        return $this;
    }

    /**
     * Get percIcmsInterestadual
     *
     * @return string
     */
    public function getPercIcmsInterestadual()
    {
        return $this->percIcmsInterestadual;
    }

    /**
     * Set percIcmsSubstituicao
     *
     * @param string $percIcmsSubstituicao
     *
     * @return AmpIcmsEstado
     */
    public function setPercIcmsSubstituicao($percIcmsSubstituicao)
    {
        $this->percIcmsSubstituicao = $percIcmsSubstituicao;

        return $this;
    }

    /**
     * Get percIcmsSubstituicao
     *
     * @return string
     */
    public function getPercIcmsSubstituicao()
    {
        return $this->percIcmsSubstituicao;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpIcmsEstado
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpIcmsEstado
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
     * @return AmpIcmsEstado
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
     * @return AmpIcmsEstado
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
     * @return AmpIcmsEstado
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
     * Set idEstado
     *
     * @param \AmpEstado $idEstado
     *
     * @return AmpIcmsEstado
     */
    public function setIdEstado(\AmpEstado $idEstado = null)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return \AmpEstado
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }
}

