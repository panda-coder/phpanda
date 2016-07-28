<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpLote
 *
 * @ORM\Table(name="amp_lote", indexes={@ORM\Index(name="fk_amp_amp_lote_1_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_lote_2_idx", columns={"id_nota_entrada"})})
 * @ORM\Entity
 */
class AmpLote
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLote;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_lote", type="string", length=45, nullable=false)
     */
    private $codigoLote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrada", type="datetime", nullable=false)
     */
    private $dataEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_vencimento", type="datetime", nullable=false)
     */
    private $dataVencimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fabricacao", type="datetime", nullable=false)
     */
    private $dataFabricacao;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_entrada", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeEntrada;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=true)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
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
     * @var \AmpNotaEntrada
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaEntrada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_entrada", referencedColumnName="id_nota_entrada")
     * })
     */
    private $idNotaEntrada;


    /**
     * Get idLote
     *
     * @return int
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set codigoLote
     *
     * @param string $codigoLote
     *
     * @return AmpLote
     */
    public function setCodigoLote($codigoLote)
    {
        $this->codigoLote = $codigoLote;

        return $this;
    }

    /**
     * Get codigoLote
     *
     * @return string
     */
    public function getCodigoLote()
    {
        return $this->codigoLote;
    }

    /**
     * Set dataEntrada
     *
     * @param \DateTime $dataEntrada
     *
     * @return AmpLote
     */
    public function setDataEntrada($dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;

        return $this;
    }

    /**
     * Get dataEntrada
     *
     * @return \DateTime
     */
    public function getDataEntrada()
    {
        return $this->dataEntrada;
    }

    /**
     * Set dataVencimento
     *
     * @param \DateTime $dataVencimento
     *
     * @return AmpLote
     */
    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;

        return $this;
    }

    /**
     * Get dataVencimento
     *
     * @return \DateTime
     */
    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    /**
     * Set dataFabricacao
     *
     * @param \DateTime $dataFabricacao
     *
     * @return AmpLote
     */
    public function setDataFabricacao($dataFabricacao)
    {
        $this->dataFabricacao = $dataFabricacao;

        return $this;
    }

    /**
     * Get dataFabricacao
     *
     * @return \DateTime
     */
    public function getDataFabricacao()
    {
        return $this->dataFabricacao;
    }

    /**
     * Set quantidadeEntrada
     *
     * @param string $quantidadeEntrada
     *
     * @return AmpLote
     */
    public function setQuantidadeEntrada($quantidadeEntrada)
    {
        $this->quantidadeEntrada = $quantidadeEntrada;

        return $this;
    }

    /**
     * Get quantidadeEntrada
     *
     * @return string
     */
    public function getQuantidadeEntrada()
    {
        return $this->quantidadeEntrada;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpLote
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
     * @return AmpLote
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
     * @return AmpLote
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
     * @return AmpLote
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
     * @return AmpLote
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
     * Set idNotaEntrada
     *
     * @param \AmpNotaEntrada $idNotaEntrada
     *
     * @return AmpLote
     */
    public function setIdNotaEntrada(\AmpNotaEntrada $idNotaEntrada = null)
    {
        $this->idNotaEntrada = $idNotaEntrada;

        return $this;
    }

    /**
     * Get idNotaEntrada
     *
     * @return \AmpNotaEntrada
     */
    public function getIdNotaEntrada()
    {
        return $this->idNotaEntrada;
    }
}

