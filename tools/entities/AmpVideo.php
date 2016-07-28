<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpVideo
 *
 * @ORM\Table(name="amp_video", indexes={@ORM\Index(name="fk_amp_video_1_idx", columns={"id_categoria_video"})})
 * @ORM\Entity
 */
class AmpVideo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_video", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_arquivo", type="string", length=200, nullable=true)
     */
    private $caminhoArquivo;

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
     * @var \AmpCategoriaVideo
     *
     * @ORM\ManyToOne(targetEntity="AmpCategoriaVideo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria_video", referencedColumnName="id_categoria_video")
     * })
     */
    private $idCategoriaVideo;


    /**
     * Get idVideo
     *
     * @return int
     */
    public function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpVideo
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
     * Set caminhoArquivo
     *
     * @param string $caminhoArquivo
     *
     * @return AmpVideo
     */
    public function setCaminhoArquivo($caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;

        return $this;
    }

    /**
     * Get caminhoArquivo
     *
     * @return string
     */
    public function getCaminhoArquivo()
    {
        return $this->caminhoArquivo;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpVideo
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
     * @return AmpVideo
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
     * @return AmpVideo
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
     * @return AmpVideo
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
     * Set idCategoriaVideo
     *
     * @param \AmpCategoriaVideo $idCategoriaVideo
     *
     * @return AmpVideo
     */
    public function setIdCategoriaVideo(\AmpCategoriaVideo $idCategoriaVideo = null)
    {
        $this->idCategoriaVideo = $idCategoriaVideo;

        return $this;
    }

    /**
     * Get idCategoriaVideo
     *
     * @return \AmpCategoriaVideo
     */
    public function getIdCategoriaVideo()
    {
        return $this->idCategoriaVideo;
    }
}

