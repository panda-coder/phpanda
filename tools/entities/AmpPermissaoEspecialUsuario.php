<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPermissaoEspecialUsuario
 *
 * @ORM\Table(name="amp_permissao_especial_usuario", indexes={@ORM\Index(name="fk_amp_permissao_especial_usuario_1_idx", columns={"id_usuario"}), @ORM\Index(name="fk_amp_permissao_especial_modulo_idx", columns={"id_modulo"}), @ORM\Index(name="fk_amp_permissao_especial_usuario_1_idx1", columns={"id_permissao_especial"})})
 * @ORM\Entity
 */
class AmpPermissaoEspecialUsuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_permissao_especial_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPermissaoEspecialUsuario;

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
     * @var \AmpPermissaoEspecial
     *
     * @ORM\ManyToOne(targetEntity="AmpPermissaoEspecial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_permissao_especial", referencedColumnName="id_permissao_especial")
     * })
     */
    private $idPermissaoEspecial;

    /**
     * @var \AmpModulo
     *
     * @ORM\ManyToOne(targetEntity="AmpModulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $idModulo;

    /**
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;


    /**
     * Get idPermissaoEspecialUsuario
     *
     * @return int
     */
    public function getIdPermissaoEspecialUsuario()
    {
        return $this->idPermissaoEspecialUsuario;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPermissaoEspecialUsuario
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
     * @return AmpPermissaoEspecialUsuario
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
     * @return AmpPermissaoEspecialUsuario
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
     * @return AmpPermissaoEspecialUsuario
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
     * Set idPermissaoEspecial
     *
     * @param \AmpPermissaoEspecial $idPermissaoEspecial
     *
     * @return AmpPermissaoEspecialUsuario
     */
    public function setIdPermissaoEspecial(\AmpPermissaoEspecial $idPermissaoEspecial = null)
    {
        $this->idPermissaoEspecial = $idPermissaoEspecial;

        return $this;
    }

    /**
     * Get idPermissaoEspecial
     *
     * @return \AmpPermissaoEspecial
     */
    public function getIdPermissaoEspecial()
    {
        return $this->idPermissaoEspecial;
    }

    /**
     * Set idModulo
     *
     * @param \AmpModulo $idModulo
     *
     * @return AmpPermissaoEspecialUsuario
     */
    public function setIdModulo(\AmpModulo $idModulo = null)
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

    /**
     * Set idUsuario
     *
     * @param \AmpUsuario $idUsuario
     *
     * @return AmpPermissaoEspecialUsuario
     */
    public function setIdUsuario(\AmpUsuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \AmpUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}

