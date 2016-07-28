<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRomaneioDespacho
 *
 * @ORM\Table(name="amp_romaneio_despacho", indexes={@ORM\Index(name="idx_cpf_despacho", columns={"cpf_motorista"})})
 * @ORM\Entity
 */
class AmpRomaneioDespacho
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_romaneio_despacho", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRomaneioDespacho;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_motorista", type="string", length=50, nullable=false)
     */
    private $cpfMotorista;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_motorista", type="string", length=150, nullable=false)
     */
    private $nomeMotorista;

    /**
     * @var string
     *
     * @ORM\Column(name="total_notas", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $totalNotas;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_notas", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeNotas;

    /**
     * @var string
     *
     * @ORM\Column(name="total_peso", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $totalPeso;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

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
     * Get idRomaneioDespacho
     *
     * @return int
     */
    public function getIdRomaneioDespacho()
    {
        return $this->idRomaneioDespacho;
    }

    /**
     * Set status
     *
     * @param int $status
     *
     * @return AmpRomaneioDespacho
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set cpfMotorista
     *
     * @param string $cpfMotorista
     *
     * @return AmpRomaneioDespacho
     */
    public function setCpfMotorista($cpfMotorista)
    {
        $this->cpfMotorista = $cpfMotorista;

        return $this;
    }

    /**
     * Get cpfMotorista
     *
     * @return string
     */
    public function getCpfMotorista()
    {
        return $this->cpfMotorista;
    }

    /**
     * Set nomeMotorista
     *
     * @param string $nomeMotorista
     *
     * @return AmpRomaneioDespacho
     */
    public function setNomeMotorista($nomeMotorista)
    {
        $this->nomeMotorista = $nomeMotorista;

        return $this;
    }

    /**
     * Get nomeMotorista
     *
     * @return string
     */
    public function getNomeMotorista()
    {
        return $this->nomeMotorista;
    }

    /**
     * Set totalNotas
     *
     * @param string $totalNotas
     *
     * @return AmpRomaneioDespacho
     */
    public function setTotalNotas($totalNotas)
    {
        $this->totalNotas = $totalNotas;

        return $this;
    }

    /**
     * Get totalNotas
     *
     * @return string
     */
    public function getTotalNotas()
    {
        return $this->totalNotas;
    }

    /**
     * Set quantidadeNotas
     *
     * @param string $quantidadeNotas
     *
     * @return AmpRomaneioDespacho
     */
    public function setQuantidadeNotas($quantidadeNotas)
    {
        $this->quantidadeNotas = $quantidadeNotas;

        return $this;
    }

    /**
     * Get quantidadeNotas
     *
     * @return string
     */
    public function getQuantidadeNotas()
    {
        return $this->quantidadeNotas;
    }

    /**
     * Set totalPeso
     *
     * @param string $totalPeso
     *
     * @return AmpRomaneioDespacho
     */
    public function setTotalPeso($totalPeso)
    {
        $this->totalPeso = $totalPeso;

        return $this;
    }

    /**
     * Get totalPeso
     *
     * @return string
     */
    public function getTotalPeso()
    {
        return $this->totalPeso;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpRomaneioDespacho
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
     * @return AmpRomaneioDespacho
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
     * @return AmpRomaneioDespacho
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
     * @return AmpRomaneioDespacho
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

