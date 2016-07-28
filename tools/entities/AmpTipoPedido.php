<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTipoPedido
 *
 * @ORM\Table(name="amp_tipo_pedido", indexes={@ORM\Index(name="fk_amp_tipo_pedido_1_idx", columns={"id_macro_operacao"})})
 * @ORM\Entity
 */
class AmpTipoPedido
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_pedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pedido", type="string", length=50, nullable=false)
     */
    private $tipoPedido;

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
     * @var \AmpMacroOperacao
     *
     * @ORM\ManyToOne(targetEntity="AmpMacroOperacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_macro_operacao", referencedColumnName="id_macro_operacao")
     * })
     */
    private $idMacroOperacao;


    /**
     * Get idTipoPedido
     *
     * @return int
     */
    public function getIdTipoPedido()
    {
        return $this->idTipoPedido;
    }

    /**
     * Set tipoPedido
     *
     * @param string $tipoPedido
     *
     * @return AmpTipoPedido
     */
    public function setTipoPedido($tipoPedido)
    {
        $this->tipoPedido = $tipoPedido;

        return $this;
    }

    /**
     * Get tipoPedido
     *
     * @return string
     */
    public function getTipoPedido()
    {
        return $this->tipoPedido;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpTipoPedido
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
     * @return AmpTipoPedido
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
     * @return AmpTipoPedido
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
     * @return AmpTipoPedido
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
     * Set idMacroOperacao
     *
     * @param \AmpMacroOperacao $idMacroOperacao
     *
     * @return AmpTipoPedido
     */
    public function setIdMacroOperacao(\AmpMacroOperacao $idMacroOperacao = null)
    {
        $this->idMacroOperacao = $idMacroOperacao;

        return $this;
    }

    /**
     * Get idMacroOperacao
     *
     * @return \AmpMacroOperacao
     */
    public function getIdMacroOperacao()
    {
        return $this->idMacroOperacao;
    }
}

