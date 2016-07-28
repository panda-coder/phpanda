<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpLogAlteracao
 *
 * @ORM\Table(name="amp_log_alteracao", indexes={@ORM\Index(name="fk_amp_log_alteracao_1_idx", columns={"id_modulo"})})
 * @ORM\Entity
 */
class AmpLogAlteracao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_log_alteracao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLogAlteracao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_registro", type="integer", nullable=false)
     */
    private $idRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="operacao", type="string", length=1, nullable=false)
     */
    private $operacao;

    /**
     * @var string
     *
     * @ORM\Column(name="campos", type="string", nullable=false)
     */
    private $campos;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

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
     * Get idLogAlteracao
     *
     * @return int
     */
    public function getIdLogAlteracao()
    {
        return $this->idLogAlteracao;
    }

    /**
     * Set idRegistro
     *
     * @param int $idRegistro
     *
     * @return AmpLogAlteracao
     */
    public function setIdRegistro($idRegistro)
    {
        $this->idRegistro = $idRegistro;

        return $this;
    }

    /**
     * Get idRegistro
     *
     * @return int
     */
    public function getIdRegistro()
    {
        return $this->idRegistro;
    }

    /**
     * Set operacao
     *
     * @param string $operacao
     *
     * @return AmpLogAlteracao
     */
    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;

        return $this;
    }

    /**
     * Get operacao
     *
     * @return string
     */
    public function getOperacao()
    {
        return $this->operacao;
    }

    /**
     * Set campos
     *
     * @param string $campos
     *
     * @return AmpLogAlteracao
     */
    public function setCampos($campos)
    {
        $this->campos = $campos;

        return $this;
    }

    /**
     * Get campos
     *
     * @return string
     */
    public function getCampos()
    {
        return $this->campos;
    }

    /**
     * Set idUsuario
     *
     * @param int $idUsuario
     *
     * @return AmpLogAlteracao
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpLogAlteracao
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
     * Set idModulo
     *
     * @param \AmpModulo $idModulo
     *
     * @return AmpLogAlteracao
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
}

