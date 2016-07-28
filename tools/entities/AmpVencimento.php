<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpVencimento
 *
 * @ORM\Table(name="amp_vencimento")
 * @ORM\Entity
 */
class AmpVencimento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vencimento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVencimento;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=false)
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpFormaPagamento", mappedBy="idVencimento")
     */
    private $idFormaPagamento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFormaPagamento = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idVencimento
     *
     * @return int
     */
    public function getIdVencimento()
    {
        return $this->idVencimento;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpVencimento
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
     * @return AmpVencimento
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
     * @return AmpVencimento
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
     * @return AmpVencimento
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
     * @return AmpVencimento
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
     * Add idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpVencimento
     */
    public function addIdFormaPagamento(\AmpFormaPagamento $idFormaPagamento)
    {
        $this->idFormaPagamento[] = $idFormaPagamento;

        return $this;
    }

    /**
     * Remove idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdFormaPagamento(\AmpFormaPagamento $idFormaPagamento)
    {
        return $this->idFormaPagamento->removeElement($idFormaPagamento);
    }

    /**
     * Get idFormaPagamento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdFormaPagamento()
    {
        return $this->idFormaPagamento;
    }
}

