<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProdutoOrigem
 *
 * @ORM\Table(name="amp_produto_origem")
 * @ORM\Entity
 */
class AmpProdutoOrigem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_produto_origem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProdutoOrigem;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_origem", type="string", length=10, nullable=true)
     */
    private $codigoOrigem;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=150, nullable=true)
     */
    private $descricao;

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
     * Get idProdutoOrigem
     *
     * @return int
     */
    public function getIdProdutoOrigem()
    {
        return $this->idProdutoOrigem;
    }

    /**
     * Set codigoOrigem
     *
     * @param string $codigoOrigem
     *
     * @return AmpProdutoOrigem
     */
    public function setCodigoOrigem($codigoOrigem)
    {
        $this->codigoOrigem = $codigoOrigem;

        return $this;
    }

    /**
     * Get codigoOrigem
     *
     * @return string
     */
    public function getCodigoOrigem()
    {
        return $this->codigoOrigem;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpProdutoOrigem
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpProdutoOrigem
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
     * @return AmpProdutoOrigem
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
     * @return AmpProdutoOrigem
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
     * @return AmpProdutoOrigem
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

