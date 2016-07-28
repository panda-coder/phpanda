<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPedidoCompraDevolucao
 *
 * @ORM\Table(name="amp_pedido_compra_devolucao", indexes={@ORM\Index(name="fk_pedido_compra_idx", columns={"id_pedido_compra"}), @ORM\Index(name="fk_forma_pagamento_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_vencimento_idx", columns={"id_vencimento"}), @ORM\Index(name="fk_macro_operacao_idx", columns={"id_macro_operacao"})})
 * @ORM\Entity
 */
class AmpPedidoCompraDevolucao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_compra_devolucao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedidoCompraDevolucao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_vencimento", type="integer", nullable=false)
     */
    private $idVencimento;

    /**
     * @var string
     *
     * @ORM\Column(name="justificativa", type="string", length=255, nullable=false)
     */
    private $justificativa;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;

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
     * @var \AmpFormaPagamento
     *
     * @ORM\ManyToOne(targetEntity="AmpFormaPagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forma_pagamento", referencedColumnName="id_forma_pagamento")
     * })
     */
    private $idFormaPagamento;

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
     * @var \AmpPedidoCompra
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra", referencedColumnName="id_pedido_compra")
     * })
     */
    private $idPedidoCompra;


    /**
     * Get idPedidoCompraDevolucao
     *
     * @return int
     */
    public function getIdPedidoCompraDevolucao()
    {
        return $this->idPedidoCompraDevolucao;
    }

    /**
     * Set idVencimento
     *
     * @param int $idVencimento
     *
     * @return AmpPedidoCompraDevolucao
     */
    public function setIdVencimento($idVencimento)
    {
        $this->idVencimento = $idVencimento;

        return $this;
    }

    /**
     * Get idVencimento
     *
     * @return int
     */
    public function getIdVencimento()
    {
        return $this->idVencimento;
    }

    /**
     * Set justificativa
     *
     * @param string $justificativa
     *
     * @return AmpPedidoCompraDevolucao
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpPedidoCompraDevolucao
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
     * Set status
     *
     * @param int $status
     *
     * @return AmpPedidoCompraDevolucao
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
     * @return AmpPedidoCompraDevolucao
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
     * @return AmpPedidoCompraDevolucao
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
     * @return AmpPedidoCompraDevolucao
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
     * @return AmpPedidoCompraDevolucao
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
     * Set idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpPedidoCompraDevolucao
     */
    public function setIdFormaPagamento(\AmpFormaPagamento $idFormaPagamento = null)
    {
        $this->idFormaPagamento = $idFormaPagamento;

        return $this;
    }

    /**
     * Get idFormaPagamento
     *
     * @return \AmpFormaPagamento
     */
    public function getIdFormaPagamento()
    {
        return $this->idFormaPagamento;
    }

    /**
     * Set idMacroOperacao
     *
     * @param \AmpMacroOperacao $idMacroOperacao
     *
     * @return AmpPedidoCompraDevolucao
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

    /**
     * Set idPedidoCompra
     *
     * @param \AmpPedidoCompra $idPedidoCompra
     *
     * @return AmpPedidoCompraDevolucao
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

