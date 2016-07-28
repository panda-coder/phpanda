<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpSolicitacaoPagamento
 *
 * @ORM\Table(name="amp_solicitacao_pagamento")
 * @ORM\Entity
 */
class AmpSolicitacaoPagamento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_solicitacao_pagamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolicitacaoPagamento;

    /**
     * @var int
     *
     * @ORM\Column(name="id_entidade", type="integer", nullable=false)
     */
    private $idEntidade;

    /**
     * @var int
     *
     * @ORM\Column(name="id_forma_pagamento", type="integer", nullable=false)
     */
    private $idFormaPagamento;

    /**
     * @var int
     *
     * @ORM\Column(name="id_vencimento", type="integer", nullable=false)
     */
    private $idVencimento;

    /**
     * @var int
     *
     * @ORM\Column(name="id_conta_contabil", type="integer", nullable=false)
     */
    private $idContaContabil;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_base", type="datetime", nullable=false)
     */
    private $dataBase;

    /**
     * @var int
     *
     * @ORM\Column(name="situacao", type="integer", nullable=false)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=50, nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_bruto", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $valorBruto;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_lancamento", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeLancamento;

    /**
     * @var string
     *
     * @ORM\Column(name="repete_lancamento", type="string", length=1, nullable=false)
     */
    private $repeteLancamento;

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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;


    /**
     * Get idSolicitacaoPagamento
     *
     * @return int
     */
    public function getIdSolicitacaoPagamento()
    {
        return $this->idSolicitacaoPagamento;
    }

    /**
     * Set idEntidade
     *
     * @param int $idEntidade
     *
     * @return AmpSolicitacaoPagamento
     */
    public function setIdEntidade($idEntidade)
    {
        $this->idEntidade = $idEntidade;

        return $this;
    }

    /**
     * Get idEntidade
     *
     * @return int
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }

    /**
     * Set idFormaPagamento
     *
     * @param int $idFormaPagamento
     *
     * @return AmpSolicitacaoPagamento
     */
    public function setIdFormaPagamento($idFormaPagamento)
    {
        $this->idFormaPagamento = $idFormaPagamento;

        return $this;
    }

    /**
     * Get idFormaPagamento
     *
     * @return int
     */
    public function getIdFormaPagamento()
    {
        return $this->idFormaPagamento;
    }

    /**
     * Set idVencimento
     *
     * @param int $idVencimento
     *
     * @return AmpSolicitacaoPagamento
     */
    public function setIdVencimento($idVencimento)
    {
        $this->idVencimento = $idVencimento;

        return $this;
    }

    /**
     * Get idVencimento
     *
     * @return int
     */
    public function getIdVencimento()
    {
        return $this->idVencimento;
    }

    /**
     * Set idContaContabil
     *
     * @param int $idContaContabil
     *
     * @return AmpSolicitacaoPagamento
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
     * Set dataBase
     *
     * @param \DateTime $dataBase
     *
     * @return AmpSolicitacaoPagamento
     */
    public function setDataBase($dataBase)
    {
        $this->dataBase = $dataBase;

        return $this;
    }

    /**
     * Get dataBase
     *
     * @return \DateTime
     */
    public function getDataBase()
    {
        return $this->dataBase;
    }

    /**
     * Set situacao
     *
     * @param int $situacao
     *
     * @return AmpSolicitacaoPagamento
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
     * Set documento
     *
     * @param string $documento
     *
     * @return AmpSolicitacaoPagamento
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
     * Set valorBruto
     *
     * @param string $valorBruto
     *
     * @return AmpSolicitacaoPagamento
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
     * Set quantidadeLancamento
     *
     * @param string $quantidadeLancamento
     *
     * @return AmpSolicitacaoPagamento
     */
    public function setQuantidadeLancamento($quantidadeLancamento)
    {
        $this->quantidadeLancamento = $quantidadeLancamento;

        return $this;
    }

    /**
     * Get quantidadeLancamento
     *
     * @return string
     */
    public function getQuantidadeLancamento()
    {
        return $this->quantidadeLancamento;
    }

    /**
     * Set repeteLancamento
     *
     * @param string $repeteLancamento
     *
     * @return AmpSolicitacaoPagamento
     */
    public function setRepeteLancamento($repeteLancamento)
    {
        $this->repeteLancamento = $repeteLancamento;

        return $this;
    }

    /**
     * Get repeteLancamento
     *
     * @return string
     */
    public function getRepeteLancamento()
    {
        return $this->repeteLancamento;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpSolicitacaoPagamento
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
     * @return AmpSolicitacaoPagamento
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
     * @return AmpSolicitacaoPagamento
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
     * @return AmpSolicitacaoPagamento
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
     * @return AmpSolicitacaoPagamento
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
}

