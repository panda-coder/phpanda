<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpValorizacao
 *
 * @ORM\Table(name="amp_valorizacao", indexes={@ORM\Index(name="fk_amp_valorizacao_amp_moeda1_idx", columns={"id_moeda"})})
 * @ORM\Entity
 */
class AmpValorizacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_valorizacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idValorizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;

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
     * @var \AmpMoeda
     *
     * @ORM\ManyToOne(targetEntity="AmpMoeda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_moeda", referencedColumnName="id_moeda")
     * })
     */
    private $idMoeda;


    /**
     * Get idValorizacao
     *
     * @return int
     */
    public function getIdValorizacao()
    {
        return $this->idValorizacao;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return AmpValorizacao
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpValorizacao
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpValorizacao
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
     * @return AmpValorizacao
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
     * @return AmpValorizacao
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
     * @return AmpValorizacao
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
     * Set idMoeda
     *
     * @param \AmpMoeda $idMoeda
     *
     * @return AmpValorizacao
     */
    public function setIdMoeda(\AmpMoeda $idMoeda = null)
    {
        $this->idMoeda = $idMoeda;

        return $this;
    }

    /**
     * Get idMoeda
     *
     * @return \AmpMoeda
     */
    public function getIdMoeda()
    {
        return $this->idMoeda;
    }
}

