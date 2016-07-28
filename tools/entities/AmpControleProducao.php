<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpControleProducao
 *
 * @ORM\Table(name="amp_controle_producao", indexes={@ORM\Index(name="fk_amp_controle_producao_1_idx1", columns={"id_centro_trabalho_linha"})})
 * @ORM\Entity
 */
class AmpControleProducao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_controle_producao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idControleProducao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_producao", type="integer", nullable=false)
     */
    private $idOrdemProducao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario_inicial", type="datetime", nullable=true)
     */
    private $horarioInicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horario_final", type="datetime", nullable=true)
     */
    private $horarioFinal;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_produzida", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeProduzida;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_retrabalho", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeRetrabalho;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_retrabalho", type="string", length=400, nullable=false)
     */
    private $descricaoRetrabalho;

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
     * @var \AmpCentroTrabalhoLinha
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroTrabalhoLinha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_trabalho_linha", referencedColumnName="id_centro_trabalho_linha")
     * })
     */
    private $idCentroTrabalhoLinha;


    /**
     * Get idControleProducao
     *
     * @return int
     */
    public function getIdControleProducao()
    {
        return $this->idControleProducao;
    }

    /**
     * Set idOrdemProducao
     *
     * @param int $idOrdemProducao
     *
     * @return AmpControleProducao
     */
    public function setIdOrdemProducao($idOrdemProducao)
    {
        $this->idOrdemProducao = $idOrdemProducao;

        return $this;
    }

    /**
     * Get idOrdemProducao
     *
     * @return int
     */
    public function getIdOrdemProducao()
    {
        return $this->idOrdemProducao;
    }

    /**
     * Set horarioInicial
     *
     * @param \DateTime $horarioInicial
     *
     * @return AmpControleProducao
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
     * @return AmpControleProducao
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
     * Set status
     *
     * @param int $status
     *
     * @return AmpControleProducao
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
     * Set quantidadeProduzida
     *
     * @param string $quantidadeProduzida
     *
     * @return AmpControleProducao
     */
    public function setQuantidadeProduzida($quantidadeProduzida)
    {
        $this->quantidadeProduzida = $quantidadeProduzida;

        return $this;
    }

    /**
     * Get quantidadeProduzida
     *
     * @return string
     */
    public function getQuantidadeProduzida()
    {
        return $this->quantidadeProduzida;
    }

    /**
     * Set quantidadeRetrabalho
     *
     * @param string $quantidadeRetrabalho
     *
     * @return AmpControleProducao
     */
    public function setQuantidadeRetrabalho($quantidadeRetrabalho)
    {
        $this->quantidadeRetrabalho = $quantidadeRetrabalho;

        return $this;
    }

    /**
     * Get quantidadeRetrabalho
     *
     * @return string
     */
    public function getQuantidadeRetrabalho()
    {
        return $this->quantidadeRetrabalho;
    }

    /**
     * Set descricaoRetrabalho
     *
     * @param string $descricaoRetrabalho
     *
     * @return AmpControleProducao
     */
    public function setDescricaoRetrabalho($descricaoRetrabalho)
    {
        $this->descricaoRetrabalho = $descricaoRetrabalho;

        return $this;
    }

    /**
     * Get descricaoRetrabalho
     *
     * @return string
     */
    public function getDescricaoRetrabalho()
    {
        return $this->descricaoRetrabalho;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpControleProducao
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
     * @return AmpControleProducao
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
     * @return AmpControleProducao
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
     * @return AmpControleProducao
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
     * Set idCentroTrabalhoLinha
     *
     * @param \AmpCentroTrabalhoLinha $idCentroTrabalhoLinha
     *
     * @return AmpControleProducao
     */
    public function setIdCentroTrabalhoLinha(\AmpCentroTrabalhoLinha $idCentroTrabalhoLinha = null)
    {
        $this->idCentroTrabalhoLinha = $idCentroTrabalhoLinha;

        return $this;
    }

    /**
     * Get idCentroTrabalhoLinha
     *
     * @return \AmpCentroTrabalhoLinha
     */
    public function getIdCentroTrabalhoLinha()
    {
        return $this->idCentroTrabalhoLinha;
    }
}

