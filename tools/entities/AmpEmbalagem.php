<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEmbalagem
 *
 * @ORM\Table(name="amp_embalagem")
 * @ORM\Entity
 */
class AmpEmbalagem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_embalagem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmbalagem;

    /**
     * @var string
     *
     * @ORM\Column(name="embalagem", type="string", length=45, nullable=true)
     */
    private $embalagem;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_en", type="string", length=45, nullable=true)
     */
    private $descricaoEn;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_es", type="string", length=45, nullable=true)
     */
    private $descricaoEs;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

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
     * Get idEmbalagem
     *
     * @return int
     */
    public function getIdEmbalagem()
    {
        return $this->idEmbalagem;
    }

    /**
     * Set embalagem
     *
     * @param string $embalagem
     *
     * @return AmpEmbalagem
     */
    public function setEmbalagem($embalagem)
    {
        $this->embalagem = $embalagem;

        return $this;
    }

    /**
     * Get embalagem
     *
     * @return string
     */
    public function getEmbalagem()
    {
        return $this->embalagem;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpEmbalagem
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
     * Set descricaoEn
     *
     * @param string $descricaoEn
     *
     * @return AmpEmbalagem
     */
    public function setDescricaoEn($descricaoEn)
    {
        $this->descricaoEn = $descricaoEn;

        return $this;
    }

    /**
     * Get descricaoEn
     *
     * @return string
     */
    public function getDescricaoEn()
    {
        return $this->descricaoEn;
    }

    /**
     * Set descricaoEs
     *
     * @param string $descricaoEs
     *
     * @return AmpEmbalagem
     */
    public function setDescricaoEs($descricaoEs)
    {
        $this->descricaoEs = $descricaoEs;

        return $this;
    }

    /**
     * Get descricaoEs
     *
     * @return string
     */
    public function getDescricaoEs()
    {
        return $this->descricaoEs;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpEmbalagem
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
     * @return AmpEmbalagem
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
     * @return AmpEmbalagem
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
     * @return AmpEmbalagem
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

