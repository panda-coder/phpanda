<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpSistemaEdiStatusPedido
 *
 * @ORM\Table(name="amp_sistema_edi_status_pedido", indexes={@ORM\Index(name="fk_id_entidade_idx", columns={"id_entidade"}), @ORM\Index(name="fk_id_sistema_edi1_idx", columns={"id_sistema_edi"})})
 * @ORM\Entity
 */
class AmpSistemaEdiStatusPedido
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sistema_edi_status_pedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSistemaEdiStatusPedido;

    /**
     * @var int
     *
     * @ORM\Column(name="status_pedido", type="integer", nullable=false)
     */
    private $statusPedido;

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
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidade;

    /**
     * @var \AmpSistemaEdi
     *
     * @ORM\ManyToOne(targetEntity="AmpSistemaEdi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sistema_edi", referencedColumnName="id_sistema_edi")
     * })
     */
    private $idSistemaEdi;


    /**
     * Get idSistemaEdiStatusPedido
     *
     * @return int
     */
    public function getIdSistemaEdiStatusPedido()
    {
        return $this->idSistemaEdiStatusPedido;
    }

    /**
     * Set statusPedido
     *
     * @param int $statusPedido
     *
     * @return AmpSistemaEdiStatusPedido
     */
    public function setStatusPedido($statusPedido)
    {
        $this->statusPedido = $statusPedido;

        return $this;
    }

    /**
     * Get statusPedido
     *
     * @return int
     */
    public function getStatusPedido()
    {
        return $this->statusPedido;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpSistemaEdiStatusPedido
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
     * @return AmpSistemaEdiStatusPedido
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
     * @return AmpSistemaEdiStatusPedido
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
     * @return AmpSistemaEdiStatusPedido
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
     * Set idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpSistemaEdiStatusPedido
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

    /**
     * Set idSistemaEdi
     *
     * @param \AmpSistemaEdi $idSistemaEdi
     *
     * @return AmpSistemaEdiStatusPedido
     */
    public function setIdSistemaEdi(\AmpSistemaEdi $idSistemaEdi = null)
    {
        $this->idSistemaEdi = $idSistemaEdi;

        return $this;
    }

    /**
     * Get idSistemaEdi
     *
     * @return \AmpSistemaEdi
     */
    public function getIdSistemaEdi()
    {
        return $this->idSistemaEdi;
    }
}

