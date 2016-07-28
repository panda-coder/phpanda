<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRequisicaoCompra
 *
 * @ORM\Table(name="amp_requisicao_compra", indexes={@ORM\Index(name="fk_amp_requisicao_compra_1_idx", columns={"id_requisitante"})})
 * @ORM\Entity
 */
class AmpRequisicaoCompra
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_requisicao_compra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequisicaoCompra;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prazo_cotacao", type="datetime", nullable=false)
     */
    private $prazoCotacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=50, nullable=true)
     */
    private $observacao = '';

    /**
     * @var string
     *
     * @ORM\Column(name="justificativa", type="string", length=500, nullable=true)
     */
    private $justificativa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_aprovado_reprovado_por", type="integer", nullable=true)
     */
    private $idAprovadoReprovadoPor;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

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
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_requisitante", referencedColumnName="id_usuario")
     * })
     */
    private $idRequisitante;


    /**
     * Get idRequisicaoCompra
     *
     * @return int
     */
    public function getIdRequisicaoCompra()
    {
        return $this->idRequisicaoCompra;
    }

    /**
     * Set status
     *
     * @param int $status
     *
     * @return AmpRequisicaoCompra
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
     * Set prazoCotacao
     *
     * @param \DateTime $prazoCotacao
     *
     * @return AmpRequisicaoCompra
     */
    public function setPrazoCotacao($prazoCotacao)
    {
        $this->prazoCotacao = $prazoCotacao;

        return $this;
    }

    /**
     * Get prazoCotacao
     *
     * @return \DateTime
     */
    public function getPrazoCotacao()
    {
        return $this->prazoCotacao;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpRequisicaoCompra
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
     * Set justificativa
     *
     * @param string $justificativa
     *
     * @return AmpRequisicaoCompra
     */
    public function setJustificativa($justificativa)
    {
        $this->justificativa = $justificativa;

        return $this;
    }

    /**
     * Get justificativa
     *
     * @return string
     */
    public function getJustificativa()
    {
        return $this->justificativa;
    }

    /**
     * Set idAprovadoReprovadoPor
     *
     * @param int $idAprovadoReprovadoPor
     *
     * @return AmpRequisicaoCompra
     */
    public function setIdAprovadoReprovadoPor($idAprovadoReprovadoPor)
    {
        $this->idAprovadoReprovadoPor = $idAprovadoReprovadoPor;

        return $this;
    }

    /**
     * Get idAprovadoReprovadoPor
     *
     * @return int
     */
    public function getIdAprovadoReprovadoPor()
    {
        return $this->idAprovadoReprovadoPor;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpRequisicaoCompra
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
     * @return AmpRequisicaoCompra
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
     * @return AmpRequisicaoCompra
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
     * @return AmpRequisicaoCompra
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
     * Set idRequisitante
     *
     * @param \AmpUsuario $idRequisitante
     *
     * @return AmpRequisicaoCompra
     */
    public function setIdRequisitante(\AmpUsuario $idRequisitante = null)
    {
        $this->idRequisitante = $idRequisitante;

        return $this;
    }

    /**
     * Get idRequisitante
     *
     * @return \AmpUsuario
     */
    public function getIdRequisitante()
    {
        return $this->idRequisitante;
    }
}

