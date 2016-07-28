<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOrdemTransferenciaProduto
 *
 * @ORM\Table(name="amp_ordem_transferencia_produto", indexes={@ORM\Index(name="fk_amp_ordem_transferencia_produto_1_idx", columns={"id_ordem_transferencia"}), @ORM\Index(name="fk_amp_ordem_transferencia_produto_2_idx", columns={"id_ordem_producao_item"}), @ORM\Index(name="fk_amp_ordem_transferencia_produto_3_idx", columns={"id_lote"}), @ORM\Index(name="fk_amp_ordem_transferencia_produto_4_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_ordem_transferencia_produto_5_idx", columns={"id_endereco_estoque"}), @ORM\Index(name="fk_amp_ordem_transferencia_produto_6_idx", columns={"id_endereco_estoque_destino"})})
 * @ORM\Entity
 */
class AmpOrdemTransferenciaProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_transferencia_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemTransferenciaProduto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_reserva_lote_endereco", type="integer", nullable=true)
     */
    private $idReservaLoteEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_rateio", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeRateio;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_separacao", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidadeSeparacao = '0.0000';

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
     * @var \AmpOrdemTransferencia
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemTransferencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_transferencia", referencedColumnName="id_ordem_transferencia")
     * })
     */
    private $idOrdemTransferencia;

    /**
     * @var \AmpOrdemProducaoItem
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemProducaoItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_producao_item", referencedColumnName="id_ordem_producao_item")
     * })
     */
    private $idOrdemProducaoItem;

    /**
     * @var \AmpLote
     *
     * @ORM\ManyToOne(targetEntity="AmpLote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lote", referencedColumnName="id_lote")
     * })
     */
    private $idLote;

    /**
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;

    /**
     * @var \AmpEnderecoEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpEnderecoEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_endereco_estoque", referencedColumnName="id_endereco_estoque")
     * })
     */
    private $idEnderecoEstoque;

    /**
     * @var \AmpEnderecoEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpEnderecoEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_endereco_estoque_destino", referencedColumnName="id_endereco_estoque")
     * })
     */
    private $idEnderecoEstoqueDestino;


    /**
     * Get idOrdemTransferenciaProduto
     *
     * @return int
     */
    public function getIdOrdemTransferenciaProduto()
    {
        return $this->idOrdemTransferenciaProduto;
    }

    /**
     * Set idReservaLoteEndereco
     *
     * @param int $idReservaLoteEndereco
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setIdReservaLoteEndereco($idReservaLoteEndereco)
    {
        $this->idReservaLoteEndereco = $idReservaLoteEndereco;

        return $this;
    }

    /**
     * Get idReservaLoteEndereco
     *
     * @return int
     */
    public function getIdReservaLoteEndereco()
    {
        return $this->idReservaLoteEndereco;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return string
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set quantidadeRateio
     *
     * @param string $quantidadeRateio
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setQuantidadeRateio($quantidadeRateio)
    {
        $this->quantidadeRateio = $quantidadeRateio;

        return $this;
    }

    /**
     * Get quantidadeRateio
     *
     * @return string
     */
    public function getQuantidadeRateio()
    {
        return $this->quantidadeRateio;
    }

    /**
     * Set quantidadeSeparacao
     *
     * @param string $quantidadeSeparacao
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setQuantidadeSeparacao($quantidadeSeparacao)
    {
        $this->quantidadeSeparacao = $quantidadeSeparacao;

        return $this;
    }

    /**
     * Get quantidadeSeparacao
     *
     * @return string
     */
    public function getQuantidadeSeparacao()
    {
        return $this->quantidadeSeparacao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpOrdemTransferenciaProduto
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
     * @return AmpOrdemTransferenciaProduto
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
     * @return AmpOrdemTransferenciaProduto
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
     * @return AmpOrdemTransferenciaProduto
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
     * Set idOrdemTransferencia
     *
     * @param \AmpOrdemTransferencia $idOrdemTransferencia
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setIdOrdemTransferencia(\AmpOrdemTransferencia $idOrdemTransferencia = null)
    {
        $this->idOrdemTransferencia = $idOrdemTransferencia;

        return $this;
    }

    /**
     * Get idOrdemTransferencia
     *
     * @return \AmpOrdemTransferencia
     */
    public function getIdOrdemTransferencia()
    {
        return $this->idOrdemTransferencia;
    }

    /**
     * Set idOrdemProducaoItem
     *
     * @param \AmpOrdemProducaoItem $idOrdemProducaoItem
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setIdOrdemProducaoItem(\AmpOrdemProducaoItem $idOrdemProducaoItem = null)
    {
        $this->idOrdemProducaoItem = $idOrdemProducaoItem;

        return $this;
    }

    /**
     * Get idOrdemProducaoItem
     *
     * @return \AmpOrdemProducaoItem
     */
    public function getIdOrdemProducaoItem()
    {
        return $this->idOrdemProducaoItem;
    }

    /**
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setIdLote(\AmpLote $idLote = null)
    {
        $this->idLote = $idLote;

        return $this;
    }

    /**
     * Get idLote
     *
     * @return \AmpLote
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setIdProduto(\AmpProduto $idProduto = null)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get idProduto
     *
     * @return \AmpProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set idEnderecoEstoque
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoque
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setIdEnderecoEstoque(\AmpEnderecoEstoque $idEnderecoEstoque = null)
    {
        $this->idEnderecoEstoque = $idEnderecoEstoque;

        return $this;
    }

    /**
     * Get idEnderecoEstoque
     *
     * @return \AmpEnderecoEstoque
     */
    public function getIdEnderecoEstoque()
    {
        return $this->idEnderecoEstoque;
    }

    /**
     * Set idEnderecoEstoqueDestino
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoqueDestino
     *
     * @return AmpOrdemTransferenciaProduto
     */
    public function setIdEnderecoEstoqueDestino(\AmpEnderecoEstoque $idEnderecoEstoqueDestino = null)
    {
        $this->idEnderecoEstoqueDestino = $idEnderecoEstoqueDestino;

        return $this;
    }

    /**
     * Get idEnderecoEstoqueDestino
     *
     * @return \AmpEnderecoEstoque
     */
    public function getIdEnderecoEstoqueDestino()
    {
        return $this->idEnderecoEstoqueDestino;
    }
}

