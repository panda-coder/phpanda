<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpFormaPagamento
 *
 * @ORM\Table(name="amp_forma_pagamento")
 * @ORM\Entity
 */
class AmpFormaPagamento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_forma_pagamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormaPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="gera_movimento_bancario", type="string", length=1, nullable=false)
     */
    private $geraMovimentoBancario;

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
     * @ORM\ManyToMany(targetEntity="AmpVencimento", inversedBy="idFormaPagamento")
     * @ORM\JoinTable(name="amp_forma_pagamento_vencimento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_forma_pagamento", referencedColumnName="id_forma_pagamento")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_vencimento", referencedColumnName="id_vencimento")
     *   }
     * )
     */
    private $idVencimento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idVencimento = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idFormaPagamento
     *
     * @return int
     */
    public function getIdFormaPagamento()
    {
        return $this->idFormaPagamento;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpFormaPagamento
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
     * Set geraMovimentoBancario
     *
     * @param string $geraMovimentoBancario
     *
     * @return AmpFormaPagamento
     */
    public function setGeraMovimentoBancario($geraMovimentoBancario)
    {
        $this->geraMovimentoBancario = $geraMovimentoBancario;

        return $this;
    }

    /**
     * Get geraMovimentoBancario
     *
     * @return string
     */
    public function getGeraMovimentoBancario()
    {
        return $this->geraMovimentoBancario;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpFormaPagamento
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
     * @return AmpFormaPagamento
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
     * @return AmpFormaPagamento
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
     * @return AmpFormaPagamento
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
     * Add idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpFormaPagamento
     */
    public function addIdVencimento(\AmpVencimento $idVencimento)
    {
        $this->idVencimento[] = $idVencimento;

        return $this;
    }

    /**
     * Remove idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdVencimento(\AmpVencimento $idVencimento)
    {
        return $this->idVencimento->removeElement($idVencimento);
    }

    /**
     * Get idVencimento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdVencimento()
    {
        return $this->idVencimento;
    }
}

