<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTabelaPrecoProduto
 *
 * @ORM\Table(name="amp_tabela_preco_produto", uniqueConstraints={@ORM\UniqueConstraint(name="uq_tabela_preco_produto", columns={"id_tabela_preco", "id_produto"})}, indexes={@ORM\Index(name="fk_amp_tabela_preco_produto_2_idx", columns={"id_produto"}), @ORM\Index(name="IDX_95874F5C9F9CDDF1", columns={"id_tabela_preco"})})
 * @ORM\Entity
 */
class AmpTabelaPrecoProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tabela_preco_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTabelaPrecoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_minimo", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $valorMinimo;

    /**
     * @var string
     *
     * @ORM\Column(name="preco_unitario", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $precoUnitario;

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
     * @var \AmpTabelaPreco
     *
     * @ORM\ManyToOne(targetEntity="AmpTabelaPreco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tabela_preco", referencedColumnName="id_tabela_preco")
     * })
     */
    private $idTabelaPreco;

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
     * Get idTabelaPrecoProduto
     *
     * @return int
     */
    public function getIdTabelaPrecoProduto()
    {
        return $this->idTabelaPrecoProduto;
    }

    /**
     * Set valorMinimo
     *
     * @param string $valorMinimo
     *
     * @return AmpTabelaPrecoProduto
     */
    public function setValorMinimo($valorMinimo)
    {
        $this->valorMinimo = $valorMinimo;

        return $this;
    }

    /**
     * Get valorMinimo
     *
     * @return string
     */
    public function getValorMinimo()
    {
        return $this->valorMinimo;
    }

    /**
     * Set precoUnitario
     *
     * @param string $precoUnitario
     *
     * @return AmpTabelaPrecoProduto
     */
    public function setPrecoUnitario($precoUnitario)
    {
        $this->precoUnitario = $precoUnitario;

        return $this;
    }

    /**
     * Get precoUnitario
     *
     * @return string
     */
    public function getPrecoUnitario()
    {
        return $this->precoUnitario;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpTabelaPrecoProduto
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
     * @return AmpTabelaPrecoProduto
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
     * @return AmpTabelaPrecoProduto
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
     * @return AmpTabelaPrecoProduto
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
     * Set idTabelaPreco
     *
     * @param \AmpTabelaPreco $idTabelaPreco
     *
     * @return AmpTabelaPrecoProduto
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
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpTabelaPrecoProduto
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
}

