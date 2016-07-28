<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpContaInternaLancamento
 *
 * @ORM\Table(name="amp_conta_interna_lancamento", indexes={@ORM\Index(name="fk_amp_conta_interna_lancamento_2_idx", columns={"id_pedido_compra"}), @ORM\Index(name="fk_conta_interna_lancamento_1", columns={"id_conta_interna"})})
 * @ORM\Entity
 */
class AmpContaInternaLancamento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_interna_lancamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContaInternaLancamento;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=50, nullable=false)
     */
    private $documento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_expira", type="datetime", nullable=true)
     */
    private $dataExpira;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $saldo;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_movimento", type="integer", nullable=false)
     */
    private $tipoMovimento;

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
     * @var \AmpContaInterna
     *
     * @ORM\ManyToOne(targetEntity="AmpContaInterna")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_interna", referencedColumnName="id_conta_interna")
     * })
     */
    private $idContaInterna;

    /**
     * @var \AmpPedidoCompra
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra", referencedColumnName="id_pedido_compra")
     * })
     */
    private $idPedidoCompra;


    /**
     * Get idContaInternaLancamento
     *
     * @return int
     */
    public function getIdContaInternaLancamento()
    {
        return $this->idContaInternaLancamento;
    }

    /**
     * Set documento
     *
     * @param string $documento
     *
     * @return AmpContaInternaLancamento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set dataExpira
     *
     * @param \DateTime $dataExpira
     *
     * @return AmpContaInternaLancamento
     */
    public function setDataExpira($dataExpira)
    {
        $this->dataExpira = $dataExpira;

        return $this;
    }

    /**
     * Get dataExpira
     *
     * @return \DateTime
     */
    public function getDataExpira()
    {
        return $this->dataExpira;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     *
     * @return AmpContaInternaLancamento
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set tipoMovimento
     *
     * @param int $tipoMovimento
     *
     * @return AmpContaInternaLancamento
     */
    public function setTipoMovimento($tipoMovimento)
    {
        $this->tipoMovimento = $tipoMovimento;

        return $this;
    }

    /**
     * Get tipoMovimento
     *
     * @return int
     */
    public function getTipoMovimento()
    {
        return $this->tipoMovimento;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpContaInternaLancamento
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
     * @return AmpContaInternaLancamento
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
     * @return AmpContaInternaLancamento
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
     * @return AmpContaInternaLancamento
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
     * Set idContaInterna
     *
     * @param \AmpContaInterna $idContaInterna
     *
     * @return AmpContaInternaLancamento
     */
    public function setIdContaInterna(\AmpContaInterna $idContaInterna = null)
    {
        $this->idContaInterna = $idContaInterna;

        return $this;
    }

    /**
     * Get idContaInterna
     *
     * @return \AmpContaInterna
     */
    public function getIdContaInterna()
    {
        return $this->idContaInterna;
    }

    /**
     * Set idPedidoCompra
     *
     * @param \AmpPedidoCompra $idPedidoCompra
     *
     * @return AmpContaInternaLancamento
     */
    public function setIdPedidoCompra(\AmpPedidoCompra $idPedidoCompra = null)
    {
        $this->idPedidoCompra = $idPedidoCompra;

        return $this;
    }

    /**
     * Get idPedidoCompra
     *
     * @return \AmpPedidoCompra
     */
    public function getIdPedidoCompra()
    {
        return $this->idPedidoCompra;
    }
}

