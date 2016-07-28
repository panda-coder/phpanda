<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOrdemTransferenciaProducao
 *
 * @ORM\Table(name="amp_ordem_transferencia_producao", indexes={@ORM\Index(name="fk_amp_ordem_transferencia_producao_1_idx", columns={"id_ordem_transferencia"}), @ORM\Index(name="fk_amp_ordem_transferencia_producao_2_idx", columns={"id_ordem_producao"}), @ORM\Index(name="fk_amp_ordem_transferencia_producao_3_idx", columns={"id_produto_producao"}), @ORM\Index(name="fk_amp_ordem_transferencia_producao_4_idx", columns={"id_centro_trabalho_linha"})})
 * @ORM\Entity
 */
class AmpOrdemTransferenciaProducao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_transferencia_producao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemTransferenciaProducao;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_producao", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidadeProducao;

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
     * @var \AmpOrdemTransferencia
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemTransferencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_transferencia", referencedColumnName="id_ordem_transferencia")
     * })
     */
    private $idOrdemTransferencia;

    /**
     * @var \AmpOrdemProducao
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemProducao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_producao", referencedColumnName="id_ordem_producao")
     * })
     */
    private $idOrdemProducao;

    /**
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto_producao", referencedColumnName="id_produto")
     * })
     */
    private $idProdutoProducao;

    /**
     * @var \AmpCentroTrabalhoLinha
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroTrabalhoLinha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_trabalho_linha", referencedColumnName="id_centro_trabalho_linha")
     * })
     */
    private $idCentroTrabalhoLinha;


    /**
     * Get idOrdemTransferenciaProducao
     *
     * @return int
     */
    public function getIdOrdemTransferenciaProducao()
    {
        return $this->idOrdemTransferenciaProducao;
    }

    /**
     * Set quantidadeProducao
     *
     * @param string $quantidadeProducao
     *
     * @return AmpOrdemTransferenciaProducao
     */
    public function setQuantidadeProducao($quantidadeProducao)
    {
        $this->quantidadeProducao = $quantidadeProducao;

        return $this;
    }

    /**
     * Get quantidadeProducao
     *
     * @return string
     */
    public function getQuantidadeProducao()
    {
        return $this->quantidadeProducao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpOrdemTransferenciaProducao
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
     * @return AmpOrdemTransferenciaProducao
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
     * @return AmpOrdemTransferenciaProducao
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
     * @return AmpOrdemTransferenciaProducao
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
     * Set idOrdemTransferencia
     *
     * @param \AmpOrdemTransferencia $idOrdemTransferencia
     *
     * @return AmpOrdemTransferenciaProducao
     */
    public function setIdOrdemTransferencia(\AmpOrdemTransferencia $idOrdemTransferencia = null)
    {
        $this->idOrdemTransferencia = $idOrdemTransferencia;

        return $this;
    }

    /**
     * Get idOrdemTransferencia
     *
     * @return \AmpOrdemTransferencia
     */
    public function getIdOrdemTransferencia()
    {
        return $this->idOrdemTransferencia;
    }

    /**
     * Set idOrdemProducao
     *
     * @param \AmpOrdemProducao $idOrdemProducao
     *
     * @return AmpOrdemTransferenciaProducao
     */
    public function setIdOrdemProducao(\AmpOrdemProducao $idOrdemProducao = null)
    {
        $this->idOrdemProducao = $idOrdemProducao;

        return $this;
    }

    /**
     * Get idOrdemProducao
     *
     * @return \AmpOrdemProducao
     */
    public function getIdOrdemProducao()
    {
        return $this->idOrdemProducao;
    }

    /**
     * Set idProdutoProducao
     *
     * @param \AmpProduto $idProdutoProducao
     *
     * @return AmpOrdemTransferenciaProducao
     */
    public function setIdProdutoProducao(\AmpProduto $idProdutoProducao = null)
    {
        $this->idProdutoProducao = $idProdutoProducao;

        return $this;
    }

    /**
     * Get idProdutoProducao
     *
     * @return \AmpProduto
     */
    public function getIdProdutoProducao()
    {
        return $this->idProdutoProducao;
    }

    /**
     * Set idCentroTrabalhoLinha
     *
     * @param \AmpCentroTrabalhoLinha $idCentroTrabalhoLinha
     *
     * @return AmpOrdemTransferenciaProducao
     */
    public function setIdCentroTrabalhoLinha(\AmpCentroTrabalhoLinha $idCentroTrabalhoLinha = null)
    {
        $this->idCentroTrabalhoLinha = $idCentroTrabalhoLinha;

        return $this;
    }

    /**
     * Get idCentroTrabalhoLinha
     *
     * @return \AmpCentroTrabalhoLinha
     */
    public function getIdCentroTrabalhoLinha()
    {
        return $this->idCentroTrabalhoLinha;
    }
}

