<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpReservaLoteEndereco
 *
 * @ORM\Table(name="amp_reserva_lote_endereco", indexes={@ORM\Index(name="fk_amp_reserva_lote_endereco_2_idx", columns={"id_endereco_estoque"}), @ORM\Index(name="fk_amp_reserva_lote_endereco_1", columns={"id_lote"}), @ORM\Index(name="fk_amp_reserva_lote_endereco_3_idx", columns={"id_lote_endereco_estoque"})})
 * @ORM\Entity
 */
class AmpReservaLoteEndereco
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reserva_lote_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservaLoteEndereco;

    /**
     * @var int
     *
     * @ORM\Column(name="origem", type="integer", nullable=false)
     */
    private $origem;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_reserva", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeReserva = '0.0000';

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
     * @var \AmpLoteEnderecoEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpLoteEnderecoEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lote_endereco_estoque", referencedColumnName="id_lote_endereco_estoque")
     * })
     */
    private $idLoteEnderecoEstoque;


    /**
     * Get idReservaLoteEndereco
     *
     * @return int
     */
    public function getIdReservaLoteEndereco()
    {
        return $this->idReservaLoteEndereco;
    }

    /**
     * Set origem
     *
     * @param int $origem
     *
     * @return AmpReservaLoteEndereco
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * Get origem
     *
     * @return int
     */
    public function getOrigem()
    {
        return $this->origem;
    }

    /**
     * Set quantidadeReserva
     *
     * @param string $quantidadeReserva
     *
     * @return AmpReservaLoteEndereco
     */
    public function setQuantidadeReserva($quantidadeReserva)
    {
        $this->quantidadeReserva = $quantidadeReserva;

        return $this;
    }

    /**
     * Get quantidadeReserva
     *
     * @return string
     */
    public function getQuantidadeReserva()
    {
        return $this->quantidadeReserva;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpReservaLoteEndereco
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
     * @return AmpReservaLoteEndereco
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
     * @return AmpReservaLoteEndereco
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
     * @return AmpReservaLoteEndereco
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
     * @return AmpReservaLoteEndereco
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
     * @return AmpReservaLoteEndereco
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
     * @return AmpReservaLoteEndereco
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
}

