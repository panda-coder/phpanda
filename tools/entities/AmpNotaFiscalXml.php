<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaFiscalXml
 *
 * @ORM\Table(name="amp_nota_fiscal_xml", uniqueConstraints={@ORM\UniqueConstraint(name="id_nota_fiscal_UNIQUE", columns={"id_nota_fiscal"})})
 * @ORM\Entity
 */
class AmpNotaFiscalXml
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_fiscal_xml", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaFiscalXml;

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
     * @var \AmpNotaFiscal
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaFiscal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_fiscal", referencedColumnName="id_nota_fiscal")
     * })
     */
    private $idNotaFiscal;


    /**
     * Get idNotaFiscalXml
     *
     * @return int
     */
    public function getIdNotaFiscalXml()
    {
        return $this->idNotaFiscalXml;
    }

    /**
     * Set xml
     *
     * @param string $xml
     *
     * @return AmpNotaFiscalXml
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
     * @return AmpNotaFiscalXml
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
     * @return AmpNotaFiscalXml
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
     * @return AmpNotaFiscalXml
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
     * @return AmpNotaFiscalXml
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
     * @return AmpNotaFiscalXml
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

