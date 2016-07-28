<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTraducao
 *
 * @ORM\Table(name="amp_traducao", indexes={@ORM\Index(name="fk_amp_traducao_1_idx", columns={"id_linguagem"})})
 * @ORM\Entity
 */
class AmpTraducao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_traducao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTraducao;

    /**
     * @var string
     *
     * @ORM\Column(name="traducao_palavras", type="text", length=16777215, nullable=false)
     */
    private $traducaoPalavras;

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
     * @var \AmpLinguagem
     *
     * @ORM\ManyToOne(targetEntity="AmpLinguagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_linguagem", referencedColumnName="id_linguagem")
     * })
     */
    private $idLinguagem;


    /**
     * Get idTraducao
     *
     * @return int
     */
    public function getIdTraducao()
    {
        return $this->idTraducao;
    }

    /**
     * Set traducaoPalavras
     *
     * @param string $traducaoPalavras
     *
     * @return AmpTraducao
     */
    public function setTraducaoPalavras($traducaoPalavras)
    {
        $this->traducaoPalavras = $traducaoPalavras;

        return $this;
    }

    /**
     * Get traducaoPalavras
     *
     * @return string
     */
    public function getTraducaoPalavras()
    {
        return $this->traducaoPalavras;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpTraducao
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
     * @return AmpTraducao
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
     * @return AmpTraducao
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
     * @return AmpTraducao
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
     * Set idLinguagem
     *
     * @param \AmpLinguagem $idLinguagem
     *
     * @return AmpTraducao
     */
    public function setIdLinguagem(\AmpLinguagem $idLinguagem = null)
    {
        $this->idLinguagem = $idLinguagem;

        return $this;
    }

    /**
     * Get idLinguagem
     *
     * @return \AmpLinguagem
     */
    public function getIdLinguagem()
    {
        return $this->idLinguagem;
    }
}

