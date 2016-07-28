<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEstoque
 *
 * @ORM\Table(name="amp_estoque", uniqueConstraints={@ORM\UniqueConstraint(name="id_produto_UNIQUE", columns={"id_produto", "id_deposito"})}, indexes={@ORM\Index(name="fk_estoque_deposito_idx", columns={"id_deposito"}), @ORM\Index(name="fk_estoque_produto_idx", columns={"id_produto"})})
 * @ORM\Entity
 */
class AmpEstoque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_estoque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstoque;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_total", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidadeTotal;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=true)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpDeposito
     *
     * @ORM\ManyToOne(targetEntity="AmpDeposito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_deposito", referencedColumnName="id_deposito")
     * })
     */
    private $idDeposito;

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
     * Get idEstoque
     *
     * @return int
     */
    public function getIdEstoque()
    {
        return $this->idEstoque;
    }

    /**
     * Set quantidadeTotal
     *
     * @param string $quantidadeTotal
     *
     * @return AmpEstoque
     */
    public function setQuantidadeTotal($quantidadeTotal)
    {
        $this->quantidadeTotal = $quantidadeTotal;

        return $this;
    }

    /**
     * Get quantidadeTotal
     *
     * @return string
     */
    public function getQuantidadeTotal()
    {
        return $this->quantidadeTotal;
    }

    /**
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpEstoque
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
     * @return AmpEstoque
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
     * Set idDeposito
     *
     * @param \AmpDeposito $idDeposito
     *
     * @return AmpEstoque
     */
    public function setIdDeposito(\AmpDeposito $idDeposito = null)
    {
        $this->idDeposito = $idDeposito;

        return $this;
    }

    /**
     * Get idDeposito
     *
     * @return \AmpDeposito
     */
    public function getIdDeposito()
    {
        return $this->idDeposito;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpEstoque
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
}

