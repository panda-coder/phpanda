<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCpTratativa
 *
 * @ORM\Table(name="amp_cp_tratativa", indexes={@ORM\Index(name="fk_amp_cp_tratativa_1_idx", columns={"id_controle_producao"}), @ORM\Index(name="fk_amp_cp_tratativa_2_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_cp_tratativa_3_idx", columns={"id_defeito_cp"}), @ORM\Index(name="fk_amp_cp_tratativa_4_idx", columns={"id_lote"})})
 * @ORM\Entity
 */
class AmpCpTratativa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cp_tratativa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCpTratativa;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_destino", type="integer", nullable=false)
     */
    private $tipoDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidade;

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
     * @var \AmpControleProducao
     *
     * @ORM\ManyToOne(targetEntity="AmpControleProducao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_controle_producao", referencedColumnName="id_controle_producao")
     * })
     */
    private $idControleProducao;

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
     * @var \AmpDefeitoCp
     *
     * @ORM\ManyToOne(targetEntity="AmpDefeitoCp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_defeito_cp", referencedColumnName="id_defeito_cp")
     * })
     */
    private $idDefeitoCp;

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
     * Get idCpTratativa
     *
     * @return int
     */
    public function getIdCpTratativa()
    {
        return $this->idCpTratativa;
    }

    /**
     * Set tipoDestino
     *
     * @param int $tipoDestino
     *
     * @return AmpCpTratativa
     */
    public function setTipoDestino($tipoDestino)
    {
        $this->tipoDestino = $tipoDestino;

        return $this;
    }

    /**
     * Get tipoDestino
     *
     * @return int
     */
    public function getTipoDestino()
    {
        return $this->tipoDestino;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpCpTratativa
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
     * @return AmpCpTratativa
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
     * @return AmpCpTratativa
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
     * @return AmpCpTratativa
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
     * @return AmpCpTratativa
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
     * Set idControleProducao
     *
     * @param \AmpControleProducao $idControleProducao
     *
     * @return AmpCpTratativa
     */
    public function setIdControleProducao(\AmpControleProducao $idControleProducao = null)
    {
        $this->idControleProducao = $idControleProducao;

        return $this;
    }

    /**
     * Get idControleProducao
     *
     * @return \AmpControleProducao
     */
    public function getIdControleProducao()
    {
        return $this->idControleProducao;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpCpTratativa
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
     * Set idDefeitoCp
     *
     * @param \AmpDefeitoCp $idDefeitoCp
     *
     * @return AmpCpTratativa
     */
    public function setIdDefeitoCp(\AmpDefeitoCp $idDefeitoCp = null)
    {
        $this->idDefeitoCp = $idDefeitoCp;

        return $this;
    }

    /**
     * Get idDefeitoCp
     *
     * @return \AmpDefeitoCp
     */
    public function getIdDefeitoCp()
    {
        return $this->idDefeitoCp;
    }

    /**
     * Set idLote
     *
     * @param \AmpLote $idLote
     *
     * @return AmpCpTratativa
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
}

