<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpForecastProduto
 *
 * @ORM\Table(name="amp_forecast_produto", indexes={@ORM\Index(name="fk_amp_forecast_produto_1_idx", columns={"id_produto"})})
 * @ORM\Entity
 */
class AmpForecastProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_forecast_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForecastProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_prevista", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadePrevista;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario_previsto", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorUnitarioPrevisto;

    /**
     * @var string
     *
     * @ORM\Column(name="mes", type="string", length=2, nullable=false)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=4, nullable=false)
     */
    private $ano;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

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
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;


    /**
     * Get idForecastProduto
     *
     * @return int
     */
    public function getIdForecastProduto()
    {
        return $this->idForecastProduto;
    }

    /**
     * Set quantidadePrevista
     *
     * @param string $quantidadePrevista
     *
     * @return AmpForecastProduto
     */
    public function setQuantidadePrevista($quantidadePrevista)
    {
        $this->quantidadePrevista = $quantidadePrevista;

        return $this;
    }

    /**
     * Get quantidadePrevista
     *
     * @return string
     */
    public function getQuantidadePrevista()
    {
        return $this->quantidadePrevista;
    }

    /**
     * Set valorUnitarioPrevisto
     *
     * @param string $valorUnitarioPrevisto
     *
     * @return AmpForecastProduto
     */
    public function setValorUnitarioPrevisto($valorUnitarioPrevisto)
    {
        $this->valorUnitarioPrevisto = $valorUnitarioPrevisto;

        return $this;
    }

    /**
     * Get valorUnitarioPrevisto
     *
     * @return string
     */
    public function getValorUnitarioPrevisto()
    {
        return $this->valorUnitarioPrevisto;
    }

    /**
     * Set mes
     *
     * @param string $mes
     *
     * @return AmpForecastProduto
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set ano
     *
     * @param string $ano
     *
     * @return AmpForecastProduto
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return string
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set tipo
     *
     * @param int $tipo
     *
     * @return AmpForecastProduto
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpForecastProduto
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
     * @return AmpForecastProduto
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
     * @return AmpForecastProduto
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
     * @return AmpForecastProduto
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
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpForecastProduto
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

