<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpFci
 *
 * @ORM\Table(name="amp_fci", uniqueConstraints={@ORM\UniqueConstraint(name="id_produto_UNIQUE", columns={"id_produto"})})
 * @ORM\Entity
 */
class AmpFci
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_fci", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFci;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_fci", type="string", length=45, nullable=true)
     */
    private $numeroFci;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_produto", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_importado", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valorImportado;

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_importado", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $percentualImportado;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=255, nullable=true)
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
     * Get idFci
     *
     * @return int
     */
    public function getIdFci()
    {
        return $this->idFci;
    }

    /**
     * Set numeroFci
     *
     * @param string $numeroFci
     *
     * @return AmpFci
     */
    public function setNumeroFci($numeroFci)
    {
        $this->numeroFci = $numeroFci;

        return $this;
    }

    /**
     * Get numeroFci
     *
     * @return string
     */
    public function getNumeroFci()
    {
        return $this->numeroFci;
    }

    /**
     * Set valorProduto
     *
     * @param string $valorProduto
     *
     * @return AmpFci
     */
    public function setValorProduto($valorProduto)
    {
        $this->valorProduto = $valorProduto;

        return $this;
    }

    /**
     * Get valorProduto
     *
     * @return string
     */
    public function getValorProduto()
    {
        return $this->valorProduto;
    }

    /**
     * Set valorImportado
     *
     * @param string $valorImportado
     *
     * @return AmpFci
     */
    public function setValorImportado($valorImportado)
    {
        $this->valorImportado = $valorImportado;

        return $this;
    }

    /**
     * Get valorImportado
     *
     * @return string
     */
    public function getValorImportado()
    {
        return $this->valorImportado;
    }

    /**
     * Set percentualImportado
     *
     * @param string $percentualImportado
     *
     * @return AmpFci
     */
    public function setPercentualImportado($percentualImportado)
    {
        $this->percentualImportado = $percentualImportado;

        return $this;
    }

    /**
     * Get percentualImportado
     *
     * @return string
     */
    public function getPercentualImportado()
    {
        return $this->percentualImportado;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpFci
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
     * @return AmpFci
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
     * @return AmpFci
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
     * @return AmpFci
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
     * @return AmpFci
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
     * @return AmpFci
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

