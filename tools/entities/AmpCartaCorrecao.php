<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCartaCorrecao
 *
 * @ORM\Table(name="amp_carta_correcao", indexes={@ORM\Index(name="fk_amp_carta_correcao_1_idx", columns={"id_nota_fiscal"})})
 * @ORM\Entity
 */
class AmpCartaCorrecao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carta_correcao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCartaCorrecao;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=500, nullable=false)
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
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpNotaFiscal
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaFiscal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_fiscal", referencedColumnName="id_nota_fiscal")
     * })
     */
    private $idNotaFiscal;


    /**
     * Get idCartaCorrecao
     *
     * @return int
     */
    public function getIdCartaCorrecao()
    {
        return $this->idCartaCorrecao;
    }

    /**
     * Set status
     *
     * @param int $status
     *
     * @return AmpCartaCorrecao
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpCartaCorrecao
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
     * @return AmpCartaCorrecao
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
     * @return AmpCartaCorrecao
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
     * @return AmpCartaCorrecao
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
     * @return AmpCartaCorrecao
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
     * Set idNotaFiscal
     *
     * @param \AmpNotaFiscal $idNotaFiscal
     *
     * @return AmpCartaCorrecao
     */
    public function setIdNotaFiscal(\AmpNotaFiscal $idNotaFiscal = null)
    {
        $this->idNotaFiscal = $idNotaFiscal;

        return $this;
    }

    /**
     * Get idNotaFiscal
     *
     * @return \AmpNotaFiscal
     */
    public function getIdNotaFiscal()
    {
        return $this->idNotaFiscal;
    }
}

