<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpAlerta
 *
 * @ORM\Table(name="amp_alerta", indexes={@ORM\Index(name="index2", columns={"id_usuario", "tipo_alerta"})})
 * @ORM\Entity
 */
class AmpAlerta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_alerta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlerta;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_alerta", type="integer", nullable=false)
     */
    private $tipoAlerta;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudo", type="text", length=65535, nullable=false)
     */
    private $conteudo;

    /**
     * @var string
     *
     * @ORM\Column(name="lido", type="string", length=1, nullable=false)
     */
    private $lido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_leitura", type="datetime", nullable=true)
     */
    private $dataLeitura;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=true)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_alteracao", type="datetime", nullable=false)
     */
    private $dataAlteracao;


    /**
     * Get idAlerta
     *
     * @return int
     */
    public function getIdAlerta()
    {
        return $this->idAlerta;
    }

    /**
     * Set idUsuario
     *
     * @param int $idUsuario
     *
     * @return AmpAlerta
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set tipoAlerta
     *
     * @param int $tipoAlerta
     *
     * @return AmpAlerta
     */
    public function setTipoAlerta($tipoAlerta)
    {
        $this->tipoAlerta = $tipoAlerta;

        return $this;
    }

    /**
     * Get tipoAlerta
     *
     * @return int
     */
    public function getTipoAlerta()
    {
        return $this->tipoAlerta;
    }

    /**
     * Set conteudo
     *
     * @param string $conteudo
     *
     * @return AmpAlerta
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Get conteudo
     *
     * @return string
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set lido
     *
     * @param string $lido
     *
     * @return AmpAlerta
     */
    public function setLido($lido)
    {
        $this->lido = $lido;

        return $this;
    }

    /**
     * Get lido
     *
     * @return string
     */
    public function getLido()
    {
        return $this->lido;
    }

    /**
     * Set dataLeitura
     *
     * @param \DateTime $dataLeitura
     *
     * @return AmpAlerta
     */
    public function setDataLeitura($dataLeitura)
    {
        $this->dataLeitura = $dataLeitura;

        return $this;
    }

    /**
     * Get dataLeitura
     *
     * @return \DateTime
     */
    public function getDataLeitura()
    {
        return $this->dataLeitura;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpAlerta
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
     * @return AmpAlerta
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
     * @return AmpAlerta
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
     * Set dataAlteracao
     *
     * @param \DateTime $dataAlteracao
     *
     * @return AmpAlerta
     */
    public function setDataAlteracao($dataAlteracao)
    {
        $this->dataAlteracao = $dataAlteracao;

        return $this;
    }

    /**
     * Get dataAlteracao
     *
     * @return \DateTime
     */
    public function getDataAlteracao()
    {
        return $this->dataAlteracao;
    }
}

