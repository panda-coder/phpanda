<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpDespesa
 *
 * @ORM\Table(name="amp_despesa", indexes={@ORM\Index(name="fk_amp_despesa_1_idx", columns={"id_usuario_requisitante"}), @ORM\Index(name="fk_amp_despesa_2_idx", columns={"id_usuario_gestor"}), @ORM\Index(name="fk_amp_despesa_3_idx", columns={"id_centro_custo"})})
 * @ORM\Entity
 */
class AmpDespesa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_despesa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDespesa;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=false)
     */
    private $descricao;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=500, nullable=false)
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="adiantamento_valor", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $adiantamentoValor;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $valorTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=45, nullable=false)
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
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_requisitante", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuarioRequisitante;

    /**
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_gestor", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuarioGestor;

    /**
     * @var \AmpCentroCusto
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroCusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_custo", referencedColumnName="id_centro_custo")
     * })
     */
    private $idCentroCusto;


    /**
     * Get idDespesa
     *
     * @return int
     */
    public function getIdDespesa()
    {
        return $this->idDespesa;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpDespesa
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
     * Set status
     *
     * @param int $status
     *
     * @return AmpDespesa
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
     * Set motivo
     *
     * @param string $motivo
     *
     * @return AmpDespesa
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set adiantamentoValor
     *
     * @param string $adiantamentoValor
     *
     * @return AmpDespesa
     */
    public function setAdiantamentoValor($adiantamentoValor)
    {
        $this->adiantamentoValor = $adiantamentoValor;

        return $this;
    }

    /**
     * Get adiantamentoValor
     *
     * @return string
     */
    public function getAdiantamentoValor()
    {
        return $this->adiantamentoValor;
    }

    /**
     * Set valorTotal
     *
     * @param string $valorTotal
     *
     * @return AmpDespesa
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpDespesa
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
     * @return AmpDespesa
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
     * @return AmpDespesa
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
     * @return AmpDespesa
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
     * @return AmpDespesa
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
     * Set idUsuarioRequisitante
     *
     * @param \AmpUsuario $idUsuarioRequisitante
     *
     * @return AmpDespesa
     */
    public function setIdUsuarioRequisitante(\AmpUsuario $idUsuarioRequisitante = null)
    {
        $this->idUsuarioRequisitante = $idUsuarioRequisitante;

        return $this;
    }

    /**
     * Get idUsuarioRequisitante
     *
     * @return \AmpUsuario
     */
    public function getIdUsuarioRequisitante()
    {
        return $this->idUsuarioRequisitante;
    }

    /**
     * Set idUsuarioGestor
     *
     * @param \AmpUsuario $idUsuarioGestor
     *
     * @return AmpDespesa
     */
    public function setIdUsuarioGestor(\AmpUsuario $idUsuarioGestor = null)
    {
        $this->idUsuarioGestor = $idUsuarioGestor;

        return $this;
    }

    /**
     * Get idUsuarioGestor
     *
     * @return \AmpUsuario
     */
    public function getIdUsuarioGestor()
    {
        return $this->idUsuarioGestor;
    }

    /**
     * Set idCentroCusto
     *
     * @param \AmpCentroCusto $idCentroCusto
     *
     * @return AmpDespesa
     */
    public function setIdCentroCusto(\AmpCentroCusto $idCentroCusto = null)
    {
        $this->idCentroCusto = $idCentroCusto;

        return $this;
    }

    /**
     * Get idCentroCusto
     *
     * @return \AmpCentroCusto
     */
    public function getIdCentroCusto()
    {
        return $this->idCentroCusto;
    }
}

