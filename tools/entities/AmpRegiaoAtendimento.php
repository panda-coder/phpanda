<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpRegiaoAtendimento
 *
 * @ORM\Table(name="amp_regiao_atendimento", indexes={@ORM\Index(name="fk_id_gestor_conta_gestor_conta_id_gestor_conta_idx", columns={"id_gestor_conta"})})
 * @ORM\Entity
 */
class AmpRegiaoAtendimento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_regiao_atendimento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegiaoAtendimento;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=60, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=255, nullable=true)
     */
    private $observacao;

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
     * @var \AmpGestorConta
     *
     * @ORM\ManyToOne(targetEntity="AmpGestorConta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_gestor_conta", referencedColumnName="id_gestor_conta")
     * })
     */
    private $idGestorConta;


    /**
     * Get idRegiaoAtendimento
     *
     * @return int
     */
    public function getIdRegiaoAtendimento()
    {
        return $this->idRegiaoAtendimento;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpRegiaoAtendimento
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpRegiaoAtendimento
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpRegiaoAtendimento
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
     * @return AmpRegiaoAtendimento
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
     * @return AmpRegiaoAtendimento
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
     * @return AmpRegiaoAtendimento
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
     * Set idGestorConta
     *
     * @param \AmpGestorConta $idGestorConta
     *
     * @return AmpRegiaoAtendimento
     */
    public function setIdGestorConta(\AmpGestorConta $idGestorConta = null)
    {
        $this->idGestorConta = $idGestorConta;

        return $this;
    }

    /**
     * Get idGestorConta
     *
     * @return \AmpGestorConta
     */
    public function getIdGestorConta()
    {
        return $this->idGestorConta;
    }
}

