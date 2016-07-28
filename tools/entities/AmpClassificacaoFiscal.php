<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpClassificacaoFiscal
 *
 * @ORM\Table(name="amp_classificacao_fiscal", uniqueConstraints={@ORM\UniqueConstraint(name="uq_classificacao_fiscal", columns={"ncm", "cest"})})
 * @ORM\Entity
 */
class AmpClassificacaoFiscal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_classificacao_fiscal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClassificacaoFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="ncm", type="string", length=8, nullable=false)
     */
    private $ncm;

    /**
     * @var string
     *
     * @ORM\Column(name="cest", type="string", length=45, nullable=true)
     */
    private $cest;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=300, nullable=false)
     */
    private $descricao;

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
     * Get idClassificacaoFiscal
     *
     * @return int
     */
    public function getIdClassificacaoFiscal()
    {
        return $this->idClassificacaoFiscal;
    }

    /**
     * Set ncm
     *
     * @param string $ncm
     *
     * @return AmpClassificacaoFiscal
     */
    public function setNcm($ncm)
    {
        $this->ncm = $ncm;

        return $this;
    }

    /**
     * Get ncm
     *
     * @return string
     */
    public function getNcm()
    {
        return $this->ncm;
    }

    /**
     * Set cest
     *
     * @param string $cest
     *
     * @return AmpClassificacaoFiscal
     */
    public function setCest($cest)
    {
        $this->cest = $cest;

        return $this;
    }

    /**
     * Get cest
     *
     * @return string
     */
    public function getCest()
    {
        return $this->cest;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpClassificacaoFiscal
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpClassificacaoFiscal
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
     * @return AmpClassificacaoFiscal
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
     * @return AmpClassificacaoFiscal
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
     * @return AmpClassificacaoFiscal
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

