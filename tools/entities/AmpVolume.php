<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpVolume
 *
 * @ORM\Table(name="amp_volume")
 * @ORM\Entity
 */
class AmpVolume
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_volume", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVolume;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="altura", type="string", length=45, nullable=true)
     */
    private $altura;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="string", length=45, nullable=true)
     */
    private $peso;

    /**
     * @var string
     *
     * @ORM\Column(name="comprimento", type="string", length=45, nullable=true)
     */
    private $comprimento;

    /**
     * @var string
     *
     * @ORM\Column(name="largura", type="string", length=45, nullable=true)
     */
    private $largura;

    /**
     * @var string
     *
     * @ORM\Column(name="fator_conversao", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $fatorConversao;

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
     * Get idVolume
     *
     * @return int
     */
    public function getIdVolume()
    {
        return $this->idVolume;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpVolume
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
     * Set altura
     *
     * @param string $altura
     *
     * @return AmpVolume
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return string
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set peso
     *
     * @param string $peso
     *
     * @return AmpVolume
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set comprimento
     *
     * @param string $comprimento
     *
     * @return AmpVolume
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return string
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set largura
     *
     * @param string $largura
     *
     * @return AmpVolume
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get largura
     *
     * @return string
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set fatorConversao
     *
     * @param string $fatorConversao
     *
     * @return AmpVolume
     */
    public function setFatorConversao($fatorConversao)
    {
        $this->fatorConversao = $fatorConversao;

        return $this;
    }

    /**
     * Get fatorConversao
     *
     * @return string
     */
    public function getFatorConversao()
    {
        return $this->fatorConversao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpVolume
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
     * @return AmpVolume
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
     * @return AmpVolume
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
     * @return AmpVolume
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

