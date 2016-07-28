<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpLog
 *
 * @ORM\Table(name="amp_log")
 * @ORM\Entity
 */
class AmpLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_log", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLog;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var string
     *
     * @ORM\Column(name="modulo", type="string", length=80, nullable=false)
     */
    private $modulo;

    /**
     * @var string
     *
     * @ORM\Column(name="acao", type="string", length=30, nullable=true)
     */
    private $acao;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_botao", type="string", length=50, nullable=true)
     */
    private $nomeBotao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=false)
     */
    private $descricao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_registro", type="integer", nullable=true)
     */
    private $idRegistro;

    /**
     * @var bool
     *
     * @ORM\Column(name="automatico", type="boolean", nullable=false)
     */
    private $automatico = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;


    /**
     * Get idLog
     *
     * @return int
     */
    public function getIdLog()
    {
        return $this->idLog;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpLog
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
     * Set modulo
     *
     * @param string $modulo
     *
     * @return AmpLog
     */
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    /**
     * Get modulo
     *
     * @return string
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Set acao
     *
     * @param string $acao
     *
     * @return AmpLog
     */
    public function setAcao($acao)
    {
        $this->acao = $acao;

        return $this;
    }

    /**
     * Get acao
     *
     * @return string
     */
    public function getAcao()
    {
        return $this->acao;
    }

    /**
     * Set nomeBotao
     *
     * @param string $nomeBotao
     *
     * @return AmpLog
     */
    public function setNomeBotao($nomeBotao)
    {
        $this->nomeBotao = $nomeBotao;

        return $this;
    }

    /**
     * Get nomeBotao
     *
     * @return string
     */
    public function getNomeBotao()
    {
        return $this->nomeBotao;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpLog
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
     * Set idRegistro
     *
     * @param int $idRegistro
     *
     * @return AmpLog
     */
    public function setIdRegistro($idRegistro)
    {
        $this->idRegistro = $idRegistro;

        return $this;
    }

    /**
     * Get idRegistro
     *
     * @return int
     */
    public function getIdRegistro()
    {
        return $this->idRegistro;
    }

    /**
     * Set automatico
     *
     * @param bool $automatico
     *
     * @return AmpLog
     */
    public function setAutomatico($automatico)
    {
        $this->automatico = $automatico;

        return $this;
    }

    /**
     * Get automatico
     *
     * @return bool
     */
    public function getAutomatico()
    {
        return $this->automatico;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpLog
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
}

