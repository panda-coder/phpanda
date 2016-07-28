<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPermissaoEspecialModulo
 *
 * @ORM\Table(name="amp_permissao_especial_modulo", indexes={@ORM\Index(name="fk_amp_permissao_especial_modulo_1_idx", columns={"id_modulo"}), @ORM\Index(name="fk_amp_permissao_especial_modulo_2_idx", columns={"id_permissao_especial"})})
 * @ORM\Entity
 */
class AmpPermissaoEspecialModulo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_permissao_especial_modulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPermissaoEspecialModulo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_permissao_especial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPermissaoEspecial;

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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpModulo
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpModulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $idModulo;


    /**
     * Set idPermissaoEspecialModulo
     *
     * @param int $idPermissaoEspecialModulo
     *
     * @return AmpPermissaoEspecialModulo
     */
    public function setIdPermissaoEspecialModulo($idPermissaoEspecialModulo)
    {
        $this->idPermissaoEspecialModulo = $idPermissaoEspecialModulo;

        return $this;
    }

    /**
     * Get idPermissaoEspecialModulo
     *
     * @return int
     */
    public function getIdPermissaoEspecialModulo()
    {
        return $this->idPermissaoEspecialModulo;
    }

    /**
     * Set idPermissaoEspecial
     *
     * @param int $idPermissaoEspecial
     *
     * @return AmpPermissaoEspecialModulo
     */
    public function setIdPermissaoEspecial($idPermissaoEspecial)
    {
        $this->idPermissaoEspecial = $idPermissaoEspecial;

        return $this;
    }

    /**
     * Get idPermissaoEspecial
     *
     * @return int
     */
    public function getIdPermissaoEspecial()
    {
        return $this->idPermissaoEspecial;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPermissaoEspecialModulo
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
     * @return AmpPermissaoEspecialModulo
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
     * @return AmpPermissaoEspecialModulo
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
     * @return AmpPermissaoEspecialModulo
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
     * Set idModulo
     *
     * @param \AmpModulo $idModulo
     *
     * @return AmpPermissaoEspecialModulo
     */
    public function setIdModulo(\AmpModulo $idModulo)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return \AmpModulo
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }
}

