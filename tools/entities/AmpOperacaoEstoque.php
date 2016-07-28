<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOperacaoEstoque
 *
 * @ORM\Table(name="amp_operacao_estoque", indexes={@ORM\Index(name="fk_amp_operacao_estoque_amp_deposito1_idx", columns={"id_deposito_entrada"}), @ORM\Index(name="fk_amp_operacao_estoque_amp_deposito2_idx", columns={"id_deposito_saida"})})
 * @ORM\Entity
 */
class AmpOperacaoEstoque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_operacao_estoque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOperacaoEstoque;

    /**
     * @var int
     *
     * @ORM\Column(name="id_deposito_entrada", type="integer", nullable=false)
     */
    private $idDepositoEntrada = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_deposito_saida", type="integer", nullable=false)
     */
    private $idDepositoSaida = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=90, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="operacao", type="string", length=1, nullable=false)
     */
    private $operacao = '0';

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
     * Get idOperacaoEstoque
     *
     * @return int
     */
    public function getIdOperacaoEstoque()
    {
        return $this->idOperacaoEstoque;
    }

    /**
     * Set idDepositoEntrada
     *
     * @param int $idDepositoEntrada
     *
     * @return AmpOperacaoEstoque
     */
    public function setIdDepositoEntrada($idDepositoEntrada)
    {
        $this->idDepositoEntrada = $idDepositoEntrada;

        return $this;
    }

    /**
     * Get idDepositoEntrada
     *
     * @return int
     */
    public function getIdDepositoEntrada()
    {
        return $this->idDepositoEntrada;
    }

    /**
     * Set idDepositoSaida
     *
     * @param int $idDepositoSaida
     *
     * @return AmpOperacaoEstoque
     */
    public function setIdDepositoSaida($idDepositoSaida)
    {
        $this->idDepositoSaida = $idDepositoSaida;

        return $this;
    }

    /**
     * Get idDepositoSaida
     *
     * @return int
     */
    public function getIdDepositoSaida()
    {
        return $this->idDepositoSaida;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpOperacaoEstoque
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
     * Set operacao
     *
     * @param string $operacao
     *
     * @return AmpOperacaoEstoque
     */
    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;

        return $this;
    }

    /**
     * Get operacao
     *
     * @return string
     */
    public function getOperacao()
    {
        return $this->operacao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpOperacaoEstoque
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
     * @return AmpOperacaoEstoque
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
     * @return AmpOperacaoEstoque
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
     * @return AmpOperacaoEstoque
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

