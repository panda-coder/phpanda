<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpInventarioContagem
 *
 * @ORM\Table(name="amp_inventario_contagem", uniqueConstraints={@ORM\UniqueConstraint(name="uq_amp_inventario_contagem_1", columns={"id_inventario", "id_endereco_estoque", "id_produto", "lote"})}, indexes={@ORM\Index(name="fk_amp_inventario_contagem_1_idx", columns={"id_inventario"}), @ORM\Index(name="fk_amp_inventario_contagem_3_idx", columns={"id_endereco_estoque"}), @ORM\Index(name="fk_amp_inventario_contagem_2_idx", columns={"id_produto"})})
 * @ORM\Entity
 */
class AmpInventarioContagem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_inventario_contagem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInventarioContagem;

    /**
     * @var string
     *
     * @ORM\Column(name="lote", type="string", length=45, nullable=false)
     */
    private $lote;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_contada", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeContada;

    /**
     * @var int
     *
     * @ORM\Column(name="num_contagem", type="integer", nullable=false)
     */
    private $numContagem;

    /**
     * @var string
     *
     * @ORM\Column(name="contagem_finalizada", type="string", length=1, nullable=false)
     */
    private $contagemFinalizada;

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
     * @var \AmpInventario
     *
     * @ORM\ManyToOne(targetEntity="AmpInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario", referencedColumnName="id_inventario")
     * })
     */
    private $idInventario;

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
     * Get idInventarioContagem
     *
     * @return int
     */
    public function getIdInventarioContagem()
    {
        return $this->idInventarioContagem;
    }

    /**
     * Set lote
     *
     * @param string $lote
     *
     * @return AmpInventarioContagem
     */
    public function setLote($lote)
    {
        $this->lote = $lote;

        return $this;
    }

    /**
     * Get lote
     *
     * @return string
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Set quantidadeContada
     *
     * @param string $quantidadeContada
     *
     * @return AmpInventarioContagem
     */
    public function setQuantidadeContada($quantidadeContada)
    {
        $this->quantidadeContada = $quantidadeContada;

        return $this;
    }

    /**
     * Get quantidadeContada
     *
     * @return string
     */
    public function getQuantidadeContada()
    {
        return $this->quantidadeContada;
    }

    /**
     * Set numContagem
     *
     * @param int $numContagem
     *
     * @return AmpInventarioContagem
     */
    public function setNumContagem($numContagem)
    {
        $this->numContagem = $numContagem;

        return $this;
    }

    /**
     * Get numContagem
     *
     * @return int
     */
    public function getNumContagem()
    {
        return $this->numContagem;
    }

    /**
     * Set contagemFinalizada
     *
     * @param string $contagemFinalizada
     *
     * @return AmpInventarioContagem
     */
    public function setContagemFinalizada($contagemFinalizada)
    {
        $this->contagemFinalizada = $contagemFinalizada;

        return $this;
    }

    /**
     * Get contagemFinalizada
     *
     * @return string
     */
    public function getContagemFinalizada()
    {
        return $this->contagemFinalizada;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpInventarioContagem
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
     * @return AmpInventarioContagem
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
     * @return AmpInventarioContagem
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
     * @return AmpInventarioContagem
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
     * Set idInventario
     *
     * @param \AmpInventario $idInventario
     *
     * @return AmpInventarioContagem
     */
    public function setIdInventario(\AmpInventario $idInventario = null)
    {
        $this->idInventario = $idInventario;

        return $this;
    }

    /**
     * Get idInventario
     *
     * @return \AmpInventario
     */
    public function getIdInventario()
    {
        return $this->idInventario;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpInventarioContagem
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
     * @return AmpInventarioContagem
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

