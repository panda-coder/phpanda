<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaEntradaXml
 *
 * @ORM\Table(name="amp_nota_entrada_xml", uniqueConstraints={@ORM\UniqueConstraint(name="id_nota_entrada_UNIQUE", columns={"id_nota_entrada"})})
 * @ORM\Entity
 */
class AmpNotaEntradaXml
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_entrada_xml", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaEntradaXml;

    /**
     * @var string
     *
     * @ORM\Column(name="xml", type="text", length=16777215, nullable=false)
     */
    private $xml;

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
     * Get idNotaEntradaXml
     *
     * @return int
     */
    public function getIdNotaEntradaXml()
    {
        return $this->idNotaEntradaXml;
    }

    /**
     * Set xml
     *
     * @param string $xml
     *
     * @return AmpNotaEntradaXml
     */
    public function setXml($xml)
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * Get xml
     *
     * @return string
     */
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpNotaEntradaXml
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
     * @return AmpNotaEntradaXml
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
     * @return AmpNotaEntradaXml
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
     * @return AmpNotaEntradaXml
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
     * @return AmpNotaEntradaXml
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

