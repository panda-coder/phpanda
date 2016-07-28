<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTitulo
 *
 * @ORM\Table(name="amp_titulo", uniqueConstraints={@ORM\UniqueConstraint(name="uq_amp_titulo_1", columns={"id_entidade", "documento", "num_parcela", "tipo_movimento"})}, indexes={@ORM\Index(name="fk_amp_titulo_1_idx", columns={"id_entidade"}), @ORM\Index(name="fk_amp_titulo_3_idx", columns={"id_representante_indireto"}), @ORM\Index(name="fk_amp_titulo_2_idx", columns={"id_representante_direto"}), @ORM\Index(name="fk_amp_titulo_4_idx", columns={"id_conta_contabil"}), @ORM\Index(name="fk_amp_titulo_5_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_amp_titulo_6_idx", columns={"id_vencimento"})})
 * @ORM\Entity
 */
class AmpTitulo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_titulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=45, nullable=true)
     */
    private $documento;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_movimento", type="integer", nullable=false)
     */
    private $tipoMovimento;

    /**
     * @var int
     *
     * @ORM\Column(name="situacao", type="integer", nullable=false)
     */
    private $situacao;

    /**
     * @var int
     *
     * @ORM\Column(name="qt_parcelas", type="integer", nullable=false)
     */
    private $qtParcelas;

    /**
     * @var int
     *
     * @ORM\Column(name="num_parcela", type="integer", nullable=false)
     */
    private $numParcela;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_bruto", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $valorBruto;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_baixas", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $valorBaixas;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $saldo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_vencimento", type="datetime", nullable=false)
     */
    private $dataVencimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_liquidacao", type="datetime", nullable=true)
     */
    private $dataLiquidacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_emissao", type="datetime", nullable=false)
     */
    private $dataEmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_juros", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $valorJuros;

    /**
     * @var string
     *
     * @ORM\Column(name="mora_dia", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $moraDia;

    /**
     * @var string
     *
     * @ORM\Column(name="tarifa_bancaria", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $tarifaBancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="historico_contabil", type="string", length=200, nullable=true)
     */
    private $historicoContabil;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=500, nullable=true)
     */
    private $observacao;

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
     * @var \AmpRepresentante
     *
     * @ORM\ManyToOne(targetEntity="AmpRepresentante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_representante_direto", referencedColumnName="id_representante")
     * })
     */
    private $idRepresentanteDireto;

    /**
     * @var \AmpRepresentante
     *
     * @ORM\ManyToOne(targetEntity="AmpRepresentante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_representante_indireto", referencedColumnName="id_representante")
     * })
     */
    private $idRepresentanteIndireto;

    /**
     * @var \AmpContaContabil
     *
     * @ORM\ManyToOne(targetEntity="AmpContaContabil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_contabil", referencedColumnName="id_conta_contabil")
     * })
     */
    private $idContaContabil;

    /**
     * @var \AmpFormaPagamento
     *
     * @ORM\ManyToOne(targetEntity="AmpFormaPagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forma_pagamento", referencedColumnName="id_forma_pagamento")
     * })
     */
    private $idFormaPagamento;

    /**
     * @var \AmpVencimento
     *
     * @ORM\ManyToOne(targetEntity="AmpVencimento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vencimento", referencedColumnName="id_vencimento")
     * })
     */
    private $idVencimento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpNotaFiscal", mappedBy="idTitulo")
     */
    private $idNotaFiscal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpNotaEntrada", inversedBy="idTitulo")
     * @ORM\JoinTable(name="amp_titulo_nota_entrada",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_titulo", referencedColumnName="id_titulo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_nota_entrada", referencedColumnName="id_nota_entrada")
     *   }
     * )
     */
    private $idNotaEntrada;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idNotaFiscal = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idNotaEntrada = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idTitulo
     *
     * @return int
     */
    public function getIdTitulo()
    {
        return $this->idTitulo;
    }

    /**
     * Set documento
     *
     * @param string $documento
     *
     * @return AmpTitulo
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
     * Set tipoMovimento
     *
     * @param int $tipoMovimento
     *
     * @return AmpTitulo
     */
    public function setTipoMovimento($tipoMovimento)
    {
        $this->tipoMovimento = $tipoMovimento;

        return $this;
    }

    /**
     * Get tipoMovimento
     *
     * @return int
     */
    public function getTipoMovimento()
    {
        return $this->tipoMovimento;
    }

    /**
     * Set situacao
     *
     * @param int $situacao
     *
     * @return AmpTitulo
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return int
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set qtParcelas
     *
     * @param int $qtParcelas
     *
     * @return AmpTitulo
     */
    public function setQtParcelas($qtParcelas)
    {
        $this->qtParcelas = $qtParcelas;

        return $this;
    }

    /**
     * Get qtParcelas
     *
     * @return int
     */
    public function getQtParcelas()
    {
        return $this->qtParcelas;
    }

    /**
     * Set numParcela
     *
     * @param int $numParcela
     *
     * @return AmpTitulo
     */
    public function setNumParcela($numParcela)
    {
        $this->numParcela = $numParcela;

        return $this;
    }

    /**
     * Get numParcela
     *
     * @return int
     */
    public function getNumParcela()
    {
        return $this->numParcela;
    }

    /**
     * Set valorBruto
     *
     * @param string $valorBruto
     *
     * @return AmpTitulo
     */
    public function setValorBruto($valorBruto)
    {
        $this->valorBruto = $valorBruto;

        return $this;
    }

    /**
     * Get valorBruto
     *
     * @return string
     */
    public function getValorBruto()
    {
        return $this->valorBruto;
    }

    /**
     * Set valorBaixas
     *
     * @param string $valorBaixas
     *
     * @return AmpTitulo
     */
    public function setValorBaixas($valorBaixas)
    {
        $this->valorBaixas = $valorBaixas;

        return $this;
    }

    /**
     * Get valorBaixas
     *
     * @return string
     */
    public function getValorBaixas()
    {
        return $this->valorBaixas;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     *
     * @return AmpTitulo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set dataVencimento
     *
     * @param \DateTime $dataVencimento
     *
     * @return AmpTitulo
     */
    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;

        return $this;
    }

    /**
     * Get dataVencimento
     *
     * @return \DateTime
     */
    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    /**
     * Set dataLiquidacao
     *
     * @param \DateTime $dataLiquidacao
     *
     * @return AmpTitulo
     */
    public function setDataLiquidacao($dataLiquidacao)
    {
        $this->dataLiquidacao = $dataLiquidacao;

        return $this;
    }

    /**
     * Get dataLiquidacao
     *
     * @return \DateTime
     */
    public function getDataLiquidacao()
    {
        return $this->dataLiquidacao;
    }

    /**
     * Set dataEmissao
     *
     * @param \DateTime $dataEmissao
     *
     * @return AmpTitulo
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;

        return $this;
    }

    /**
     * Get dataEmissao
     *
     * @return \DateTime
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * Set valorJuros
     *
     * @param string $valorJuros
     *
     * @return AmpTitulo
     */
    public function setValorJuros($valorJuros)
    {
        $this->valorJuros = $valorJuros;

        return $this;
    }

    /**
     * Get valorJuros
     *
     * @return string
     */
    public function getValorJuros()
    {
        return $this->valorJuros;
    }

    /**
     * Set moraDia
     *
     * @param string $moraDia
     *
     * @return AmpTitulo
     */
    public function setMoraDia($moraDia)
    {
        $this->moraDia = $moraDia;

        return $this;
    }

    /**
     * Get moraDia
     *
     * @return string
     */
    public function getMoraDia()
    {
        return $this->moraDia;
    }

    /**
     * Set tarifaBancaria
     *
     * @param string $tarifaBancaria
     *
     * @return AmpTitulo
     */
    public function setTarifaBancaria($tarifaBancaria)
    {
        $this->tarifaBancaria = $tarifaBancaria;

        return $this;
    }

    /**
     * Get tarifaBancaria
     *
     * @return string
     */
    public function getTarifaBancaria()
    {
        return $this->tarifaBancaria;
    }

    /**
     * Set historicoContabil
     *
     * @param string $historicoContabil
     *
     * @return AmpTitulo
     */
    public function setHistoricoContabil($historicoContabil)
    {
        $this->historicoContabil = $historicoContabil;

        return $this;
    }

    /**
     * Get historicoContabil
     *
     * @return string
     */
    public function getHistoricoContabil()
    {
        return $this->historicoContabil;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpTitulo
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpTitulo
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
     * @return AmpTitulo
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
     * @return AmpTitulo
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
     * @return AmpTitulo
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
     * @return AmpTitulo
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
     * Set idRepresentanteDireto
     *
     * @param \AmpRepresentante $idRepresentanteDireto
     *
     * @return AmpTitulo
     */
    public function setIdRepresentanteDireto(\AmpRepresentante $idRepresentanteDireto = null)
    {
        $this->idRepresentanteDireto = $idRepresentanteDireto;

        return $this;
    }

    /**
     * Get idRepresentanteDireto
     *
     * @return \AmpRepresentante
     */
    public function getIdRepresentanteDireto()
    {
        return $this->idRepresentanteDireto;
    }

    /**
     * Set idRepresentanteIndireto
     *
     * @param \AmpRepresentante $idRepresentanteIndireto
     *
     * @return AmpTitulo
     */
    public function setIdRepresentanteIndireto(\AmpRepresentante $idRepresentanteIndireto = null)
    {
        $this->idRepresentanteIndireto = $idRepresentanteIndireto;

        return $this;
    }

    /**
     * Get idRepresentanteIndireto
     *
     * @return \AmpRepresentante
     */
    public function getIdRepresentanteIndireto()
    {
        return $this->idRepresentanteIndireto;
    }

    /**
     * Set idContaContabil
     *
     * @param \AmpContaContabil $idContaContabil
     *
     * @return AmpTitulo
     */
    public function setIdContaContabil(\AmpContaContabil $idContaContabil = null)
    {
        $this->idContaContabil = $idContaContabil;

        return $this;
    }

    /**
     * Get idContaContabil
     *
     * @return \AmpContaContabil
     */
    public function getIdContaContabil()
    {
        return $this->idContaContabil;
    }

    /**
     * Set idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpTitulo
     */
    public function setIdFormaPagamento(\AmpFormaPagamento $idFormaPagamento = null)
    {
        $this->idFormaPagamento = $idFormaPagamento;

        return $this;
    }

    /**
     * Get idFormaPagamento
     *
     * @return \AmpFormaPagamento
     */
    public function getIdFormaPagamento()
    {
        return $this->idFormaPagamento;
    }

    /**
     * Set idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpTitulo
     */
    public function setIdVencimento(\AmpVencimento $idVencimento = null)
    {
        $this->idVencimento = $idVencimento;

        return $this;
    }

    /**
     * Get idVencimento
     *
     * @return \AmpVencimento
     */
    public function getIdVencimento()
    {
        return $this->idVencimento;
    }

    /**
     * Add idNotaFiscal
     *
     * @param \AmpNotaFiscal $idNotaFiscal
     *
     * @return AmpTitulo
     */
    public function addIdNotaFiscal(\AmpNotaFiscal $idNotaFiscal)
    {
        $this->idNotaFiscal[] = $idNotaFiscal;

        return $this;
    }

    /**
     * Remove idNotaFiscal
     *
     * @param \AmpNotaFiscal $idNotaFiscal
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdNotaFiscal(\AmpNotaFiscal $idNotaFiscal)
    {
        return $this->idNotaFiscal->removeElement($idNotaFiscal);
    }

    /**
     * Get idNotaFiscal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdNotaFiscal()
    {
        return $this->idNotaFiscal;
    }

    /**
     * Add idNotaEntrada
     *
     * @param \AmpNotaEntrada $idNotaEntrada
     *
     * @return AmpTitulo
     */
    public function addIdNotaEntrada(\AmpNotaEntrada $idNotaEntrada)
    {
        $this->idNotaEntrada[] = $idNotaEntrada;

        return $this;
    }

    /**
     * Remove idNotaEntrada
     *
     * @param \AmpNotaEntrada $idNotaEntrada
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdNotaEntrada(\AmpNotaEntrada $idNotaEntrada)
    {
        return $this->idNotaEntrada->removeElement($idNotaEntrada);
    }

    /**
     * Get idNotaEntrada
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdNotaEntrada()
    {
        return $this->idNotaEntrada;
    }
}

