<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpLoteEnderecoEstoque
 *
 * @ORM\Table(name="amp_lote_endereco_estoque", uniqueConstraints={@ORM\UniqueConstraint(name="uq_lote_endereco_estoque", columns={"id_lote", "id_endereco_estoque"})}, indexes={@ORM\Index(name="fk_amp_lote_endereco_estoque_2_idx", columns={"id_endereco_estoque"}), @ORM\Index(name="IDX_B22CB319EE942E9D", columns={"id_lote"})})
 * @ORM\Entity
 */
class AmpLoteEnderecoEstoque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lote_endereco_estoque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLoteEnderecoEstoque;

    /**
     * @var string
     *
     * @ORM\Column(name="pendente", type="string", length=1, nullable=false)
     */
    private $pendente;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_pendencia", type="integer", nullable=true)
     */
    private $idUsuarioPendencia;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_estoque", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeEstoque;

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
     * Get idLoteEnderecoEstoque
     *
     * @return int
     */
    public function getIdLoteEnderecoEstoque()
    {
        return $this->idLoteEnderecoEstoque;
    }

    /**
     * Set pendente
     *
     * @param string $pendente
     *
     * @return AmpLoteEnderecoEstoque
     */
    public function setPendente($pendente)
    {
        $this->pendente = $pendente;

        return $this;
    }

    /**
     * Get pendente
     *
     * @return string
     */
    public function getPendente()
    {
        return $this->pendente;
    }

    /**
     * Set idUsuarioPendencia
     *
     * @param int $idUsuarioPendencia
     *
     * @return AmpLoteEnderecoEstoque
     */
    public function setIdUsuarioPendencia($idUsuarioPendencia)
    {
        $this->idUsuarioPendencia = $idUsuarioPendencia;

        return $this;
    }

    /**
     * Get idUsuarioPendencia
     *
     * @return int
     */
    public function getIdUsuarioPendencia()
    {
        return $this->idUsuarioPendencia;
    }

    /**
     * Set quantidadeEstoque
     *
     * @param string $quantidadeEstoque
     *
     * @return AmpLoteEnderecoEstoque
     */
    public function setQuantidadeEstoque($quantidadeEstoque)
    {
        $this->quantidadeEstoque = $quantidadeEstoque;

        return $this;
    }

    /**
     * Get quantidadeEstoque
     *
     * @return string
     */
    public function getQuantidadeEstoque()
    {
        return $this->quantidadeEstoque;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpLoteEnderecoEstoque
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
     * @return AmpLoteEnderecoEstoque
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
     * @return AmpLoteEnderecoEstoque
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
     * @return AmpLoteEnderecoEstoque
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
     * @return AmpLoteEnderecoEstoque
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
     * @return AmpLoteEnderecoEstoque
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
}

