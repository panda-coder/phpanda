<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRoteiroProcesso
 *
 * @ORM\Table(name="amp_roteiro_processo", indexes={@ORM\Index(name="fk_amp_roteiro_processo_1_idx", columns={"id_roteiro"}), @ORM\Index(name="fk_amp_roteiro_processo_2_idx", columns={"id_processo"})})
 * @ORM\Entity
 */
class AmpRoteiroProcesso
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_roteiro_processo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRoteiroProcesso;

    /**
     * @var string
     *
     * @ORM\Column(name="peca_hora", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $pecaHora;

    /**
     * @var int
     *
     * @ORM\Column(name="sequencial", type="integer", nullable=false)
     */
    private $sequencial;

    /**
     * @var \AmpRoteiro
     *
     * @ORM\ManyToOne(targetEntity="AmpRoteiro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_roteiro", referencedColumnName="id_roteiro")
     * })
     */
    private $idRoteiro;

    /**
     * @var \AmpProcesso
     *
     * @ORM\ManyToOne(targetEntity="AmpProcesso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_processo", referencedColumnName="id_processo")
     * })
     */
    private $idProcesso;


    /**
     * Get idRoteiroProcesso
     *
     * @return int
     */
    public function getIdRoteiroProcesso()
    {
        return $this->idRoteiroProcesso;
    }

    /**
     * Set pecaHora
     *
     * @param string $pecaHora
     *
     * @return AmpRoteiroProcesso
     */
    public function setPecaHora($pecaHora)
    {
        $this->pecaHora = $pecaHora;

        return $this;
    }

    /**
     * Get pecaHora
     *
     * @return string
     */
    public function getPecaHora()
    {
        return $this->pecaHora;
    }

    /**
     * Set sequencial
     *
     * @param int $sequencial
     *
     * @return AmpRoteiroProcesso
     */
    public function setSequencial($sequencial)
    {
        $this->sequencial = $sequencial;

        return $this;
    }

    /**
     * Get sequencial
     *
     * @return int
     */
    public function getSequencial()
    {
        return $this->sequencial;
    }

    /**
     * Set idRoteiro
     *
     * @param \AmpRoteiro $idRoteiro
     *
     * @return AmpRoteiroProcesso
     */
    public function setIdRoteiro(\AmpRoteiro $idRoteiro = null)
    {
        $this->idRoteiro = $idRoteiro;

        return $this;
    }

    /**
     * Get idRoteiro
     *
     * @return \AmpRoteiro
     */
    public function getIdRoteiro()
    {
        return $this->idRoteiro;
    }

    /**
     * Set idProcesso
     *
     * @param \AmpProcesso $idProcesso
     *
     * @return AmpRoteiroProcesso
     */
    public function setIdProcesso(\AmpProcesso $idProcesso = null)
    {
        $this->idProcesso = $idProcesso;

        return $this;
    }

    /**
     * Get idProcesso
     *
     * @return \AmpProcesso
     */
    public function getIdProcesso()
    {
        return $this->idProcesso;
    }
}

