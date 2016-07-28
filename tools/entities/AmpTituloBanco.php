<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTituloBanco
 *
 * @ORM\Table(name="amp_titulo_banco", uniqueConstraints={@ORM\UniqueConstraint(name="id_titulo_UNIQUE", columns={"id_titulo"})}, indexes={@ORM\Index(name="fk_amp_boleto_1_idx", columns={"id_titulo"}), @ORM\Index(name="fk_amp_titulo_banco_2_idx", columns={"id_conta_corrente"})})
 * @ORM\Entity
 */
class AmpTituloBanco
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_titulo_banco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTituloBanco;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_bancario", type="integer", nullable=false)
     */
    private $numeroBancario;

    /**
     * @var int
     *
     * @ORM\Column(name="digito_numero_bancario", type="integer", nullable=true)
     */
    private $digitoNumeroBancario;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_barras", type="string", length=100, nullable=true)
     */
    private $codigoBarras;

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
     * @var \AmpTitulo
     *
     * @ORM\ManyToOne(targetEntity="AmpTitulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_titulo", referencedColumnName="id_titulo")
     * })
     */
    private $idTitulo;

    /**
     * @var \AmpContaCorrente
     *
     * @ORM\ManyToOne(targetEntity="AmpContaCorrente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_corrente", referencedColumnName="id_conta_corrente")
     * })
     */
    private $idContaCorrente;


    /**
     * Get idTituloBanco
     *
     * @return int
     */
    public function getIdTituloBanco()
    {
        return $this->idTituloBanco;
    }

    /**
     * Set numeroBancario
     *
     * @param int $numeroBancario
     *
     * @return AmpTituloBanco
     */
    public function setNumeroBancario($numeroBancario)
    {
        $this->numeroBancario = $numeroBancario;

        return $this;
    }

    /**
     * Get numeroBancario
     *
     * @return int
     */
    public function getNumeroBancario()
    {
        return $this->numeroBancario;
    }

    /**
     * Set digitoNumeroBancario
     *
     * @param int $digitoNumeroBancario
     *
     * @return AmpTituloBanco
     */
    public function setDigitoNumeroBancario($digitoNumeroBancario)
    {
        $this->digitoNumeroBancario = $digitoNumeroBancario;

        return $this;
    }

    /**
     * Get digitoNumeroBancario
     *
     * @return int
     */
    public function getDigitoNumeroBancario()
    {
        return $this->digitoNumeroBancario;
    }

    /**
     * Set codigoBarras
     *
     * @param string $codigoBarras
     *
     * @return AmpTituloBanco
     */
    public function setCodigoBarras($codigoBarras)
    {
        $this->codigoBarras = $codigoBarras;

        return $this;
    }

    /**
     * Get codigoBarras
     *
     * @return string
     */
    public function getCodigoBarras()
    {
        return $this->codigoBarras;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpTituloBanco
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
     * @return AmpTituloBanco
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
     * @return AmpTituloBanco
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
     * @return AmpTituloBanco
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
     * @return AmpTituloBanco
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
     * Set idContaCorrente
     *
     * @param \AmpContaCorrente $idContaCorrente
     *
     * @return AmpTituloBanco
     */
    public function setIdContaCorrente(\AmpContaCorrente $idContaCorrente = null)
    {
        $this->idContaCorrente = $idContaCorrente;

        return $this;
    }

    /**
     * Get idContaCorrente
     *
     * @return \AmpContaCorrente
     */
    public function getIdContaCorrente()
    {
        return $this->idContaCorrente;
    }
}

