<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpUnidadeProduto
 *
 * @ORM\Table(name="amp_unidade_produto", indexes={@ORM\Index(name="fk_amp_unidade_produto_1_idx", columns={"id_produto_teste"}), @ORM\Index(name="fk_amp_unidade_produto_2_idx", columns={"id_unidade"})})
 * @ORM\Entity
 */
class AmpUnidadeProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_unidade_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUnidadeProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="apresentacao", type="string", length=45, nullable=true)
     */
    private $apresentacao;

    /**
     * @var string
     *
     * @ORM\Column(name="fator_conversao", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $fatorConversao = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="altura", type="decimal", precision=10, scale=4, nullable=true)
     */    /**
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto_teste", referencedColumnName="id_produto")
     * })
     */
    private $idProdutoTeste;
    private $altura = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="largura", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $largura = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="comprimento", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $comprimento = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

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
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto_teste", referencedColumnName="id_produto")
     * })
     */
    private $idProdutoTeste;

    /**
     * @var \AmpUnidade
     *
     * @ORM\ManyToOne(targetEntity="AmpUnidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidade", referencedColumnName="id_unidade")
     * })
     */
    private $idUnidade;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpProduto", mappedBy="idUnidadeProduto")
     */
    private $idProduto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProduto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idUnidadeProduto
     *
     * @return int
     */
    public function getIdUnidadeProduto()
    {
        return $this->idUnidadeProduto;
    }

    /**
     * Set apresentacao
     *
     * @param string $apresentacao
     *
     * @return AmpUnidadeProduto
     */
    public function setApresentacao($apresentacao)
    {
        $this->apresentacao = $apresentacao;

        return $this;
    }

    /**
     * Get apresentacao
     *
     * @return string
     */
    public function getApresentacao()
    {
        return $this->apresentacao;
    }

    /**
     * Set fatorConversao
     *
     * @param string $fatorConversao
     *
     * @return AmpUnidadeProduto
     */
    public function setFatorConversao($fatorConversao)
    {
        $this->fatorConversao = $fatorConversao;

        return $this;
    }

    /**
     * Get fatorConversao
     *
     * @return string
     */
    public function getFatorConversao()
    {
        return $this->fatorConversao;
    }

    /**
     * Set altura
     *
     * @param string $altura
     *
     * @return AmpUnidadeProduto
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return string
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set largura
     *
     * @param string $largura
     *
     * @return AmpUnidadeProduto
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get largura
     *
     * @return string
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set comprimento
     *
     * @param string $comprimento
     *
     * @return AmpUnidadeProduto
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return string
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpUnidadeProduto
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
     * @return AmpUnidadeProduto
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
     * @return AmpUnidadeProduto
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
     * @return AmpUnidadeProduto
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
     * Set idProdutoTeste
     *
     * @param \AmpProduto $idProdutoTeste
     *
     * @return AmpUnidadeProduto
     */
    public function setIdProdutoTeste(\AmpProduto $idProdutoTeste = null)
    {
        $this->idProdutoTeste = $idProdutoTeste;

        return $this;
    }

    /**
     * Get idProdutoTeste
     *
     * @return \AmpProduto
     */
    public function getIdProdutoTeste()
    {
        return $this->idProdutoTeste;
    }

    /**
     * Set idUnidade
     *
     * @param \AmpUnidade $idUnidade
     *
     * @return AmpUnidadeProduto
     */
    public function setIdUnidade(\AmpUnidade $idUnidade = null)
    {
        $this->idUnidade = $idUnidade;

        return $this;
    }

    /**
     * Get idUnidade
     *
     * @return \AmpUnidade
     */
    public function getIdUnidade()
    {
        return $this->idUnidade;
    }

    /**
     * Add idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpUnidadeProduto
     */
    public function addIdProduto(\AmpProduto $idProduto)
    {
        $this->idProduto[] = $idProduto;

        return $this;
    }

    /**
     * Remove idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdProduto(\AmpProduto $idProduto)
    {
        return $this->idProduto->removeElement($idProduto);
    }

    /**
     * Get idProduto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }
}

