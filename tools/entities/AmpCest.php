<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCest
 *
 * @ORM\Table(name="amp_cest", indexes={@ORM\Index(name="ncm_tbc", columns={"codigo_ncm"})})
 * @ORM\Entity
 */
class AmpCest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCest;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_cest", type="integer", nullable=false)
     */
    private $codigoCest;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_ncm", type="integer", nullable=false)
     */
    private $codigoNcm;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=300, nullable=false)
     */
    private $descricao;


    /**
     * Get idCest
     *
     * @return int
     */
    public function getIdCest()
    {
        return $this->idCest;
    }

    /**
     * Set codigoCest
     *
     * @param int $codigoCest
     *
     * @return AmpCest
     */
    public function setCodigoCest($codigoCest)
    {
        $this->codigoCest = $codigoCest;

        return $this;
    }

    /**
     * Get codigoCest
     *
     * @return int
     */
    public function getCodigoCest()
    {
        return $this->codigoCest;
    }

    /**
     * Set codigoNcm
     *
     * @param int $codigoNcm
     *
     * @return AmpCest
     */
    public function setCodigoNcm($codigoNcm)
    {
        $this->codigoNcm = $codigoNcm;

        return $this;
    }

    /**
     * Get codigoNcm
     *
     * @return int
     */
    public function getCodigoNcm()
    {
        return $this->codigoNcm;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpCest
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
}

