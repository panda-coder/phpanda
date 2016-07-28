<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRequisicaoCompraItem
 *
 * @ORM\Table(name="amp_requisicao_compra_item", indexes={@ORM\Index(name="fk_amp_requisicao_compra_produto_2_idx", columns={"id_produto_sugestao"}), @ORM\Index(name="fk_amp_requisicao_compra_produto_1_idx", columns={"id_requisicao_compra"}), @ORM\Index(name="fk_amp_requisicao_compra_item_3_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_requisicao_compra_item_4_idx", columns={"id_unidade_produto"})})
 * @ORM\Entity
 */
class AmpRequisicaoCompraItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_requisicao_compra_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequisicaoCompraItem;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_item", type="string", length=45, nullable=false)
     */
    private $descricaoItem;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_item", type="integer", nullable=false)
     */
    private $tipoItem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_base", type="datetime", nullable=true)
     */
    private $dataBase;

    /**
     * @var \AmpRequisicaoCompra
     *
     * @ORM\ManyToOne(targetEntity="AmpRequisicaoCompra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_requisicao_compra", referencedColumnName="id_requisicao_compra")
     * })
     */
    private $idRequisicaoCompra;

    /**
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto_sugestao", referencedColumnName="id_produto")
     * })
     */
    private $idProdutoSugestao;

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
     * @var \AmpUnidadeProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpUnidadeProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidade_produto", referencedColumnName="id_unidade_produto")
     * })
     */
    private $idUnidadeProduto;


    /**
     * Get idRequisicaoCompraItem
     *
     * @return int
     */
    public function getIdRequisicaoCompraItem()
    {
        return $this->idRequisicaoCompraItem;
    }

    /**
     * Set descricaoItem
     *
     * @param string $descricaoItem
     *
     * @return AmpRequisicaoCompraItem
     */
    public function setDescricaoItem($descricaoItem)
    {
        $this->descricaoItem = $descricaoItem;

        return $this;
    }

    /**
     * Get descricaoItem
     *
     * @return string
     */
    public function getDescricaoItem()
    {
        return $this->descricaoItem;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpRequisicaoCompraItem
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
     * Set tipoItem
     *
     * @param int $tipoItem
     *
     * @return AmpRequisicaoCompraItem
     */
    public function setTipoItem($tipoItem)
    {
        $this->tipoItem = $tipoItem;

        return $this;
    }

    /**
     * Get tipoItem
     *
     * @return int
     */
    public function getTipoItem()
    {
        return $this->tipoItem;
    }

    /**
     * Set dataBase
     *
     * @param \DateTime $dataBase
     *
     * @return AmpRequisicaoCompraItem
     */
    public function setDataBase($dataBase)
    {
        $this->dataBase = $dataBase;

        return $this;
    }

    /**
     * Get dataBase
     *
     * @return \DateTime
     */
    public function getDataBase()
    {
        return $this->dataBase;
    }

    /**
     * Set idRequisicaoCompra
     *
     * @param \AmpRequisicaoCompra $idRequisicaoCompra
     *
     * @return AmpRequisicaoCompraItem
     */
    public function setIdRequisicaoCompra(\AmpRequisicaoCompra $idRequisicaoCompra = null)
    {
        $this->idRequisicaoCompra = $idRequisicaoCompra;

        return $this;
    }

    /**
     * Get idRequisicaoCompra
     *
     * @return \AmpRequisicaoCompra
     */
    public function getIdRequisicaoCompra()
    {
        return $this->idRequisicaoCompra;
    }

    /**
     * Set idProdutoSugestao
     *
     * @param \AmpProduto $idProdutoSugestao
     *
     * @return AmpRequisicaoCompraItem
     */
    public function setIdProdutoSugestao(\AmpProduto $idProdutoSugestao = null)
    {
        $this->idProdutoSugestao = $idProdutoSugestao;

        return $this;
    }

    /**
     * Get idProdutoSugestao
     *
     * @return \AmpProduto
     */
    public function getIdProdutoSugestao()
    {
        return $this->idProdutoSugestao;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpRequisicaoCompraItem
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
     * Set idUnidadeProduto
     *
     * @param \AmpUnidadeProduto $idUnidadeProduto
     *
     * @return AmpRequisicaoCompraItem
     */
    public function setIdUnidadeProduto(\AmpUnidadeProduto $idUnidadeProduto = null)
    {
        $this->idUnidadeProduto = $idUnidadeProduto;

        return $this;
    }

    /**
     * Get idUnidadeProduto
     *
     * @return \AmpUnidadeProduto
     */
    public function getIdUnidadeProduto()
    {
        return $this->idUnidadeProduto;
    }
}

