<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpMrpItem
 *
 * @ORM\Table(name="amp_mrp_item", indexes={@ORM\Index(name="fk_amp_mrp_item_1_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_mrp_item_2_idx", columns={"id_mrp"})})
 * @ORM\Entity
 */
class AmpMrpItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mrp_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMrpItem;

    /**
     * @var int
     *
     * @ORM\Column(name="mes", type="integer", nullable=false)
     */
    private $mes;

    /**
     * @var int
     *
     * @ORM\Column(name="ano", type="integer", nullable=false)
     */
    private $ano;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_item", type="integer", nullable=false)
     */
    private $tipoItem;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

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
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;

    /**
     * @var \AmpMrp
     *
     * @ORM\ManyToOne(targetEntity="AmpMrp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mrp", referencedColumnName="id_mrp")
     * })
     */
    private $idMrp;


    /**
     * Get idMrpItem
     *
     * @return int
     */
    public function getIdMrpItem()
    {
        return $this->idMrpItem;
    }

    /**
     * Set mes
     *
     * @param int $mes
     *
     * @return AmpMrpItem
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return int
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set ano
     *
     * @param int $ano
     *
     * @return AmpMrpItem
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return int
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set tipoItem
     *
     * @param int $tipoItem
     *
     * @return AmpMrpItem
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
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpMrpItem
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpMrpItem
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
     * @return AmpMrpItem
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
     * @return AmpMrpItem
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
     * @return AmpMrpItem
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
     * @return AmpMrpItem
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
     * Set idMrp
     *
     * @param \AmpMrp $idMrp
     *
     * @return AmpMrpItem
     */
    public function setIdMrp(\AmpMrp $idMrp = null)
    {
        $this->idMrp = $idMrp;

        return $this;
    }

    /**
     * Get idMrp
     *
     * @return \AmpMrp
     */
    public function getIdMrp()
    {
        return $this->idMrp;
    }
}

