<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCstPisCofins
 *
 * @ORM\Table(name="amp_cst_pis_cofins", uniqueConstraints={@ORM\UniqueConstraint(name="cst_UNIQUE", columns={"cst"})})
 * @ORM\Entity
 */
class AmpCstPisCofins
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cst_pis_cofins", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCstPisCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="cst", type="string", length=2, nullable=false)
     */
    private $cst = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=250, nullable=false)
     */
    private $descricao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=true)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=true)
     */
    private $idUsuarioCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;


    /**
     * Get idCstPisCofins
     *
     * @return int
     */
    public function getIdCstPisCofins()
    {
        return $this->idCstPisCofins;
    }

    /**
     * Set cst
     *
     * @param string $cst
     *
     * @return AmpCstPisCofins
     */
    public function setCst($cst)
    {
        $this->cst = $cst;

        return $this;
    }

    /**
     * Get cst
     *
     * @return string
     */
    public function getCst()
    {
        return $this->cst;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpCstPisCofins
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

    /**
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpCstPisCofins
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpCstPisCofins
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
     * @return AmpCstPisCofins
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpCstPisCofins
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

