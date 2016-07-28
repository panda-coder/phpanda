<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCstIcms
 *
 * @ORM\Table(name="amp_cst_icms", uniqueConstraints={@ORM\UniqueConstraint(name="cst_UNIQUE", columns={"cst"})})
 * @ORM\Entity
 */
class AmpCstIcms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cst_icms", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCstIcms;

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
     * @var string
     *
     * @ORM\Column(name="mensagem", type="string", length=100, nullable=true)
     */
    private $mensagem;

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
     * Get idCstIcms
     *
     * @return int
     */
    public function getIdCstIcms()
    {
        return $this->idCstIcms;
    }

    /**
     * Set cst
     *
     * @param string $cst
     *
     * @return AmpCstIcms
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
     * @return AmpCstIcms
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
     * Set mensagem
     *
     * @param string $mensagem
     *
     * @return AmpCstIcms
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

        return $this;
    }

    /**
     * Get mensagem
     *
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpCstIcms
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
     * @return AmpCstIcms
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
     * @return AmpCstIcms
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
     * @return AmpCstIcms
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

