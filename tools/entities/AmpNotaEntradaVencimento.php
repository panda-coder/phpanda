<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaEntradaVencimento
 *
 * @ORM\Table(name="amp_nota_entrada_vencimento", indexes={@ORM\Index(name="fk_amp_nota_entrada_vencimento_1", columns={"id_nota_entrada"})})
 * @ORM\Entity
 */
class AmpNotaEntradaVencimento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_entrada_vencimento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaEntradaVencimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_vencimento", type="datetime", nullable=false)
     */
    private $dataVencimento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_vencimento", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorVencimento;

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
     * @var \AmpNotaEntrada
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaEntrada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_entrada", referencedColumnName="id_nota_entrada")
     * })
     */
    private $idNotaEntrada;


    /**
     * Get idNotaEntradaVencimento
     *
     * @return int
     */
    public function getIdNotaEntradaVencimento()
    {
        return $this->idNotaEntradaVencimento;
    }

    /**
     * Set dataVencimento
     *
     * @param \DateTime $dataVencimento
     *
     * @return AmpNotaEntradaVencimento
     */
    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;

        return $this;
    }

    /**
     * Get dataVencimento
     *
     * @return \DateTime
     */
    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    /**
     * Set valorVencimento
     *
     * @param string $valorVencimento
     *
     * @return AmpNotaEntradaVencimento
     */
    public function setValorVencimento($valorVencimento)
    {
        $this->valorVencimento = $valorVencimento;

        return $this;
    }

    /**
     * Get valorVencimento
     *
     * @return string
     */
    public function getValorVencimento()
    {
        return $this->valorVencimento;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpNotaEntradaVencimento
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
     * @return AmpNotaEntradaVencimento
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
     * @return AmpNotaEntradaVencimento
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
     * @return AmpNotaEntradaVencimento
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
     * Set idNotaEntrada
     *
     * @param \AmpNotaEntrada $idNotaEntrada
     *
     * @return AmpNotaEntradaVencimento
     */
    public function setIdNotaEntrada(\AmpNotaEntrada $idNotaEntrada = null)
    {
        $this->idNotaEntrada = $idNotaEntrada;

        return $this;
    }

    /**
     * Get idNotaEntrada
     *
     * @return \AmpNotaEntrada
     */
    public function getIdNotaEntrada()
    {
        return $this->idNotaEntrada;
    }
}

