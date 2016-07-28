<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpKardex
 *
 * @ORM\Table(name="amp_kardex", uniqueConstraints={@ORM\UniqueConstraint(name="uq_amp_kardex_1_idx", columns={"id_produto", "id_entidade", "documento"})}, indexes={@ORM\Index(name="fk_amp_kardex_4_idx", columns={"id_entidade"}), @ORM\Index(name="fk_amp_kardex_1_idx", columns={"id_modulo"}), @ORM\Index(name="fk_amp_kardex_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_kardex_3_idx", columns={"id_usuario_movimentacao"})})
 * @ORM\Entity
 */
class AmpKardex
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_kardex", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idKardex;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=45, nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_movimentada", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeMovimentada;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_saldo_anterior", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeSaldoAnterior = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_saldo_atual", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeSaldoAtual;

    /**
     * @var int
     *
     * @ORM\Column(name="operacao", type="integer", nullable=false)
     */
    private $operacao;

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
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidade;


    /**
     * Get idKardex
     *
     * @return int
     */
    public function getIdKardex()
    {
        return $this->idKardex;
    }

    /**
     * Set documento
     *
     * @param string $documento
     *
     * @return AmpKardex
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
     * Set quantidadeMovimentada
     *
     * @param string $quantidadeMovimentada
     *
     * @return AmpKardex
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
     * Set quantidadeSaldoAnterior
     *
     * @param string $quantidadeSaldoAnterior
     *
     * @return AmpKardex
     */
    public function setQuantidadeSaldoAnterior($quantidadeSaldoAnterior)
    {
        $this->quantidadeSaldoAnterior = $quantidadeSaldoAnterior;

        return $this;
    }

    /**
     * Get quantidadeSaldoAnterior
     *
     * @return string
     */
    public function getQuantidadeSaldoAnterior()
    {
        return $this->quantidadeSaldoAnterior;
    }

    /**
     * Set quantidadeSaldoAtual
     *
     * @param string $quantidadeSaldoAtual
     *
     * @return AmpKardex
     */
    public function setQuantidadeSaldoAtual($quantidadeSaldoAtual)
    {
        $this->quantidadeSaldoAtual = $quantidadeSaldoAtual;

        return $this;
    }

    /**
     * Get quantidadeSaldoAtual
     *
     * @return string
     */
    public function getQuantidadeSaldoAtual()
    {
        return $this->quantidadeSaldoAtual;
    }

    /**
     * Set operacao
     *
     * @param int $operacao
     *
     * @return AmpKardex
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpKardex
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
     * @return AmpKardex
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
     * @return AmpKardex
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
     * @return AmpKardex
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
     * @return AmpKardex
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
     * Set idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpKardex
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
}

