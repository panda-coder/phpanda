<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPedidoVenda
 *
 * @ORM\Table(name="amp_pedido_venda", indexes={@ORM\Index(name="fk_amp_pedido_venda_1_idx", columns={"id_entidade"}), @ORM\Index(name="fk_amp_pedido_venda_4_idx", columns={"id_vencimento"}), @ORM\Index(name="fk_amp_pedido_venda_3_idx", columns={"id_representante_indireto"}), @ORM\Index(name="fk_amp_pedido_venda_5_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_amp_pedido_venda_6_idx", columns={"id_tabela_preco"}), @ORM\Index(name="fk_amp_pedido_venda_7_idx", columns={"id_tipo_pedido"}), @ORM\Index(name="fk_amp_pedido_venda_2_idx", columns={"id_representante_direto"}), @ORM\Index(name="amp_pedido_venda_data_idx", columns={"data_entrega", "status"})})
 * @ORM\Entity
 */
class AmpPedidoVenda
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_venda", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedidoVenda;

    /**
     * @var int
     *
     * @ORM\Column(name="id_frete_tomador", type="integer", nullable=false)
     */
    private $idFreteTomador = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="pedido_cliente", type="string", length=20, nullable=true)
     */
    private $pedidoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="desconto_politica", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $descontoPolitica;

    /**
     * @var string
     *
     * @ORM\Column(name="desconto_pedido", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $descontoPedido;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=1000, nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao_nota", type="string", length=1000, nullable=true)
     */
    private $observacaoNota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrega", type="datetime", nullable=true)
     */
    private $dataEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="frete_valor", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $freteValor;

    /**
     * @var int
     *
     * @ORM\Column(name="frete_tomador", type="integer", nullable=true)
     */
    private $freteTomador;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $seguroValor;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_local_destino", type="string", length=45, nullable=true)
     */
    private $codigoLocalDestino;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=false)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

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
     * @var \AmpRepresentante
     *
     * @ORM\ManyToOne(targetEntity="AmpRepresentante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_representante_direto", referencedColumnName="id_representante")
     * })
     */
    private $idRepresentanteDireto;

    /**
     * @var \AmpRepresentante
     *
     * @ORM\ManyToOne(targetEntity="AmpRepresentante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_representante_indireto", referencedColumnName="id_representante")
     * })
     */
    private $idRepresentanteIndireto;

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
     * @var \AmpFormaPagamento
     *
     * @ORM\ManyToOne(targetEntity="AmpFormaPagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forma_pagamento", referencedColumnName="id_forma_pagamento")
     * })
     */
    private $idFormaPagamento;

    /**
     * @var \AmpTabelaPreco
     *
     * @ORM\ManyToOne(targetEntity="AmpTabelaPreco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tabela_preco", referencedColumnName="id_tabela_preco")
     * })
     */
    private $idTabelaPreco;

    /**
     * @var \AmpTipoPedido
     *
     * @ORM\ManyToOne(targetEntity="AmpTipoPedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_pedido", referencedColumnName="id_tipo_pedido")
     * })
     */
    private $idTipoPedido;


    /**
     * Get idPedidoVenda
     *
     * @return int
     */
    public function getIdPedidoVenda()
    {
        return $this->idPedidoVenda;
    }

    /**
     * Set idFreteTomador
     *
     * @param int $idFreteTomador
     *
     * @return AmpPedidoVenda
     */
    public function setIdFreteTomador($idFreteTomador)
    {
        $this->idFreteTomador = $idFreteTomador;

        return $this;
    }

    /**
     * Get idFreteTomador
     *
     * @return int
     */
    public function getIdFreteTomador()
    {
        return $this->idFreteTomador;
    }

    /**
     * Set pedidoCliente
     *
     * @param string $pedidoCliente
     *
     * @return AmpPedidoVenda
     */
    public function setPedidoCliente($pedidoCliente)
    {
        $this->pedidoCliente = $pedidoCliente;

        return $this;
    }

    /**
     * Get pedidoCliente
     *
     * @return string
     */
    public function getPedidoCliente()
    {
        return $this->pedidoCliente;
    }

    /**
     * Set descontoPolitica
     *
     * @param string $descontoPolitica
     *
     * @return AmpPedidoVenda
     */
    public function setDescontoPolitica($descontoPolitica)
    {
        $this->descontoPolitica = $descontoPolitica;

        return $this;
    }

    /**
     * Get descontoPolitica
     *
     * @return string
     */
    public function getDescontoPolitica()
    {
        return $this->descontoPolitica;
    }

    /**
     * Set descontoPedido
     *
     * @param string $descontoPedido
     *
     * @return AmpPedidoVenda
     */
    public function setDescontoPedido($descontoPedido)
    {
        $this->descontoPedido = $descontoPedido;

        return $this;
    }

    /**
     * Get descontoPedido
     *
     * @return string
     */
    public function getDescontoPedido()
    {
        return $this->descontoPedido;
    }

    /**
     * Set status
     *
     * @param int $status
     *
     * @return AmpPedidoVenda
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpPedidoVenda
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
     * Set observacaoNota
     *
     * @param string $observacaoNota
     *
     * @return AmpPedidoVenda
     */
    public function setObservacaoNota($observacaoNota)
    {
        $this->observacaoNota = $observacaoNota;

        return $this;
    }

    /**
     * Get observacaoNota
     *
     * @return string
     */
    public function getObservacaoNota()
    {
        return $this->observacaoNota;
    }

    /**
     * Set dataEntrega
     *
     * @param \DateTime $dataEntrega
     *
     * @return AmpPedidoVenda
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;

        return $this;
    }

    /**
     * Get dataEntrega
     *
     * @return \DateTime
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * Set freteValor
     *
     * @param string $freteValor
     *
     * @return AmpPedidoVenda
     */
    public function setFreteValor($freteValor)
    {
        $this->freteValor = $freteValor;

        return $this;
    }

    /**
     * Get freteValor
     *
     * @return string
     */
    public function getFreteValor()
    {
        return $this->freteValor;
    }

    /**
     * Set freteTomador
     *
     * @param int $freteTomador
     *
     * @return AmpPedidoVenda
     */
    public function setFreteTomador($freteTomador)
    {
        $this->freteTomador = $freteTomador;

        return $this;
    }

    /**
     * Get freteTomador
     *
     * @return int
     */
    public function getFreteTomador()
    {
        return $this->freteTomador;
    }

    /**
     * Set seguroValor
     *
     * @param string $seguroValor
     *
     * @return AmpPedidoVenda
     */
    public function setSeguroValor($seguroValor)
    {
        $this->seguroValor = $seguroValor;

        return $this;
    }

    /**
     * Get seguroValor
     *
     * @return string
     */
    public function getSeguroValor()
    {
        return $this->seguroValor;
    }

    /**
     * Set codigoLocalDestino
     *
     * @param string $codigoLocalDestino
     *
     * @return AmpPedidoVenda
     */
    public function setCodigoLocalDestino($codigoLocalDestino)
    {
        $this->codigoLocalDestino = $codigoLocalDestino;

        return $this;
    }

    /**
     * Get codigoLocalDestino
     *
     * @return string
     */
    public function getCodigoLocalDestino()
    {
        return $this->codigoLocalDestino;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPedidoVenda
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpPedidoVenda
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpPedidoVenda
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpPedidoVenda
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
     * @return AmpPedidoVenda
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
     * Set idRepresentanteDireto
     *
     * @param \AmpRepresentante $idRepresentanteDireto
     *
     * @return AmpPedidoVenda
     */
    public function setIdRepresentanteDireto(\AmpRepresentante $idRepresentanteDireto = null)
    {
        $this->idRepresentanteDireto = $idRepresentanteDireto;

        return $this;
    }

    /**
     * Get idRepresentanteDireto
     *
     * @return \AmpRepresentante
     */
    public function getIdRepresentanteDireto()
    {
        return $this->idRepresentanteDireto;
    }

    /**
     * Set idRepresentanteIndireto
     *
     * @param \AmpRepresentante $idRepresentanteIndireto
     *
     * @return AmpPedidoVenda
     */
    public function setIdRepresentanteIndireto(\AmpRepresentante $idRepresentanteIndireto = null)
    {
        $this->idRepresentanteIndireto = $idRepresentanteIndireto;

        return $this;
    }

    /**
     * Get idRepresentanteIndireto
     *
     * @return \AmpRepresentante
     */
    public function getIdRepresentanteIndireto()
    {
        return $this->idRepresentanteIndireto;
    }

    /**
     * Set idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpPedidoVenda
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

    /**
     * Set idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpPedidoVenda
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
     * Set idTabelaPreco
     *
     * @param \AmpTabelaPreco $idTabelaPreco
     *
     * @return AmpPedidoVenda
     */
    public function setIdTabelaPreco(\AmpTabelaPreco $idTabelaPreco = null)
    {
        $this->idTabelaPreco = $idTabelaPreco;

        return $this;
    }

    /**
     * Get idTabelaPreco
     *
     * @return \AmpTabelaPreco
     */
    public function getIdTabelaPreco()
    {
        return $this->idTabelaPreco;
    }

    /**
     * Set idTipoPedido
     *
     * @param \AmpTipoPedido $idTipoPedido
     *
     * @return AmpPedidoVenda
     */
    public function setIdTipoPedido(\AmpTipoPedido $idTipoPedido = null)
    {
        $this->idTipoPedido = $idTipoPedido;

        return $this;
    }

    /**
     * Get idTipoPedido
     *
     * @return \AmpTipoPedido
     */
    public function getIdTipoPedido()
    {
        return $this->idTipoPedido;
    }
}

