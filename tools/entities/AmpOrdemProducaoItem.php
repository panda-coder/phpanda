<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOrdemProducaoItem
 *
 * @ORM\Table(name="amp_ordem_producao_item", indexes={@ORM\Index(name="fk_amp_ordem_producao_item_1_idx", columns={"id_ordem_producao"}), @ORM\Index(name="fk_amp_ordem_producao_item_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_ordem_producao_item_3_idx", columns={"id_unidade_produto"})})
 * @ORM\Entity
 */
class AmpOrdemProducaoItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_producao_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemProducaoItem;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_por_peca", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadePorPeca;

    /**
     * @var string
     *
     * @ORM\Column(name="has_estrutura", type="string", length=1, nullable=false)
     */
    private $hasEstrutura;

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
     * @var \AmpOrdemProducao
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemProducao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_producao", referencedColumnName="id_ordem_producao")
     * })
     */
    private $idOrdemProducao;

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
     * Get idOrdemProducaoItem
     *
     * @return int
     */
    public function getIdOrdemProducaoItem()
    {
        return $this->idOrdemProducaoItem;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpOrdemProducaoItem
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
     * Set quantidadePorPeca
     *
     * @param string $quantidadePorPeca
     *
     * @return AmpOrdemProducaoItem
     */
    public function setQuantidadePorPeca($quantidadePorPeca)
    {
        $this->quantidadePorPeca = $quantidadePorPeca;

        return $this;
    }

    /**
     * Get quantidadePorPeca
     *
     * @return string
     */
    public function getQuantidadePorPeca()
    {
        return $this->quantidadePorPeca;
    }

    /**
     * Set hasEstrutura
     *
     * @param string $hasEstrutura
     *
     * @return AmpOrdemProducaoItem
     */
    public function setHasEstrutura($hasEstrutura)
    {
        $this->hasEstrutura = $hasEstrutura;

        return $this;
    }

    /**
     * Get hasEstrutura
     *
     * @return string
     */
    public function getHasEstrutura()
    {
        return $this->hasEstrutura;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpOrdemProducaoItem
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
     * @return AmpOrdemProducaoItem
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
     * @return AmpOrdemProducaoItem
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
     * @return AmpOrdemProducaoItem
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
     * Set idOrdemProducao
     *
     * @param \AmpOrdemProducao $idOrdemProducao
     *
     * @return AmpOrdemProducaoItem
     */
    public function setIdOrdemProducao(\AmpOrdemProducao $idOrdemProducao = null)
    {
        $this->idOrdemProducao = $idOrdemProducao;

        return $this;
    }

    /**
     * Get idOrdemProducao
     *
     * @return \AmpOrdemProducao
     */
    public function getIdOrdemProducao()
    {
        return $this->idOrdemProducao;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpOrdemProducaoItem
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
     * @return AmpOrdemProducaoItem
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

