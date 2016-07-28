<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpAbastecimentoItem
 *
 * @ORM\Table(name="amp_abastecimento_item", indexes={@ORM\Index(name="fk_amp_abastecimento_item_1_idx", columns={"id_abastecimento"}), @ORM\Index(name="fk_amp_abastecimento_item_2_idx", columns={"id_lote"}), @ORM\Index(name="fk_amp_abastecimento_item_3_idx", columns={"id_endereco_estoque"}), @ORM\Index(name="fk_amp_abastecimento_item_4_idx", columns={"id_lote_endereco_estoque"}), @ORM\Index(name="fk_amp_abastecimento_item_5_idx", columns={"id_endereco_estoque_destino"})})
 * @ORM\Entity
 */
class AmpAbastecimentoItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_abastecimento_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAbastecimentoItem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_abastecimento", type="datetime", nullable=true)
     */
    private $dataAbastecimento;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

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
     * @var \AmpAbastecimento
     *
     * @ORM\ManyToOne(targetEntity="AmpAbastecimento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_abastecimento", referencedColumnName="id_abastecimento")
     * })
     */
    private $idAbastecimento;

    /**
     * @var \AmpLote
     *
     * @ORM\ManyToOne(targetEntity="AmpLote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lote", referencedColumnName="id_lote")
     * })
     */
    private $idLote;

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
     * @var \AmpLoteEnderecoEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpLoteEnderecoEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lote_endereco_estoque", referencedColumnName="id_lote_endereco_estoque")
     * })
     */
    private $idLoteEnderecoEstoque;

    /**
     * @var \AmpEnderecoEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpEnderecoEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_endereco_estoque_destino", referencedColumnName="id_endereco_estoque")
     * })
     */
    private $idEnderecoEstoqueDestino;


    /**
     * Get idAbastecimentoItem
     *
     * @return int
     */
    public function getIdAbastecimentoItem()
    {
        return $this->idAbastecimentoItem;
    }

    /**
     * Set dataAbastecimento
     *
     * @param \DateTime $dataAbastecimento
     *
     * @return AmpAbastecimentoItem
     */
    public function setDataAbastecimento($dataAbastecimento)
    {
        $this->dataAbastecimento = $dataAbastecimento;

        return $this;
    }

    /**
     * Get dataAbastecimento
     *
     * @return \DateTime
     */
    public function getDataAbastecimento()
    {
        return $this->dataAbastecimento;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpAbastecimentoItem
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
     * @return AmpAbastecimentoItem
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
     * @return AmpAbastecimentoItem
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
     * @return AmpAbastecimentoItem
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
     * Set idAbastecimento
     *
     * @param \AmpAbastecimento $idAbastecimento
     *
     * @return AmpAbastecimentoItem
     */
    public function setIdAbastecimento(\AmpAbastecimento $idAbastecimento = null)
    {
        $this->idAbastecimento = $idAbastecimento;

        return $this;
    }

    /**
     * Get idAbastecimento
     *
     * @return \AmpAbastecimento
     */
    public function getIdAbastecimento()
    {
        return $this->idAbastecimento;
    }

    /**
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpAbastecimentoItem
     */
    public function setIdLote(\AmpLote $idLote = null)
    {
        $this->idLote = $idLote;

        return $this;
    }

    /**
     * Get idLote
     *
     * @return \AmpLote
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set idEnderecoEstoque
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoque
     *
     * @return AmpAbastecimentoItem
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

    /**
     * Set idLoteEnderecoEstoque
     *
     * @param \AmpLoteEnderecoEstoque $idLoteEnderecoEstoque
     *
     * @return AmpAbastecimentoItem
     */
    public function setIdLoteEnderecoEstoque(\AmpLoteEnderecoEstoque $idLoteEnderecoEstoque = null)
    {
        $this->idLoteEnderecoEstoque = $idLoteEnderecoEstoque;

        return $this;
    }

    /**
     * Get idLoteEnderecoEstoque
     *
     * @return \AmpLoteEnderecoEstoque
     */
    public function getIdLoteEnderecoEstoque()
    {
        return $this->idLoteEnderecoEstoque;
    }

    /**
     * Set idEnderecoEstoqueDestino
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoqueDestino
     *
     * @return AmpAbastecimentoItem
     */
    public function setIdEnderecoEstoqueDestino(\AmpEnderecoEstoque $idEnderecoEstoqueDestino = null)
    {
        $this->idEnderecoEstoqueDestino = $idEnderecoEstoqueDestino;

        return $this;
    }

    /**
     * Get idEnderecoEstoqueDestino
     *
     * @return \AmpEnderecoEstoque
     */
    public function getIdEnderecoEstoqueDestino()
    {
        return $this->idEnderecoEstoqueDestino;
    }
}

