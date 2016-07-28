<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpReservaItemPendencia
 *
 * @ORM\Table(name="amp_reserva_item_pendencia", indexes={@ORM\Index(name="fk_amp_item_ordem_separacao_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_item_ordem_separacao_3_idx", columns={"id_pedido_venda_produto"}), @ORM\Index(name="fk_amp_ordem_separacao_produto_1_idx", columns={"id_endereco_estoque"}), @ORM\Index(name="fk_amp_ordem_separacao_produto_2_idx", columns={"id_lote"}), @ORM\Index(name="fk_amp_ordem_separacao_produto_3_idx", columns={"id_reserva_lote_endereco"})})
 * @ORM\Entity
 */
class AmpReservaItemPendencia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reserva_item_pendencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservaItemPendencia;

    /**
     * @var int
     *
     * @ORM\Column(name="id_entidade", type="integer", nullable=false)
     */
    private $idEntidade;

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
     * @ORM\Column(name="status_conferencia", type="integer", nullable=false)
     */
    private $statusConferencia = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="peso_liquido_total", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoLiquidoTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_bruto_total", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoBrutoTotal;

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
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;

    /**
     * @var \AmpPedidoVendaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoVendaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_venda_produto", referencedColumnName="id_pedido_venda_produto")
     * })
     */
    private $idPedidoVendaProduto;

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
     * @var \AmpLote
     *
     * @ORM\ManyToOne(targetEntity="AmpLote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lote", referencedColumnName="id_lote")
     * })
     */
    private $idLote;

    /**
     * @var \AmpReservaLoteEndereco
     *
     * @ORM\ManyToOne(targetEntity="AmpReservaLoteEndereco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reserva_lote_endereco", referencedColumnName="id_reserva_lote_endereco")
     * })
     */
    private $idReservaLoteEndereco;


    /**
     * Get idReservaItemPendencia
     *
     * @return int
     */
    public function getIdReservaItemPendencia()
    {
        return $this->idReservaItemPendencia;
    }

    /**
     * Set idEntidade
     *
     * @param int $idEntidade
     *
     * @return AmpReservaItemPendencia
     */
    public function setIdEntidade($idEntidade)
    {
        $this->idEntidade = $idEntidade;

        return $this;
    }

    /**
     * Get idEntidade
     *
     * @return int
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpReservaItemPendencia
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
     * @return AmpReservaItemPendencia
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
     * @return AmpReservaItemPendencia
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
     * Set statusConferencia
     *
     * @param int $statusConferencia
     *
     * @return AmpReservaItemPendencia
     */
    public function setStatusConferencia($statusConferencia)
    {
        $this->statusConferencia = $statusConferencia;

        return $this;
    }

    /**
     * Get statusConferencia
     *
     * @return int
     */
    public function getStatusConferencia()
    {
        return $this->statusConferencia;
    }

    /**
     * Set pesoLiquidoTotal
     *
     * @param string $pesoLiquidoTotal
     *
     * @return AmpReservaItemPendencia
     */
    public function setPesoLiquidoTotal($pesoLiquidoTotal)
    {
        $this->pesoLiquidoTotal = $pesoLiquidoTotal;

        return $this;
    }

    /**
     * Get pesoLiquidoTotal
     *
     * @return string
     */
    public function getPesoLiquidoTotal()
    {
        return $this->pesoLiquidoTotal;
    }

    /**
     * Set pesoBrutoTotal
     *
     * @param string $pesoBrutoTotal
     *
     * @return AmpReservaItemPendencia
     */
    public function setPesoBrutoTotal($pesoBrutoTotal)
    {
        $this->pesoBrutoTotal = $pesoBrutoTotal;

        return $this;
    }

    /**
     * Get pesoBrutoTotal
     *
     * @return string
     */
    public function getPesoBrutoTotal()
    {
        return $this->pesoBrutoTotal;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpReservaItemPendencia
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
     * @return AmpReservaItemPendencia
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
     * @return AmpReservaItemPendencia
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
     * @return AmpReservaItemPendencia
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
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpReservaItemPendencia
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
     * Set idPedidoVendaProduto
     *
     * @param \AmpPedidoVendaProduto $idPedidoVendaProduto
     *
     * @return AmpReservaItemPendencia
     */
    public function setIdPedidoVendaProduto(\AmpPedidoVendaProduto $idPedidoVendaProduto = null)
    {
        $this->idPedidoVendaProduto = $idPedidoVendaProduto;

        return $this;
    }

    /**
     * Get idPedidoVendaProduto
     *
     * @return \AmpPedidoVendaProduto
     */
    public function getIdPedidoVendaProduto()
    {
        return $this->idPedidoVendaProduto;
    }

    /**
     * Set idEnderecoEstoque
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoque
     *
     * @return AmpReservaItemPendencia
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
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpReservaItemPendencia
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
     * Set idReservaLoteEndereco
     *
     * @param \AmpReservaLoteEndereco $idReservaLoteEndereco
     *
     * @return AmpReservaItemPendencia
     */
    public function setIdReservaLoteEndereco(\AmpReservaLoteEndereco $idReservaLoteEndereco = null)
    {
        $this->idReservaLoteEndereco = $idReservaLoteEndereco;

        return $this;
    }

    /**
     * Get idReservaLoteEndereco
     *
     * @return \AmpReservaLoteEndereco
     */
    public function getIdReservaLoteEndereco()
    {
        return $this->idReservaLoteEndereco;
    }
}

