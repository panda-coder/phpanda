<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpHistoricoCusto
 *
 * @ORM\Table(name="amp_historico_custo", uniqueConstraints={@ORM\UniqueConstraint(name="id_historico_custo_UNIQUE", columns={"id_historico_custo"})}, indexes={@ORM\Index(name="fk_amp_historico_custo_1_idx", columns={"id_produto"})})
 * @ORM\Entity
 */
class AmpHistoricoCusto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_historico_custo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistoricoCusto;

    /**
     * @var string
     *
     * @ORM\Column(name="custo_reposicao", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $custoReposicao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_custo_reposicao", type="datetime", nullable=false)
     */
    private $dataCustoReposicao;

    /**
     * @var string
     *
     * @ORM\Column(name="custo_medio", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $custoMedio = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="custo_reposicao_com_imposto", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $custoReposicaoComImposto = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="custo_medio_com_imposto", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $custoMedioComImposto = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_custo_medio", type="datetime", nullable=false)
     */
    private $dataCustoMedio;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=true)
     */
    private $idUsuarioCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
     */
    private $dataCriacao;

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
     * Get idHistoricoCusto
     *
     * @return int
     */
    public function getIdHistoricoCusto()
    {
        return $this->idHistoricoCusto;
    }

    /**
     * Set custoReposicao
     *
     * @param string $custoReposicao
     *
     * @return AmpHistoricoCusto
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
     * Set dataCustoReposicao
     *
     * @param \DateTime $dataCustoReposicao
     *
     * @return AmpHistoricoCusto
     */
    public function setDataCustoReposicao($dataCustoReposicao)
    {
        $this->dataCustoReposicao = $dataCustoReposicao;

        return $this;
    }

    /**
     * Get dataCustoReposicao
     *
     * @return \DateTime
     */
    public function getDataCustoReposicao()
    {
        return $this->dataCustoReposicao;
    }

    /**
     * Set custoMedio
     *
     * @param string $custoMedio
     *
     * @return AmpHistoricoCusto
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
     * @return AmpHistoricoCusto
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
     * @return AmpHistoricoCusto
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
     * Set dataCustoMedio
     *
     * @param \DateTime $dataCustoMedio
     *
     * @return AmpHistoricoCusto
     */
    public function setDataCustoMedio($dataCustoMedio)
    {
        $this->dataCustoMedio = $dataCustoMedio;

        return $this;
    }

    /**
     * Get dataCustoMedio
     *
     * @return \DateTime
     */
    public function getDataCustoMedio()
    {
        return $this->dataCustoMedio;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpHistoricoCusto
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
     * @return AmpHistoricoCusto
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
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpHistoricoCusto
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

