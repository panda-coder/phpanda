<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRepresentante
 *
 * @ORM\Table(name="amp_representante")
 * @ORM\Entity
 */
class AmpRepresentante
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="data_ultima_alteracao", type="string", length=45, nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpEntidade
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_representante", referencedColumnName="id_entidade")
     * })
     */
    private $idRepresentante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpEntidade", mappedBy="idRepresentante")
     */
    private $idEntidade;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEntidade = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpRepresentante
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
     * @return AmpRepresentante
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
     * @return AmpRepresentante
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
     * @param string $dataUltimaAlteracao
     *
     * @return AmpRepresentante
     */
    public function setDataUltimaAlteracao($dataUltimaAlteracao)
    {
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;

        return $this;
    }

    /**
     * Get dataUltimaAlteracao
     *
     * @return string
     */
    public function getDataUltimaAlteracao()
    {
        return $this->dataUltimaAlteracao;
    }

    /**
     * Set idRepresentante
     *
     * @param \AmpEntidade $idRepresentante
     *
     * @return AmpRepresentante
     */
    public function setIdRepresentante(\AmpEntidade $idRepresentante)
    {
        $this->idRepresentante = $idRepresentante;

        return $this;
    }

    /**
     * Get idRepresentante
     *
     * @return \AmpEntidade
     */
    public function getIdRepresentante()
    {
        return $this->idRepresentante;
    }

    /**
     * Add idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpRepresentante
     */
    public function addIdEntidade(\AmpEntidade $idEntidade)
    {
        $this->idEntidade[] = $idEntidade;

        return $this;
    }

    /**
     * Remove idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdEntidade(\AmpEntidade $idEntidade)
    {
        return $this->idEntidade->removeElement($idEntidade);
    }

    /**
     * Get idEntidade
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }
}

