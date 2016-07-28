<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRequisicaoItemFornecedor
 *
 * @ORM\Table(name="amp_requisicao_item_fornecedor", uniqueConstraints={@ORM\UniqueConstraint(name="index4", columns={"id_fornecedor", "id_requisicao_compra_item"})}, indexes={@ORM\Index(name="fk_amp_requisicao_item_fornecedor_1_idx", columns={"id_fornecedor"}), @ORM\Index(name="fk_amp_requisicao_item_fornecedor_2_idx", columns={"id_requisicao_compra_item"})})
 * @ORM\Entity
 */
class AmpRequisicaoItemFornecedor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_requisicao_item_fornecedor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequisicaoItemFornecedor;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitario;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="check_item", type="string", length=1, nullable=true)
     */
    private $checkItem = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="email_enviado", type="string", length=1, nullable=true)
     */
    private $emailEnviado = 'N';

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_item", type="integer", nullable=false)
     */
    private $tipoItem = '2';

    /**
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fornecedor", referencedColumnName="id_entidade")
     * })
     */
    private $idFornecedor;

    /**
     * @var \AmpRequisicaoCompraItem
     *
     * @ORM\ManyToOne(targetEntity="AmpRequisicaoCompraItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_requisicao_compra_item", referencedColumnName="id_requisicao_compra_item")
     * })
     */
    private $idRequisicaoCompraItem;


    /**
     * Get idRequisicaoItemFornecedor
     *
     * @return int
     */
    public function getIdRequisicaoItemFornecedor()
    {
        return $this->idRequisicaoItemFornecedor;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpRequisicaoItemFornecedor
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
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpRequisicaoItemFornecedor
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
     * Set checkItem
     *
     * @param string $checkItem
     *
     * @return AmpRequisicaoItemFornecedor
     */
    public function setCheckItem($checkItem)
    {
        $this->checkItem = $checkItem;

        return $this;
    }

    /**
     * Get checkItem
     *
     * @return string
     */
    public function getCheckItem()
    {
        return $this->checkItem;
    }

    /**
     * Set emailEnviado
     *
     * @param string $emailEnviado
     *
     * @return AmpRequisicaoItemFornecedor
     */
    public function setEmailEnviado($emailEnviado)
    {
        $this->emailEnviado = $emailEnviado;

        return $this;
    }

    /**
     * Get emailEnviado
     *
     * @return string
     */
    public function getEmailEnviado()
    {
        return $this->emailEnviado;
    }

    /**
     * Set tipoItem
     *
     * @param int $tipoItem
     *
     * @return AmpRequisicaoItemFornecedor
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
     * Set idFornecedor
     *
     * @param \AmpEntidade $idFornecedor
     *
     * @return AmpRequisicaoItemFornecedor
     */
    public function setIdFornecedor(\AmpEntidade $idFornecedor = null)
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }

    /**
     * Get idFornecedor
     *
     * @return \AmpEntidade
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    /**
     * Set idRequisicaoCompraItem
     *
     * @param \AmpRequisicaoCompraItem $idRequisicaoCompraItem
     *
     * @return AmpRequisicaoItemFornecedor
     */
    public function setIdRequisicaoCompraItem(\AmpRequisicaoCompraItem $idRequisicaoCompraItem = null)
    {
        $this->idRequisicaoCompraItem = $idRequisicaoCompraItem;

        return $this;
    }

    /**
     * Get idRequisicaoCompraItem
     *
     * @return \AmpRequisicaoCompraItem
     */
    public function getIdRequisicaoCompraItem()
    {
        return $this->idRequisicaoCompraItem;
    }
}

