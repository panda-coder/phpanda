<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPoliticaComercial
 *
 * @ORM\Table(name="amp_politica_comercial", uniqueConstraints={@ORM\UniqueConstraint(name="id_grupo_cliente_UNIQUE", columns={"id_grupo_cliente"})}, indexes={@ORM\Index(name="fk_amp_politica_comercial_1_idx", columns={"id_grupo_cliente"}), @ORM\Index(name="fk_amp_politica_comercial_3_idx", columns={"id_tabela_preco"}), @ORM\Index(name="fk_amp_politica_comercial_2_idx", columns={"id_vencimento"}), @ORM\Index(name="fk_amp_politica_comercial_4_idx", columns={"id_forma_pagamento"})})
 * @ORM\Entity
 */
class AmpPoliticaComercial
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_politica_comercial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPoliticaComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=50, nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="desconto", type="decimal", precision=6, scale=4, nullable=true)
     */
    private $desconto;

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
     * @var \AmpGrupoCliente
     *
     * @ORM\ManyToOne(targetEntity="AmpGrupoCliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo_cliente", referencedColumnName="id_grupo_cliente")
     * })
     */
    private $idGrupoCliente;

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
     * @var \AmpTabelaPreco
     *
     * @ORM\ManyToOne(targetEntity="AmpTabelaPreco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tabela_preco", referencedColumnName="id_tabela_preco")
     * })
     */
    private $idTabelaPreco;

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
     * Get idPoliticaComercial
     *
     * @return int
     */
    public function getIdPoliticaComercial()
    {
        return $this->idPoliticaComercial;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpPoliticaComercial
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
     * Set desconto
     *
     * @param string $desconto
     *
     * @return AmpPoliticaComercial
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

        return $this;
    }

    /**
     * Get desconto
     *
     * @return string
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPoliticaComercial
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
     * @return AmpPoliticaComercial
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
     * @return AmpPoliticaComercial
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
     * @return AmpPoliticaComercial
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
     * Set idGrupoCliente
     *
     * @param \AmpGrupoCliente $idGrupoCliente
     *
     * @return AmpPoliticaComercial
     */
    public function setIdGrupoCliente(\AmpGrupoCliente $idGrupoCliente = null)
    {
        $this->idGrupoCliente = $idGrupoCliente;

        return $this;
    }

    /**
     * Get idGrupoCliente
     *
     * @return \AmpGrupoCliente
     */
    public function getIdGrupoCliente()
    {
        return $this->idGrupoCliente;
    }

    /**
     * Set idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpPoliticaComercial
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
     * Set idTabelaPreco
     *
     * @param \AmpTabelaPreco $idTabelaPreco
     *
     * @return AmpPoliticaComercial
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
     * Set idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpPoliticaComercial
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
}

