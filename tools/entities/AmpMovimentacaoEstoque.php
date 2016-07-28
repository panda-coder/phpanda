<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpMovimentacaoEstoque
 *
 * @ORM\Table(name="amp_movimentacao_estoque", indexes={@ORM\Index(name="fk_amp_movimentacao_estoque_1_idx", columns={"id_modulo"}), @ORM\Index(name="fk_amp_movimentacao_estoque_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_movimentacao_estoque_3_idx", columns={"id_usuario_movimentacao"}), @ORM\Index(name="fk_amp_movimentacao_estoque_5_idx", columns={"id_lote"}), @ORM\Index(name="fk_amp_movimentacao_estoque_6_idx", columns={"id_endereco_estoque"})})
 * @ORM\Entity
 */
class AmpMovimentacaoEstoque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_movimentacao_estoque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMovimentacaoEstoque;

    /**
     * @var int
     *
     * @ORM\Column(name="operacao", type="integer", nullable=false)
     */
    private $operacao;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_movimentada", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeMovimentada;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_endereco_anterior", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeEnderecoAnterior;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_endereco_atual", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeEnderecoAtual;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_deposito_anterior", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeDepositoAnterior = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_deposito_atual", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeDepositoAtual = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_total_anterior", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeTotalAnterior = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_total_atual", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeTotalAtual = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=150, nullable=false)
     */
    private $observacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_movimentacao", type="datetime", nullable=false)
     */
    private $dataMovimentacao;

    /**
     * @var \AmpModulo
     *
     * @ORM\ManyToOne(targetEntity="AmpModulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $idModulo;

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
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_movimentacao", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuarioMovimentacao;

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
     * Get idMovimentacaoEstoque
     *
     * @return int
     */
    public function getIdMovimentacaoEstoque()
    {
        return $this->idMovimentacaoEstoque;
    }

    /**
     * Set operacao
     *
     * @param int $operacao
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;

        return $this;
    }

    /**
     * Get operacao
     *
     * @return int
     */
    public function getOperacao()
    {
        return $this->operacao;
    }

    /**
     * Set quantidadeMovimentada
     *
     * @param string $quantidadeMovimentada
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setQuantidadeMovimentada($quantidadeMovimentada)
    {
        $this->quantidadeMovimentada = $quantidadeMovimentada;

        return $this;
    }

    /**
     * Get quantidadeMovimentada
     *
     * @return string
     */
    public function getQuantidadeMovimentada()
    {
        return $this->quantidadeMovimentada;
    }

    /**
     * Set quantidadeEnderecoAnterior
     *
     * @param string $quantidadeEnderecoAnterior
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setQuantidadeEnderecoAnterior($quantidadeEnderecoAnterior)
    {
        $this->quantidadeEnderecoAnterior = $quantidadeEnderecoAnterior;

        return $this;
    }

    /**
     * Get quantidadeEnderecoAnterior
     *
     * @return string
     */
    public function getQuantidadeEnderecoAnterior()
    {
        return $this->quantidadeEnderecoAnterior;
    }

    /**
     * Set quantidadeEnderecoAtual
     *
     * @param string $quantidadeEnderecoAtual
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setQuantidadeEnderecoAtual($quantidadeEnderecoAtual)
    {
        $this->quantidadeEnderecoAtual = $quantidadeEnderecoAtual;

        return $this;
    }

    /**
     * Get quantidadeEnderecoAtual
     *
     * @return string
     */
    public function getQuantidadeEnderecoAtual()
    {
        return $this->quantidadeEnderecoAtual;
    }

    /**
     * Set quantidadeDepositoAnterior
     *
     * @param string $quantidadeDepositoAnterior
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setQuantidadeDepositoAnterior($quantidadeDepositoAnterior)
    {
        $this->quantidadeDepositoAnterior = $quantidadeDepositoAnterior;

        return $this;
    }

    /**
     * Get quantidadeDepositoAnterior
     *
     * @return string
     */
    public function getQuantidadeDepositoAnterior()
    {
        return $this->quantidadeDepositoAnterior;
    }

    /**
     * Set quantidadeDepositoAtual
     *
     * @param string $quantidadeDepositoAtual
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setQuantidadeDepositoAtual($quantidadeDepositoAtual)
    {
        $this->quantidadeDepositoAtual = $quantidadeDepositoAtual;

        return $this;
    }

    /**
     * Get quantidadeDepositoAtual
     *
     * @return string
     */
    public function getQuantidadeDepositoAtual()
    {
        return $this->quantidadeDepositoAtual;
    }

    /**
     * Set quantidadeTotalAnterior
     *
     * @param string $quantidadeTotalAnterior
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setQuantidadeTotalAnterior($quantidadeTotalAnterior)
    {
        $this->quantidadeTotalAnterior = $quantidadeTotalAnterior;

        return $this;
    }

    /**
     * Get quantidadeTotalAnterior
     *
     * @return string
     */
    public function getQuantidadeTotalAnterior()
    {
        return $this->quantidadeTotalAnterior;
    }

    /**
     * Set quantidadeTotalAtual
     *
     * @param string $quantidadeTotalAtual
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setQuantidadeTotalAtual($quantidadeTotalAtual)
    {
        $this->quantidadeTotalAtual = $quantidadeTotalAtual;

        return $this;
    }

    /**
     * Get quantidadeTotalAtual
     *
     * @return string
     */
    public function getQuantidadeTotalAtual()
    {
        return $this->quantidadeTotalAtual;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpMovimentacaoEstoque
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
     * Set dataMovimentacao
     *
     * @param \DateTime $dataMovimentacao
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setDataMovimentacao($dataMovimentacao)
    {
        $this->dataMovimentacao = $dataMovimentacao;

        return $this;
    }

    /**
     * Get dataMovimentacao
     *
     * @return \DateTime
     */
    public function getDataMovimentacao()
    {
        return $this->dataMovimentacao;
    }

    /**
     * Set idModulo
     *
     * @param \AmpModulo $idModulo
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setIdModulo(\AmpModulo $idModulo = null)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return \AmpModulo
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpMovimentacaoEstoque
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
     * Set idUsuarioMovimentacao
     *
     * @param \AmpUsuario $idUsuarioMovimentacao
     *
     * @return AmpMovimentacaoEstoque
     */
    public function setIdUsuarioMovimentacao(\AmpUsuario $idUsuarioMovimentacao = null)
    {
        $this->idUsuarioMovimentacao = $idUsuarioMovimentacao;

        return $this;
    }

    /**
     * Get idUsuarioMovimentacao
     *
     * @return \AmpUsuario
     */
    public function getIdUsuarioMovimentacao()
    {
        return $this->idUsuarioMovimentacao;
    }

    /**
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpMovimentacaoEstoque
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
     * @return AmpMovimentacaoEstoque
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

