<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOrdemTransferencia
 *
 * @ORM\Table(name="amp_ordem_transferencia", indexes={@ORM\Index(name="fk_amp_ordem_transferencia_1_idx", columns={"id_expedidor"}), @ORM\Index(name="fk_amp_ordem_transferencia_2_idx", columns={"id_conferente"}), @ORM\Index(name="fk_amp_ordem_transferencia_4_idx", columns={"id_separador"}), @ORM\Index(name="fk_amp_ordem_transferencia_6_idx1", columns={"id_deposito"})})
 * @ORM\Entity
 */
class AmpOrdemTransferencia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_transferencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemTransferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=300, nullable=false)
     */
    private $descricao;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

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
     *   @ORM\JoinColumn(name="id_separador", referencedColumnName="id_usuario")
     * })
     */
    private $idSeparador;

    /**
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expedidor", referencedColumnName="id_usuario")
     * })
     */
    private $idExpedidor;

    /**
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conferente", referencedColumnName="id_usuario")
     * })
     */
    private $idConferente;

    /**
     * @var \AmpDeposito
     *
     * @ORM\ManyToOne(targetEntity="AmpDeposito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_deposito", referencedColumnName="id_deposito")
     * })
     */
    private $idDeposito;


    /**
     * Get idOrdemTransferencia
     *
     * @return int
     */
    public function getIdOrdemTransferencia()
    {
        return $this->idOrdemTransferencia;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpOrdemTransferencia
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
     * Set tipo
     *
     * @param int $tipo
     *
     * @return AmpOrdemTransferencia
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set status
     *
     * @param int $status
     *
     * @return AmpOrdemTransferencia
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpOrdemTransferencia
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
     * @return AmpOrdemTransferencia
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
     * @return AmpOrdemTransferencia
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
     * @return AmpOrdemTransferencia
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
     * Set idSeparador
     *
     * @param \AmpUsuario $idSeparador
     *
     * @return AmpOrdemTransferencia
     */
    public function setIdSeparador(\AmpUsuario $idSeparador = null)
    {
        $this->idSeparador = $idSeparador;

        return $this;
    }

    /**
     * Get idSeparador
     *
     * @return \AmpUsuario
     */
    public function getIdSeparador()
    {
        return $this->idSeparador;
    }

    /**
     * Set idExpedidor
     *
     * @param \AmpUsuario $idExpedidor
     *
     * @return AmpOrdemTransferencia
     */
    public function setIdExpedidor(\AmpUsuario $idExpedidor = null)
    {
        $this->idExpedidor = $idExpedidor;

        return $this;
    }

    /**
     * Get idExpedidor
     *
     * @return \AmpUsuario
     */
    public function getIdExpedidor()
    {
        return $this->idExpedidor;
    }

    /**
     * Set idConferente
     *
     * @param \AmpUsuario $idConferente
     *
     * @return AmpOrdemTransferencia
     */
    public function setIdConferente(\AmpUsuario $idConferente = null)
    {
        $this->idConferente = $idConferente;

        return $this;
    }

    /**
     * Get idConferente
     *
     * @return \AmpUsuario
     */
    public function getIdConferente()
    {
        return $this->idConferente;
    }

    /**
     * Set idDeposito
     *
     * @param \AmpDeposito $idDeposito
     *
     * @return AmpOrdemTransferencia
     */
    public function setIdDeposito(\AmpDeposito $idDeposito = null)
    {
        $this->idDeposito = $idDeposito;

        return $this;
    }

    /**
     * Get idDeposito
     *
     * @return \AmpDeposito
     */
    public function getIdDeposito()
    {
        return $this->idDeposito;
    }
}

