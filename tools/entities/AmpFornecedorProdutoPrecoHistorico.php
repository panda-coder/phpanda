<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpFornecedorProdutoPrecoHistorico
 *
 * @ORM\Table(name="amp_fornecedor_produto_preco_historico", indexes={@ORM\Index(name="fk_fornecedor_produto_idx", columns={"id_fornecedor_produto"}), @ORM\Index(name="fk_id_fornecedor_idx", columns={"id_fornecedor"})})
 * @ORM\Entity
 */
class AmpFornecedorProdutoPrecoHistorico
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_fornecedor_produto_preco_historico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFornecedorProdutoPrecoHistorico;

    /**
     * @var string
     *
     * @ORM\Column(name="preco_unitario", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $precoUnitario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpFornecedorProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpFornecedorProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fornecedor_produto", referencedColumnName="id_fornecedor_produto")
     * })
     */
    private $idFornecedorProduto;

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
     * Get idFornecedorProdutoPrecoHistorico
     *
     * @return int
     */
    public function getIdFornecedorProdutoPrecoHistorico()
    {
        return $this->idFornecedorProdutoPrecoHistorico;
    }

    /**
     * Set precoUnitario
     *
     * @param string $precoUnitario
     *
     * @return AmpFornecedorProdutoPrecoHistorico
     */
    public function setPrecoUnitario($precoUnitario)
    {
        $this->precoUnitario = $precoUnitario;

        return $this;
    }

    /**
     * Get precoUnitario
     *
     * @return string
     */
    public function getPrecoUnitario()
    {
        return $this->precoUnitario;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpFornecedorProdutoPrecoHistorico
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
     * @return AmpFornecedorProdutoPrecoHistorico
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
     * @return AmpFornecedorProdutoPrecoHistorico
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
     * @return AmpFornecedorProdutoPrecoHistorico
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
     * Set idFornecedorProduto
     *
     * @param \AmpFornecedorProduto $idFornecedorProduto
     *
     * @return AmpFornecedorProdutoPrecoHistorico
     */
    public function setIdFornecedorProduto(\AmpFornecedorProduto $idFornecedorProduto = null)
    {
        $this->idFornecedorProduto = $idFornecedorProduto;

        return $this;
    }

    /**
     * Get idFornecedorProduto
     *
     * @return \AmpFornecedorProduto
     */
    public function getIdFornecedorProduto()
    {
        return $this->idFornecedorProduto;
    }

    /**
     * Set idFornecedor
     *
     * @param \AmpFornecedor $idFornecedor
     *
     * @return AmpFornecedorProdutoPrecoHistorico
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

