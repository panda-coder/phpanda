<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpTabelaAmostragemItens
 *
 * @ORM\Table(name="amp_tabela_amostragem_itens", indexes={@ORM\Index(name="fk_amp_tabela_amostragem_itens_1_idx", columns={"id_tabela_amostragem"})})
 * @ORM\Entity
 */
class AmpTabelaAmostragemItens
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tabela_amostragem_itens", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTabelaAmostragemItens;

    /**
     * @var string
     *
     * @ORM\Column(name="limite_faixa", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $limiteFaixa;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_amostragem", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $quantidadeAmostragem;

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
     * @var \AmpTabelaAmostragem
     *
     * @ORM\ManyToOne(targetEntity="AmpTabelaAmostragem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tabela_amostragem", referencedColumnName="id_tabela_amostragem")
     * })
     */
    private $idTabelaAmostragem;


    /**
     * Get idTabelaAmostragemItens
     *
     * @return int
     */
    public function getIdTabelaAmostragemItens()
    {
        return $this->idTabelaAmostragemItens;
    }

    /**
     * Set limiteFaixa
     *
     * @param string $limiteFaixa
     *
     * @return AmpTabelaAmostragemItens
     */
    public function setLimiteFaixa($limiteFaixa)
    {
        $this->limiteFaixa = $limiteFaixa;

        return $this;
    }

    /**
     * Get limiteFaixa
     *
     * @return string
     */
    public function getLimiteFaixa()
    {
        return $this->limiteFaixa;
    }

    /**
     * Set quantidadeAmostragem
     *
     * @param string $quantidadeAmostragem
     *
     * @return AmpTabelaAmostragemItens
     */
    public function setQuantidadeAmostragem($quantidadeAmostragem)
    {
        $this->quantidadeAmostragem = $quantidadeAmostragem;

        return $this;
    }

    /**
     * Get quantidadeAmostragem
     *
     * @return string
     */
    public function getQuantidadeAmostragem()
    {
        return $this->quantidadeAmostragem;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpTabelaAmostragemItens
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
     * @return AmpTabelaAmostragemItens
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
     * @return AmpTabelaAmostragemItens
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
     * @return AmpTabelaAmostragemItens
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
     * Set idTabelaAmostragem
     *
     * @param \AmpTabelaAmostragem $idTabelaAmostragem
     *
     * @return AmpTabelaAmostragemItens
     */
    public function setIdTabelaAmostragem(\AmpTabelaAmostragem $idTabelaAmostragem = null)
    {
        $this->idTabelaAmostragem = $idTabelaAmostragem;

        return $this;
    }

    /**
     * Get idTabelaAmostragem
     *
     * @return \AmpTabelaAmostragem
     */
    public function getIdTabelaAmostragem()
    {
        return $this->idTabelaAmostragem;
    }
}

