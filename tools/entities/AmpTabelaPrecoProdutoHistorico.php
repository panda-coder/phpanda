<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTabelaPrecoProdutoHistorico
 *
 * @ORM\Table(name="amp_tabela_preco_produto_historico", indexes={@ORM\Index(name="fk_tabela_preco_produto_idx", columns={"id_tabela_preco_produto"}), @ORM\Index(name="fk_tabela_preco_idx", columns={"id_tabela_preco"})})
 * @ORM\Entity
 */
class AmpTabelaPrecoProdutoHistorico
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tabela_preco_produto_historico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTabelaPrecoProdutoHistorico;

    /**
     * @var int
     *
     * @ORM\Column(name="id_tabela_preco_produto", type="integer", nullable=false)
     */
    private $idTabelaPrecoProduto;

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
     * Get idTabelaPrecoProdutoHistorico
     *
     * @return int
     */
    public function getIdTabelaPrecoProdutoHistorico()
    {
        return $this->idTabelaPrecoProdutoHistorico;
    }

    /**
     * Set idTabelaPrecoProduto
     *
     * @param int $idTabelaPrecoProduto
     *
     * @return AmpTabelaPrecoProdutoHistorico
     */
    public function setIdTabelaPrecoProduto($idTabelaPrecoProduto)
    {
        $this->idTabelaPrecoProduto = $idTabelaPrecoProduto;

        return $this;
    }

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
     * Set precoUnitario
     *
     * @param string $precoUnitario
     *
     * @return AmpTabelaPrecoProdutoHistorico
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
     * @return AmpTabelaPrecoProdutoHistorico
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
     * @return AmpTabelaPrecoProdutoHistorico
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
     * @return AmpTabelaPrecoProdutoHistorico
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
     * @return AmpTabelaPrecoProdutoHistorico
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
     * @return AmpTabelaPrecoProdutoHistorico
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
}

