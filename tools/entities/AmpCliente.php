<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCliente
 *
 * @ORM\Table(name="amp_cliente", indexes={@ORM\Index(name="fk_amp_cliente_2_idx", columns={"id_tabela_preco"}), @ORM\Index(name="idx_id_conta_contabil", columns={"id_conta_contabil"})})
 * @ORM\Entity
 */
class AmpCliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="credito_limite", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $creditoLimite;

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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id_entidade")
     * })
     */
    private $idCliente;

    /**
     * @var \AmpTabelaPreco
     *
     * @ORM\ManyToOne(targetEntity="AmpTabelaPreco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tabela_preco", referencedColumnName="id_tabela_preco")
     * })
     */
    private $idTabelaPreco;

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
     * Set creditoLimite
     *
     * @param string $creditoLimite
     *
     * @return AmpCliente
     */
    public function setCreditoLimite($creditoLimite)
    {
        $this->creditoLimite = $creditoLimite;

        return $this;
    }

    /**
     * Get creditoLimite
     *
     * @return string
     */
    public function getCreditoLimite()
    {
        return $this->creditoLimite;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpCliente
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
     * @return AmpCliente
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
     * @return AmpCliente
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
     * @return AmpCliente
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
     * Set idCliente
     *
     * @param \AmpEntidade $idCliente
     *
     * @return AmpCliente
     */
    public function setIdCliente(\AmpEntidade $idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \AmpEntidade
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idTabelaPreco
     *
     * @param \AmpTabelaPreco $idTabelaPreco
     *
     * @return AmpCliente
     */
    public function setIdTabelaPreco(\AmpTabelaPreco $idTabelaPreco = null)
    {
        $this->idTabelaPreco = $idTabelaPreco;

        return $this;
    }

    /**
     * Get idTabelaPreco
     *
     * @return \AmpTabelaPreco
     */
    public function getIdTabelaPreco()
    {
        return $this->idTabelaPreco;
    }

    /**
     * Set idContaContabil
     *
     * @param \AmpContaContabil $idContaContabil
     *
     * @return AmpCliente
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

