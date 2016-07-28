<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProcessoExportacaoDespesa
 *
 * @ORM\Table(name="amp_processo_exportacao_despesa", indexes={@ORM\Index(name="fk_amp_processo_exportacao_despesa_exportacao_1_idx", columns={"id_processo_exportacao"})})
 * @ORM\Entity
 */
class AmpProcessoExportacaoDespesa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_processo_exportacao_despesa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProcessoExportacaoDespesa;

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
     * @var \AmpProcessoExportacao
     *
     * @ORM\ManyToOne(targetEntity="AmpProcessoExportacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_processo_exportacao", referencedColumnName="id_processo_exportacao")
     * })
     */
    private $idProcessoExportacao;


    /**
     * Get idProcessoExportacaoDespesa
     *
     * @return int
     */
    public function getIdProcessoExportacaoDespesa()
    {
        return $this->idProcessoExportacaoDespesa;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpProcessoExportacaoDespesa
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
     * @return AmpProcessoExportacaoDespesa
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
     * @return AmpProcessoExportacaoDespesa
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
     * @return AmpProcessoExportacaoDespesa
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
     * Set idProcessoExportacao
     *
     * @param \AmpProcessoExportacao $idProcessoExportacao
     *
     * @return AmpProcessoExportacaoDespesa
     */
    public function setIdProcessoExportacao(\AmpProcessoExportacao $idProcessoExportacao = null)
    {
        $this->idProcessoExportacao = $idProcessoExportacao;

        return $this;
    }

    /**
     * Get idProcessoExportacao
     *
     * @return \AmpProcessoExportacao
     */
    public function getIdProcessoExportacao()
    {
        return $this->idProcessoExportacao;
    }
}

