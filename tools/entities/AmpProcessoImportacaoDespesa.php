<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProcessoImportacaoDespesa
 *
 * @ORM\Table(name="amp_processo_importacao_despesa", indexes={@ORM\Index(name="fk_amp_processo_importacao_despesa_importacao_1_idx", columns={"id_processo_importacao"})})
 * @ORM\Entity
 */
class AmpProcessoImportacaoDespesa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_processo_importacao_despesa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProcessoImportacaoDespesa;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="adiantamento_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $adiantamentoValor;

    /**
     * @var string
     *
     * @ORM\Column(name="despesa_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $despesaValor;

    /**
     * @var string
     *
     * @ORM\Column(name="status_aprovado", type="string", length=1, nullable=false)
     */
    private $statusAprovado = 'N';

    /**
     * @var \AmpProcessoImportacao
     *
     * @ORM\ManyToOne(targetEntity="AmpProcessoImportacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_processo_importacao", referencedColumnName="id_processo_importacao")
     * })
     */
    private $idProcessoImportacao;


    /**
     * Get idProcessoImportacaoDespesa
     *
     * @return int
     */
    public function getIdProcessoImportacaoDespesa()
    {
        return $this->idProcessoImportacaoDespesa;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpProcessoImportacaoDespesa
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
     * Set adiantamentoValor
     *
     * @param string $adiantamentoValor
     *
     * @return AmpProcessoImportacaoDespesa
     */
    public function setAdiantamentoValor($adiantamentoValor)
    {
        $this->adiantamentoValor = $adiantamentoValor;

        return $this;
    }

    /**
     * Get adiantamentoValor
     *
     * @return string
     */
    public function getAdiantamentoValor()
    {
        return $this->adiantamentoValor;
    }

    /**
     * Set despesaValor
     *
     * @param string $despesaValor
     *
     * @return AmpProcessoImportacaoDespesa
     */
    public function setDespesaValor($despesaValor)
    {
        $this->despesaValor = $despesaValor;

        return $this;
    }

    /**
     * Get despesaValor
     *
     * @return string
     */
    public function getDespesaValor()
    {
        return $this->despesaValor;
    }

    /**
     * Set statusAprovado
     *
     * @param string $statusAprovado
     *
     * @return AmpProcessoImportacaoDespesa
     */
    public function setStatusAprovado($statusAprovado)
    {
        $this->statusAprovado = $statusAprovado;

        return $this;
    }

    /**
     * Get statusAprovado
     *
     * @return string
     */
    public function getStatusAprovado()
    {
        return $this->statusAprovado;
    }

    /**
     * Set idProcessoImportacao
     *
     * @param \AmpProcessoImportacao $idProcessoImportacao
     *
     * @return AmpProcessoImportacaoDespesa
     */
    public function setIdProcessoImportacao(\AmpProcessoImportacao $idProcessoImportacao = null)
    {
        $this->idProcessoImportacao = $idProcessoImportacao;

        return $this;
    }

    /**
     * Get idProcessoImportacao
     *
     * @return \AmpProcessoImportacao
     */
    public function getIdProcessoImportacao()
    {
        return $this->idProcessoImportacao;
    }
}

