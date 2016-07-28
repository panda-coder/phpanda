<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpContaInternaMovimentacao
 *
 * @ORM\Table(name="amp_conta_interna_movimentacao", indexes={@ORM\Index(name="fk_amp_conta_interna_movimentacao_1_idx", columns={"id_conta_interna"}), @ORM\Index(name="fk_amp_conta_interna_movimentacao_2_idx", columns={"id_conta_interna_lancamento"})})
 * @ORM\Entity
 */
class AmpContaInternaMovimentacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_interna_movimentacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContaInternaMovimentacao;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=45, nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_movimentacao", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $valorMovimentacao;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo_atual", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $saldoAtual;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo_anterior", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $saldoAnterior;

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
     * @var \AmpContaInterna
     *
     * @ORM\ManyToOne(targetEntity="AmpContaInterna")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_interna", referencedColumnName="id_conta_interna")
     * })
     */
    private $idContaInterna;

    /**
     * @var \AmpContaInternaLancamento
     *
     * @ORM\ManyToOne(targetEntity="AmpContaInternaLancamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_interna_lancamento", referencedColumnName="id_conta_interna_lancamento")
     * })
     */
    private $idContaInternaLancamento;


    /**
     * Get idContaInternaMovimentacao
     *
     * @return int
     */
    public function getIdContaInternaMovimentacao()
    {
        return $this->idContaInternaMovimentacao;
    }

    /**
     * Set documento
     *
     * @param string $documento
     *
     * @return AmpContaInternaMovimentacao
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set valorMovimentacao
     *
     * @param string $valorMovimentacao
     *
     * @return AmpContaInternaMovimentacao
     */
    public function setValorMovimentacao($valorMovimentacao)
    {
        $this->valorMovimentacao = $valorMovimentacao;

        return $this;
    }

    /**
     * Get valorMovimentacao
     *
     * @return string
     */
    public function getValorMovimentacao()
    {
        return $this->valorMovimentacao;
    }

    /**
     * Set saldoAtual
     *
     * @param string $saldoAtual
     *
     * @return AmpContaInternaMovimentacao
     */
    public function setSaldoAtual($saldoAtual)
    {
        $this->saldoAtual = $saldoAtual;

        return $this;
    }

    /**
     * Get saldoAtual
     *
     * @return string
     */
    public function getSaldoAtual()
    {
        return $this->saldoAtual;
    }

    /**
     * Set saldoAnterior
     *
     * @param string $saldoAnterior
     *
     * @return AmpContaInternaMovimentacao
     */
    public function setSaldoAnterior($saldoAnterior)
    {
        $this->saldoAnterior = $saldoAnterior;

        return $this;
    }

    /**
     * Get saldoAnterior
     *
     * @return string
     */
    public function getSaldoAnterior()
    {
        return $this->saldoAnterior;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpContaInternaMovimentacao
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
     * @return AmpContaInternaMovimentacao
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
     * @return AmpContaInternaMovimentacao
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
     * @return AmpContaInternaMovimentacao
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
     * Set idContaInterna
     *
     * @param \AmpContaInterna $idContaInterna
     *
     * @return AmpContaInternaMovimentacao
     */
    public function setIdContaInterna(\AmpContaInterna $idContaInterna = null)
    {
        $this->idContaInterna = $idContaInterna;

        return $this;
    }

    /**
     * Get idContaInterna
     *
     * @return \AmpContaInterna
     */
    public function getIdContaInterna()
    {
        return $this->idContaInterna;
    }

    /**
     * Set idContaInternaLancamento
     *
     * @param \AmpContaInternaLancamento $idContaInternaLancamento
     *
     * @return AmpContaInternaMovimentacao
     */
    public function setIdContaInternaLancamento(\AmpContaInternaLancamento $idContaInternaLancamento = null)
    {
        $this->idContaInternaLancamento = $idContaInternaLancamento;

        return $this;
    }

    /**
     * Get idContaInternaLancamento
     *
     * @return \AmpContaInternaLancamento
     */
    public function getIdContaInternaLancamento()
    {
        return $this->idContaInternaLancamento;
    }
}

