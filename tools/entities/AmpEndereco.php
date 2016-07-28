<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEndereco
 *
 * @ORM\Table(name="amp_endereco", indexes={@ORM\Index(name="fk_amp_endereco_amp_cidade1_idx", columns={"id_cidade"}), @ORM\Index(name="fk_amp_endereco_amp_estado1_idx", columns={"id_estado"}), @ORM\Index(name="fk_amp_endereco_amp_pais1_idx", columns={"id_pais"})})
 * @ORM\Entity
 */
class AmpEndereco
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", length=100, nullable=false)
     */
    private $logradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=8, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=100, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=100, nullable=true)
     */
    private $complemento;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_endereco", type="integer", nullable=false)
     */
    private $tipoEndereco = '0';

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
     * @var \AmpCidade
     *
     * @ORM\ManyToOne(targetEntity="AmpCidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cidade", referencedColumnName="id_cidade")
     * })
     */
    private $idCidade;

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
     * @var \AmpPais
     *
     * @ORM\ManyToOne(targetEntity="AmpPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id_pais")
     * })
     */
    private $idPais;


    /**
     * Get idEndereco
     *
     * @return int
     */
    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * Set logradouro
     *
     * @param string $logradouro
     *
     * @return AmpEndereco
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
     * Set cep
     *
     * @param string $cep
     *
     * @return AmpEndereco
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
     * Set bairro
     *
     * @param string $bairro
     *
     * @return AmpEndereco
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
     * Set numero
     *
     * @param string $numero
     *
     * @return AmpEndereco
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
     * Set complemento
     *
     * @param string $complemento
     *
     * @return AmpEndereco
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento
     *
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set tipoEndereco
     *
     * @param int $tipoEndereco
     *
     * @return AmpEndereco
     */
    public function setTipoEndereco($tipoEndereco)
    {
        $this->tipoEndereco = $tipoEndereco;

        return $this;
    }

    /**
     * Get tipoEndereco
     *
     * @return int
     */
    public function getTipoEndereco()
    {
        return $this->tipoEndereco;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpEndereco
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
     * @return AmpEndereco
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
     * @return AmpEndereco
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
     * @return AmpEndereco
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
     * Set idCidade
     *
     * @param \AmpCidade $idCidade
     *
     * @return AmpEndereco
     */
    public function setIdCidade(\AmpCidade $idCidade = null)
    {
        $this->idCidade = $idCidade;

        return $this;
    }

    /**
     * Get idCidade
     *
     * @return \AmpCidade
     */
    public function getIdCidade()
    {
        return $this->idCidade;
    }

    /**
     * Set idEstado
     *
     * @param \AmpEstado $idEstado
     *
     * @return AmpEndereco
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

    /**
     * Set idPais
     *
     * @param \AmpPais $idPais
     *
     * @return AmpEndereco
     */
    public function setIdPais(\AmpPais $idPais = null)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get idPais
     *
     * @return \AmpPais
     */
    public function getIdPais()
    {
        return $this->idPais;
    }
}

