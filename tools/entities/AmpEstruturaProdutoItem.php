<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEstruturaProdutoItem
 *
 * @ORM\Table(name="amp_estrutura_produto_item", indexes={@ORM\Index(name="fk_amp_estrutura_produto_item_1_idx", columns={"id_estrutura_produto"}), @ORM\Index(name="fk_amp_estrutura_produto_item_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_estrutura_produto_item_3_idx", columns={"id_processo"}), @ORM\Index(name="fk_amp_estrutura_produto_item_4_idx", columns={"id_estrutura_item_opcional"}), @ORM\Index(name="fk_amp_estrutura_produto_item_5_idx", columns={"id_unidade_produto"}), @ORM\Index(name="fk_amp_estrutura_produto_item_6_idx", columns={"id_roteiro"})})
 * @ORM\Entity
 */
class AmpEstruturaProdutoItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_estrutura_produto_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstruturaProdutoItem;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_item", type="integer", nullable=false)
     */
    private $tipoItem;

    /**
     * @var int
     *
     * @ORM\Column(name="sequencial", type="integer", nullable=false)
     */
    private $sequencial;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidade;

    /**
     * @var \AmpEstruturaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpEstruturaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estrutura_produto", referencedColumnName="id_estrutura_produto")
     * })
     */
    private $idEstruturaProduto;

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
     * @var \AmpProcesso
     *
     * @ORM\ManyToOne(targetEntity="AmpProcesso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_processo", referencedColumnName="id_processo")
     * })
     */
    private $idProcesso;

    /**
     * @var \AmpEstruturaProdutoItem
     *
     * @ORM\ManyToOne(targetEntity="AmpEstruturaProdutoItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estrutura_item_opcional", referencedColumnName="id_estrutura_produto_item")
     * })
     */
    private $idEstruturaItemOpcional;

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
     * @var \AmpRoteiro
     *
     * @ORM\ManyToOne(targetEntity="AmpRoteiro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_roteiro", referencedColumnName="id_roteiro")
     * })
     */
    private $idRoteiro;


    /**
     * Get idEstruturaProdutoItem
     *
     * @return int
     */
    public function getIdEstruturaProdutoItem()
    {
        return $this->idEstruturaProdutoItem;
    }

    /**
     * Set tipoItem
     *
     * @param int $tipoItem
     *
     * @return AmpEstruturaProdutoItem
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
     * Set sequencial
     *
     * @param int $sequencial
     *
     * @return AmpEstruturaProdutoItem
     */
    public function setSequencial($sequencial)
    {
        $this->sequencial = $sequencial;

        return $this;
    }

    /**
     * Get sequencial
     *
     * @return int
     */
    public function getSequencial()
    {
        return $this->sequencial;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpEstruturaProdutoItem
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
     * Set idEstruturaProduto
     *
     * @param \AmpEstruturaProduto $idEstruturaProduto
     *
     * @return AmpEstruturaProdutoItem
     */
    public function setIdEstruturaProduto(\AmpEstruturaProduto $idEstruturaProduto = null)
    {
        $this->idEstruturaProduto = $idEstruturaProduto;

        return $this;
    }

    /**
     * Get idEstruturaProduto
     *
     * @return \AmpEstruturaProduto
     */
    public function getIdEstruturaProduto()
    {
        return $this->idEstruturaProduto;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpEstruturaProdutoItem
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
     * Set idProcesso
     *
     * @param \AmpProcesso $idProcesso
     *
     * @return AmpEstruturaProdutoItem
     */
    public function setIdProcesso(\AmpProcesso $idProcesso = null)
    {
        $this->idProcesso = $idProcesso;

        return $this;
    }

    /**
     * Get idProcesso
     *
     * @return \AmpProcesso
     */
    public function getIdProcesso()
    {
        return $this->idProcesso;
    }

    /**
     * Set idEstruturaItemOpcional
     *
     * @param \AmpEstruturaProdutoItem $idEstruturaItemOpcional
     *
     * @return AmpEstruturaProdutoItem
     */
    public function setIdEstruturaItemOpcional(\AmpEstruturaProdutoItem $idEstruturaItemOpcional = null)
    {
        $this->idEstruturaItemOpcional = $idEstruturaItemOpcional;

        return $this;
    }

    /**
     * Get idEstruturaItemOpcional
     *
     * @return \AmpEstruturaProdutoItem
     */
    public function getIdEstruturaItemOpcional()
    {
        return $this->idEstruturaItemOpcional;
    }

    /**
     * Set idUnidadeProduto
     *
     * @param \AmpUnidadeProduto $idUnidadeProduto
     *
     * @return AmpEstruturaProdutoItem
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

    /**
     * Set idRoteiro
     *
     * @param \AmpRoteiro $idRoteiro
     *
     * @return AmpEstruturaProdutoItem
     */
    public function setIdRoteiro(\AmpRoteiro $idRoteiro = null)
    {
        $this->idRoteiro = $idRoteiro;

        return $this;
    }

    /**
     * Get idRoteiro
     *
     * @return \AmpRoteiro
     */
    public function getIdRoteiro()
    {
        return $this->idRoteiro;
    }
}

