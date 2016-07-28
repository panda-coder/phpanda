<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTipoDespesa
 *
 * @ORM\Table(name="amp_tipo_despesa")
 * @ORM\Entity
 */
class AmpTipoDespesa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_despesa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoDespesa;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
     */
    private $descricao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_contabil", type="integer", nullable=false)
     */
    private $idContaContabil;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $valorUnitario;

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
     * Get idTipoDespesa
     *
     * @return int
     */
    public function getIdTipoDespesa()
    {
        return $this->idTipoDespesa;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpTipoDespesa
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
     * Set idContaContabil
     *
     * @param int $idContaContabil
     *
     * @return AmpTipoDespesa
     */
    public function setIdContaContabil($idContaContabil)
    {
        $this->idContaContabil = $idContaContabil;

        return $this;
    }

    /**
     * Get idContaContabil
     *
     * @return int
     */
    public function getIdContaContabil()
    {
        return $this->idContaContabil;
    }

    /**
     * Set valorUnitario
     *
     * @param string $valorUnitario
     *
     * @return AmpTipoDespesa
     */
    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }

    /**
     * Get valorUnitario
     *
     * @return string
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpTipoDespesa
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
     * @return AmpTipoDespesa
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
     * @return AmpTipoDespesa
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
     * @return AmpTipoDespesa
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

