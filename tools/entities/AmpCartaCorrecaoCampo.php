<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCartaCorrecaoCampo
 *
 * @ORM\Table(name="amp_carta_correcao_campo")
 * @ORM\Entity
 */
class AmpCartaCorrecaoCampo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carta_correcao_campo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCartaCorrecaoCampo;

    /**
     * @var string
     *
     * @ORM\Column(name="campo", type="string", length=45, nullable=true)
     */
    private $campo;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_pai", type="string", length=45, nullable=true)
     */
    private $tagPai;

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
     * Get idCartaCorrecaoCampo
     *
     * @return int
     */
    public function getIdCartaCorrecaoCampo()
    {
        return $this->idCartaCorrecaoCampo;
    }

    /**
     * Set campo
     *
     * @param string $campo
     *
     * @return AmpCartaCorrecaoCampo
     */
    public function setCampo($campo)
    {
        $this->campo = $campo;

        return $this;
    }

    /**
     * Get campo
     *
     * @return string
     */
    public function getCampo()
    {
        return $this->campo;
    }

    /**
     * Set tagPai
     *
     * @param string $tagPai
     *
     * @return AmpCartaCorrecaoCampo
     */
    public function setTagPai($tagPai)
    {
        $this->tagPai = $tagPai;

        return $this;
    }

    /**
     * Get tagPai
     *
     * @return string
     */
    public function getTagPai()
    {
        return $this->tagPai;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpCartaCorrecaoCampo
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
     * @return AmpCartaCorrecaoCampo
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
     * @return AmpCartaCorrecaoCampo
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
     * @return AmpCartaCorrecaoCampo
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
     * @return AmpCartaCorrecaoCampo
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

