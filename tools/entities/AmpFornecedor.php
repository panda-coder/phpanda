<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpFornecedor
 *
 * @ORM\Table(name="amp_fornecedor", indexes={@ORM\Index(name="fk_id_conta_contabil_idx", columns={"id_conta_contabil"})})
 * @ORM\Entity
 */
class AmpFornecedor
{
    /**
     * @var int
     *
     * @ORM\Column(name="lead_time_padrao", type="integer", nullable=false)
     */
    private $leadTimePadrao;

    /**
     * @var int
     *
     * @ORM\Column(name="transit_time_padrao", type="integer", nullable=false)
     */
    private $transitTimePadrao;

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
     * @var \AmpEntidade
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fornecedor", referencedColumnName="id_entidade")
     * })
     */
    private $idFornecedor;

    /**
     * @var \AmpContaContabil
     *
     * @ORM\ManyToOne(targetEntity="AmpContaContabil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_contabil", referencedColumnName="id_conta_contabil")
     * })
     */
    private $idContaContabil;


    /**
     * Set leadTimePadrao
     *
     * @param int $leadTimePadrao
     *
     * @return AmpFornecedor
     */
    public function setLeadTimePadrao($leadTimePadrao)
    {
        $this->leadTimePadrao = $leadTimePadrao;

        return $this;
    }

    /**
     * Get leadTimePadrao
     *
     * @return int
     */
    public function getLeadTimePadrao()
    {
        return $this->leadTimePadrao;
    }

    /**
     * Set transitTimePadrao
     *
     * @param int $transitTimePadrao
     *
     * @return AmpFornecedor
     */
    public function setTransitTimePadrao($transitTimePadrao)
    {
        $this->transitTimePadrao = $transitTimePadrao;

        return $this;
    }

    /**
     * Get transitTimePadrao
     *
     * @return int
     */
    public function getTransitTimePadrao()
    {
        return $this->transitTimePadrao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpFornecedor
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
     * @return AmpFornecedor
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
     * @return AmpFornecedor
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
     * @return AmpFornecedor
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
     * Set idFornecedor
     *
     * @param \AmpEntidade $idFornecedor
     *
     * @return AmpFornecedor
     */
    public function setIdFornecedor(\AmpEntidade $idFornecedor)
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }

    /**
     * Get idFornecedor
     *
     * @return \AmpEntidade
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    /**
     * Set idContaContabil
     *
     * @param \AmpContaContabil $idContaContabil
     *
     * @return AmpFornecedor
     */
    public function setIdContaContabil(\AmpContaContabil $idContaContabil = null)
    {
        $this->idContaContabil = $idContaContabil;

        return $this;
    }

    /**
     * Get idContaContabil
     *
     * @return \AmpContaContabil
     */
    public function getIdContaContabil()
    {
        return $this->idContaContabil;
    }
}

