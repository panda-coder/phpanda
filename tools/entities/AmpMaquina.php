<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpMaquina
 *
 * @ORM\Table(name="amp_maquina", indexes={@ORM\Index(name="fk_amp_maquina_1_idx", columns={"id_grupo_maquina"}), @ORM\Index(name="uq_maquina_grupo_maquina", columns={"id_grupo_maquina", "descricao"})})
 * @ORM\Entity
 */
class AmpMaquina
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_maquina", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaquina;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
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
     * @var \AmpGrupoMaquina
     *
     * @ORM\ManyToOne(targetEntity="AmpGrupoMaquina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo_maquina", referencedColumnName="id_grupo_maquina")
     * })
     */
    private $idGrupoMaquina;


    /**
     * Get idMaquina
     *
     * @return int
     */
    public function getIdMaquina()
    {
        return $this->idMaquina;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpMaquina
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
     * @return AmpMaquina
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
     * @return AmpMaquina
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
     * @return AmpMaquina
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
     * @return AmpMaquina
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
     * Set idGrupoMaquina
     *
     * @param \AmpGrupoMaquina $idGrupoMaquina
     *
     * @return AmpMaquina
     */
    public function setIdGrupoMaquina(\AmpGrupoMaquina $idGrupoMaquina = null)
    {
        $this->idGrupoMaquina = $idGrupoMaquina;

        return $this;
    }

    /**
     * Get idGrupoMaquina
     *
     * @return \AmpGrupoMaquina
     */
    public function getIdGrupoMaquina()
    {
        return $this->idGrupoMaquina;
    }
}

