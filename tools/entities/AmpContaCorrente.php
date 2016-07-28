<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpContaCorrente
 *
 * @ORM\Table(name="amp_conta_corrente", uniqueConstraints={@ORM\UniqueConstraint(name="numero_UNIQUE", columns={"numero", "id_agencia"})}, indexes={@ORM\Index(name="fk_amp_banco_conta_amp_banco_agencia1_idx", columns={"id_agencia"})})
 * @ORM\Entity
 */
class AmpContaCorrente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_corrente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContaCorrente;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="digito", type="integer", nullable=false)
     */
    private $digito;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_conta", type="string", length=1, nullable=true)
     */
    private $tipoConta;

    /**
     * @var int
     *
     * @ORM\Column(name="finalidade", type="integer", nullable=true)
     */
    private $finalidade;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=20, nullable=true)
     */
    private $contrato;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_bancario", type="integer", nullable=false)
     */
    private $numeroBancario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="numero_bancario_proprio", type="string", length=1, nullable=false)
     */
    private $numeroBancarioProprio = '0';

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
     * @var \AmpAgencia
     *
     * @ORM\ManyToOne(targetEntity="AmpAgencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_agencia", referencedColumnName="id_agencia")
     * })
     */
    private $idAgencia;


    /**
     * Get idContaCorrente
     *
     * @return int
     */
    public function getIdContaCorrente()
    {
        return $this->idContaCorrente;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpContaCorrente
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
     * @param int $numero
     *
     * @return AmpContaCorrente
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
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
     * @return AmpContaCorrente
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
     * Set tipoConta
     *
     * @param string $tipoConta
     *
     * @return AmpContaCorrente
     */
    public function setTipoConta($tipoConta)
    {
        $this->tipoConta = $tipoConta;

        return $this;
    }

    /**
     * Get tipoConta
     *
     * @return string
     */
    public function getTipoConta()
    {
        return $this->tipoConta;
    }

    /**
     * Set finalidade
     *
     * @param int $finalidade
     *
     * @return AmpContaCorrente
     */
    public function setFinalidade($finalidade)
    {
        $this->finalidade = $finalidade;

        return $this;
    }

    /**
     * Get finalidade
     *
     * @return int
     */
    public function getFinalidade()
    {
        return $this->finalidade;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     *
     * @return AmpContaCorrente
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set numeroBancario
     *
     * @param int $numeroBancario
     *
     * @return AmpContaCorrente
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
     * Set numeroBancarioProprio
     *
     * @param string $numeroBancarioProprio
     *
     * @return AmpContaCorrente
     */
    public function setNumeroBancarioProprio($numeroBancarioProprio)
    {
        $this->numeroBancarioProprio = $numeroBancarioProprio;

        return $this;
    }

    /**
     * Get numeroBancarioProprio
     *
     * @return string
     */
    public function getNumeroBancarioProprio()
    {
        return $this->numeroBancarioProprio;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpContaCorrente
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
     * @return AmpContaCorrente
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
     * @return AmpContaCorrente
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
     * @return AmpContaCorrente
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
     * Set idAgencia
     *
     * @param \AmpAgencia $idAgencia
     *
     * @return AmpContaCorrente
     */
    public function setIdAgencia(\AmpAgencia $idAgencia = null)
    {
        $this->idAgencia = $idAgencia;

        return $this;
    }

    /**
     * Get idAgencia
     *
     * @return \AmpAgencia
     */
    public function getIdAgencia()
    {
        return $this->idAgencia;
    }
}

