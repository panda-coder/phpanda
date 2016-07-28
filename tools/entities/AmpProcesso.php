<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProcesso
 *
 * @ORM\Table(name="amp_processo", uniqueConstraints={@ORM\UniqueConstraint(name="index4", columns={"descricao", "id_centro_trabalho_linha"})}, indexes={@ORM\Index(name="fk_amp_processo_1_idx", columns={"id_centro_trabalho_linha"}), @ORM\Index(name="fk_amp_processo_2_idx", columns={"id_maquina"})})
 * @ORM\Entity
 */
class AmpProcesso
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_processo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProcesso;

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
     * @var \AmpCentroTrabalhoLinha
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroTrabalhoLinha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_trabalho_linha", referencedColumnName="id_centro_trabalho_linha")
     * })
     */
    private $idCentroTrabalhoLinha;

    /**
     * @var \AmpMaquina
     *
     * @ORM\ManyToOne(targetEntity="AmpMaquina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_maquina", referencedColumnName="id_maquina")
     * })
     */
    private $idMaquina;


    /**
     * Get idProcesso
     *
     * @return int
     */
    public function getIdProcesso()
    {
        return $this->idProcesso;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpProcesso
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
     * @return AmpProcesso
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
     * @return AmpProcesso
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
     * @return AmpProcesso
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
     * @return AmpProcesso
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
     * Set idCentroTrabalhoLinha
     *
     * @param \AmpCentroTrabalhoLinha $idCentroTrabalhoLinha
     *
     * @return AmpProcesso
     */
    public function setIdCentroTrabalhoLinha(\AmpCentroTrabalhoLinha $idCentroTrabalhoLinha = null)
    {
        $this->idCentroTrabalhoLinha = $idCentroTrabalhoLinha;

        return $this;
    }

    /**
     * Get idCentroTrabalhoLinha
     *
     * @return \AmpCentroTrabalhoLinha
     */
    public function getIdCentroTrabalhoLinha()
    {
        return $this->idCentroTrabalhoLinha;
    }

    /**
     * Set idMaquina
     *
     * @param \AmpMaquina $idMaquina
     *
     * @return AmpProcesso
     */
    public function setIdMaquina(\AmpMaquina $idMaquina = null)
    {
        $this->idMaquina = $idMaquina;

        return $this;
    }

    /**
     * Get idMaquina
     *
     * @return \AmpMaquina
     */
    public function getIdMaquina()
    {
        return $this->idMaquina;
    }
}

