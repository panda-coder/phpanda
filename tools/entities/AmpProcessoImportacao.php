<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProcessoImportacao
 *
 * @ORM\Table(name="amp_processo_importacao", indexes={@ORM\Index(name="fk_processo_importacao_pedido_compra_idx", columns={"id_pedido_compra"}), @ORM\Index(name="fk_processo_importacao_entidade_idx", columns={"id_entidade"}), @ORM\Index(name="fk_processo_importacao_forma_pagamento_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_processo_importacao_vencimento_idx", columns={"id_vencimento"}), @ORM\Index(name="fk_processo_importacao_tipo_pedido_idx", columns={"id_tipo_pedido"}), @ORM\Index(name="fk_processo_importacao_via_transporte_idx", columns={"id_via_transporte"}), @ORM\Index(name="fk_processo_importacao_entidade_transportadora_idx", columns={"id_entidade_transportadora"}), @ORM\Index(name="fk_processo_importacao_entidade_despachante_idx", columns={"id_entidade_despachante"})})
 * @ORM\Entity
 */
class AmpProcessoImportacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_processo_importacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProcessoImportacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_pedido", type="integer", nullable=false)
     */
    private $idTipoPedido;

    /**
     * @var int
     *
     * @ORM\Column(name="id_frete_modalidade", type="integer", nullable=true)
     */
    private $idFreteModalidade;

    /**
     * @var int
     *
     * @ORM\Column(name="id_idioma", type="integer", nullable=true)
     */
    private $idIdioma;

    /**
     * @var int
     *
     * @ORM\Column(name="id_incoterm", type="integer", nullable=false)
     */
    private $idIncoterm;

    /**
     * @var string
     *
     * @ORM\Column(name="desconto_pedido", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $descontoPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=80, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="ordem_compra", type="string", length=45, nullable=true)
     */
    private $ordemCompra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ordem_compra", type="datetime", nullable=true)
     */
    private $dataOrdemCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_referencia", type="string", length=45, nullable=true)
     */
    private $numeroReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao_nota", type="string", length=1000, nullable=true)
     */
    private $observacaoNota;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrega", type="datetime", nullable=true)
     */
    private $dataEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_invoice", type="datetime", nullable=true)
     */
    private $dataInvoice;

    /**
     * @var string
     *
     * @ORM\Column(name="frete_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $freteValor = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="seguro_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $seguroValor = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="capatazias", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $capatazias = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="despesa_desconto", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $despesaDesconto = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="outras_despesas_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $outrasDespesasValor = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="embarque_local", type="string", length=50, nullable=true)
     */
    private $embarqueLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="destino_local", type="string", length=50, nullable=true)
     */
    private $destinoLocal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_embarque", type="datetime", nullable=true)
     */
    private $dataEmbarque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_carregamento", type="datetime", nullable=true)
     */
    private $dataCarregamento;

    /**
     * @var string
     *
     * @ORM\Column(name="documento_transporte", type="string", length=45, nullable=true)
     */
    private $documentoTransporte;

    /**
     * @var string
     *
     * @ORM\Column(name="companhia_transporte", type="string", length=45, nullable=true)
     */
    private $companhiaTransporte;

    /**
     * @var int
     *
     * @ORM\Column(name="tempo_transito", type="integer", nullable=true)
     */
    private $tempoTransito;

    /**
     * @var string
     *
     * @ORM\Column(name="di", type="string", length=45, nullable=true)
     */
    private $di;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_di", type="datetime", nullable=true)
     */
    private $dataDi;

    /**
     * @var string
     *
     * @ORM\Column(name="taxa_di", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $taxaDi;

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
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entidade_despachante", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidadeDespachante;

    /**
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entidade_transportadora", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidadeTransportadora;

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
     * @var \AmpPedidoCompra
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra", referencedColumnName="id_pedido_compra")
     * })
     */
    private $idPedidoCompra;

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
     * @var \AmpViaTransporte
     *
     * @ORM\ManyToOne(targetEntity="AmpViaTransporte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_via_transporte", referencedColumnName="id_via_transporte")
     * })
     */
    private $idViaTransporte;


    /**
     * Get idProcessoImportacao
     *
     * @return int
     */
    public function getIdProcessoImportacao()
    {
        return $this->idProcessoImportacao;
    }

    /**
     * Set idTipoPedido
     *
     * @param int $idTipoPedido
     *
     * @return AmpProcessoImportacao
     */
    public function setIdTipoPedido($idTipoPedido)
    {
        $this->idTipoPedido = $idTipoPedido;

        return $this;
    }

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
     * Set idFreteModalidade
     *
     * @param int $idFreteModalidade
     *
     * @return AmpProcessoImportacao
     */
    public function setIdFreteModalidade($idFreteModalidade)
    {
        $this->idFreteModalidade = $idFreteModalidade;

        return $this;
    }

    /**
     * Get idFreteModalidade
     *
     * @return int
     */
    public function getIdFreteModalidade()
    {
        return $this->idFreteModalidade;
    }

    /**
     * Set idIdioma
     *
     * @param int $idIdioma
     *
     * @return AmpProcessoImportacao
     */
    public function setIdIdioma($idIdioma)
    {
        $this->idIdioma = $idIdioma;

        return $this;
    }

    /**
     * Get idIdioma
     *
     * @return int
     */
    public function getIdIdioma()
    {
        return $this->idIdioma;
    }

    /**
     * Set idIncoterm
     *
     * @param int $idIncoterm
     *
     * @return AmpProcessoImportacao
     */
    public function setIdIncoterm($idIncoterm)
    {
        $this->idIncoterm = $idIncoterm;

        return $this;
    }

    /**
     * Get idIncoterm
     *
     * @return int
     */
    public function getIdIncoterm()
    {
        return $this->idIncoterm;
    }

    /**
     * Set descontoPedido
     *
     * @param string $descontoPedido
     *
     * @return AmpProcessoImportacao
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
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpProcessoImportacao
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
     * Set ordemCompra
     *
     * @param string $ordemCompra
     *
     * @return AmpProcessoImportacao
     */
    public function setOrdemCompra($ordemCompra)
    {
        $this->ordemCompra = $ordemCompra;

        return $this;
    }

    /**
     * Get ordemCompra
     *
     * @return string
     */
    public function getOrdemCompra()
    {
        return $this->ordemCompra;
    }

    /**
     * Set dataOrdemCompra
     *
     * @param \DateTime $dataOrdemCompra
     *
     * @return AmpProcessoImportacao
     */
    public function setDataOrdemCompra($dataOrdemCompra)
    {
        $this->dataOrdemCompra = $dataOrdemCompra;

        return $this;
    }

    /**
     * Get dataOrdemCompra
     *
     * @return \DateTime
     */
    public function getDataOrdemCompra()
    {
        return $this->dataOrdemCompra;
    }

    /**
     * Set numeroReferencia
     *
     * @param string $numeroReferencia
     *
     * @return AmpProcessoImportacao
     */
    public function setNumeroReferencia($numeroReferencia)
    {
        $this->numeroReferencia = $numeroReferencia;

        return $this;
    }

    /**
     * Get numeroReferencia
     *
     * @return string
     */
    public function getNumeroReferencia()
    {
        return $this->numeroReferencia;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpProcessoImportacao
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
     * @return AmpProcessoImportacao
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
     * Set status
     *
     * @param int $status
     *
     * @return AmpProcessoImportacao
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
     * Set dataEntrega
     *
     * @param \DateTime $dataEntrega
     *
     * @return AmpProcessoImportacao
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
     * Set dataInvoice
     *
     * @param \DateTime $dataInvoice
     *
     * @return AmpProcessoImportacao
     */
    public function setDataInvoice($dataInvoice)
    {
        $this->dataInvoice = $dataInvoice;

        return $this;
    }

    /**
     * Get dataInvoice
     *
     * @return \DateTime
     */
    public function getDataInvoice()
    {
        return $this->dataInvoice;
    }

    /**
     * Set freteValor
     *
     * @param string $freteValor
     *
     * @return AmpProcessoImportacao
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
     * Set seguroValor
     *
     * @param string $seguroValor
     *
     * @return AmpProcessoImportacao
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
     * Set capatazias
     *
     * @param string $capatazias
     *
     * @return AmpProcessoImportacao
     */
    public function setCapatazias($capatazias)
    {
        $this->capatazias = $capatazias;

        return $this;
    }

    /**
     * Get capatazias
     *
     * @return string
     */
    public function getCapatazias()
    {
        return $this->capatazias;
    }

    /**
     * Set despesaDesconto
     *
     * @param string $despesaDesconto
     *
     * @return AmpProcessoImportacao
     */
    public function setDespesaDesconto($despesaDesconto)
    {
        $this->despesaDesconto = $despesaDesconto;

        return $this;
    }

    /**
     * Get despesaDesconto
     *
     * @return string
     */
    public function getDespesaDesconto()
    {
        return $this->despesaDesconto;
    }

    /**
     * Set outrasDespesasValor
     *
     * @param string $outrasDespesasValor
     *
     * @return AmpProcessoImportacao
     */
    public function setOutrasDespesasValor($outrasDespesasValor)
    {
        $this->outrasDespesasValor = $outrasDespesasValor;

        return $this;
    }

    /**
     * Get outrasDespesasValor
     *
     * @return string
     */
    public function getOutrasDespesasValor()
    {
        return $this->outrasDespesasValor;
    }

    /**
     * Set embarqueLocal
     *
     * @param string $embarqueLocal
     *
     * @return AmpProcessoImportacao
     */
    public function setEmbarqueLocal($embarqueLocal)
    {
        $this->embarqueLocal = $embarqueLocal;

        return $this;
    }

    /**
     * Get embarqueLocal
     *
     * @return string
     */
    public function getEmbarqueLocal()
    {
        return $this->embarqueLocal;
    }

    /**
     * Set destinoLocal
     *
     * @param string $destinoLocal
     *
     * @return AmpProcessoImportacao
     */
    public function setDestinoLocal($destinoLocal)
    {
        $this->destinoLocal = $destinoLocal;

        return $this;
    }

    /**
     * Get destinoLocal
     *
     * @return string
     */
    public function getDestinoLocal()
    {
        return $this->destinoLocal;
    }

    /**
     * Set dataEmbarque
     *
     * @param \DateTime $dataEmbarque
     *
     * @return AmpProcessoImportacao
     */
    public function setDataEmbarque($dataEmbarque)
    {
        $this->dataEmbarque = $dataEmbarque;

        return $this;
    }

    /**
     * Get dataEmbarque
     *
     * @return \DateTime
     */
    public function getDataEmbarque()
    {
        return $this->dataEmbarque;
    }

    /**
     * Set dataCarregamento
     *
     * @param \DateTime $dataCarregamento
     *
     * @return AmpProcessoImportacao
     */
    public function setDataCarregamento($dataCarregamento)
    {
        $this->dataCarregamento = $dataCarregamento;

        return $this;
    }

    /**
     * Get dataCarregamento
     *
     * @return \DateTime
     */
    public function getDataCarregamento()
    {
        return $this->dataCarregamento;
    }

    /**
     * Set documentoTransporte
     *
     * @param string $documentoTransporte
     *
     * @return AmpProcessoImportacao
     */
    public function setDocumentoTransporte($documentoTransporte)
    {
        $this->documentoTransporte = $documentoTransporte;

        return $this;
    }

    /**
     * Get documentoTransporte
     *
     * @return string
     */
    public function getDocumentoTransporte()
    {
        return $this->documentoTransporte;
    }

    /**
     * Set companhiaTransporte
     *
     * @param string $companhiaTransporte
     *
     * @return AmpProcessoImportacao
     */
    public function setCompanhiaTransporte($companhiaTransporte)
    {
        $this->companhiaTransporte = $companhiaTransporte;

        return $this;
    }

    /**
     * Get companhiaTransporte
     *
     * @return string
     */
    public function getCompanhiaTransporte()
    {
        return $this->companhiaTransporte;
    }

    /**
     * Set tempoTransito
     *
     * @param int $tempoTransito
     *
     * @return AmpProcessoImportacao
     */
    public function setTempoTransito($tempoTransito)
    {
        $this->tempoTransito = $tempoTransito;

        return $this;
    }

    /**
     * Get tempoTransito
     *
     * @return int
     */
    public function getTempoTransito()
    {
        return $this->tempoTransito;
    }

    /**
     * Set di
     *
     * @param string $di
     *
     * @return AmpProcessoImportacao
     */
    public function setDi($di)
    {
        $this->di = $di;

        return $this;
    }

    /**
     * Get di
     *
     * @return string
     */
    public function getDi()
    {
        return $this->di;
    }

    /**
     * Set dataDi
     *
     * @param \DateTime $dataDi
     *
     * @return AmpProcessoImportacao
     */
    public function setDataDi($dataDi)
    {
        $this->dataDi = $dataDi;

        return $this;
    }

    /**
     * Get dataDi
     *
     * @return \DateTime
     */
    public function getDataDi()
    {
        return $this->dataDi;
    }

    /**
     * Set taxaDi
     *
     * @param string $taxaDi
     *
     * @return AmpProcessoImportacao
     */
    public function setTaxaDi($taxaDi)
    {
        $this->taxaDi = $taxaDi;

        return $this;
    }

    /**
     * Get taxaDi
     *
     * @return string
     */
    public function getTaxaDi()
    {
        return $this->taxaDi;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpProcessoImportacao
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
     * @return AmpProcessoImportacao
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
     * @return AmpProcessoImportacao
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
     * @return AmpProcessoImportacao
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
     * @return AmpProcessoImportacao
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
     * Set idEntidadeDespachante
     *
     * @param \AmpEntidade $idEntidadeDespachante
     *
     * @return AmpProcessoImportacao
     */
    public function setIdEntidadeDespachante(\AmpEntidade $idEntidadeDespachante = null)
    {
        $this->idEntidadeDespachante = $idEntidadeDespachante;

        return $this;
    }

    /**
     * Get idEntidadeDespachante
     *
     * @return \AmpEntidade
     */
    public function getIdEntidadeDespachante()
    {
        return $this->idEntidadeDespachante;
    }

    /**
     * Set idEntidadeTransportadora
     *
     * @param \AmpEntidade $idEntidadeTransportadora
     *
     * @return AmpProcessoImportacao
     */
    public function setIdEntidadeTransportadora(\AmpEntidade $idEntidadeTransportadora = null)
    {
        $this->idEntidadeTransportadora = $idEntidadeTransportadora;

        return $this;
    }

    /**
     * Get idEntidadeTransportadora
     *
     * @return \AmpEntidade
     */
    public function getIdEntidadeTransportadora()
    {
        return $this->idEntidadeTransportadora;
    }

    /**
     * Set idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpProcessoImportacao
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
     * Set idPedidoCompra
     *
     * @param \AmpPedidoCompra $idPedidoCompra
     *
     * @return AmpProcessoImportacao
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

    /**
     * Set idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpProcessoImportacao
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
     * Set idViaTransporte
     *
     * @param \AmpViaTransporte $idViaTransporte
     *
     * @return AmpProcessoImportacao
     */
    public function setIdViaTransporte(\AmpViaTransporte $idViaTransporte = null)
    {
        $this->idViaTransporte = $idViaTransporte;

        return $this;
    }

    /**
     * Get idViaTransporte
     *
     * @return \AmpViaTransporte
     */
    public function getIdViaTransporte()
    {
        return $this->idViaTransporte;
    }
}

