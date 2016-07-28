<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTituloCentroCusto
 *
 * @ORM\Table(name="amp_titulo_centro_custo", indexes={@ORM\Index(name="fk_amp_titulo_centro_custo_1_idx", columns={"id_titulo"}), @ORM\Index(name="fk_amp_titulo_centro_custo_2_idx", columns={"id_centro_custo"})})
 * @ORM\Entity
 */
class AmpTituloCentroCusto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_titulo_centro_custo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTituloCentroCusto;

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_custo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $percentualCusto;

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
     * @var \AmpTitulo
     *
     * @ORM\ManyToOne(targetEntity="AmpTitulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_titulo", referencedColumnName="id_titulo")
     * })
     */
    private $idTitulo;

    /**
     * @var \AmpCentroCusto
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroCusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_custo", referencedColumnName="id_centro_custo")
     * })
     */
    private $idCentroCusto;


    /**
     * Get idTituloCentroCusto
     *
     * @return int
     */
    public function getIdTituloCentroCusto()
    {
        return $this->idTituloCentroCusto;
    }

    /**
     * Set percentualCusto
     *
     * @param string $percentualCusto
     *
     * @return AmpTituloCentroCusto
     */
    public function setPercentualCusto($percentualCusto)
    {
        $this->percentualCusto = $percentualCusto;

        return $this;
    }

    /**
     * Get percentualCusto
     *
     * @return string
     */
    public function getPercentualCusto()
    {
        return $this->percentualCusto;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpTituloCentroCusto
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
     * @return AmpTituloCentroCusto
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
     * @return AmpTituloCentroCusto
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
     * @return AmpTituloCentroCusto
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
     * Set idTitulo
     *
     * @param \AmpTitulo $idTitulo
     *
     * @return AmpTituloCentroCusto
     */
    public function setIdTitulo(\AmpTitulo $idTitulo = null)
    {
        $this->idTitulo = $idTitulo;

        return $this;
    }

    /**
     * Get idTitulo
     *
     * @return \AmpTitulo
     */
    public function getIdTitulo()
    {
        return $this->idTitulo;
    }

    /**
     * Set idCentroCusto
     *
     * @param \AmpCentroCusto $idCentroCusto
     *
     * @return AmpTituloCentroCusto
     */
    public function setIdCentroCusto(\AmpCentroCusto $idCentroCusto = null)
    {
        $this->idCentroCusto = $idCentroCusto;

        return $this;
    }

    /**
     * Get idCentroCusto
     *
     * @return \AmpCentroCusto
     */
    public function getIdCentroCusto()
    {
        return $this->idCentroCusto;
    }
}

