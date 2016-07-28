<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpContaInterna
 *
 * @ORM\Table(name="amp_conta_interna", uniqueConstraints={@ORM\UniqueConstraint(name="uq_conta_interna", columns={"id_modulo", "id_registro"})})
 * @ORM\Entity
 */
class AmpContaInterna
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_interna", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContaInterna;

    /**
     * @var int
     *
     * @ORM\Column(name="id_modulo", type="integer", nullable=false)
     */
    private $idModulo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_registro", type="integer", nullable=false)
     */
    private $idRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $saldo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=false)
     */
    private $observacao;

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
     * Get idContaInterna
     *
     * @return int
     */
    public function getIdContaInterna()
    {
        return $this->idContaInterna;
    }

    /**
     * Set idModulo
     *
     * @param int $idModulo
     *
     * @return AmpContaInterna
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return int
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set idRegistro
     *
     * @param int $idRegistro
     *
     * @return AmpContaInterna
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
     * Set saldo
     *
     * @param string $saldo
     *
     * @return AmpContaInterna
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpContaInterna
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpContaInterna
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
     * @return AmpContaInterna
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
     * @return AmpContaInterna
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
     * @return AmpContaInterna
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

