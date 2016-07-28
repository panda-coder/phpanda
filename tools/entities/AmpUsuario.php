<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpUsuario
 *
 * @ORM\Table(name="amp_usuario", indexes={@ORM\Index(name="fk_amp_usuario_amp_image1_idx", columns={"id_imagem"}), @ORM\Index(name="fk_amp_usuario_amp_cargo1_idx", columns={"id_cargo"}), @ORM\Index(name="fk_centro_trabalho_linha_idx", columns={"id_centro_trabalho_linha"})})
 * @ORM\Entity
 */
class AmpUsuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_centro_trabalho_linha", type="integer", nullable=false)
     */
    private $idCentroTrabalhoLinha;

    /**
     * @var string
     *
     * @ORM\Column(name="impressora", type="string", length=255, nullable=true)
     */
    private $impressora;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_completo", type="string", length=45, nullable=false)
     */
    private $nomeCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=45, nullable=false)
     */
    private $senha;

    /**
     * @var bool
     *
     * @ORM\Column(name="status_ativo", type="boolean", nullable=false)
     */
    private $statusAtivo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

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
     * @var \AmpCargo
     *
     * @ORM\ManyToOne(targetEntity="AmpCargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cargo", referencedColumnName="id_cargo")
     * })
     */
    private $idCargo;

    /**
     * @var \AmpImagem
     *
     * @ORM\ManyToOne(targetEntity="AmpImagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_imagem", referencedColumnName="id_imagem")
     * })
     */
    private $idImagem;


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
     * Set idCentroTrabalhoLinha
     *
     * @param int $idCentroTrabalhoLinha
     *
     * @return AmpUsuario
     */
    public function setIdCentroTrabalhoLinha($idCentroTrabalhoLinha)
    {
        $this->idCentroTrabalhoLinha = $idCentroTrabalhoLinha;

        return $this;
    }

    /**
     * Get idCentroTrabalhoLinha
     *
     * @return int
     */
    public function getIdCentroTrabalhoLinha()
    {
        return $this->idCentroTrabalhoLinha;
    }

    /**
     * Set impressora
     *
     * @param string $impressora
     *
     * @return AmpUsuario
     */
    public function setImpressora($impressora)
    {
        $this->impressora = $impressora;

        return $this;
    }

    /**
     * Get impressora
     *
     * @return string
     */
    public function getImpressora()
    {
        return $this->impressora;
    }

    /**
     * Set nomeCompleto
     *
     * @param string $nomeCompleto
     *
     * @return AmpUsuario
     */
    public function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;

        return $this;
    }

    /**
     * Get nomeCompleto
     *
     * @return string
     */
    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return AmpUsuario
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set senha
     *
     * @param string $senha
     *
     * @return AmpUsuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set statusAtivo
     *
     * @param bool $statusAtivo
     *
     * @return AmpUsuario
     */
    public function setStatusAtivo($statusAtivo)
    {
        $this->statusAtivo = $statusAtivo;

        return $this;
    }

    /**
     * Get statusAtivo
     *
     * @return bool
     */
    public function getStatusAtivo()
    {
        return $this->statusAtivo;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpUsuario
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpUsuario
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpUsuario
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
     * @return AmpUsuario
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
     * Set idCargo
     *
     * @param \AmpCargo $idCargo
     *
     * @return AmpUsuario
     */
    public function setIdCargo(\AmpCargo $idCargo = null)
    {
        $this->idCargo = $idCargo;

        return $this;
    }

    /**
     * Get idCargo
     *
     * @return \AmpCargo
     */
    public function getIdCargo()
    {
        return $this->idCargo;
    }

    /**
     * Set idImagem
     *
     * @param \AmpImagem $idImagem
     *
     * @return AmpUsuario
     */
    public function setIdImagem(\AmpImagem $idImagem = null)
    {
        $this->idImagem = $idImagem;

        return $this;
    }

    /**
     * Get idImagem
     *
     * @return \AmpImagem
     */
    public function getIdImagem()
    {
        return $this->idImagem;
    }
}

