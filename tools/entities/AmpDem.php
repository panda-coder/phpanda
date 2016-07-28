<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpDem
 *
 * @ORM\Table(name="amp_dem", indexes={@ORM\Index(name="fk_amp_dem_1_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_dem_2_idx", columns={"id_fornecedor"}), @ORM\Index(name="fk_amp_dem_3_idx", columns={"id_nota_entrada"}), @ORM\Index(name="fk_amp_dem_4_idx", columns={"id_pedido_compra"})})
 * @ORM\Entity
 */
class AmpDem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_dem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDem;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_compra", type="integer", nullable=true)
     */
    private $idPedidoCompra;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lote", type="integer", nullable=true)
     */
    private $idLote;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="skip_lote", type="integer", nullable=true)
     */
    private $skipLote = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="parecer", type="text", nullable=true)
     */
    private $parecer;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

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
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fornecedor", referencedColumnName="id_entidade")
     * })
     */
    private $idFornecedor;

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
     * Get idDem
     *
     * @return int
     */
    public function getIdDem()
    {
        return $this->idDem;
    }

    /**
     * Set idPedidoCompra
     *
     * @param int $idPedidoCompra
     *
     * @return AmpDem
     */
    public function setIdPedidoCompra($idPedidoCompra)
    {
        $this->idPedidoCompra = $idPedidoCompra;

        return $this;
    }

    /**
     * Get idPedidoCompra
     *
     * @return int
     */
    public function getIdPedidoCompra()
    {
        return $this->idPedidoCompra;
    }

    /**
     * Set idLote
     *
     * @param int $idLote
     *
     * @return AmpDem
     */
    public function setIdLote($idLote)
    {
        $this->idLote = $idLote;

        return $this;
    }

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
     * Set status
     *
     * @param int $status
     *
     * @return AmpDem
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
     * Set skipLote
     *
     * @param int $skipLote
     *
     * @return AmpDem
     */
    public function setSkipLote($skipLote)
    {
        $this->skipLote = $skipLote;

        return $this;
    }

    /**
     * Get skipLote
     *
     * @return int
     */
    public function getSkipLote()
    {
        return $this->skipLote;
    }

    /**
     * Set parecer
     *
     * @param string $parecer
     *
     * @return AmpDem
     */
    public function setParecer($parecer)
    {
        $this->parecer = $parecer;

        return $this;
    }

    /**
     * Get parecer
     *
     * @return string
     */
    public function getParecer()
    {
        return $this->parecer;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpDem
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpDem
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpDem
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpDem
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
     * @return AmpDem
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
     * @return AmpDem
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
     * Set idFornecedor
     *
     * @param \AmpEntidade $idFornecedor
     *
     * @return AmpDem
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
     * Set idNotaEntrada
     *
     * @param \AmpNotaEntrada $idNotaEntrada
     *
     * @return AmpDem
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

