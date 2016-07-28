<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpColaborador
 *
 * @ORM\Table(name="amp_colaborador", indexes={@ORM\Index(name="fk_amp_colaborador_amp_tipo_colaborador1_idx", columns={"id_tipo_colaborador"}), @ORM\Index(name="fk_amp_colaborador_amp_cargo1_idx", columns={"id_cargo"}), @ORM\Index(name="fk_amp_colaborador_1_idx", columns={"id_colaborador_superior"}), @ORM\Index(name="fk_amp_colaborador_2_idx", columns={"id_superior_substituto"}), @ORM\Index(name="fk_amp_colaborador_3_idx", columns={"id_centro_trabalho_linha"})})
 * @ORM\Entity
 */
class AmpColaborador
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_colaborador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColaborador;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="datetime", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ingresso", type="datetime", nullable=true)
     */
    private $dataIngresso;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=45, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=45, nullable=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=45, nullable=true)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

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
     * @var \AmpColaborador
     *
     * @ORM\ManyToOne(targetEntity="AmpColaborador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_colaborador_superior", referencedColumnName="id_colaborador")
     * })
     */
    private $idColaboradorSuperior;

    /**
     * @var \AmpColaborador
     *
     * @ORM\ManyToOne(targetEntity="AmpColaborador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_superior_substituto", referencedColumnName="id_colaborador")
     * })
     */
    private $idSuperiorSubstituto;

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
     * @var \AmpCargo
     *
     * @ORM\ManyToOne(targetEntity="AmpCargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cargo", referencedColumnName="id_cargo")
     * })
     */
    private $idCargo;

    /**
     * @var \AmpTipoColaborador
     *
     * @ORM\ManyToOne(targetEntity="AmpTipoColaborador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_colaborador", referencedColumnName="id_tipo_colaborador")
     * })
     */
    private $idTipoColaborador;


    /**
     * Get idColaborador
     *
     * @return int
     */
    public function getIdColaborador()
    {
        return $this->idColaborador;
    }

    /**
     * Set idUsuario
     *
     * @param int $idUsuario
     *
     * @return AmpColaborador
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
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     *
     * @return AmpColaborador
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set dataIngresso
     *
     * @param \DateTime $dataIngresso
     *
     * @return AmpColaborador
     */
    public function setDataIngresso($dataIngresso)
    {
        $this->dataIngresso = $dataIngresso;

        return $this;
    }

    /**
     * Get dataIngresso
     *
     * @return \DateTime
     */
    public function getDataIngresso()
    {
        return $this->dataIngresso;
    }

    /**
     * Set rg
     *
     * @param string $rg
     *
     * @return AmpColaborador
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return AmpColaborador
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     *
     * @return AmpColaborador
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpColaborador
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
     * @return AmpColaborador
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
     * @return AmpColaborador
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
     * @return AmpColaborador
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
     * @return AmpColaborador
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
     * Set idColaboradorSuperior
     *
     * @param \AmpColaborador $idColaboradorSuperior
     *
     * @return AmpColaborador
     */
    public function setIdColaboradorSuperior(\AmpColaborador $idColaboradorSuperior = null)
    {
        $this->idColaboradorSuperior = $idColaboradorSuperior;

        return $this;
    }

    /**
     * Get idColaboradorSuperior
     *
     * @return \AmpColaborador
     */
    public function getIdColaboradorSuperior()
    {
        return $this->idColaboradorSuperior;
    }

    /**
     * Set idSuperiorSubstituto
     *
     * @param \AmpColaborador $idSuperiorSubstituto
     *
     * @return AmpColaborador
     */
    public function setIdSuperiorSubstituto(\AmpColaborador $idSuperiorSubstituto = null)
    {
        $this->idSuperiorSubstituto = $idSuperiorSubstituto;

        return $this;
    }

    /**
     * Get idSuperiorSubstituto
     *
     * @return \AmpColaborador
     */
    public function getIdSuperiorSubstituto()
    {
        return $this->idSuperiorSubstituto;
    }

    /**
     * Set idCentroTrabalhoLinha
     *
     * @param \AmpCentroTrabalhoLinha $idCentroTrabalhoLinha
     *
     * @return AmpColaborador
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

    /**
     * Set idCargo
     *
     * @param \AmpCargo $idCargo
     *
     * @return AmpColaborador
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
     * Set idTipoColaborador
     *
     * @param \AmpTipoColaborador $idTipoColaborador
     *
     * @return AmpColaborador
     */
    public function setIdTipoColaborador(\AmpTipoColaborador $idTipoColaborador = null)
    {
        $this->idTipoColaborador = $idTipoColaborador;

        return $this;
    }

    /**
     * Get idTipoColaborador
     *
     * @return \AmpTipoColaborador
     */
    public function getIdTipoColaborador()
    {
        return $this->idTipoColaborador;
    }
}

