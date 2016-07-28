<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOrdemProducao
 *
 * @ORM\Table(name="amp_ordem_producao", indexes={@ORM\Index(name="fk_amp_ordem_producao_1_idx", columns={"id_produto"})})
 * @ORM\Entity
 */
class AmpOrdemProducao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_producao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemProducao;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_producao", type="integer", nullable=false)
     */
    private $tipoProducao;

    /**
     * @var int
     *
     * @ORM\Column(name="situacao", type="integer", nullable=false)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inicio", type="datetime", nullable=true)
     */
    private $dataInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_termino", type="datetime", nullable=true)
     */
    private $dataTermino;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=true)
     */
    private $observacao;

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
     * Get idOrdemProducao
     *
     * @return int
     */
    public function getIdOrdemProducao()
    {
        return $this->idOrdemProducao;
    }

    /**
     * Set tipoProducao
     *
     * @param int $tipoProducao
     *
     * @return AmpOrdemProducao
     */
    public function setTipoProducao($tipoProducao)
    {
        $this->tipoProducao = $tipoProducao;

        return $this;
    }

    /**
     * Get tipoProducao
     *
     * @return int
     */
    public function getTipoProducao()
    {
        return $this->tipoProducao;
    }

    /**
     * Set situacao
     *
     * @param int $situacao
     *
     * @return AmpOrdemProducao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return int
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpOrdemProducao
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
     * Set dataInicio
     *
     * @param \DateTime $dataInicio
     *
     * @return AmpOrdemProducao
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get dataInicio
     *
     * @return \DateTime
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set dataTermino
     *
     * @param \DateTime $dataTermino
     *
     * @return AmpOrdemProducao
     */
    public function setDataTermino($dataTermino)
    {
        $this->dataTermino = $dataTermino;

        return $this;
    }

    /**
     * Get dataTermino
     *
     * @return \DateTime
     */
    public function getDataTermino()
    {
        return $this->dataTermino;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpOrdemProducao
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpOrdemProducao
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
     * @return AmpOrdemProducao
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
     * @return AmpOrdemProducao
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
     * @return AmpOrdemProducao
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
     * @return AmpOrdemProducao
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
}

