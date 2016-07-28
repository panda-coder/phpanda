<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCpInterferencia
 *
 * @ORM\Table(name="amp_cp_interferencia", indexes={@ORM\Index(name="fk_amp_cpc_interferencia_1_idx", columns={"id_interferencia_cp"}), @ORM\Index(name="fk_amp_cp_interferencia_1_idx", columns={"id_controle_producao"})})
 * @ORM\Entity
 */
class AmpCpInterferencia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cp_interferencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCpInterferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario_inicial", type="datetime", nullable=false)
     */
    private $horarioInicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario_final", type="datetime", nullable=false)
     */
    private $horarioFinal;

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
     * @var \AmpControleProducao
     *
     * @ORM\ManyToOne(targetEntity="AmpControleProducao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_controle_producao", referencedColumnName="id_controle_producao")
     * })
     */
    private $idControleProducao;

    /**
     * @var \AmpInterferenciaCp
     *
     * @ORM\ManyToOne(targetEntity="AmpInterferenciaCp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_interferencia_cp", referencedColumnName="id_interferencia_cp")
     * })
     */
    private $idInterferenciaCp;


    /**
     * Get idCpInterferencia
     *
     * @return int
     */
    public function getIdCpInterferencia()
    {
        return $this->idCpInterferencia;
    }

    /**
     * Set horarioInicial
     *
     * @param \DateTime $horarioInicial
     *
     * @return AmpCpInterferencia
     */
    public function setHorarioInicial($horarioInicial)
    {
        $this->horarioInicial = $horarioInicial;

        return $this;
    }

    /**
     * Get horarioInicial
     *
     * @return \DateTime
     */
    public function getHorarioInicial()
    {
        return $this->horarioInicial;
    }

    /**
     * Set horarioFinal
     *
     * @param \DateTime $horarioFinal
     *
     * @return AmpCpInterferencia
     */
    public function setHorarioFinal($horarioFinal)
    {
        $this->horarioFinal = $horarioFinal;

        return $this;
    }

    /**
     * Get horarioFinal
     *
     * @return \DateTime
     */
    public function getHorarioFinal()
    {
        return $this->horarioFinal;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpCpInterferencia
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
     * @return AmpCpInterferencia
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
     * @return AmpCpInterferencia
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
     * @return AmpCpInterferencia
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
     * Set idControleProducao
     *
     * @param \AmpControleProducao $idControleProducao
     *
     * @return AmpCpInterferencia
     */
    public function setIdControleProducao(\AmpControleProducao $idControleProducao = null)
    {
        $this->idControleProducao = $idControleProducao;

        return $this;
    }

    /**
     * Get idControleProducao
     *
     * @return \AmpControleProducao
     */
    public function getIdControleProducao()
    {
        return $this->idControleProducao;
    }

    /**
     * Set idInterferenciaCp
     *
     * @param \AmpInterferenciaCp $idInterferenciaCp
     *
     * @return AmpCpInterferencia
     */
    public function setIdInterferenciaCp(\AmpInterferenciaCp $idInterferenciaCp = null)
    {
        $this->idInterferenciaCp = $idInterferenciaCp;

        return $this;
    }

    /**
     * Get idInterferenciaCp
     *
     * @return \AmpInterferenciaCp
     */
    public function getIdInterferenciaCp()
    {
        return $this->idInterferenciaCp;
    }
}

