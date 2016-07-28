<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpReabastecimento
 *
 * @ORM\Table(name="amp_reabastecimento", indexes={@ORM\Index(name="fk_amp_reabastecimento_2_idx", columns={"id_endereco_estoque_origem"}), @ORM\Index(name="fk_amp_reabastecimento_1_idx", columns={"id_lote"}), @ORM\Index(name="fk_amp_reabastecimento_3_idx", columns={"id_endereco_estoque_destino"})})
 * @ORM\Entity
 */
class AmpReabastecimento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reabastecimento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReabastecimento;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

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
     *   @ORM\JoinColumn(name="id_endereco_estoque_origem", referencedColumnName="id_endereco_estoque")
     * })
     */
    private $idEnderecoEstoqueOrigem;

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
     * Get idReabastecimento
     *
     * @return int
     */
    public function getIdReabastecimento()
    {
        return $this->idReabastecimento;
    }

    /**
     * Set status
     *
     * @param int $status
     *
     * @return AmpReabastecimento
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpReabastecimento
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
     * @return AmpReabastecimento
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
     * @return AmpReabastecimento
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
     * @return AmpReabastecimento
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
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpReabastecimento
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
     * Set idEnderecoEstoqueOrigem
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoqueOrigem
     *
     * @return AmpReabastecimento
     */
    public function setIdEnderecoEstoqueOrigem(\AmpEnderecoEstoque $idEnderecoEstoqueOrigem = null)
    {
        $this->idEnderecoEstoqueOrigem = $idEnderecoEstoqueOrigem;

        return $this;
    }

    /**
     * Get idEnderecoEstoqueOrigem
     *
     * @return \AmpEnderecoEstoque
     */
    public function getIdEnderecoEstoqueOrigem()
    {
        return $this->idEnderecoEstoqueOrigem;
    }

    /**
     * Set idEnderecoEstoqueDestino
     *
     * @param \AmpEnderecoEstoque $idEnderecoEstoqueDestino
     *
     * @return AmpReabastecimento
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

