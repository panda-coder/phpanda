<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpDesvioEspecificacao
 *
 * @ORM\Table(name="amp_desvio_especificacao", indexes={@ORM\Index(name="fk_amp_desvio_especificacao_1_idx", columns={"id_dem"}), @ORM\Index(name="fk_amp_desvio_especificacao_2_idx", columns={"id_plano_controle_caracteristica"})})
 * @ORM\Entity
 */
class AmpDesvioEspecificacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_desvio_especificacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDesvioEspecificacao;

    /**
     * @var string
     *
     * @ORM\Column(name="desvio_minimo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $desvioMinimo;

    /**
     * @var string
     *
     * @ORM\Column(name="desvio_maximo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $desvioMaximo;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado", type="integer", nullable=true)
     */
    private $resultado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_aprovacao", type="integer", nullable=true)
     */
    private $idUsuarioAprovacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_aprovacao", type="datetime", nullable=true)
     */
    private $dataAprovacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;

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
     * @var \AmpDem
     *
     * @ORM\ManyToOne(targetEntity="AmpDem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dem", referencedColumnName="id_dem")
     * })
     */
    private $idDem;

    /**
     * @var \AmpPlanoControleCaracteristica
     *
     * @ORM\ManyToOne(targetEntity="AmpPlanoControleCaracteristica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plano_controle_caracteristica", referencedColumnName="id_plano_controle_caracteristica")
     * })
     */
    private $idPlanoControleCaracteristica;


    /**
     * Get idDesvioEspecificacao
     *
     * @return int
     */
    public function getIdDesvioEspecificacao()
    {
        return $this->idDesvioEspecificacao;
    }

    /**
     * Set desvioMinimo
     *
     * @param string $desvioMinimo
     *
     * @return AmpDesvioEspecificacao
     */
    public function setDesvioMinimo($desvioMinimo)
    {
        $this->desvioMinimo = $desvioMinimo;

        return $this;
    }

    /**
     * Get desvioMinimo
     *
     * @return string
     */
    public function getDesvioMinimo()
    {
        return $this->desvioMinimo;
    }

    /**
     * Set desvioMaximo
     *
     * @param string $desvioMaximo
     *
     * @return AmpDesvioEspecificacao
     */
    public function setDesvioMaximo($desvioMaximo)
    {
        $this->desvioMaximo = $desvioMaximo;

        return $this;
    }

    /**
     * Get desvioMaximo
     *
     * @return string
     */
    public function getDesvioMaximo()
    {
        return $this->desvioMaximo;
    }

    /**
     * Set resultado
     *
     * @param int $resultado
     *
     * @return AmpDesvioEspecificacao
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return int
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set idUsuarioAprovacao
     *
     * @param int $idUsuarioAprovacao
     *
     * @return AmpDesvioEspecificacao
     */
    public function setIdUsuarioAprovacao($idUsuarioAprovacao)
    {
        $this->idUsuarioAprovacao = $idUsuarioAprovacao;

        return $this;
    }

    /**
     * Get idUsuarioAprovacao
     *
     * @return int
     */
    public function getIdUsuarioAprovacao()
    {
        return $this->idUsuarioAprovacao;
    }

    /**
     * Set dataAprovacao
     *
     * @param \DateTime $dataAprovacao
     *
     * @return AmpDesvioEspecificacao
     */
    public function setDataAprovacao($dataAprovacao)
    {
        $this->dataAprovacao = $dataAprovacao;

        return $this;
    }

    /**
     * Get dataAprovacao
     *
     * @return \DateTime
     */
    public function getDataAprovacao()
    {
        return $this->dataAprovacao;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpDesvioEspecificacao
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpDesvioEspecificacao
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
     * @return AmpDesvioEspecificacao
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
     * @return AmpDesvioEspecificacao
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
     * @return AmpDesvioEspecificacao
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
     * Set idDem
     *
     * @param \AmpDem $idDem
     *
     * @return AmpDesvioEspecificacao
     */
    public function setIdDem(\AmpDem $idDem = null)
    {
        $this->idDem = $idDem;

        return $this;
    }

    /**
     * Get idDem
     *
     * @return \AmpDem
     */
    public function getIdDem()
    {
        return $this->idDem;
    }

    /**
     * Set idPlanoControleCaracteristica
     *
     * @param \AmpPlanoControleCaracteristica $idPlanoControleCaracteristica
     *
     * @return AmpDesvioEspecificacao
     */
    public function setIdPlanoControleCaracteristica(\AmpPlanoControleCaracteristica $idPlanoControleCaracteristica = null)
    {
        $this->idPlanoControleCaracteristica = $idPlanoControleCaracteristica;

        return $this;
    }

    /**
     * Get idPlanoControleCaracteristica
     *
     * @return \AmpPlanoControleCaracteristica
     */
    public function getIdPlanoControleCaracteristica()
    {
        return $this->idPlanoControleCaracteristica;
    }
}

