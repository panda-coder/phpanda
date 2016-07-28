<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpGrupoClienteEntidade
 *
 * @ORM\Table(name="amp_grupo_cliente_entidade", uniqueConstraints={@ORM\UniqueConstraint(name="uq_cliente_grupo", columns={"id_entidade"})}, indexes={@ORM\Index(name="fk_amp_grupo_cliente_entidade_2_idx", columns={"id_grupo_cliente"})})
 * @ORM\Entity
 */
class AmpGrupoClienteEntidade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo_cliente_entidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupoClienteEntidade;

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
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidade;

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
     * Get idGrupoClienteEntidade
     *
     * @return int
     */
    public function getIdGrupoClienteEntidade()
    {
        return $this->idGrupoClienteEntidade;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpGrupoClienteEntidade
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
     * @return AmpGrupoClienteEntidade
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
     * @return AmpGrupoClienteEntidade
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
     * @return AmpGrupoClienteEntidade
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
     * Set idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpGrupoClienteEntidade
     */
    public function setIdEntidade(\AmpEntidade $idEntidade = null)
    {
        $this->idEntidade = $idEntidade;

        return $this;
    }

    /**
     * Get idEntidade
     *
     * @return \AmpEntidade
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }

    /**
     * Set idGrupoCliente
     *
     * @param \AmpGrupoCliente $idGrupoCliente
     *
     * @return AmpGrupoClienteEntidade
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
}

