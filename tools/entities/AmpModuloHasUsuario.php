<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpModuloHasUsuario
 *
 * @ORM\Table(name="amp_modulo_has_usuario", indexes={@ORM\Index(name="fk_modulo_has_usuario_amp_usuario1_idx", columns={"id_usuario"}), @ORM\Index(name="fk_modulo_has_permissao_amp_permissao_idx", columns={"id_permissao"}), @ORM\Index(name="IDX_72C4E3B5CAC67ADB", columns={"id_modulo"})})
 * @ORM\Entity
 */
class AmpModuloHasUsuario
{
    /**
     * @var \AmpPermissao
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpPermissao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_permissao", referencedColumnName="id_permissao")
     * })
     */
    private $idPermissao;

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
     * @var \AmpUsuario
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;


    /**
     * Set idPermissao
     *
     * @param \AmpPermissao $idPermissao
     *
     * @return AmpModuloHasUsuario
     */
    public function setIdPermissao(\AmpPermissao $idPermissao)
    {
        $this->idPermissao = $idPermissao;

        return $this;
    }

    /**
     * Get idPermissao
     *
     * @return \AmpPermissao
     */
    public function getIdPermissao()
    {
        return $this->idPermissao;
    }

    /**
     * Set idModulo
     *
     * @param \AmpModulo $idModulo
     *
     * @return AmpModuloHasUsuario
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

    /**
     * Set idUsuario
     *
     * @param \AmpUsuario $idUsuario
     *
     * @return AmpModuloHasUsuario
     */
    public function setIdUsuario(\AmpUsuario $idUsuario)
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

