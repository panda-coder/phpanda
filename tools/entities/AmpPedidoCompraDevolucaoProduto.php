<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPedidoCompraDevolucaoProduto
 *
 * @ORM\Table(name="amp_pedido_compra_devolucao_produto", indexes={@ORM\Index(name="fk_pedido_compra_devolucao_idx", columns={"id_pedido_compra_devolucao"}), @ORM\Index(name="fk_nota_entrada_produto_idx", columns={"id_nota_entrada_produto"}), @ORM\Index(name="fk_pedido_compra_devolucao_lote_idx", columns={"id_lote"}), @ORM\Index(name="fk_pedido_compra_endereco_estoque_idx", columns={"id_endereco_estoque"})})
 * @ORM\Entity
 */
class AmpPedidoCompraDevolucaoProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_compra_devolucao_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedidoCompraDevolucaoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_devolucao", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeDevolucao = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitario;

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
     * @var \AmpNotaEntradaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaEntradaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_entrada_produto", referencedColumnName="id_nota_entrada_produto")
     * })
     */
    private $idNotaEntradaProduto;

    /**
     * @var \AmpPedidoCompraDevolucao
     *
     * @ORM\ManyToOne(targetEntity="AmpPedidoCompraDevolucao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pedido_compra_devolucao", referencedColumnName="id_pedido_compra_devolucao")
     * })
     */
    private $idPedidoCompraDevolucao;

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
     * @var \AmpEnderecoEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpEnderecoEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_endereco_estoque", referencedColumnName="id_endereco_estoque")
     * })
     */
    private $idEnderecoEstoque;


    /**
     * Get idPedidoCompraDevolucaoProduto
     *
     * @return int
     */
    public function getIdPedidoCompraDevolucaoProduto()
    {
        return $this->idPedidoCompraDevolucaoProduto;
    }

    /**
     * Set quantidadeDevolucao
     *
     * @param string $quantidadeDevolucao
     *
     * @return AmpPedidoCompraDevolucaoProduto
     */
    public function setQuantidadeDevolucao($quantidadeDevolucao)
    {
        $this->quantidadeDevolucao = $quantidadeDevolucao;

        return $this;
    }

    /**
     * Get quantidadeDevolucao
     *
     * @return string
     */
    public function getQuantidadeDevolucao()
    {
        return $this->quantidadeDevolucao;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpPedidoCompraDevolucaoProduto
     */
    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * Get valorUnitario
     *
     * @return string
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPedidoCompraDevolucaoProduto
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
     * @return AmpPedidoCompraDevolucaoProduto
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
     * @return AmpPedidoCompraDevolucaoProduto
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
     * @return AmpPedidoCompraDevolucaoProduto
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
     * Set idNotaEntradaProduto
     *
     * @param \AmpNotaEntradaProduto $idNotaEntradaProduto
     *
     * @return AmpPedidoCompraDevolucaoProduto
     */
    public function setIdNotaEntradaProduto(\AmpNotaEntradaProduto $idNotaEntradaProduto = null)
    {
        $this->idNotaEntradaProduto = $idNotaEntradaProduto;

        return $this;
    }

    /**
     * Get idNotaEntradaProduto
     *
     * @return \AmpNotaEntradaProduto
     */
    public function getIdNotaEntradaProduto()
    {
        return $this->idNotaEntradaProduto;
    }

    /**
     * Set idPedidoCompraDevolucao
     *
     * @param \AmpPedidoCompraDevolucao $idPedidoCompraDevolucao
     *
     * @return AmpPedidoCompraDevolucaoProduto
     */
    public function setIdPedidoCompraDevolucao(\AmpPedidoCompraDevolucao $idPedidoCompraDevolucao = null)
    {
        $this->idPedidoCompraDevolucao = $idPedidoCompraDevolucao;

        return $this;
    }

    /**
     * Get idPedidoCompraDevolucao
     *
     * @return \AmpPedidoCompraDevolucao
     */
    public function getIdPedidoCompraDevolucao()
    {
        return $this->idPedidoCompraDevolucao;
    }

    /**
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpPedidoCompraDevolucaoProduto
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
     * Set idEnderecoEstoque
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoque
     *
     * @return AmpPedidoCompraDevolucaoProduto
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
}

