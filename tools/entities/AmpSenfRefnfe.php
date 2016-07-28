<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpSenfRefnfe
 *
 * @ORM\Table(name="amp_senf_refnfe", indexes={@ORM\Index(name="fk_senf_idx", columns={"id_senf"})})
 * @ORM\Entity
 */
class AmpSenfRefnfe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_senf_refnfe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSenfRefnfe;

    /**
     * @var string
     *
     * @ORM\Column(name="chave", type="string", length=44, nullable=false)
     */
    private $chave;

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
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpSenf
     *
     * @ORM\ManyToOne(targetEntity="AmpSenf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_senf", referencedColumnName="id_senf")
     * })
     */
    private $idSenf;


    /**
     * Get idSenfRefnfe
     *
     * @return int
     */
    public function getIdSenfRefnfe()
    {
        return $this->idSenfRefnfe;
    }

    /**
     * Set chave
     *
     * @param string $chave
     *
     * @return AmpSenfRefnfe
     */
    public function setChave($chave)
    {
        $this->chave = $chave;

        return $this;
    }

    /**
     * Get chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->chave;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpSenfRefnfe
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
     * @return AmpSenfRefnfe
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpSenfRefnfe
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpSenfRefnfe
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
     * Set idSenf
     *
     * @param \AmpSenf $idSenf
     *
     * @return AmpSenfRefnfe
     */
    public function setIdSenf(\AmpSenf $idSenf = null)
    {
        $this->idSenf = $idSenf;

        return $this;
    }

    /**
     * Get idSenf
     *
     * @return \AmpSenf
     */
    public function getIdSenf()
    {
        return $this->idSenf;
    }
}

