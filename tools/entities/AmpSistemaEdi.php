<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpSistemaEdi
 *
 * @ORM\Table(name="amp_sistema_edi")
 * @ORM\Entity
 */
class AmpSistemaEdi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sistema_edi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSistemaEdi;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_arquivo", type="string", length=80, nullable=false)
     */
    private $caminhoArquivo;

    /**
     * @var int
     *
     * @ORM\Column(name="status_pedido_venda_padrao", type="integer", nullable=false)
     */
    private $statusPedidoVendaPadrao;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_arquivo_leitura", type="string", length=80, nullable=false)
     */
    private $caminhoArquivoLeitura;

    /**
     * @var int
     *
     * @ORM\Column(name="tempo_leitura", type="integer", nullable=false)
     */
    private $tempoLeitura;

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
     * Get idSistemaEdi
     *
     * @return int
     */
    public function getIdSistemaEdi()
    {
        return $this->idSistemaEdi;
    }

    /**
     * Set caminhoArquivo
     *
     * @param string $caminhoArquivo
     *
     * @return AmpSistemaEdi
     */
    public function setCaminhoArquivo($caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;

        return $this;
    }

    /**
     * Get caminhoArquivo
     *
     * @return string
     */
    public function getCaminhoArquivo()
    {
        return $this->caminhoArquivo;
    }

    /**
     * Set statusPedidoVendaPadrao
     *
     * @param int $statusPedidoVendaPadrao
     *
     * @return AmpSistemaEdi
     */
    public function setStatusPedidoVendaPadrao($statusPedidoVendaPadrao)
    {
        $this->statusPedidoVendaPadrao = $statusPedidoVendaPadrao;

        return $this;
    }

    /**
     * Get statusPedidoVendaPadrao
     *
     * @return int
     */
    public function getStatusPedidoVendaPadrao()
    {
        return $this->statusPedidoVendaPadrao;
    }

    /**
     * Set caminhoArquivoLeitura
     *
     * @param string $caminhoArquivoLeitura
     *
     * @return AmpSistemaEdi
     */
    public function setCaminhoArquivoLeitura($caminhoArquivoLeitura)
    {
        $this->caminhoArquivoLeitura = $caminhoArquivoLeitura;

        return $this;
    }

    /**
     * Get caminhoArquivoLeitura
     *
     * @return string
     */
    public function getCaminhoArquivoLeitura()
    {
        return $this->caminhoArquivoLeitura;
    }

    /**
     * Set tempoLeitura
     *
     * @param int $tempoLeitura
     *
     * @return AmpSistemaEdi
     */
    public function setTempoLeitura($tempoLeitura)
    {
        $this->tempoLeitura = $tempoLeitura;

        return $this;
    }

    /**
     * Get tempoLeitura
     *
     * @return int
     */
    public function getTempoLeitura()
    {
        return $this->tempoLeitura;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpSistemaEdi
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
     * @return AmpSistemaEdi
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
     * @return AmpSistemaEdi
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
     * @return AmpSistemaEdi
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

