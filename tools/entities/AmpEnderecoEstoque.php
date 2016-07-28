<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEnderecoEstoque
 *
 * @ORM\Table(name="amp_endereco_estoque", uniqueConstraints={@ORM\UniqueConstraint(name="id_deposito_UNIQUE", columns={"id_deposito", "endereco"})}, indexes={@ORM\Index(name="fk_amp_endereco_amp_deposito1_idx", columns={"id_deposito"}), @ORM\Index(name="fk_amp_endereco_estoque_1_idx", columns={"id_setor_estoque"})})
 * @ORM\Entity
 */
class AmpEnderecoEstoque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_endereco_estoque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEnderecoEstoque;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=1, nullable=false)
     */
    private $ativo;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=50, nullable=false)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="rua", type="string", length=40, nullable=false)
     */
    private $rua;

    /**
     * @var string
     *
     * @ORM\Column(name="predio", type="string", length=2, nullable=false)
     */
    private $predio;

    /**
     * @var string
     *
     * @ORM\Column(name="andar", type="string", length=2, nullable=false)
     */
    private $andar;

    /**
     * @var string
     *
     * @ORM\Column(name="apartamento", type="string", length=2, nullable=false)
     */
    private $apartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_max", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $pesoMax;

    /**
     * @var string
     *
     * @ORM\Column(name="altura_max", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $alturaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="largura_max", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $larguraMax;

    /**
     * @var string
     *
     * @ORM\Column(name="comprimento_max", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $comprimentoMax;

    /**
     * @var string
     *
     * @ORM\Column(name="picking", type="string", length=1, nullable=false)
     */
    private $picking = 'N';

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
     * @var \AmpDeposito
     *
     * @ORM\ManyToOne(targetEntity="AmpDeposito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_deposito", referencedColumnName="id_deposito")
     * })
     */
    private $idDeposito;

    /**
     * @var \AmpSetorEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpSetorEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_setor_estoque", referencedColumnName="id_setor_estoque")
     * })
     */
    private $idSetorEstoque;


    /**
     * Get idEnderecoEstoque
     *
     * @return int
     */
    public function getIdEnderecoEstoque()
    {
        return $this->idEnderecoEstoque;
    }

    /**
     * Set ativo
     *
     * @param string $ativo
     *
     * @return AmpEnderecoEstoque
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return string
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return AmpEnderecoEstoque
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set rua
     *
     * @param string $rua
     *
     * @return AmpEnderecoEstoque
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get rua
     *
     * @return string
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set predio
     *
     * @param string $predio
     *
     * @return AmpEnderecoEstoque
     */
    public function setPredio($predio)
    {
        $this->predio = $predio;

        return $this;
    }

    /**
     * Get predio
     *
     * @return string
     */
    public function getPredio()
    {
        return $this->predio;
    }

    /**
     * Set andar
     *
     * @param string $andar
     *
     * @return AmpEnderecoEstoque
     */
    public function setAndar($andar)
    {
        $this->andar = $andar;

        return $this;
    }

    /**
     * Get andar
     *
     * @return string
     */
    public function getAndar()
    {
        return $this->andar;
    }

    /**
     * Set apartamento
     *
     * @param string $apartamento
     *
     * @return AmpEnderecoEstoque
     */
    public function setApartamento($apartamento)
    {
        $this->apartamento = $apartamento;

        return $this;
    }

    /**
     * Get apartamento
     *
     * @return string
     */
    public function getApartamento()
    {
        return $this->apartamento;
    }

    /**
     * Set pesoMax
     *
     * @param string $pesoMax
     *
     * @return AmpEnderecoEstoque
     */
    public function setPesoMax($pesoMax)
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }

    /**
     * Get pesoMax
     *
     * @return string
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set alturaMax
     *
     * @param string $alturaMax
     *
     * @return AmpEnderecoEstoque
     */
    public function setAlturaMax($alturaMax)
    {
        $this->alturaMax = $alturaMax;

        return $this;
    }

    /**
     * Get alturaMax
     *
     * @return string
     */
    public function getAlturaMax()
    {
        return $this->alturaMax;
    }

    /**
     * Set larguraMax
     *
     * @param string $larguraMax
     *
     * @return AmpEnderecoEstoque
     */
    public function setLarguraMax($larguraMax)
    {
        $this->larguraMax = $larguraMax;

        return $this;
    }

    /**
     * Get larguraMax
     *
     * @return string
     */
    public function getLarguraMax()
    {
        return $this->larguraMax;
    }

    /**
     * Set comprimentoMax
     *
     * @param string $comprimentoMax
     *
     * @return AmpEnderecoEstoque
     */
    public function setComprimentoMax($comprimentoMax)
    {
        $this->comprimentoMax = $comprimentoMax;

        return $this;
    }

    /**
     * Get comprimentoMax
     *
     * @return string
     */
    public function getComprimentoMax()
    {
        return $this->comprimentoMax;
    }

    /**
     * Set picking
     *
     * @param string $picking
     *
     * @return AmpEnderecoEstoque
     */
    public function setPicking($picking)
    {
        $this->picking = $picking;

        return $this;
    }

    /**
     * Get picking
     *
     * @return string
     */
    public function getPicking()
    {
        return $this->picking;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpEnderecoEstoque
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
     * @return AmpEnderecoEstoque
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
     * @return AmpEnderecoEstoque
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
     * @return AmpEnderecoEstoque
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
     * Set idDeposito
     *
     * @param \AmpDeposito $idDeposito
     *
     * @return AmpEnderecoEstoque
     */
    public function setIdDeposito(\AmpDeposito $idDeposito = null)
    {
        $this->idDeposito = $idDeposito;

        return $this;
    }

    /**
     * Get idDeposito
     *
     * @return \AmpDeposito
     */
    public function getIdDeposito()
    {
        return $this->idDeposito;
    }

    /**
     * Set idSetorEstoque
     *
     * @param \AmpSetorEstoque $idSetorEstoque
     *
     * @return AmpEnderecoEstoque
     */
    public function setIdSetorEstoque(\AmpSetorEstoque $idSetorEstoque = null)
    {
        $this->idSetorEstoque = $idSetorEstoque;

        return $this;
    }

    /**
     * Get idSetorEstoque
     *
     * @return \AmpSetorEstoque
     */
    public function getIdSetorEstoque()
    {
        return $this->idSetorEstoque;
    }
}

