<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNegociacao
 *
 * @ORM\Table(name="amp_negociacao")
 * @ORM\Entity
 */
class AmpNegociacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_negociacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNegociacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inicio", type="datetime", nullable=false)
     */
    private $dataInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_final", type="datetime", nullable=false)
     */
    private $dataFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="negociacao", type="string", length=45, nullable=false)
     */
    private $negociacao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255, nullable=false)
     */
    private $descricao;

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
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=false)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpProduto", inversedBy="idNegociacao")
     * @ORM\JoinTable(name="amp_negociacao_produto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_negociacao", referencedColumnName="id_negociacao")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     *   }
     * )
     */
    private $idProduto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProduto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idNegociacao
     *
     * @return int
     */
    public function getIdNegociacao()
    {
        return $this->idNegociacao;
    }

    /**
     * Set dataInicio
     *
     * @param \DateTime $dataInicio
     *
     * @return AmpNegociacao
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
     * Set dataFinal
     *
     * @param \DateTime $dataFinal
     *
     * @return AmpNegociacao
     */
    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;

        return $this;
    }

    /**
     * Get dataFinal
     *
     * @return \DateTime
     */
    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    /**
     * Set negociacao
     *
     * @param string $negociacao
     *
     * @return AmpNegociacao
     */
    public function setNegociacao($negociacao)
    {
        $this->negociacao = $negociacao;

        return $this;
    }

    /**
     * Get negociacao
     *
     * @return string
     */
    public function getNegociacao()
    {
        return $this->negociacao;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpNegociacao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpNegociacao
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
     * @return AmpNegociacao
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpNegociacao
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpNegociacao
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
     * Add idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpNegociacao
     */
    public function addIdProduto(\AmpProduto $idProduto)
    {
        $this->idProduto[] = $idProduto;

        return $this;
    }

    /**
     * Remove idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdProduto(\AmpProduto $idProduto)
    {
        return $this->idProduto->removeElement($idProduto);
    }

    /**
     * Get idProduto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }
}

