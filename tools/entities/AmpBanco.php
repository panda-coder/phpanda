<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpBanco
 *
 * @ORM\Table(name="amp_banco", uniqueConstraints={@ORM\UniqueConstraint(name="numero_UNIQUE", columns={"numero"}), @ORM\UniqueConstraint(name="banco_UNIQUE", columns={"banco"})})
 * @ORM\Entity
 */
class AmpBanco
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_banco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBanco;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=45, nullable=false)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=3, nullable=false)
     */
    private $numero;

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
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;


    /**
     * Get idBanco
     *
     * @return int
     */
    public function getIdBanco()
    {
        return $this->idBanco;
    }

    /**
     * Set banco
     *
     * @param string $banco
     *
     * @return AmpBanco
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return AmpBanco
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpBanco
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
     * @return AmpBanco
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
     * @return AmpBanco
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpBanco
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
}

