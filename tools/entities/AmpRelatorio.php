<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRelatorio
 *
 * @ORM\Table(name="amp_relatorio")
 * @ORM\Entity
 */
class AmpRelatorio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_relatorio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelatorio;

    /**
     * @var int
     *
     * @ORM\Column(name="id_query", type="integer", nullable=false)
     */
    private $idQuery;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="sintaxe", type="text", length=65535, nullable=true)
     */
    private $sintaxe;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

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
     * Get idRelatorio
     *
     * @return int
     */
    public function getIdRelatorio()
    {
        return $this->idRelatorio;
    }

    /**
     * Set idQuery
     *
     * @param int $idQuery
     *
     * @return AmpRelatorio
     */
    public function setIdQuery($idQuery)
    {
        $this->idQuery = $idQuery;

        return $this;
    }

    /**
     * Get idQuery
     *
     * @return int
     */
    public function getIdQuery()
    {
        return $this->idQuery;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return AmpRelatorio
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpRelatorio
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
     * Set sintaxe
     *
     * @param string $sintaxe
     *
     * @return AmpRelatorio
     */
    public function setSintaxe($sintaxe)
    {
        $this->sintaxe = $sintaxe;

        return $this;
    }

    /**
     * Get sintaxe
     *
     * @return string
     */
    public function getSintaxe()
    {
        return $this->sintaxe;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpRelatorio
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
     * @return AmpRelatorio
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
     * @return AmpRelatorio
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
     * @return AmpRelatorio
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

