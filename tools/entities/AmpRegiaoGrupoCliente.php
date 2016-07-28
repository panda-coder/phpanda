<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRegiaoGrupoCliente
 *
 * @ORM\Table(name="amp_regiao_grupo_cliente", indexes={@ORM\Index(name="fk_id_regiao_atendimento_regiao_atendimento_id_regiao_atend_idx", columns={"id_regiao_atendimento"}), @ORM\Index(name="fk_id_grupo_cliente_grupo_cliente_id_grupo_cliente_idx", columns={"id_grupo_cliente"})})
 * @ORM\Entity
 */
class AmpRegiaoGrupoCliente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_regiao_grupo_cliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegiaoGrupoCliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=true)
     */
    private $idUsuarioCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=true)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpGrupoCliente
     *
     * @ORM\ManyToOne(targetEntity="AmpGrupoCliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo_cliente", referencedColumnName="id_grupo_cliente")
     * })
     */
    private $idGrupoCliente;

    /**
     * @var \AmpRegiaoAtendimento
     *
     * @ORM\ManyToOne(targetEntity="AmpRegiaoAtendimento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_regiao_atendimento", referencedColumnName="id_regiao_atendimento")
     * })
     */
    private $idRegiaoAtendimento;


    /**
     * Get idRegiaoGrupoCliente
     *
     * @return int
     */
    public function getIdRegiaoGrupoCliente()
    {
        return $this->idRegiaoGrupoCliente;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpRegiaoGrupoCliente
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpRegiaoGrupoCliente
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpRegiaoGrupoCliente
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
     * @return AmpRegiaoGrupoCliente
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
     * Set idGrupoCliente
     *
     * @param \AmpGrupoCliente $idGrupoCliente
     *
     * @return AmpRegiaoGrupoCliente
     */
    public function setIdGrupoCliente(\AmpGrupoCliente $idGrupoCliente = null)
    {
        $this->idGrupoCliente = $idGrupoCliente;

        return $this;
    }

    /**
     * Get idGrupoCliente
     *
     * @return \AmpGrupoCliente
     */
    public function getIdGrupoCliente()
    {
        return $this->idGrupoCliente;
    }

    /**
     * Set idRegiaoAtendimento
     *
     * @param \AmpRegiaoAtendimento $idRegiaoAtendimento
     *
     * @return AmpRegiaoGrupoCliente
     */
    public function setIdRegiaoAtendimento(\AmpRegiaoAtendimento $idRegiaoAtendimento = null)
    {
        $this->idRegiaoAtendimento = $idRegiaoAtendimento;

        return $this;
    }

    /**
     * Get idRegiaoAtendimento
     *
     * @return \AmpRegiaoAtendimento
     */
    public function getIdRegiaoAtendimento()
    {
        return $this->idRegiaoAtendimento;
    }
}

