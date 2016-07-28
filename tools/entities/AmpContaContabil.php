<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpContaContabil
 *
 * @ORM\Table(name="amp_conta_contabil", indexes={@ORM\Index(name="fk_amp_conta_contabil_1_idx", columns={"id_conta_contabil_pai"})})
 * @ORM\Entity
 */
class AmpContaContabil
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_contabil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContaContabil;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_reduzido", type="string", length=45, nullable=true)
     */
    private $codigoReduzido;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=4, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="tem_filhos", type="string", length=1, nullable=true)
     */
    private $temFilhos;

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
     * @var \AmpContaContabil
     *
     * @ORM\ManyToOne(targetEntity="AmpContaContabil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_contabil_pai", referencedColumnName="id_conta_contabil")
     * })
     */
    private $idContaContabilPai;


    /**
     * Get idContaContabil
     *
     * @return int
     */
    public function getIdContaContabil()
    {
        return $this->idContaContabil;
    }

    /**
     * Set codigoReduzido
     *
     * @param string $codigoReduzido
     *
     * @return AmpContaContabil
     */
    public function setCodigoReduzido($codigoReduzido)
    {
        $this->codigoReduzido = $codigoReduzido;

        return $this;
    }

    /**
     * Get codigoReduzido
     *
     * @return string
     */
    public function getCodigoReduzido()
    {
        return $this->codigoReduzido;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return AmpContaContabil
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpContaContabil
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
     * Set temFilhos
     *
     * @param string $temFilhos
     *
     * @return AmpContaContabil
     */
    public function setTemFilhos($temFilhos)
    {
        $this->temFilhos = $temFilhos;

        return $this;
    }

    /**
     * Get temFilhos
     *
     * @return string
     */
    public function getTemFilhos()
    {
        return $this->temFilhos;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpContaContabil
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
     * @return AmpContaContabil
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
     * @return AmpContaContabil
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
     * @return AmpContaContabil
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
     * Set idContaContabilPai
     *
     * @param \AmpContaContabil $idContaContabilPai
     *
     * @return AmpContaContabil
     */
    public function setIdContaContabilPai(\AmpContaContabil $idContaContabilPai = null)
    {
        $this->idContaContabilPai = $idContaContabilPai;

        return $this;
    }

    /**
     * Get idContaContabilPai
     *
     * @return \AmpContaContabil
     */
    public function getIdContaContabilPai()
    {
        return $this->idContaContabilPai;
    }
}

