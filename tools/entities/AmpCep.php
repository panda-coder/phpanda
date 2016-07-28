<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCep
 *
 * @ORM\Table(name="amp_cep", indexes={@ORM\Index(name="idx_log_loc1", columns={"cidade"}), @ORM\Index(name="fk_estado_cep_idx", columns={"id_estado"})})
 * @ORM\Entity
 */
class AmpCep
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cep", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCep;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=50, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", length=70, nullable=true)
     */
    private $logradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=72, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=9, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="tp_logradouro", type="string", length=20, nullable=true)
     */
    private $tpLogradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=2, nullable=true)
     */
    private $uf;

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
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpEstado
     *
     * @ORM\ManyToOne(targetEntity="AmpEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id_estado")
     * })
     */
    private $idEstado;


    /**
     * Get idCep
     *
     * @return int
     */
    public function getIdCep()
    {
        return $this->idCep;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     *
     * @return AmpCep
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set logradouro
     *
     * @param string $logradouro
     *
     * @return AmpCep
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro
     *
     * @return string
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     *
     * @return AmpCep
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return AmpCep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set tpLogradouro
     *
     * @param string $tpLogradouro
     *
     * @return AmpCep
     */
    public function setTpLogradouro($tpLogradouro)
    {
        $this->tpLogradouro = $tpLogradouro;

        return $this;
    }

    /**
     * Get tpLogradouro
     *
     * @return string
     */
    public function getTpLogradouro()
    {
        return $this->tpLogradouro;
    }

    /**
     * Set uf
     *
     * @param string $uf
     *
     * @return AmpCep
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpCep
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
     * @return AmpCep
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
     * @return AmpCep
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
     * @return AmpCep
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
     * Set idEstado
     *
     * @param \AmpEstado $idEstado
     *
     * @return AmpCep
     */
    public function setIdEstado(\AmpEstado $idEstado = null)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return \AmpEstado
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }
}

