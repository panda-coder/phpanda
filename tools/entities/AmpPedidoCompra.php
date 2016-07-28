<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPedidoCompra
 *
 * @ORM\Table(name="amp_pedido_compra", indexes={@ORM\Index(name="fk_amp_pedido_compra_1_idx", columns={"id_fornecedor"}), @ORM\Index(name="fk_amp_pedido_compra_3_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_amp_pedido_compra_4_idx", columns={"id_vencimento"})})
 * @ORM\Entity
 */
class AmpPedidoCompra
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_compra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedidoCompra;

    /**
     * @var int
     *
     * @ORM\Column(name="id_requisicao_compra", type="integer", nullable=true)
     */
    private $idRequisicaoCompra;

    /**
     * @var int
     *
     * @ORM\Column(name="id_aprovado_reprovado_por", type="integer", nullable=true)
     */
    private $idAprovadoReprovadoPor;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="url_pdf", type="string", length=150, nullable=true)
     */
    private $urlPdf;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorTotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="email_enviado", type="string", length=1, nullable=true)
     */
    private $emailEnviado = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="justificativa", type="text", length=65535, nullable=true)
     */
    private $justificativa;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=true)
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
     * @var int
     *
     * @ORM\Column(name="codigo_gemma", type="integer", nullable=true)
     */
    private $codigoGemma;

    /**
     * @var \AmpFornecedor
     *
     * @ORM\ManyToOne(targetEntity="AmpFornecedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fornecedor", referencedColumnName="id_fornecedor")
     * })
     */
    private $idFornecedor;

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
     * @var \AmpVencimento
     *
     * @ORM\ManyToOne(targetEntity="AmpVencimento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vencimento", referencedColumnName="id_vencimento")
     * })
     */
    private $idVencimento;


    /**
     * Get idPedidoCompra
     *
     * @return int
     */
    public function getIdPedidoCompra()
    {
        return $this->idPedidoCompra;
    }

    /**
     * Set idRequisicaoCompra
     *
     * @param int $idRequisicaoCompra
     *
     * @return AmpPedidoCompra
     */
    public function setIdRequisicaoCompra($idRequisicaoCompra)
    {
        $this->idRequisicaoCompra = $idRequisicaoCompra;

        return $this;
    }

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
     * Set idAprovadoReprovadoPor
     *
     * @param int $idAprovadoReprovadoPor
     *
     * @return AmpPedidoCompra
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
     * Set status
     *
     * @param int $status
     *
     * @return AmpPedidoCompra
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
     * Set urlPdf
     *
     * @param string $urlPdf
     *
     * @return AmpPedidoCompra
     */
    public function setUrlPdf($urlPdf)
    {
        $this->urlPdf = $urlPdf;

        return $this;
    }

    /**
     * Get urlPdf
     *
     * @return string
     */
    public function getUrlPdf()
    {
        return $this->urlPdf;
    }

    /**
     * Set valorTotal
     *
     * @param string $valorTotal
     *
     * @return AmpPedidoCompra
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
     * Set emailEnviado
     *
     * @param string $emailEnviado
     *
     * @return AmpPedidoCompra
     */
    public function setEmailEnviado($emailEnviado)
    {
        $this->emailEnviado = $emailEnviado;

        return $this;
    }

    /**
     * Get emailEnviado
     *
     * @return string
     */
    public function getEmailEnviado()
    {
        return $this->emailEnviado;
    }

    /**
     * Set justificativa
     *
     * @param string $justificativa
     *
     * @return AmpPedidoCompra
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
     * @return AmpPedidoCompra
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
     * @return AmpPedidoCompra
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
     * @return AmpPedidoCompra
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
     * @return AmpPedidoCompra
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
     * @return AmpPedidoCompra
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
     * Set codigoGemma
     *
     * @param int $codigoGemma
     *
     * @return AmpPedidoCompra
     */
    public function setCodigoGemma($codigoGemma)
    {
        $this->codigoGemma = $codigoGemma;

        return $this;
    }

    /**
     * Get codigoGemma
     *
     * @return int
     */
    public function getCodigoGemma()
    {
        return $this->codigoGemma;
    }

    /**
     * Set idFornecedor
     *
     * @param \AmpFornecedor $idFornecedor
     *
     * @return AmpPedidoCompra
     */
    public function setIdFornecedor(\AmpFornecedor $idFornecedor = null)
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }

    /**
     * Get idFornecedor
     *
     * @return \AmpFornecedor
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    /**
     * Set idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpPedidoCompra
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
     * Set idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpPedidoCompra
     */
    public function setIdVencimento(\AmpVencimento $idVencimento = null)
    {
        $this->idVencimento = $idVencimento;

        return $this;
    }

    /**
     * Get idVencimento
     *
     * @return \AmpVencimento
     */
    public function getIdVencimento()
    {
        return $this->idVencimento;
    }
}

