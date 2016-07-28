<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpAnexoRegistro
 *
 * @ORM\Table(name="amp_anexo_registro", indexes={@ORM\Index(name="fk_amp_anexo_registro_1_idx", columns={"id_modulo"})})
 * @ORM\Entity
 */
class AmpAnexoRegistro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_anexo_registro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnexoRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="id_registro", type="integer", nullable=true)
     */
    private $idRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_arquivo", type="string", length=100, nullable=true)
     */
    private $nomeArquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_arquivo", type="string", length=300, nullable=true)
     */
    private $caminhoArquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=true)
     */
    private $observacao;

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
     * @var \AmpModulo
     *
     * @ORM\ManyToOne(targetEntity="AmpModulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $idModulo;


    /**
     * Get idAnexoRegistro
     *
     * @return int
     */
    public function getIdAnexoRegistro()
    {
        return $this->idAnexoRegistro;
    }

    /**
     * Set idRegistro
     *
     * @param int $idRegistro
     *
     * @return AmpAnexoRegistro
     */
    public function setIdRegistro($idRegistro)
    {
        $this->idRegistro = $idRegistro;

        return $this;
    }

    /**
     * Get idRegistro
     *
     * @return int
     */
    public function getIdRegistro()
    {
        return $this->idRegistro;
    }

    /**
     * Set nomeArquivo
     *
     * @param string $nomeArquivo
     *
     * @return AmpAnexoRegistro
     */
    public function setNomeArquivo($nomeArquivo)
    {
        $this->nomeArquivo = $nomeArquivo;

        return $this;
    }

    /**
     * Get nomeArquivo
     *
     * @return string
     */
    public function getNomeArquivo()
    {
        return $this->nomeArquivo;
    }

    /**
     * Set caminhoArquivo
     *
     * @param string $caminhoArquivo
     *
     * @return AmpAnexoRegistro
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpAnexoRegistro
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpAnexoRegistro
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
     * @return AmpAnexoRegistro
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
     * @return AmpAnexoRegistro
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
     * @return AmpAnexoRegistro
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
     * Set idModulo
     *
     * @param \AmpModulo $idModulo
     *
     * @return AmpAnexoRegistro
     */
    public function setIdModulo(\AmpModulo $idModulo = null)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return \AmpModulo
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }
}

