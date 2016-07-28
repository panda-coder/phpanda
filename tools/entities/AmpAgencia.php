<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpAgencia
 *
 * @ORM\Table(name="amp_agencia", uniqueConstraints={@ORM\UniqueConstraint(name="numero_UNIQUE", columns={"numero", "id_banco"})}, indexes={@ORM\Index(name="fk_amp_banco_agencia_amp_banco1_idx", columns={"id_banco"})})
 * @ORM\Entity
 */
class AmpAgencia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_agencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgencia;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=false)
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="digito", type="integer", nullable=false)
     */
    private $digito;

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
     * @var \AmpBanco
     *
     * @ORM\ManyToOne(targetEntity="AmpBanco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_banco", referencedColumnName="id_banco")
     * })
     */
    private $idBanco;


    /**
     * Get idAgencia
     *
     * @return int
     */
    public function getIdAgencia()
    {
        return $this->idAgencia;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpAgencia
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
     * Set numero
     *
     * @param string $numero
     *
     * @return AmpAgencia
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set digito
     *
     * @param int $digito
     *
     * @return AmpAgencia
     */
    public function setDigito($digito)
    {
        $this->digito = $digito;

        return $this;
    }

    /**
     * Get digito
     *
     * @return int
     */
    public function getDigito()
    {
        return $this->digito;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpAgencia
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
     * @return AmpAgencia
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
     * @return AmpAgencia
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
     * @return AmpAgencia
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
     * Set idBanco
     *
     * @param \AmpBanco $idBanco
     *
     * @return AmpAgencia
     */
    public function setIdBanco(\AmpBanco $idBanco = null)
    {
        $this->idBanco = $idBanco;

        return $this;
    }

    /**
     * Get idBanco
     *
     * @return \AmpBanco
     */
    public function getIdBanco()
    {
        return $this->idBanco;
    }
}

