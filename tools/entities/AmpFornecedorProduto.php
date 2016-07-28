<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpFornecedorProduto
 *
 * @ORM\Table(name="amp_fornecedor_produto", uniqueConstraints={@ORM\UniqueConstraint(name="uq_fornecedor_produto_1", columns={"id_fornecedor", "id_produto", "codigo_produto_fornecedor"}), @ORM\UniqueConstraint(name="uq_fornecedor_produto_2", columns={"codigo_produto_fornecedor", "id_fornecedor"})}, indexes={@ORM\Index(name="fk_amp_fornecedor_produto_1_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_fornecedor_produto_2_idx", columns={"id_fornecedor"})})
 * @ORM\Entity
 */
class AmpFornecedorProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_fornecedor_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFornecedorProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_produto_fornecedor", type="string", length=50, nullable=true)
     */
    private $codigoProdutoFornecedor;

    /**
     * @var int
     *
     * @ORM\Column(name="lead_time", type="integer", nullable=true)
     */
    private $leadTime;

    /**
     * @var int
     *
     * @ORM\Column(name="transit_time", type="integer", nullable=true)
     */
    private $transitTime;

    /**
     * @var string
     *
     * @ORM\Column(name="quotizacao", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quotizacao = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_ultima_compra", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorUltimaCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitario = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_atualizacao", type="datetime", nullable=true)
     */
    private $dataUltimaAtualizacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
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
     * @var \AmpFornecedor
     *
     * @ORM\ManyToOne(targetEntity="AmpFornecedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fornecedor", referencedColumnName="id_fornecedor")
     * })
     */
    private $idFornecedor;


    /**
     * Get idFornecedorProduto
     *
     * @return int
     */
    public function getIdFornecedorProduto()
    {
        return $this->idFornecedorProduto;
    }

    /**
     * Set codigoProdutoFornecedor
     *
     * @param string $codigoProdutoFornecedor
     *
     * @return AmpFornecedorProduto
     */
    public function setCodigoProdutoFornecedor($codigoProdutoFornecedor)
    {
        $this->codigoProdutoFornecedor = $codigoProdutoFornecedor;

        return $this;
    }

    /**
     * Get codigoProdutoFornecedor
     *
     * @return string
     */
    public function getCodigoProdutoFornecedor()
    {
        return $this->codigoProdutoFornecedor;
    }

    /**
     * Set leadTime
     *
     * @param int $leadTime
     *
     * @return AmpFornecedorProduto
     */
    public function setLeadTime($leadTime)
    {
        $this->leadTime = $leadTime;

        return $this;
    }

    /**
     * Get leadTime
     *
     * @return int
     */
    public function getLeadTime()
    {
        return $this->leadTime;
    }

    /**
     * Set transitTime
     *
     * @param int $transitTime
     *
     * @return AmpFornecedorProduto
     */
    public function setTransitTime($transitTime)
    {
        $this->transitTime = $transitTime;

        return $this;
    }

    /**
     * Get transitTime
     *
     * @return int
     */
    public function getTransitTime()
    {
        return $this->transitTime;
    }

    /**
     * Set quotizacao
     *
     * @param string $quotizacao
     *
     * @return AmpFornecedorProduto
     */
    public function setQuotizacao($quotizacao)
    {
        $this->quotizacao = $quotizacao;

        return $this;
    }

    /**
     * Get quotizacao
     *
     * @return string
     */
    public function getQuotizacao()
    {
        return $this->quotizacao;
    }

    /**
     * Set valorUltimaCompra
     *
     * @param string $valorUltimaCompra
     *
     * @return AmpFornecedorProduto
     */
    public function setValorUltimaCompra($valorUltimaCompra)
    {
        $this->valorUltimaCompra = $valorUltimaCompra;

        return $this;
    }

    /**
     * Get valorUltimaCompra
     *
     * @return string
     */
    public function getValorUltimaCompra()
    {
        return $this->valorUltimaCompra;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpFornecedorProduto
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
     * Set dataUltimaAtualizacao
     *
     * @param \DateTime $dataUltimaAtualizacao
     *
     * @return AmpFornecedorProduto
     */
    public function setDataUltimaAtualizacao($dataUltimaAtualizacao)
    {
        $this->dataUltimaAtualizacao = $dataUltimaAtualizacao;

        return $this;
    }

    /**
     * Get dataUltimaAtualizacao
     *
     * @return \DateTime
     */
    public function getDataUltimaAtualizacao()
    {
        return $this->dataUltimaAtualizacao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpFornecedorProduto
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
     * @return AmpFornecedorProduto
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
     * @return AmpFornecedorProduto
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
     * @return AmpFornecedorProduto
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
     * @return AmpFornecedorProduto
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
     * Set idFornecedor
     *
     * @param \AmpFornecedor $idFornecedor
     *
     * @return AmpFornecedorProduto
     */
    public function setIdFornecedor(\AmpFornecedor $idFornecedor = null)
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }

    /**
     * Get idFornecedor
     *
     * @return \AmpFornecedor
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }
}

