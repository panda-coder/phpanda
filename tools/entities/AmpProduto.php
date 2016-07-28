<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProduto
 *
 * @ORM\Table(name="amp_produto", uniqueConstraints={@ORM\UniqueConstraint(name="uk_codigo_produto", columns={"codigo_produto"})}, indexes={@ORM\Index(name="fk_produto_familia_idx", columns={"id_familia_produto"}), @ORM\Index(name="fk_amp_produto_1_idx", columns={"id_classificacao_fiscal"}), @ORM\Index(name="fk_amp_produto_2_idx", columns={"id_produto_origem"}), @ORM\Index(name="fk_amp_produto_3_idx", columns={"id_setor_estoque"}), @ORM\Index(name="fk_amp_produto_4_idx", columns={"id_linha_produto"}), @ORM\Index(name="fk_amp_produto_5_idx", columns={"id_centro_trabalho"})})
 * @ORM\Entity
 */
class AmpProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_unidade", type="integer", nullable=false)
     */
    private $idUnidade;

    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_contabil", type="integer", nullable=true)
     */
    private $idContaContabil;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_produto", type="integer", nullable=true)
     */
    private $tipoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_produto", type="string", length=30, nullable=false)
     */
    private $codigoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_produto", type="string", length=45, nullable=true)
     */
    private $nomeProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="aplicacao", type="text", length=65535, nullable=true)
     */
    private $aplicacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="fantasma", type="string", length=1, nullable=true)
     */
    private $fantasma;

    /**
     * @var string
     *
     * @ORM\Column(name="produtivo", type="string", length=1, nullable=true)
     */
    private $produtivo;

    /**
     * @var string
     *
     * @ORM\Column(name="estrutura", type="string", length=1, nullable=true)
     */
    private $estrutura;

    /**
     * @var string
     *
     * @ORM\Column(name="servico", type="string", length=1, nullable=false)
     */
    private $servico;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=13, nullable=true)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_minima_picking", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeMinimaPicking;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_abastecimento", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeAbastecimento;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_liquido", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $pesoLiquido;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_bruto", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $pesoBruto;

    /**
     * @var string
     *
     * @ORM\Column(name="lastro", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $lastro;

    /**
     * @var string
     *
     * @ORM\Column(name="camadas", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $camadas;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_pallet", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidadePallet;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_estoque_seguranca", type="integer", nullable=true)
     */
    private $tipoEstoqueSeguranca;

    /**
     * @var string
     *
     * @ORM\Column(name="estoque_seguranca", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $estoqueSeguranca;

    /**
     * @var string
     *
     * @ORM\Column(name="custo_reposicao", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $custoReposicao = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="custo_medio", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $custoMedio = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="custo_reposicao_com_imposto", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $custoReposicaoComImposto = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="custo_medio_com_imposto", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $custoMedioComImposto = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="tranducao_registro", type="text", nullable=true)
     */
    private $tranducaoRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=1, nullable=false)
     */
    private $ativo = 'S';

    /**
     * @var string
     *
     * @ORM\Column(name="desenho", type="string", length=100, nullable=true)
     */
    private $desenho;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_revisao_desenho", type="datetime", nullable=true)
     */
    private $dataRevisaoDesenho;

    /**
     * @var string
     *
     * @ORM\Column(name="revisao_desenho", type="string", length=45, nullable=true)
     */
    private $revisaoDesenho;

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
     * @var \AmpClassificacaoFiscal
     *
     * @ORM\ManyToOne(targetEntity="AmpClassificacaoFiscal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_classificacao_fiscal", referencedColumnName="id_classificacao_fiscal")
     * })
     */
    private $idClassificacaoFiscal;

    /**
     * @var \AmpProdutoOrigem
     *
     * @ORM\ManyToOne(targetEntity="AmpProdutoOrigem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto_origem", referencedColumnName="id_produto_origem")
     * })
     */
    private $idProdutoOrigem;

    /**
     * @var \AmpSetorEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpSetorEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_setor_estoque", referencedColumnName="id_setor_estoque")
     * })
     */
    private $idSetorEstoque;

    /**
     * @var \AmpLinhaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpLinhaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_linha_produto", referencedColumnName="id_linha_produto")
     * })
     */
    private $idLinhaProduto;

    /**
     * @var \AmpCentroTrabalho
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroTrabalho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_trabalho", referencedColumnName="id_centro_trabalho")
     * })
     */
    private $idCentroTrabalho;

    /**
     * @var \AmpFamiliaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpFamiliaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_familia_produto", referencedColumnName="id_familia_produto")
     * })
     */
    private $idFamiliaProduto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpNegociacao", mappedBy="idProduto")
     */
    private $idNegociacao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpUnidadeProduto", inversedBy="idProduto")
     * @ORM\JoinTable(name="amp_produto_unidade_produto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_unidade_produto", referencedColumnName="id_unidade_produto")
     *   }
     * )
     */
    private $idUnidadeProduto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idNegociacao = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idUnidadeProduto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idProduto
     *
     * @return int
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set idUnidade
     *
     * @param int $idUnidade
     *
     * @return AmpProduto
     */
    public function setIdUnidade($idUnidade)
    {
        $this->idUnidade = $idUnidade;

        return $this;
    }

    /**
     * Get idUnidade
     *
     * @return int
     */
    public function getIdUnidade()
    {
        return $this->idUnidade;
    }

    /**
     * Set idContaContabil
     *
     * @param int $idContaContabil
     *
     * @return AmpProduto
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
     * Set tipoProduto
     *
     * @param int $tipoProduto
     *
     * @return AmpProduto
     */
    public function setTipoProduto($tipoProduto)
    {
        $this->tipoProduto = $tipoProduto;

        return $this;
    }

    /**
     * Get tipoProduto
     *
     * @return int
     */
    public function getTipoProduto()
    {
        return $this->tipoProduto;
    }

    /**
     * Set codigoProduto
     *
     * @param string $codigoProduto
     *
     * @return AmpProduto
     */
    public function setCodigoProduto($codigoProduto)
    {
        $this->codigoProduto = $codigoProduto;

        return $this;
    }

    /**
     * Get codigoProduto
     *
     * @return string
     */
    public function getCodigoProduto()
    {
        return $this->codigoProduto;
    }

    /**
     * Set nomeProduto
     *
     * @param string $nomeProduto
     *
     * @return AmpProduto
     */
    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;

        return $this;
    }

    /**
     * Get nomeProduto
     *
     * @return string
     */
    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpProduto
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
     * Set aplicacao
     *
     * @param string $aplicacao
     *
     * @return AmpProduto
     */
    public function setAplicacao($aplicacao)
    {
        $this->aplicacao = $aplicacao;

        return $this;
    }

    /**
     * Get aplicacao
     *
     * @return string
     */
    public function getAplicacao()
    {
        return $this->aplicacao;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpProduto
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set fantasma
     *
     * @param string $fantasma
     *
     * @return AmpProduto
     */
    public function setFantasma($fantasma)
    {
        $this->fantasma = $fantasma;

        return $this;
    }

    /**
     * Get fantasma
     *
     * @return string
     */
    public function getFantasma()
    {
        return $this->fantasma;
    }

    /**
     * Set produtivo
     *
     * @param string $produtivo
     *
     * @return AmpProduto
     */
    public function setProdutivo($produtivo)
    {
        $this->produtivo = $produtivo;

        return $this;
    }

    /**
     * Get produtivo
     *
     * @return string
     */
    public function getProdutivo()
    {
        return $this->produtivo;
    }

    /**
     * Set estrutura
     *
     * @param string $estrutura
     *
     * @return AmpProduto
     */
    public function setEstrutura($estrutura)
    {
        $this->estrutura = $estrutura;

        return $this;
    }

    /**
     * Get estrutura
     *
     * @return string
     */
    public function getEstrutura()
    {
        return $this->estrutura;
    }

    /**
     * Set servico
     *
     * @param string $servico
     *
     * @return AmpProduto
     */
    public function setServico($servico)
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Get servico
     *
     * @return string
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return AmpProduto
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set quantidadeMinimaPicking
     *
     * @param string $quantidadeMinimaPicking
     *
     * @return AmpProduto
     */
    public function setQuantidadeMinimaPicking($quantidadeMinimaPicking)
    {
        $this->quantidadeMinimaPicking = $quantidadeMinimaPicking;

        return $this;
    }

    /**
     * Get quantidadeMinimaPicking
     *
     * @return string
     */
    public function getQuantidadeMinimaPicking()
    {
        return $this->quantidadeMinimaPicking;
    }

    /**
     * Set quantidadeAbastecimento
     *
     * @param string $quantidadeAbastecimento
     *
     * @return AmpProduto
     */
    public function setQuantidadeAbastecimento($quantidadeAbastecimento)
    {
        $this->quantidadeAbastecimento = $quantidadeAbastecimento;

        return $this;
    }

    /**
     * Get quantidadeAbastecimento
     *
     * @return string
     */
    public function getQuantidadeAbastecimento()
    {
        return $this->quantidadeAbastecimento;
    }

    /**
     * Set pesoLiquido
     *
     * @param string $pesoLiquido
     *
     * @return AmpProduto
     */
    public function setPesoLiquido($pesoLiquido)
    {
        $this->pesoLiquido = $pesoLiquido;

        return $this;
    }

    /**
     * Get pesoLiquido
     *
     * @return string
     */
    public function getPesoLiquido()
    {
        return $this->pesoLiquido;
    }

    /**
     * Set pesoBruto
     *
     * @param string $pesoBruto
     *
     * @return AmpProduto
     */
    public function setPesoBruto($pesoBruto)
    {
        $this->pesoBruto = $pesoBruto;

        return $this;
    }

    /**
     * Get pesoBruto
     *
     * @return string
     */
    public function getPesoBruto()
    {
        return $this->pesoBruto;
    }

    /**
     * Set lastro
     *
     * @param string $lastro
     *
     * @return AmpProduto
     */
    public function setLastro($lastro)
    {
        $this->lastro = $lastro;

        return $this;
    }

    /**
     * Get lastro
     *
     * @return string
     */
    public function getLastro()
    {
        return $this->lastro;
    }

    /**
     * Set camadas
     *
     * @param string $camadas
     *
     * @return AmpProduto
     */
    public function setCamadas($camadas)
    {
        $this->camadas = $camadas;

        return $this;
    }

    /**
     * Get camadas
     *
     * @return string
     */
    public function getCamadas()
    {
        return $this->camadas;
    }

    /**
     * Set quantidadePallet
     *
     * @param string $quantidadePallet
     *
     * @return AmpProduto
     */
    public function setQuantidadePallet($quantidadePallet)
    {
        $this->quantidadePallet = $quantidadePallet;

        return $this;
    }

    /**
     * Get quantidadePallet
     *
     * @return string
     */
    public function getQuantidadePallet()
    {
        return $this->quantidadePallet;
    }

    /**
     * Set tipoEstoqueSeguranca
     *
     * @param int $tipoEstoqueSeguranca
     *
     * @return AmpProduto
     */
    public function setTipoEstoqueSeguranca($tipoEstoqueSeguranca)
    {
        $this->tipoEstoqueSeguranca = $tipoEstoqueSeguranca;

        return $this;
    }

    /**
     * Get tipoEstoqueSeguranca
     *
     * @return int
     */
    public function getTipoEstoqueSeguranca()
    {
        return $this->tipoEstoqueSeguranca;
    }

    /**
     * Set estoqueSeguranca
     *
     * @param string $estoqueSeguranca
     *
     * @return AmpProduto
     */
    public function setEstoqueSeguranca($estoqueSeguranca)
    {
        $this->estoqueSeguranca = $estoqueSeguranca;

        return $this;
    }

    /**
     * Get estoqueSeguranca
     *
     * @return string
     */
    public function getEstoqueSeguranca()
    {
        return $this->estoqueSeguranca;
    }

    /**
     * Set custoReposicao
     *
     * @param string $custoReposicao
     *
     * @return AmpProduto
     */
    public function setCustoReposicao($custoReposicao)
    {
        $this->custoReposicao = $custoReposicao;

        return $this;
    }

    /**
     * Get custoReposicao
     *
     * @return string
     */
    public function getCustoReposicao()
    {
        return $this->custoReposicao;
    }

    /**
     * Set custoMedio
     *
     * @param string $custoMedio
     *
     * @return AmpProduto
     */
    public function setCustoMedio($custoMedio)
    {
        $this->custoMedio = $custoMedio;

        return $this;
    }

    /**
     * Get custoMedio
     *
     * @return string
     */
    public function getCustoMedio()
    {
        return $this->custoMedio;
    }

    /**
     * Set custoReposicaoComImposto
     *
     * @param string $custoReposicaoComImposto
     *
     * @return AmpProduto
     */
    public function setCustoReposicaoComImposto($custoReposicaoComImposto)
    {
        $this->custoReposicaoComImposto = $custoReposicaoComImposto;

        return $this;
    }

    /**
     * Get custoReposicaoComImposto
     *
     * @return string
     */
    public function getCustoReposicaoComImposto()
    {
        return $this->custoReposicaoComImposto;
    }

    /**
     * Set custoMedioComImposto
     *
     * @param string $custoMedioComImposto
     *
     * @return AmpProduto
     */
    public function setCustoMedioComImposto($custoMedioComImposto)
    {
        $this->custoMedioComImposto = $custoMedioComImposto;

        return $this;
    }

    /**
     * Get custoMedioComImposto
     *
     * @return string
     */
    public function getCustoMedioComImposto()
    {
        return $this->custoMedioComImposto;
    }

    /**
     * Set tranducaoRegistro
     *
     * @param string $tranducaoRegistro
     *
     * @return AmpProduto
     */
    public function setTranducaoRegistro($tranducaoRegistro)
    {
        $this->tranducaoRegistro = $tranducaoRegistro;

        return $this;
    }

    /**
     * Get tranducaoRegistro
     *
     * @return string
     */
    public function getTranducaoRegistro()
    {
        return $this->tranducaoRegistro;
    }

    /**
     * Set ativo
     *
     * @param string $ativo
     *
     * @return AmpProduto
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return string
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set desenho
     *
     * @param string $desenho
     *
     * @return AmpProduto
     */
    public function setDesenho($desenho)
    {
        $this->desenho = $desenho;

        return $this;
    }

    /**
     * Get desenho
     *
     * @return string
     */
    public function getDesenho()
    {
        return $this->desenho;
    }

    /**
     * Set dataRevisaoDesenho
     *
     * @param \DateTime $dataRevisaoDesenho
     *
     * @return AmpProduto
     */
    public function setDataRevisaoDesenho($dataRevisaoDesenho)
    {
        $this->dataRevisaoDesenho = $dataRevisaoDesenho;

        return $this;
    }

    /**
     * Get dataRevisaoDesenho
     *
     * @return \DateTime
     */
    public function getDataRevisaoDesenho()
    {
        return $this->dataRevisaoDesenho;
    }

    /**
     * Set revisaoDesenho
     *
     * @param string $revisaoDesenho
     *
     * @return AmpProduto
     */
    public function setRevisaoDesenho($revisaoDesenho)
    {
        $this->revisaoDesenho = $revisaoDesenho;

        return $this;
    }

    /**
     * Get revisaoDesenho
     *
     * @return string
     */
    public function getRevisaoDesenho()
    {
        return $this->revisaoDesenho;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpProduto
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
     * @return AmpProduto
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
     * @return AmpProduto
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
     * @return AmpProduto
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
     * Set idClassificacaoFiscal
     *
     * @param \AmpClassificacaoFiscal $idClassificacaoFiscal
     *
     * @return AmpProduto
     */
    public function setIdClassificacaoFiscal(\AmpClassificacaoFiscal $idClassificacaoFiscal = null)
    {
        $this->idClassificacaoFiscal = $idClassificacaoFiscal;

        return $this;
    }

    /**
     * Get idClassificacaoFiscal
     *
     * @return \AmpClassificacaoFiscal
     */
    public function getIdClassificacaoFiscal()
    {
        return $this->idClassificacaoFiscal;
    }

    /**
     * Set idProdutoOrigem
     *
     * @param \AmpProdutoOrigem $idProdutoOrigem
     *
     * @return AmpProduto
     */
    public function setIdProdutoOrigem(\AmpProdutoOrigem $idProdutoOrigem = null)
    {
        $this->idProdutoOrigem = $idProdutoOrigem;

        return $this;
    }

    /**
     * Get idProdutoOrigem
     *
     * @return \AmpProdutoOrigem
     */
    public function getIdProdutoOrigem()
    {
        return $this->idProdutoOrigem;
    }

    /**
     * Set idSetorEstoque
     *
     * @param \AmpSetorEstoque $idSetorEstoque
     *
     * @return AmpProduto
     */
    public function setIdSetorEstoque(\AmpSetorEstoque $idSetorEstoque = null)
    {
        $this->idSetorEstoque = $idSetorEstoque;

        return $this;
    }

    /**
     * Get idSetorEstoque
     *
     * @return \AmpSetorEstoque
     */
    public function getIdSetorEstoque()
    {
        return $this->idSetorEstoque;
    }

    /**
     * Set idLinhaProduto
     *
     * @param \AmpLinhaProduto $idLinhaProduto
     *
     * @return AmpProduto
     */
    public function setIdLinhaProduto(\AmpLinhaProduto $idLinhaProduto = null)
    {
        $this->idLinhaProduto = $idLinhaProduto;

        return $this;
    }

    /**
     * Get idLinhaProduto
     *
     * @return \AmpLinhaProduto
     */
    public function getIdLinhaProduto()
    {
        return $this->idLinhaProduto;
    }

    /**
     * Set idCentroTrabalho
     *
     * @param \AmpCentroTrabalho $idCentroTrabalho
     *
     * @return AmpProduto
     */
    public function setIdCentroTrabalho(\AmpCentroTrabalho $idCentroTrabalho = null)
    {
        $this->idCentroTrabalho = $idCentroTrabalho;

        return $this;
    }

    /**
     * Get idCentroTrabalho
     *
     * @return \AmpCentroTrabalho
     */
    public function getIdCentroTrabalho()
    {
        return $this->idCentroTrabalho;
    }

    /**
     * Set idFamiliaProduto
     *
     * @param \AmpFamiliaProduto $idFamiliaProduto
     *
     * @return AmpProduto
     */
    public function setIdFamiliaProduto(\AmpFamiliaProduto $idFamiliaProduto = null)
    {
        $this->idFamiliaProduto = $idFamiliaProduto;

        return $this;
    }

    /**
     * Get idFamiliaProduto
     *
     * @return \AmpFamiliaProduto
     */
    public function getIdFamiliaProduto()
    {
        return $this->idFamiliaProduto;
    }

    /**
     * Add idNegociacao
     *
     * @param \AmpNegociacao $idNegociacao
     *
     * @return AmpProduto
     */
    public function addIdNegociacao(\AmpNegociacao $idNegociacao)
    {
        $this->idNegociacao[] = $idNegociacao;

        return $this;
    }

    /**
     * Remove idNegociacao
     *
     * @param \AmpNegociacao $idNegociacao
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdNegociacao(\AmpNegociacao $idNegociacao)
    {
        return $this->idNegociacao->removeElement($idNegociacao);
    }

    /**
     * Get idNegociacao
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdNegociacao()
    {
        return $this->idNegociacao;
    }

    /**
     * Add idUnidadeProduto
     *
     * @param \AmpUnidadeProduto $idUnidadeProduto
     *
     * @return AmpProduto
     */
    public function addIdUnidadeProduto(\AmpUnidadeProduto $idUnidadeProduto)
    {
        $this->idUnidadeProduto[] = $idUnidadeProduto;

        return $this;
    }

    /**
     * Remove idUnidadeProduto
     *
     * @param \AmpUnidadeProduto $idUnidadeProduto
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdUnidadeProduto(\AmpUnidadeProduto $idUnidadeProduto)
    {
        return $this->idUnidadeProduto->removeElement($idUnidadeProduto);
    }

    /**
     * Get idUnidadeProduto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUnidadeProduto()
    {
        return $this->idUnidadeProduto;
    }
}

