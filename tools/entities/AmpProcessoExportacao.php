<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProcessoExportacao
 *
 * @ORM\Table(name="amp_processo_exportacao", indexes={@ORM\Index(name="fk_processo_exportacao_pedido_venda_idx", columns={"id_pedido_venda"}), @ORM\Index(name="fk_processo_exportacao_entidade_idx", columns={"id_entidade"}), @ORM\Index(name="fk_processo_exportacao_forma_pagamento_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_processo_exportacao_vencimento_idx", columns={"id_vencimento"}), @ORM\Index(name="fk_processo_exportacao_entidade_consignatario_idx", columns={"id_entidade_consignatario"}), @ORM\Index(name="fk_processo_exportacao_representante_idx", columns={"id_representante_indireto"}), @ORM\Index(name="fk_processo_exportacao_tabela_preco_idx", columns={"id_tabela_preco"}), @ORM\Index(name="fk_processo_exportacao_tipo_pedido_idx", columns={"id_tipo_pedido"}), @ORM\Index(name="fk_processo_exportacao_via_transporte_idx", columns={"id_via_transporte"}), @ORM\Index(name="fk_processo_exportacao_entidade_transportadora_idx", columns={"id_entidade_transportadora"}), @ORM\Index(name="fk_processo_exportacao_entidade_despachante_idx", columns={"id_entidade_despachante"}), @ORM\Index(name="fk_processo_exportacao_representante_direto_idx", columns={"id_representante_direto"})})
 * @ORM\Entity
 */
class AmpProcessoExportacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_processo_exportacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProcessoExportacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_pedido", type="integer", nullable=false)
     */
    private $idTipoPedido;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tabela_preco", type="integer", nullable=false)
     */
    private $idTabelaPreco;

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
    private $freteValor;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $seguroValor;

    /**
     * @var string
     *
     * @ORM\Column(name="outras_despesas_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $outrasDespesasValor;

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
     * @var \DateTime
     *
     * @ORM\Column(name="eta", type="datetime", nullable=true)
     */
    private $eta;

    /**
     * @var string
     *
     * @ORM\Column(name="re", type="string", length=45, nullable=true)
     */
    private $re;

    /**
     * @var string
     *
     * @ORM\Column(name="dde", type="string", length=45, nullable=true)
     */
    private $dde;

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
     *   @ORM\JoinColumn(name="id_entidade_consignatario", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidadeConsignatario;

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
     * @var \AmpPedidoVenda
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoVenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_venda", referencedColumnName="id_pedido_venda")
     * })
     */
    private $idPedidoVenda;

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
     * @var \AmpViaTransporte
     *
     * @ORM\ManyToOne(targetEntity="AmpViaTransporte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_via_transporte", referencedColumnName="id_via_transporte")
     * })
     */
    private $idViaTransporte;


    /**
     * Get idProcessoExportacao
     *
     * @return int
     */
    public function getIdProcessoExportacao()
    {
        return $this->idProcessoExportacao;
    }

    /**
     * Set idTipoPedido
     *
     * @param int $idTipoPedido
     *
     * @return AmpProcessoExportacao
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
     * Set idTabelaPreco
     *
     * @param int $idTabelaPreco
     *
     * @return AmpProcessoExportacao
     */
    public function setIdTabelaPreco($idTabelaPreco)
    {
        $this->idTabelaPreco = $idTabelaPreco;

        return $this;
    }

    /**
     * Get idTabelaPreco
     *
     * @return int
     */
    public function getIdTabelaPreco()
    {
        return $this->idTabelaPreco;
    }

    /**
     * Set idFreteModalidade
     *
     * @param int $idFreteModalidade
     *
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * Set descontoPedido
     *
     * @param string $descontoPedido
     *
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * Set outrasDespesasValor
     *
     * @param string $outrasDespesasValor
     *
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * Set eta
     *
     * @param \DateTime $eta
     *
     * @return AmpProcessoExportacao
     */
    public function setEta($eta)
    {
        $this->eta = $eta;

        return $this;
    }

    /**
     * Get eta
     *
     * @return \DateTime
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * Set re
     *
     * @param string $re
     *
     * @return AmpProcessoExportacao
     */
    public function setRe($re)
    {
        $this->re = $re;

        return $this;
    }

    /**
     * Get re
     *
     * @return string
     */
    public function getRe()
    {
        return $this->re;
    }

    /**
     * Set dde
     *
     * @param string $dde
     *
     * @return AmpProcessoExportacao
     */
    public function setDde($dde)
    {
        $this->dde = $dde;

        return $this;
    }

    /**
     * Get dde
     *
     * @return string
     */
    public function getDde()
    {
        return $this->dde;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * Set idEntidadeConsignatario
     *
     * @param \AmpEntidade $idEntidadeConsignatario
     *
     * @return AmpProcessoExportacao
     */
    public function setIdEntidadeConsignatario(\AmpEntidade $idEntidadeConsignatario = null)
    {
        $this->idEntidadeConsignatario = $idEntidadeConsignatario;

        return $this;
    }

    /**
     * Get idEntidadeConsignatario
     *
     * @return \AmpEntidade
     */
    public function getIdEntidadeConsignatario()
    {
        return $this->idEntidadeConsignatario;
    }

    /**
     * Set idEntidadeDespachante
     *
     * @param \AmpEntidade $idEntidadeDespachante
     *
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * Set idPedidoVenda
     *
     * @param \AmpPedidoVenda $idPedidoVenda
     *
     * @return AmpProcessoExportacao
     */
    public function setIdPedidoVenda(\AmpPedidoVenda $idPedidoVenda = null)
    {
        $this->idPedidoVenda = $idPedidoVenda;

        return $this;
    }

    /**
     * Get idPedidoVenda
     *
     * @return \AmpPedidoVenda
     */
    public function getIdPedidoVenda()
    {
        return $this->idPedidoVenda;
    }

    /**
     * Set idRepresentanteDireto
     *
     * @param \AmpRepresentante $idRepresentanteDireto
     *
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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
     * @return AmpProcessoExportacao
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

