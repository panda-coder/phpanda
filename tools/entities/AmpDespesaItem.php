<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpDespesaItem
 *
 * @ORM\Table(name="amp_despesa_item", indexes={@ORM\Index(name="fk_amp_despesa_item_1_idx", columns={"id_despesa"}), @ORM\Index(name="fk_amp_despesa_item_2_idx", columns={"id_tipo_despesa"}), @ORM\Index(name="fk_amp_despesa_item_3_idx", columns={"id_conta_contabil"})})
 * @ORM\Entity
 */
class AmpDespesaItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_despesa_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDespesaItem;

    /**
     * @var string
     *
     * @ORM\Column(name="justificativa", type="string", length=300, nullable=false)
     */
    private $justificativa;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $valorUnitario;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $valorTotal;

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
     * @var \AmpDespesa
     *
     * @ORM\ManyToOne(targetEntity="AmpDespesa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_despesa", referencedColumnName="id_despesa")
     * })
     */
    private $idDespesa;

    /**
     * @var \AmpTipoDespesa
     *
     * @ORM\ManyToOne(targetEntity="AmpTipoDespesa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_despesa", referencedColumnName="id_tipo_despesa")
     * })
     */
    private $idTipoDespesa;

    /**
     * @var \AmpContaContabil
     *
     * @ORM\ManyToOne(targetEntity="AmpContaContabil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_contabil", referencedColumnName="id_conta_contabil")
     * })
     */
    private $idContaContabil;


    /**
     * Get idDespesaItem
     *
     * @return int
     */
    public function getIdDespesaItem()
    {
        return $this->idDespesaItem;
    }

    /**
     * Set justificativa
     *
     * @param string $justificativa
     *
     * @return AmpDespesaItem
     */
    public function setJustificativa($justificativa)
    {
        $this->justificativa = $justificativa;

        return $this;
    }

    /**
     * Get justificativa
     *
     * @return string
     */
    public function getJustificativa()
    {
        return $this->justificativa;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpDespesaItem
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
     * @return AmpDespesaItem
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
     * Set valorTotal
     *
     * @param string $valorTotal
     *
     * @return AmpDespesaItem
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get valorTotal
     *
     * @return string
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpDespesaItem
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
     * @return AmpDespesaItem
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
     * @return AmpDespesaItem
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
     * @return AmpDespesaItem
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
     * Set idDespesa
     *
     * @param \AmpDespesa $idDespesa
     *
     * @return AmpDespesaItem
     */
    public function setIdDespesa(\AmpDespesa $idDespesa = null)
    {
        $this->idDespesa = $idDespesa;

        return $this;
    }

    /**
     * Get idDespesa
     *
     * @return \AmpDespesa
     */
    public function getIdDespesa()
    {
        return $this->idDespesa;
    }

    /**
     * Set idTipoDespesa
     *
     * @param \AmpTipoDespesa $idTipoDespesa
     *
     * @return AmpDespesaItem
     */
    public function setIdTipoDespesa(\AmpTipoDespesa $idTipoDespesa = null)
    {
        $this->idTipoDespesa = $idTipoDespesa;

        return $this;
    }

    /**
     * Get idTipoDespesa
     *
     * @return \AmpTipoDespesa
     */
    public function getIdTipoDespesa()
    {
        return $this->idTipoDespesa;
    }

    /**
     * Set idContaContabil
     *
     * @param \AmpContaContabil $idContaContabil
     *
     * @return AmpDespesaItem
     */
    public function setIdContaContabil(\AmpContaContabil $idContaContabil = null)
    {
        $this->idContaContabil = $idContaContabil;

        return $this;
    }

    /**
     * Get idContaContabil
     *
     * @return \AmpContaContabil
     */
    public function getIdContaContabil()
    {
        return $this->idContaContabil;
    }
}

