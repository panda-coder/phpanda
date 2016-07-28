<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpHistoricoBancario
 *
 * @ORM\Table(name="amp_historico_bancario", indexes={@ORM\Index(name="fk_amp_historico_bancario_1_idx", columns={"id_titulo"}), @ORM\Index(name="index3", columns={"envio_recebimento", "transmitido", "ocorrencia"}), @ORM\Index(name="fk_amp_historico_bancario_2_idx", columns={"id_titulo_banco"})})
 * @ORM\Entity
 */
class AmpHistoricoBancario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_historico_bancario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistoricoBancario;

    /**
     * @var string
     *
     * @ORM\Column(name="envio_recebimento", type="string", length=1, nullable=false)
     */
    private $envioRecebimento;

    /**
     * @var int
     *
     * @ORM\Column(name="ocorrencia", type="integer", nullable=false)
     */
    private $ocorrencia;

    /**
     * @var string
     *
     * @ORM\Column(name="remessa", type="string", length=10, nullable=true)
     */
    private $remessa;

    /**
     * @var string
     *
     * @ORM\Column(name="transmitido", type="string", length=1, nullable=false)
     */
    private $transmitido;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_titulo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="tarifa_bancaria", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $tarifaBancaria;

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
     * @ORM\Column(name="id_usuario_transmissao", type="integer", nullable=true)
     */
    private $idUsuarioTransmissao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_transmissao", type="datetime", nullable=true)
     */
    private $dataTransmissao;

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
     * @var \AmpTituloBanco
     *
     * @ORM\ManyToOne(targetEntity="AmpTituloBanco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_titulo_banco", referencedColumnName="id_titulo_banco")
     * })
     */
    private $idTituloBanco;


    /**
     * Get idHistoricoBancario
     *
     * @return int
     */
    public function getIdHistoricoBancario()
    {
        return $this->idHistoricoBancario;
    }

    /**
     * Set envioRecebimento
     *
     * @param string $envioRecebimento
     *
     * @return AmpHistoricoBancario
     */
    public function setEnvioRecebimento($envioRecebimento)
    {
        $this->envioRecebimento = $envioRecebimento;

        return $this;
    }

    /**
     * Get envioRecebimento
     *
     * @return string
     */
    public function getEnvioRecebimento()
    {
        return $this->envioRecebimento;
    }

    /**
     * Set ocorrencia
     *
     * @param int $ocorrencia
     *
     * @return AmpHistoricoBancario
     */
    public function setOcorrencia($ocorrencia)
    {
        $this->ocorrencia = $ocorrencia;

        return $this;
    }

    /**
     * Get ocorrencia
     *
     * @return int
     */
    public function getOcorrencia()
    {
        return $this->ocorrencia;
    }

    /**
     * Set remessa
     *
     * @param string $remessa
     *
     * @return AmpHistoricoBancario
     */
    public function setRemessa($remessa)
    {
        $this->remessa = $remessa;

        return $this;
    }

    /**
     * Get remessa
     *
     * @return string
     */
    public function getRemessa()
    {
        return $this->remessa;
    }

    /**
     * Set transmitido
     *
     * @param string $transmitido
     *
     * @return AmpHistoricoBancario
     */
    public function setTransmitido($transmitido)
    {
        $this->transmitido = $transmitido;

        return $this;
    }

    /**
     * Get transmitido
     *
     * @return string
     */
    public function getTransmitido()
    {
        return $this->transmitido;
    }

    /**
     * Set valorTitulo
     *
     * @param string $valorTitulo
     *
     * @return AmpHistoricoBancario
     */
    public function setValorTitulo($valorTitulo)
    {
        $this->valorTitulo = $valorTitulo;

        return $this;
    }

    /**
     * Get valorTitulo
     *
     * @return string
     */
    public function getValorTitulo()
    {
        return $this->valorTitulo;
    }

    /**
     * Set tarifaBancaria
     *
     * @param string $tarifaBancaria
     *
     * @return AmpHistoricoBancario
     */
    public function setTarifaBancaria($tarifaBancaria)
    {
        $this->tarifaBancaria = $tarifaBancaria;

        return $this;
    }

    /**
     * Get tarifaBancaria
     *
     * @return string
     */
    public function getTarifaBancaria()
    {
        return $this->tarifaBancaria;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpHistoricoBancario
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
     * @return AmpHistoricoBancario
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
     * Set idUsuarioTransmissao
     *
     * @param int $idUsuarioTransmissao
     *
     * @return AmpHistoricoBancario
     */
    public function setIdUsuarioTransmissao($idUsuarioTransmissao)
    {
        $this->idUsuarioTransmissao = $idUsuarioTransmissao;

        return $this;
    }

    /**
     * Get idUsuarioTransmissao
     *
     * @return int
     */
    public function getIdUsuarioTransmissao()
    {
        return $this->idUsuarioTransmissao;
    }

    /**
     * Set dataTransmissao
     *
     * @param \DateTime $dataTransmissao
     *
     * @return AmpHistoricoBancario
     */
    public function setDataTransmissao($dataTransmissao)
    {
        $this->dataTransmissao = $dataTransmissao;

        return $this;
    }

    /**
     * Get dataTransmissao
     *
     * @return \DateTime
     */
    public function getDataTransmissao()
    {
        return $this->dataTransmissao;
    }

    /**
     * Set idTitulo
     *
     * @param \AmpTitulo $idTitulo
     *
     * @return AmpHistoricoBancario
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
     * Set idTituloBanco
     *
     * @param \AmpTituloBanco $idTituloBanco
     *
     * @return AmpHistoricoBancario
     */
    public function setIdTituloBanco(\AmpTituloBanco $idTituloBanco = null)
    {
        $this->idTituloBanco = $idTituloBanco;

        return $this;
    }

    /**
     * Get idTituloBanco
     *
     * @return \AmpTituloBanco
     */
    public function getIdTituloBanco()
    {
        return $this->idTituloBanco;
    }
}

