<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpSistemaEdiProduto
 *
 * @ORM\Table(name="amp_sistema_edi_produto", uniqueConstraints={@ORM\UniqueConstraint(name="id_entidade_UNIQUE", columns={"id_entidade", "id_produto", "produto_edi"})}, indexes={@ORM\Index(name="fk_id_entidade_idx", columns={"id_entidade"}), @ORM\Index(name="dk_id_produto_idx", columns={"id_produto"}), @ORM\Index(name="fk_id_sistema_edi_idx", columns={"id_sistema_edi"})})
 * @ORM\Entity
 */
class AmpSistemaEdiProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sistema_edi_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSistemaEdiProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="produto_edi", type="string", length=45, nullable=false)
     */
    private $produtoEdi;

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
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;

    /**
     * @var \AmpSistemaEdi
     *
     * @ORM\ManyToOne(targetEntity="AmpSistemaEdi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sistema_edi", referencedColumnName="id_sistema_edi")
     * })
     */
    private $idSistemaEdi;


    /**
     * Get idSistemaEdiProduto
     *
     * @return int
     */
    public function getIdSistemaEdiProduto()
    {
        return $this->idSistemaEdiProduto;
    }

    /**
     * Set produtoEdi
     *
     * @param string $produtoEdi
     *
     * @return AmpSistemaEdiProduto
     */
    public function setProdutoEdi($produtoEdi)
    {
        $this->produtoEdi = $produtoEdi;

        return $this;
    }

    /**
     * Get produtoEdi
     *
     * @return string
     */
    public function getProdutoEdi()
    {
        return $this->produtoEdi;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpSistemaEdiProduto
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
     * @return AmpSistemaEdiProduto
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
     * @return AmpSistemaEdiProduto
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
     * @return AmpSistemaEdiProduto
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
     * @return AmpSistemaEdiProduto
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
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpSistemaEdiProduto
     */
    public function setIdProduto(\AmpProduto $idProduto = null)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get idProduto
     *
     * @return \AmpProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set idSistemaEdi
     *
     * @param \AmpSistemaEdi $idSistemaEdi
     *
     * @return AmpSistemaEdiProduto
     */
    public function setIdSistemaEdi(\AmpSistemaEdi $idSistemaEdi = null)
    {
        $this->idSistemaEdi = $idSistemaEdi;

        return $this;
    }

    /**
     * Get idSistemaEdi
     *
     * @return \AmpSistemaEdi
     */
    public function getIdSistemaEdi()
    {
        return $this->idSistemaEdi;
    }
}

