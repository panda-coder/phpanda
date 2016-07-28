<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEmbalagemVolume
 *
 * @ORM\Table(name="amp_embalagem_volume", indexes={@ORM\Index(name="fk_amp_embalagem_volume_amp_embalagem1_idx", columns={"id_embalagem"}), @ORM\Index(name="fk_amp_embalagem_volume_amp_volumes1_idx", columns={"id_volume"})})
 * @ORM\Entity
 */
class AmpEmbalagemVolume
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_embalagem_volume", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmbalagemVolume;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

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
     * @var \AmpEmbalagem
     *
     * @ORM\ManyToOne(targetEntity="AmpEmbalagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_embalagem", referencedColumnName="id_embalagem")
     * })
     */
    private $idEmbalagem;

    /**
     * @var \AmpVolume
     *
     * @ORM\ManyToOne(targetEntity="AmpVolume")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_volume", referencedColumnName="id_volume")
     * })
     */
    private $idVolume;


    /**
     * Get idEmbalagemVolume
     *
     * @return int
     */
    public function getIdEmbalagemVolume()
    {
        return $this->idEmbalagemVolume;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpEmbalagemVolume
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
     * @return AmpEmbalagemVolume
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
     * @return AmpEmbalagemVolume
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
     * @return AmpEmbalagemVolume
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
     * @return AmpEmbalagemVolume
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
     * Set idEmbalagem
     *
     * @param \AmpEmbalagem $idEmbalagem
     *
     * @return AmpEmbalagemVolume
     */
    public function setIdEmbalagem(\AmpEmbalagem $idEmbalagem = null)
    {
        $this->idEmbalagem = $idEmbalagem;

        return $this;
    }

    /**
     * Get idEmbalagem
     *
     * @return \AmpEmbalagem
     */
    public function getIdEmbalagem()
    {
        return $this->idEmbalagem;
    }

    /**
     * Set idVolume
     *
     * @param \AmpVolume $idVolume
     *
     * @return AmpEmbalagemVolume
     */
    public function setIdVolume(\AmpVolume $idVolume = null)
    {
        $this->idVolume = $idVolume;

        return $this;
    }

    /**
     * Get idVolume
     *
     * @return \AmpVolume
     */
    public function getIdVolume()
    {
        return $this->idVolume;
    }
}

