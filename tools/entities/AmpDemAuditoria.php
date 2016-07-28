<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpDemAuditoria
 *
 * @ORM\Table(name="amp_dem_auditoria")
 * @ORM\Entity
 */
class AmpDemAuditoria
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_dem_auditoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDemAuditoria;

    /**
     * @var int
     *
     * @ORM\Column(name="id_dem", type="integer", nullable=false)
     */
    private $idDem;

    /**
     * @var int
     *
     * @ORM\Column(name="id_plano_controle", type="integer", nullable=false)
     */
    private $idPlanoControle;

    /**
     * @var int
     *
     * @ORM\Column(name="id_plano_controle_caracteristica", type="integer", nullable=false)
     */
    private $idPlanoControleCaracteristica;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado", type="integer", nullable=true)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="menor_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $menorValor;

    /**
     * @var string
     *
     * @ORM\Column(name="maior_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $maiorValor;

    /**
     * @var string
     *
     * @ORM\Column(name="media_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $mediaValor;

    /**
     * @var string
     *
     * @ORM\Column(name="certificado", type="string", length=100, nullable=true)
     */
    private $certificado;

    /**
     * @var int
     *
     * @ORM\Column(name="amostras_reprovadas", type="integer", nullable=true)
     */
    private $amostrasReprovadas;

    /**
     * @var int
     *
     * @ORM\Column(name="id_modo_falha", type="integer", nullable=true)
     */
    private $idModoFalha;

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
     * Get idDemAuditoria
     *
     * @return int
     */
    public function getIdDemAuditoria()
    {
        return $this->idDemAuditoria;
    }

    /**
     * Set idDem
     *
     * @param int $idDem
     *
     * @return AmpDemAuditoria
     */
    public function setIdDem($idDem)
    {
        $this->idDem = $idDem;

        return $this;
    }

    /**
     * Get idDem
     *
     * @return int
     */
    public function getIdDem()
    {
        return $this->idDem;
    }

    /**
     * Set idPlanoControle
     *
     * @param int $idPlanoControle
     *
     * @return AmpDemAuditoria
     */
    public function setIdPlanoControle($idPlanoControle)
    {
        $this->idPlanoControle = $idPlanoControle;

        return $this;
    }

    /**
     * Get idPlanoControle
     *
     * @return int
     */
    public function getIdPlanoControle()
    {
        return $this->idPlanoControle;
    }

    /**
     * Set idPlanoControleCaracteristica
     *
     * @param int $idPlanoControleCaracteristica
     *
     * @return AmpDemAuditoria
     */
    public function setIdPlanoControleCaracteristica($idPlanoControleCaracteristica)
    {
        $this->idPlanoControleCaracteristica = $idPlanoControleCaracteristica;

        return $this;
    }

    /**
     * Get idPlanoControleCaracteristica
     *
     * @return int
     */
    public function getIdPlanoControleCaracteristica()
    {
        return $this->idPlanoControleCaracteristica;
    }

    /**
     * Set resultado
     *
     * @param int $resultado
     *
     * @return AmpDemAuditoria
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return int
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set menorValor
     *
     * @param string $menorValor
     *
     * @return AmpDemAuditoria
     */
    public function setMenorValor($menorValor)
    {
        $this->menorValor = $menorValor;

        return $this;
    }

    /**
     * Get menorValor
     *
     * @return string
     */
    public function getMenorValor()
    {
        return $this->menorValor;
    }

    /**
     * Set maiorValor
     *
     * @param string $maiorValor
     *
     * @return AmpDemAuditoria
     */
    public function setMaiorValor($maiorValor)
    {
        $this->maiorValor = $maiorValor;

        return $this;
    }

    /**
     * Get maiorValor
     *
     * @return string
     */
    public function getMaiorValor()
    {
        return $this->maiorValor;
    }

    /**
     * Set mediaValor
     *
     * @param string $mediaValor
     *
     * @return AmpDemAuditoria
     */
    public function setMediaValor($mediaValor)
    {
        $this->mediaValor = $mediaValor;

        return $this;
    }

    /**
     * Get mediaValor
     *
     * @return string
     */
    public function getMediaValor()
    {
        return $this->mediaValor;
    }

    /**
     * Set certificado
     *
     * @param string $certificado
     *
     * @return AmpDemAuditoria
     */
    public function setCertificado($certificado)
    {
        $this->certificado = $certificado;

        return $this;
    }

    /**
     * Get certificado
     *
     * @return string
     */
    public function getCertificado()
    {
        return $this->certificado;
    }

    /**
     * Set amostrasReprovadas
     *
     * @param int $amostrasReprovadas
     *
     * @return AmpDemAuditoria
     */
    public function setAmostrasReprovadas($amostrasReprovadas)
    {
        $this->amostrasReprovadas = $amostrasReprovadas;

        return $this;
    }

    /**
     * Get amostrasReprovadas
     *
     * @return int
     */
    public function getAmostrasReprovadas()
    {
        return $this->amostrasReprovadas;
    }

    /**
     * Set idModoFalha
     *
     * @param int $idModoFalha
     *
     * @return AmpDemAuditoria
     */
    public function setIdModoFalha($idModoFalha)
    {
        $this->idModoFalha = $idModoFalha;

        return $this;
    }

    /**
     * Get idModoFalha
     *
     * @return int
     */
    public function getIdModoFalha()
    {
        return $this->idModoFalha;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpDemAuditoria
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
     * @return AmpDemAuditoria
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
     * @return AmpDemAuditoria
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
     * @return AmpDemAuditoria
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

