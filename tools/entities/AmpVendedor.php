<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpVendedor
 *
 * @ORM\Table(name="amp_vendedor", indexes={@ORM\Index(name="fk_amp_vendedor_amp_endereco1_idx", columns={"id_endereco"})})
 * @ORM\Entity
 */
class AmpVendedor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vendedor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVendedor;

    /**
     * @var int
     *
     * @ORM\Column(name="id_endereco", type="integer", nullable=false)
     */
    private $idEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var float
     *
     * @ORM\Column(name="comissao", type="float", precision=10, scale=0, nullable=true)
     */
    private $comissao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=false)
     */
    private $idUsuarioAlteracao;

    /**
     * @var string
     *
     * @ORM\Column(name="data_ultima_alteracao", type="string", length=45, nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpEntidade", inversedBy="idVendedor")
     * @ORM\JoinTable(name="amp_vendedor_entidade",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_vendedor", referencedColumnName="id_vendedor")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     *   }
     * )
     */
    private $idEntidade;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEntidade = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idVendedor
     *
     * @return int
     */
    public function getIdVendedor()
    {
        return $this->idVendedor;
    }

    /**
     * Set idEndereco
     *
     * @param int $idEndereco
     *
     * @return AmpVendedor
     */
    public function setIdEndereco($idEndereco)
    {
        $this->idEndereco = $idEndereco;

        return $this;
    }

    /**
     * Get idEndereco
     *
     * @return int
     */
    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpVendedor
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
     * Set comissao
     *
     * @param float $comissao
     *
     * @return AmpVendedor
     */
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }

    /**
     * Get comissao
     *
     * @return float
     */
    public function getComissao()
    {
        return $this->comissao;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpVendedor
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
     * @return AmpVendedor
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
     * @return AmpVendedor
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
     * @param string $dataUltimaAlteracao
     *
     * @return AmpVendedor
     */
    public function setDataUltimaAlteracao($dataUltimaAlteracao)
    {
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;

        return $this;
    }

    /**
     * Get dataUltimaAlteracao
     *
     * @return string
     */
    public function getDataUltimaAlteracao()
    {
        return $this->dataUltimaAlteracao;
    }

    /**
     * Add idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpVendedor
     */
    public function addIdEntidade(\AmpEntidade $idEntidade)
    {
        $this->idEntidade[] = $idEntidade;

        return $this;
    }

    /**
     * Remove idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdEntidade(\AmpEntidade $idEntidade)
    {
        return $this->idEntidade->removeElement($idEntidade);
    }

    /**
     * Get idEntidade
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }
}

